<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Ud.2 - Relacion de ejercicios 5</title>
  <link rel="stylesheet" href="estilo-ahoracado.css">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="main-container">
    <h1 class="fondoletra">Seguridad Informatica</h1>
    <h2 class="titulo fondoletra">Juego del ahorcado</h2>
    <h1 id="msg-final"></h1>
    <h3 id="acierto"></h3>
    <div class="flex-row no-wrap">
      <h2 class="palabra" id="palabra"></h2>
      <picture>
        <img src="img/ahorcado_6.png" alt="" id="image6">
        <img src="img/ahorcado_5.png" alt="" id="image5">
        <img src="img/ahorcado_4.png" alt="" id="image4">
        <img src="img/ahorcado_3.png" alt="" id="image3">
        <img src="img/ahorcado_2.png" alt="" id="image2">
        <img src="img/ahorcado_1.png" alt="" id="image1">
        <img src="img/ahorcado_0.png" alt="" id="image0">
      </picture>
    </div>
    <div class="flex-row" id="turnos">
      <div class="col">
        <h3>Intentos restantes: <span id="intentos">8</span></h3>
      </div>
      <div class="col">
        <button onclick="salir()"> salir</button>
        <button onclick="inicio()" id="reset">Elegir otra palabra</button>
        <button onclick="pista()" id="pista">Dame una pista!</button>
        <span id="hueco-pista"></span>
      </div>
    </div>

    <div class="flex-row">
      <div class="col">
        <div class="flex-row" id="abcdario">
        </div>
      </div>
      <div class="col"></div>
    </div>

  </div>
  <script src="ahorcado.js"></script>
</body>

</html>