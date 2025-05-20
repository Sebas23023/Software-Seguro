@extends('app')

@section('content')
<style>
  body {
    background: #ffe6f0; /* rosa pastel suave */
    font-family: 'Comic Sans MS', cursive, sans-serif;
    color: #333;
  }

  .container {
    max-width: 700px;
    margin: 50px auto;
    padding: 20px;
    background: #fff8ff;
    border-radius: 25px;
    box-shadow: 0 8px 20px rgba(255, 182, 193, 0.5);
    text-align: center;
  }

  h1 {
    font-size: 3rem;
    color: #ff6f91;
    margin-bottom: 15px;
    text-shadow: 2px 2px 4px #ffb6c1;
  }

  p {
    font-size: 1.3rem;
    margin-bottom: 25px;
    color: #ff4081;
  }

  .emoji {
    font-size: 4rem;
    margin: 15px 0;
    animation: bounce 2s infinite;
  }

  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
  }

  .btn-fun {
    background-color: #ff91a4;
    border: none;
    border-radius: 50px;
    padding: 15px 40px;
    font-size: 1.5rem;
    color: white;
    cursor: pointer;
    box-shadow: 0 6px 15px #ff91a4;
    transition: background-color 0.3s ease;
    margin: 10px 5px;
  }

  .btn-fun:hover {
    background-color: #ff5470;
  }

  .btn-home {
    background-color: #6fcf97;
    box-shadow: 0 6px 15px #6fcf97;
  }

  .btn-home:hover {
    background-color: #34a853;
  }

  .color-boxes {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
  }

  .color-box {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(255,182,193,0.6);
    transition: transform 0.3s ease;
  }

  .color-box:hover {
    transform: scale(1.2);
  }

  .color-pink { background: #ffb6c1; }
  .color-yellow { background: #fff176; }
  .color-blue { background: #81d4fa; }
  .color-green { background: #a5d6a7; }

  #message-box {
    margin-top: 30px;
    font-size: 1.5rem;
    font-weight: bold;
    color: #ff4081;
    min-height: 50px;
  }
</style>

<div class="container">
  <h1>🌈 ¡Bienvenidos Niños! 🌈</h1>
  <p>Explora, juega y diviértete con los colores y emojis mágicos. ¡Haz clic en las cajas para cambiar el fondo y ver mensajes divertidos!</p>

  <div class="color-boxes">
    <div class="color-box color-pink" onclick="changeBackground('#ffb6c1', '¡Eres tan dulce como el algodón de azúcar! 🍬')"></div>
    <div class="color-box color-yellow" onclick="changeBackground('#fff176', '¡Brillas como el sol! ☀️')"></div>
    <div class="color-box color-blue" onclick="changeBackground('#81d4fa', '¡Eres tan genial como el océano! 🌊')"></div>
    <div class="color-box color-green" onclick="changeBackground('#a5d6a7', '¡Tan fresco y alegre como un jardín! 🌻')"></div>
  </div>

  <div id="message-box"></div>

  <div class="emoji">🎉🎈🧸</div>

  <button class="btn-fun" onclick="alert('¡Gracias por jugar! ¡Eres increíble! 💖')">¡Dime un secreto!</button>
  <br>
  <a href="{{ route('welcome') }}" class="btn-fun btn-home">🏠 Volver al inicio</a>
</div>

<script>
  function changeBackground(color, message) {
    document.body.style.backgroundColor = color;
    document.getElementById('message-box').textContent = message;
  }
</script>
@endsection
