@extends('app')

@section('content')
<style>
  body {
    background: #e0f7fa; /* azul muy suave */
    font-family: 'Comic Sans MS', cursive, sans-serif;
    color: #004d40;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .container {
    background: #b2ebf2;
    padding: 40px;
    border-radius: 30px;
    box-shadow: 0 8px 20px rgba(0, 77, 64, 0.3);
    width: 400px;
    text-align: center;
  }

  h1 {
    font-size: 2.8rem;
    margin-bottom: 15px;
  }

  p {
    font-size: 1.2rem;
    margin-bottom: 30px;
  }

  /* OSITO ANIMADO */

  .bear {
    position: relative;
    width: 150px;
    height: 150px;
    margin: 0 auto 30px auto;
  }

  .ear {
    position: absolute;
    width: 50px;
    height: 50px;
    background: #80deea;
    border-radius: 50%;
    top: 0;
    animation: bounce 3s ease-in-out infinite;
  }

  .ear.left {
    left: 0;
  }

  .ear.right {
    right: 0;
  }

  .face {
    position: relative;
    width: 120px;
    height: 120px;
    background: #4db6ac;
    border-radius: 50%;
    margin: 0 auto;
    box-shadow: inset -5px 5px 10px #00796b;
    animation: breathe 4s ease-in-out infinite;
  }

  .eye {
    position: absolute;
    width: 20px;
    height: 20px;
    background: #004d40;
    border-radius: 50%;
    top: 40px;
  }

  .eye.left {
    left: 30px;
  }

  .eye.right {
    right: 30px;
  }

  .nose {
    position: absolute;
    top: 75px;
    left: 50%;
    transform: translateX(-50%);
    width: 25px;
    height: 15px;
    background: #00251a;
    border-radius: 50% / 60%;
    animation: nose-wiggle 5s ease-in-out infinite;
  }

  .mouth {
    position: absolute;
    top: 95px;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 20px;
    border-bottom: 4px solid #00251a;
    border-radius: 0 0 50px 50px;
  }

  @keyframes bounce {
    0%, 100% { transform: translateY(0);}
    50% { transform: translateY(-10px);}
  }

  @keyframes breathe {
    0%, 100% { transform: scale(1);}
    50% { transform: scale(1.05);}
  }

  @keyframes nose-wiggle {
    0%, 100% { transform: translateX(-50%) rotate(0deg);}
    50% { transform: translateX(-50%) rotate(10deg);}
  }

  .btn-home {
    background-color: #00796b;
    color: white;
    padding: 12px 35px;
    border-radius: 50px;
    font-size: 1.2rem;
    text-decoration: none;
    box-shadow: 0 6px 15px #004d40;
    display: inline-block;
    transition: background-color 0.3s ease;
  }

  .btn-home:hover {
    background-color: #004d40;
  }
</style>

<div class="container">
  <h1>🐻 Bienvenidos Bebés 🐻</h1>
  <p>Este espacio es para ti, pequeño tesoro. Disfruta del osito que respira y se mueve suavemente para acompañarte con tranquilidad.</p>

  <div class="bear" aria-label="Osito animado">
    <div class="ear left"></div>
    <div class="ear right"></div>
    <div class="face">
      <div class="eye left"></div>
      <div class="eye right"></div>
      <div class="nose"></div>
      <div class="mouth"></div>
    </div>
  </div>

  <a href="{{ route('welcome') }}" class="btn-home" role="button" aria-label="Volver al inicio">🏠 Volver al inicio</a>
</div>
@endsection
