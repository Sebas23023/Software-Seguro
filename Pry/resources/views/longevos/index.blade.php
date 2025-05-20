@extends('app')

@section('content')
<style>
  body {
    background: #f9f6f2; /* color crema suave */
    font-family: 'Georgia', serif;
    color: #5a4d41;
    padding: 40px 20px;
  }

  .container {
    max-width: 700px;
    margin: 0 auto;
    background: #ffffff;
    padding: 30px 40px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(90, 77, 65, 0.2);
    line-height: 1.7;
  }

  h1 {
    font-size: 3rem;
    color: #7a5a3c;
    margin-bottom: 20px;
    text-align: center;
  }

  h2 {
    font-size: 1.8rem;
    margin-top: 30px;
    margin-bottom: 10px;
    color: #926f42;
  }

  p {
    font-size: 1.2rem;
    margin-bottom: 18px;
  }

  ul {
    margin-left: 20px;
    margin-bottom: 20px;
  }

  li {
    margin-bottom: 10px;
  }

  .btn-home {
    display: block;
    width: fit-content;
    margin: 30px auto 0 auto;
    padding: 12px 40px;
    background-color: #7a5a3c;
    color: #fff;
    font-size: 1.2rem;
    text-decoration: none;
    border-radius: 50px;
    box-shadow: 0 6px 12px rgba(122, 90, 60, 0.5);
    transition: background-color 0.3s ease;
    text-align: center;
  }

  .btn-home:hover {
    background-color: #5c4228;
  }
</style>

<div class="container" role="main" aria-label="Página para personas longevas">
  <h1>🌿 Bienvenidos a la comunidad de personas longevas 🌿</h1>
  <p>En esta etapa maravillosa de la vida, el bienestar, la tranquilidad y la conexión con uno mismo y los demás son claves para disfrutar plenamente.</p>

  <h2>Consejos para una vida saludable y feliz</h2>
  <ul>
    <li><strong>Movimiento suave:</strong> caminatas diarias, yoga o ejercicios de estiramiento.</li>
    <li><strong>Alimentación balanceada:</strong> frutas, verduras, agua suficiente y comidas ligeras.</li>
    <li><strong>Socializar:</strong> mantener contacto con familia, amigos y grupos de interés.</li>
    <li><strong>Estimulación mental:</strong> lectura, juegos de memoria, aprender algo nuevo.</li>
    <li><strong>Descanso adecuado:</strong> respetar las horas de sueño y momentos de relajación.</li>
  </ul>

  <h2>Actividades recomendadas</h2>
  <p>Participa en talleres, grupos de baile, manualidades, jardinería o simplemente disfruta de la música y la naturaleza.</p>

  <a href="{{ route('welcome') }}" class="btn-home" role="button" aria-label="Volver al inicio">🏠 Volver al inicio</a>
</div>
@endsection
