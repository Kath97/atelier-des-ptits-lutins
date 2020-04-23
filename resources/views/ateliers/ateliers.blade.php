@extends('layouts.app')
@section('content')

<!-- Header -->
<section id="branding">
    <div class="col-12 col-sm-12 col-lg-12 ">
    <img src="{{ asset('img/img4.jpg') }}" alt="..."/>    
    </div>
</section>
<!-- end - Header -->

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

<!-- Card -->
@foreach($ateliers as $atelier)
<div class="col-12 col-sm-12 col-lg-6 my-lg-4 mb-4">
                <div class="card text-black bg-light mb-3">

                    <div class="card-body">
                    <div class="col-4 my-auto py-2">

<img class="card-img" src="{{ asset('img/monkey-card_640.png') }}" alt="Card image cap">
</div>
                        <div class="row">
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
    @endsection