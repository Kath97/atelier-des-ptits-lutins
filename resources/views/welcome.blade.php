@extends('layouts.app')
@section('content')

<!-- Slider -->
<section>
<div class=""carousel slide bg-inverse " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#artrousel" data-slide-to="0" class="active"></li>
            <li data-target="#artrousel" data-slide-to="1"></li>
            <li data-target="#artrousel" data-slide-to="2"></li>
            <li data-target="#artrousel" data-slide-to="3"></li>
            
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/img1.jpg')}}" alt="Matériel d'art">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/img2.jpg')}}" alt="Atelier peinture sur verre">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/img3.jpg')}}" alt="Perles pour bijoux">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/img4.jpg')}}" alt="Atelier cuisine de Noël">
            </div>
        </div>
        <a class="carousel-control-prev" href="#artrousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#artrousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>

    </div>
    </div>
    </div>
</section>
<!-- end-slider -->

<!-- About -->
<section>
    <div class="totoro">
<div class="container-fluid">
    <div class="col-10 col-sm-10 col-lg-12">
    <h1 class="text-center">À propos</h1>
                    <p>
                    We are lucky to live in a glorious age that gives us everything we could ask for as a human race.
                    What more could you need when you have meat covered in cheese nestled between bread as a complete
                    meal. From smashed patties at Shake Shack to Glamburgers at Honky Tonk, there’s a little something for
                    everyone. Some burgers are humble, and some are ostentatious, and you just have to try them all to
                    figure out what you want.
</p>
<p>
                    We are lucky to live in a glorious age that gives us everything we could ask for as a human race.
                    What more could you need when you have meat covered in cheese nestled between bread as a complete
                    meal. From smashed patties at Shake Shack to Glamburgers at Honky Tonk, there’s a little something for
                    everyone. Some burgers are humble, and some are ostentatious, and you just have to try them all to
                    figure out what you want.
</p>
</div>
</div>
</div>
</section>
<!-- end-about -->

<!-- Adhérer + Ateliers -->
<section>

<div class="container-fluid">
<div class="row">
    <div class="col-10 col-sm-10 col-lg-5 seeds adherer">
    <h1 class="text-center">Adhérer</h1>
                    <p>
                    We are lucky to live in a glorious age that gives us everything we could ask for as a human race.
                    What more could you need when you have meat covered in cheese nestled between bread as a complete
                    meal.</p>
                    <p>From smashed patties at Shake Shack to Glamburgers at Honky Tonk, there’s a little something for
                    everyone. Some burgers are humble, and some are ostentatious, and you just have to try them all to
                    figure out what you want.
</p>

</div>

<div id="ateliers" class="col-10 col-sm-10 col-lg-6 seeds ateliers">
    <h1 class="text-center">Ateliers</h1>
    <p>
                    We are lucky to live in a glorious age that gives us everything we could ask for as a human race.
                    What more could you need when you have meat covered in cheese nestled between bread as a complete
                    meal.</p>
                    <p>From smashed patties at Shake Shack to Glamburgers at Honky Tonk, there’s a little something for
                    everyone. Some burgers are humble, and some are ostentatious, and you just have to try them all to
                    figure out what you want.
</p>
</div>
</div>
</div>
</div>
</secion>
<!-- end - Adhérer + Ateliers -->

<!-- Cta Contact -->
<section>
<div class="container-fluid cta-end-bar">
    <div class="row">
    <div class="col-6 col-sm-6 col-lg-6">
    <h2 class="text-right">Une question ? Un retour d'expérience ? </h2>
</div>

<div class="col-6 col-sm-6 col-lg-6 text-center">
<a class="btn btn-danger btn-lg " href="#" role="button">Contactez-nous !</a>
</div>
</div>
</div>
</div>
</secion>
<!-- end - Cta Contact -->
@endsection
