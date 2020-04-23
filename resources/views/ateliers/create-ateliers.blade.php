@extends('layouts.app')
@section('content')

  <div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">

<h1 class="text-center">Créer un atelier</h1>
  
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form  class="form-css form-log-rec px-4" method="post" action="{{ route('ateliers.store') }}">
          <select name="categorie_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
          <div class="form-group">
              <label for="name">Nom de l'atelier :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="status">Statut :</label>
              <input type="text" class="form-control" name="status" value="{{ $ateliers->status  }}"/>
          </div>
          
<!-- Ajouter le champ pour la date !!! -->
          
          <button type="submit" class="btn btn-dark btn-lg btn-block">Créer</button>

      </form>
</div>
</div>
</div>
</div>
@endsection