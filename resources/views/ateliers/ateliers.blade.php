@extends('layouts.app')
@section('content')

<!-- Header -->
<div id="jumbopages" class="jumbotron jumbotron-fluid ateliers my-5">
  <div class="container">
    <h1 class="display-4 text-center">Ateliers</h1>
    <p class="lead text-center">Vous êtes prêt.e.s à vivre une expérience inoubliable ?</p>
<!-- Admin access - create button-->
@auth
        @if (Auth::user()->role == 1)
        <a href="{{ route('ateliers.create')}}" class="btn btn-dark"><i class="fa fa-plus"
                aria-hidden="true"></i>Créer un nouvel atelier
        </a>
        
        @endif

<!-- end-admin access -->

</div>
</div>
<!-- end - Header -->





                            <!-- Card list-->
                            @foreach($ateliers as $atelier)
<div class="container">
<div class="row">
<div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                <div class="card text-black bg-light mb-3">

                    <div class="card-body">

                        <h2 class="card-title">{{$atelier->categorie->name}}</h2>
                        <h3 class="card-subtitle">{{$atelier->name}}</h3>
                                <p class="card-text">{{$atelier->description}}</p>
                                <p class="card-text status">{{$atelier->status}}</p>
                                <p class="card-text">{{$atelier->datetime}}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
</div>
</div>
    </div>
@endif
