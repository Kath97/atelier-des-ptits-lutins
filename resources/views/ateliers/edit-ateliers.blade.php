@extends('layouts.app')
@section('content')
<div class="min-height bg-ateliers">
  <div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card form">
                <div class="card-header">{{ __('Éditer un atelier') }}</div>

                @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card-body">
    <form class="form-css form-log-rec px-4" method="post" action="{{ route('ateliers.update', $ateliers->id)}}">
    
    
    <div class="form-group">
              <label for="name">Catégorie :</label>
    <select name="categorie_id">
              <option value="{{ $ateliers->categorie->id }}" selected>{{ $ateliers->categorie->name }}</option>
              <option value="">----</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
</div>

          <div class="form-group">
          @csrf
              @method('PATCH')
              <label for="name">Nom de l'atelier' :</label>
              <input type="text" class="form-control" name="name" value="{{ $ateliers->name }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $ateliers->description }}"/>
          </div>
          <div class="form-group">
              <label for="status">Statut :</label>
              <input type="text" class="form-control" name="status" value="{{ $ateliers->status }}"/>
          </div>
          
<!-- Ajouter le champ pour la date !!! -->
<div class="form-group">
              <label for="datetime">Date :</label>
              <input type="date" class="form-control" name="datetime" value="{{ $ateliers->datetime }}"/>
          </div>

          <button type="submit" class="btn btn-dark btn-lg btn-block">Modifier</button>
      </form>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection