@extends('app')

@section('content')
<div class="text-center my-5">
    <h1 class="display-4 text-secondary mb-4">Ancianos</h1>
    <p class="lead text-muted mb-5">
        Bienvenidos a la sección para ancianos. Un espacio para honrar la sabiduría y experiencia de quienes han vivido muchas historias.
    </p>

    <div class="card mx-auto" style="max-width: 650px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-radius: 15px;">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
             class="card-img-top rounded-top" alt="Ancianos disfrutando" style="height: 320px; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title text-secondary">Experiencia y Sabiduría</h5>
            <p class="card-text">
                Aquí encontrarás recursos y apoyo para disfrutar plenamente esta etapa de la vida con salud, alegría y compañía.
            </p>
            <a href="{{ route('welcome') }}" class="btn btn-outline-secondary rounded-pill px-4">Volver al inicio</a>
        </div>
    </div>
</div>
@endsection
