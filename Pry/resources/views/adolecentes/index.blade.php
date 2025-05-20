@extends('app')

@section('content')
<style>
  body {
    background: linear-gradient(135deg, #6e8efb, #a777e3);
    color: #fff;
    font-family: 'Poppins', sans-serif;
  }
  .card {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(8.5px);
    -webkit-backdrop-filter: blur(8.5px);
    border: 1px solid rgba(255, 255, 255, 0.18);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
  }
  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(255, 255, 255, 0.5);
  }
  .icon {
    font-size: 3rem;
    margin-bottom: 15px;
  }
  .container {
    padding: 50px 15px;
  }
  h1 {
    font-weight: 700;
    text-align: center;
    margin-bottom: 40px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  .cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px, 1fr));
    gap: 30px;
    max-width: 1000px;
    margin: 0 auto;
  }
  .btn-cool {
    display: inline-block;
    background: #ff6584;
    color: #fff;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    transition: background 0.3s ease;
    box-shadow: 0 6px 12px rgba(255, 101, 132, 0.5);
  }
  .btn-cool:hover {
    background: #e24d72;
    box-shadow: 0 8px 16px rgba(226, 77, 114, 0.7);
  }
</style>

<div class="container">
  <h1>🔥 Zona Adolescente 🔥</h1>

  <div class="cards-grid">
    <div class="card p-4 text-center">
      <div class="icon">🎮</div>
      <h3>Juegos & Tecnología</h3>
      <p>Explora las últimas tendencias en videojuegos, apps y gadgets. ¡La tecnología es tu aliada!</p>
    </div>

    <div class="card p-4 text-center">
      <div class="icon">🎵</div>
      <h3>Música & Cultura</h3>
      <p>Descubre nuevos artistas, playlists y eventos para estar siempre a la moda y conectado con la cultura juvenil.</p>
    </div>

    <div class="card p-4 text-center">
      <div class="icon">⚽</div>
      <h3>Deportes & Salud</h3>
      <p>Consejos para mantenerte activo, saludable y lleno de energía para tus actividades diarias y retos.</p>
    </div>

    <div class="card p-4 text-center">
      <div class="icon">🧑‍🤝‍🧑</div>
      <h3>Amistad & Comunidad</h3>
      <p>Conéctate con otros jóvenes, comparte experiencias y participa en actividades sociales y solidarias.</p>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="{{ url('/') }}" class="btn-cool">Volver al Inicio</a>
  </div>
</div>
@endsection
