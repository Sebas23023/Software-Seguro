@extends('app')

@section('content')
<div class="container my-5">
    <h1 class="display-3 text-success text-center mb-5">🌟 Espacio para Jóvenes 🌟</h1>

    <div class="text-center mb-4">
        <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
             alt="Jóvenes felices" 
             class="img-fluid rounded shadow-lg" 
             style="max-width: 350px;">
    </div>

    <p class="lead text-secondary text-center mb-5" style="max-width: 700px; margin: 0 auto;">
        Este es tu lugar para explorar, crecer y conectar. Aquí compartimos ideas para que saques lo mejor de ti y aproveches al máximo esta etapa llena de oportunidades.
    </p>

    {{-- Sección de temas con tarjetas --}}
    <div class="row mb-5">
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100 border-success">
                <div class="card-body text-center">
                    <i class="bi bi-globe-americas display-4 text-success mb-3"></i>
                    <h4 class="card-title mb-3">Viajes & Aventuras</h4>
                    <p class="card-text text-muted">Descubre destinos increíbles, consejos para viajar con bajo presupuesto y experiencias que cambian la vida.</p>
                    <a href="#" class="btn btn-outline-success">Explorar Viajes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100 border-success">
                <div class="card-body text-center">
                    <i class="bi bi-lightbulb display-4 text-warning mb-3"></i>
                    <h4 class="card-title mb-3">Desarrollo Personal</h4>
                    <p class="card-text text-muted">Tips para mejorar tus habilidades, motivación, y crecer en todos los aspectos de tu vida.</p>
                    <a href="#" class="btn btn-outline-warning">Aprende Más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100 border-success">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-event display-4 text-info mb-3"></i>
                    <h4 class="card-title mb-3">Eventos & Cultura</h4>
                    <p class="card-text text-muted">Mantente al día con conciertos, festivales, exposiciones y actividades culturales de tu ciudad y el mundo.</p>
                    <a href="#" class="btn btn-outline-info">Ver Eventos</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mb-5">
        <a href="{{ url('/') }}" class="btn btn-success btn-lg rounded-pill px-5 shadow">
            Volver al inicio
        </a>
    </div>

    {{-- Footer redes sociales --}}
    <footer class="text-center text-muted border-top pt-4">
        <p>Conéctate con nosotros en redes sociales</p>
        <a href="#" class="mx-2 text-primary"><i class="bi bi-facebook fs-3"></i></a>
        <a href="#" class="mx-2 text-info"><i class="bi bi-twitter fs-3"></i></a>
        <a href="#" class="mx-2 text-danger"><i class="bi bi-instagram fs-3"></i></a>
        <a href="#" class="mx-2 text-primary"><i class="bi bi-linkedin fs-3"></i></a>
        <p class="mt-3">&copy; 2025 Espacio para Jóvenes</p>
    </footer>
</div>
@endsection
