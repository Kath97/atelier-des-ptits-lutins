@extends('layouts.app')
@section('content')
<div class="min-height bg-ateliers">
  <div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card form">
                <div class="card-header">{{ __('Créer un atelier') }}</div>

                @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
</ul> 
    @endif

<div class="card-body">
<form  class="form-log-rec px-4" method="post" action="{{ route('ateliers.store') }}">
          <select name="categorie_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
          <div class="form-group">
            @csrf
              <label for="name">Nom de l'atelier :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="status">Statut :</label>
              <input type="text" class="form-control" name="status"/>
          </div>
          
          <div class="form-group">
              <label for="datetime">Date :</label>
              <input type="date" class="form-control" name="datetime"/>
          </div>
          
          <button type="submit" class="btn btn-dark btn-lg btn-block">Créer</button>

      </form>


</div>



</div>
</div>
</div>
</div>
</div>
</div>
@endsection