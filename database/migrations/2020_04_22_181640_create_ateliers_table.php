<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAteliersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ateliers';

    /**
     * Run the migrations.
     * @table ateliers
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');
            $table->string('status');
            $table->timestamp('datetime')->useCurrent();
            $table->integer('categorie_id')->unsigned();

            $table->index(["categorie_id"], 'fk_categorie_id_idx');


            $table->foreign('categorie_id', 'fk_categorie_id_idx')
                ->references('id')->on('categories')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
