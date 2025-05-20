@extends('app')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center" style="height: 80vh;">
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary mb-4">¡Bienvenido!</h1>
        <p class="lead text-secondary mb-4">Accede por Clasificación de Edad</p>

        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="{{ route('bebes') }}" class="btn btn-primary btn-lg rounded-pill px-4">
                0 - 5 años<br>Bebés
            </a>
            <a href="{{ route('ninos') }}" class="btn btn-success btn-lg rounded-pill px-4">
                6 - 12 años<br>Niños
            </a>
            <a href="{{ route('adolescentes') }}" class="btn btn-warning btn-lg rounded-pill px-4 text-white">
                13 - 17 años<br>Adolescentes
            </a>
            <a href="{{ route('jovenes') }}" class="btn btn-indigo btn-lg rounded-pill px-4" style="background-color: #6574cd;">
                18 - 25 años<br>Jóvenes adultos
            </a>
            <a href="{{ route('adultos') }}" class="btn btn-danger btn-lg rounded-pill px-4">
                26 - 59 años<br>Adultos
            </a>
            <a href="{{ route('mayores') }}" class="btn btn-secondary btn-lg rounded-pill px-4">
                60 - 74 años<br>Adultos mayores
            </a>
            <a href="{{ route('longevos') }}" class="btn btn-warning btn-lg rounded-pill px-4 text-dark" style="background-color: #ffed4a;">
                75 - 120 años<br>Personas longevas
            </a>
        </div>
    </div>

   
</div>

@endsection
