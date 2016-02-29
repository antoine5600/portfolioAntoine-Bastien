@extends('layout.main')
@section('title')
    Antoine Le Falher
@endsection
    <body>

    <!-- Navigation -->
    @include( 'layout.navbar' )

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bienvenue
                </h1>
            </div>
        </div>
        <div class="featurette">
            <img class="featurette-image img-circle img-responsive pull-left" src="http://placehold.it/300x300">
            <h2 class="featurette-heading">Antoine Le Falher
            </h2>
            <div class="lead">Bonjour, actuellement étudiant en 2ème année de BTS SIO (Services Informatique aux Organisations, j'ai créé ce portfolio afin que vous en sachiez plus sur moi. Je vous invite a visiter mon blog concernant les framework PHP ,en particulier Laravel et Symfony. Ce site a été créé grâce au framework Laravel 5.1.</div>
        </div>
</body>
