@extends('app')

@section('content')
<div class="container my-5">
    <h1 class="display-4 text-dark text-center mb-4">Adultos Mayores</h1>

    <p class="lead text-secondary text-center mb-5" style="max-width: 700px; margin: 0 auto;">
        Espacio dedicado a acompañar y apoyar a nuestros adultos mayores, fomentando su bienestar físico, emocional y social.
    </p>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="p-4 border rounded shadow-sm h-100">
                <h3 class="text-primary mb-3">Salud y Bienestar</h3>
                <ul class="list-unstyled text-muted">
                    <li>💊 Control de medicamentos y visitas médicas</li>
                    <li>🧘 Ejercicios suaves: yoga, estiramientos, caminatas</li>
                    <li>🍲 Nutrición balanceada y adaptada</li>
                    <li>🛌 Descanso adecuado y manejo del sueño</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-4 border rounded shadow-sm h-100">
                <h3 class="text-success mb-3">Actividades y Socialización</h3>
                <ul class="list-unstyled text-muted">
                    <li>🎨 Talleres de arte y manualidades</li>
                    <li>🎶 Música y baile para la alegría y movilidad</li>
                    <li>📚 Club de lectura y charlas comunitarias</li>
                    <li>👥 Redes de apoyo y grupos de encuentro</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-light rounded shadow-sm">
        <h4 class="text-secondary mb-3">Consejo del Día</h4>
        <p style="font-style: italic; color: #555;">
            “Mantener una rutina diaria y mantenerse activo, física y mentalmente, es clave para una vida larga y feliz.”
        </p>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-dark btn-lg rounded-pill px-5">
            Volver al inicio
        </a>
    </div>
</div>
@endsection
