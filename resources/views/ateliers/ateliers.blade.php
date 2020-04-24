@extends('layouts.app')
@section('content')

<!-- Header -->
<section id="branding">
    <div class="col-12 col-sm-12 col-lg-12 ">
    <img src="{{ asset('img/img4.jpg') }}" alt="..."/>    
    </div>
</section>
<!-- end - Header -->

<!-- About Workshops -->
<section>
    <div class="col-12 col-sm-12 col-lg-12">
    <div class="row justify-content-center text-center">
        <h1> Nos ateliers </h1>
                </div>
                <p>
                    We are lucky to live in a glorious age that gives us everything we could ask for as a human race.
                    What more could you need when you have meat covered in cheese nestled between bread as a complete
                    meal.
                    From smashed patties at Shake Shack to Glamburgers at Honky Tonk, there’s a little something for
                    everyone. Some burgers are humble, and some are ostentatious, and you just have to try them all to
                    figure out what you want.
</p>
</section>

<!-- end- about workshops -->

<!-- Admin access - create button-->
@auth
        @if (Auth::user()->role == 1)
        <a href="{{ route('ateliers.create')}}" class="btn btn-primary"><i class="fa fa-plus"
                aria-hidden="true"></i>Créer un nouvel atelier
        </a>
        
        @endif

<!-- end-admin access -->

                            <!-- Card list-->
@foreach($ateliers as $atelier)
<div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                <div class="card text-black bg-light mb-3">

                    <div class="card-body">
                    <div class="col-4 my-auto py-2">

<img class="card-img" src="{{ asset('img/monkey-card_640.png') }}" alt="Card image cap">
</div>
                        <div class="row">

<!-- Button panel for admin -->
@auth
                            @if (Auth::user()->role == 1)
                            <a href="{{ route('ateliers.edit', $atelier->id)}}" class="btn btn-primary"><i
                                    class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form id="form-btn" action="{{ route('ateliers.destroy', $atelier->id)}}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i></button>
                            </form>
                            @endif
                            @endif
    
                        <h2 class="card-title">{{$atelier->categorie->name}}</h2>
                        <h3 class="card-subtitle">{{$atelier->name}}</h3>

                        <div class="row">
                            <div class="col-8">
                                <p class="card-text">{{$atelier->description}}</p>
                                <p class="card-text">{{$atelier->status}}</p>
                                <p class="card-text">{{$atelier->datetime}}</p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            @endforeach
        </div>
</div>
</div>
    </div>
    @endif