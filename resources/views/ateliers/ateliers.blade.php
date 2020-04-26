@extends('layouts.app')
@section('content')

<div class="bg-ateliers">
<!-- Header -->

  <div class="container my-5">
    <h1 class="text-center">Ateliers</h1>
    <p class="lead text-center">Vous êtes prêt.e.s à vivre une expérience inoubliable ?</p>
<!-- Admin access - create button-->
@auth
        @if (Auth::user()->role == 1)
        <a href="{{ route('ateliers.create')}}" class="btn btn-dark"><i class="fa fa-plus"
                aria-hidden="true"></i>Créer un nouvel atelier
        </a>
        
        @endif

<!-- end-admin access -->

<!-- </div> -->
</div>
<!-- end - Header -->





                            <!-- Card list-->
                            @foreach($ateliers as $atelier)
<div class="container">
<div class="row">
<div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                <div class="card text-black bg-light mb-3">
<!-- Admin btn panel-->
@auth
                            @if (Auth::user()->role == 1)
                            <a href="{{ route('ateliers.edit', $atelier->id)}}" class="btn btn-primary"><i
                                    class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form id="form-btn" action="{{ route('ateliers.destroy', $atelier->id)}}"
                                method="post">
                                @csrf
                           
                    <div class="card-body">

                        <h2 class="card-title">{{$atelier->categorie->name}}</h2>
                        <h3 class="card-subtitle">{{$atelier->name}}</h3>
                                <p class="card-text">{{$atelier->description}}</p>
                                <p class="card-text status-trash">{{$atelier->status}}</p>
                                <p class="card-text">{{$atelier->datetime}}</p>
                                @method('DELETE')
                                <button class="btn btn-danger status-trash" type="submit"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i></button>
                            </form>
                            @endif
                            @endif
    <!-- end - Admin btn panel -->
                    </div>
                </div>

            </div>
            @endforeach
        </div>
</div>
</div>
    </div>
</div>
@endif
