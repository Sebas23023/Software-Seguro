@extends('app')

@section('content')
<div class="container my-5">
    <h1 class="display-4 text-primary text-center mb-4">Sección para Adultos</h1>

    <p class="lead text-secondary text-center mb-5" style="max-width: 700px; margin: 0 auto;">
        Bienvenido a tu espacio dedicado a consejos prácticos para el cuidado diario, hábitos saludables y recomendaciones para una vida equilibrada.
    </p>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="p-4 border rounded shadow-sm h-100">
                <h3 class="text-success mb-3">Cuidado Diario</h3>
                <ul class="list-unstyled text-muted">
                    <li>✔️ Rutinas de higiene personal</li>
                    <li>✔️ Control de estrés y relajación</li>
                    <li>✔️ Seguimiento de la salud médica</li>
                    <li>✔️ Alimentación balanceada</li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 border rounded shadow-sm h-100">
                <h3 class="text-warning mb-3">Hábitos Saludables</h3>
                <ul class="list-unstyled text-muted">
                    <li>🍎 Incorporar frutas y verduras</li>
                    <li>🏃‍♂️ Ejercicio regular y moderado</li>
                    <li>💤 Horarios de sueño regulares</li>
                    <li>💧 Hidratación adecuada</li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 border rounded shadow-sm h-100">
                <h3 class="text-info mb-3">Recomendaciones</h3>
                <ul class="list-unstyled text-muted">
                    <li>📅 Realizar chequeos médicos periódicos</li>
                    <li>📚 Capacitación y crecimiento personal</li>
                    <li>👥 Mantener relaciones sociales activas</li>
                    <li>🧘‍♀️ Practicar mindfulness y meditación</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-primary btn-lg rounded-pill px-5">
            Volver al inicio
        </a>
    </div>
</div>
@endsection
