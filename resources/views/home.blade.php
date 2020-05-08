@extends('layouts.app')
@section('content')
<div class="min-height bg-form">
<div class="container">
    <div class="row justify-content-center">
@auth
                            @if (Auth::user()->role == 2)
<div id="alert-success-user" class="alert alert-success" role="alert">
  <h4 class="alert-heading">Bonjour !</h4>
  <p>Aww yeah, you successfully read this important alert message.</p>
  <hr>
  <p class="mb-0">Cliquez <a href="{{ route('ateliers.index') }}" class="alert-link">ici</a> pour vous rediriger vers la liste de nos ateliers.</p>
</div>
@endif
@endif
</div>
</div>
<!-- Admin view -->
 @auth
                            @if (Auth::user()->role == 1)
<!-- Header -->
<div id="bloc-participants" class="container my-5">
    <h1 class="text-center">Liste des inscrits</h1>
    <p class="lead text-center">Ici, vous pourez lire une petite phrase d'accroche pour vous donner un peu de joie au coeur.</p>
</div>
<!-- end - Header -->
                            @endif
                                @endif
    <!-- end - Admin view  -->


</div>

@endsection
