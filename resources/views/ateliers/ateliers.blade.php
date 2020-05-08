@extends('layouts.app')
@section('content')
<div class="bg-ateliers">

<!-- Header -->
  <div id="bloc-ateliers" class="container my-5">
    <h1 class="text-center">Ateliers</h1>
    <p class="lead text-center">Vous êtes prêt.e.s à vivre une expérience inoubliable ?</p>
</div>
<!-- end - Header -->

                            <!-- Card list-->
                          
<div class="container">
<div class="row">
@foreach($ateliers as $atelier)
<div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">

                <div class="card text-black bg-light mb-3">

                
<!-- Admin btn panel-->
@auth
                            @if (Auth::user()->role == 1)
                            <a href="{{ route('ateliers.edit', $atelier->id)}}" class="btn btn-primary"><i
                                    class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            @endif
                                @endif
                                <div class="card-header status-trash">{{$atelier->status}}</div>   
                    <div class="card-body">
                        <h2 class="card-title">{{$atelier->categorie->name}}</h2>
                        <h3 class="card-subtitle">{{$atelier->name}}</h3>
                                <p class="card-text">{{$atelier->description}}</p>
                                <p class="card-text">
                                    <?php
                                    echo date("d-m-Y h:i:s", strtotime($atelier->datetime))
                                ?></p>

                                @auth
                            @if (Auth::user()->role == 1) 
                                
                                <form id="form-btn" action="{{ route('ateliers.destroy', $atelier->id)}}"
                                method="post">
                                
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger status-trash" type="submit"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i></button>

                            </form>

                            <a href="{{ route('home') }}" class="alert-link inscrits">Liste des inscrits</a>  
                            @endif
                            @endif
    <!-- end - Admin btn panel -->
    <!-- Btn - Inscription -->
    @auth
                            @if (Auth::user()->role == 2)
                            <button class="btn btn-dark register-wkshp" type="submit">Inscription</button>

                            @endif
                                @endif
    <!-- end - Btn - Inscription  -->
                    </div>
</div>
                    </div>
            @endforeach
            
            </div>
            </div>
</div>
@endsection
