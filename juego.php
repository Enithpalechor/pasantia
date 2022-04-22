<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CARD CSS</title>

  <style>
    .fondotexto {
      color: white;
      font-size: 25px;
    }

    body {
      background: url('Imagenes/juego.jpg');
    }

    :root {
      --card1-color: rgb(255, 0, 0);
      --contenedor-color: #4393c9f5;
    }

    .card1 {
      margin: 0 auto;
      background: var(--card1-color);
      color: rgb(255, 255, 255);
      width: 250px;
      height: 150px;
      padding: 20px;
      box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
      border-radius: 20px;
    }

    .card2 {
      margin: 0 auto;
      background: yellow;
      color: rgb(255, 255, 255);
      width: 100px;
      height: 100px;
      padding: 20px;
      box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
      border-radius: 20px;
    }

    .contenedor {
      margin: 0 auto;
      background: var(--contenedor-color);
      color: rgb(255, 255, 255);
      width: 260px;
      height: 155px;
      padding: 20px;
      box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
      border-radius: 20px;
    }

    .card-header2 {
      background: blue;
      margin: -20px;
      padding: 20px;
      border-radius: 20px 20px 0px 0px;
      width: 150px;
      height: 150px;
    }

    a {
      padding: 8px;
      margin: 2px;
      border-radius: 5px;
      border: 1px solid white;
      width: 100%;
      text-align: center;
      color: white;
      text-decoration: none;
    }

    a:hover {
      color: var(--card-body-color);
      background: white;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
  <div class="modal fade" id="modalinicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">juego</h5>

        </div>
        <div class="modal-body">
          <p>en los cuadros azules estaran contenidas las preguntas y las opciones de respuesta las encuentran en los cuadros rojos </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="inicio();">jugar</button>

        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('#modalinicio').modal({
      backdrop: 'static',
      keyboard: false
    })
  </script>


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>

        </div>
        <div class="modal-body">
          aciertos: <p id="paciertos"></p>
          desaciertos: <p id="pdesaciertos"></p>
          tiempo: <p id="ptiempo"></p>
        </div>
        <div class="modal-footer">
          <a href="resultadosjuego.php?id_tema=<?php echo  $_GET['id_tema']
                                                ?>" class="btn btn-secondary">Salir</a>
          <a href="" class="btn btn-primary">Continuar</a>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    #contenedor {
      margin: 10px auto;
      width: 540px;
      height: 115px;
    }

    .reloj {
      float: left;
      font-size: 20px;
      font-family: Courier, sans-serif;
      color: #363431;

    }
  </style>
  <div class="container">
    <div id="contenedor">
      <div class="reloj" id="Horas">00</div>
      <div class="reloj" id="Minutos">:00</div>
      <div class="reloj" id="Segundos">:00</div>
      <div class="reloj" id="Centesimas">:00</div>
    </div>
    <div class="row">
      <div class="col">
        <?php
        require_once "./db/conexion.php";
        $sql = "SELECT * FROM respuesta inner join pregunta on(respuesta.id_pregunta=pregunta.id_pregunta) where id_tema=" . $_GET["id_tema"];
        $result = mysqli_query($con, $sql);
        $contador = 0;
        $array = array();
        while ($data = mysqli_fetch_assoc($result)) {
          $contador++;
          array_push($array, $contador);
        ?>
          <div class="card1" id="caja<?php echo $contador ?>" draggable="true" datacolum="<?php echo $data['indicer'] ?>">
            <h6><?php echo $data["respuesta"] ?></h6>
          </div>
          <br>
        <?php  }  ?>
        <br>
      </div>
      <div class="col">
        <?php
        require_once "./db/conexion.php";
        $sql = "SELECT * FROM pregunta where id_tema=" . $_GET["id_tema"];
        $result = mysqli_query($con, $sql);
        $contador = 0;
        while ($data = mysqli_fetch_assoc($result)) {
          $contador++;
        ?>
          <div>
            <center><?php echo $data["pregunta"] ?></center>
          </div>
          <div class="contenedor" id="contenedor<?php echo $contador    ?>" datacolum="<?php echo $data['indicep'] ?>">
          </div>
          <br>
        <?php   } ?>
      </div>
    </div>



  </div>
  <script type="text/javascript">
    var centesimas = 0;
    var segundos = 0;
    var minutos = 0;
    var horas = 0;
    var tiempo = "";

    function inicio() {
      $('#modalinicio').modal('hide')
      control = setInterval(cronometro, 10);

    }

    function parar() {
      clearInterval(control);

      tiempo = (horas + ":" + minutos + ":" + segundos + ":" + centesimas)
    }

    function reinicio() {
      clearInterval(control);
      centesimas = 0;
      segundos = 0;
      minutos = 0;
      horas = 0;
      Centesimas.innerHTML = ":00";
      Segundos.innerHTML = ":00";
      Minutos.innerHTML = ":00";
      Horas.innerHTML = "00";
      document.getElementById("inicio").disabled = false;
      document.getElementById("parar").disabled = true;
      document.getElementById("continuar").disabled = true;
      document.getElementById("reinicio").disabled = true;
    }

    function cronometro() {
      if (centesimas < 99) {
        centesimas++;
        if (centesimas < 10) {
          centesimas = "0" + centesimas
        }
        Centesimas.innerHTML = ":" + centesimas;
      }
      if (centesimas == 99) {
        centesimas = -1;
      }
      if (centesimas == 0) {
        segundos++;
        if (segundos < 10) {
          segundos = "0" + segundos
        }
        Segundos.innerHTML = ":" + segundos;
      }
      if (segundos == 59) {
        segundos = -1;
      }
      if ((centesimas == 0) && (segundos == 0)) {
        minutos++;
        if (minutos < 10) {
          minutos = "0" + minutos
        }
        Minutos.innerHTML = ":" + minutos;
      }
      if (minutos == 59) {
        minutos = -1;
      }
      if ((centesimas == 0) && (segundos == 0) && (minutos == 0)) {
        horas++;
        if (horas < 10) {
          horas = "0" + horas
        }
        Horas.innerHTML = horas;
      }
    }
    var p = 0;
    var r = 0;
    var contador_aciertos = 0;
    var contador_desaciertos = 0;
    let array = [];
    var contador = <?php echo $contador; ?>;
    for (let j = 1; j <= contador; j++) {
      array.push(j)
    }


    for (let i = 1; i <= array.length; i++) {
      document.querySelector("#caja" + i).addEventListener("dragstart", e => {

        array.filter(function(element) {
          if (element != i) {
            document.querySelector("#caja" + element).draggable = false;
            console.log(document.querySelector("#caja" + element).draggable)
          }
        });
        document.querySelector("#caja" + i);
      });
      document.querySelector("#caja" + i).addEventListener("dragend", e => {

        array.filter(function(element) {
          if (element != i) {
            document.querySelector("#caja" + element).draggable = true;
          }
        });
        let elementr = document.getElementById("caja" + i);
        console.log("Ticket # = " + elementr.getAttribute('datacolum'));
        r = elementr.getAttribute('datacolum');

        console.log(parseInt(r))
        console.log(parseInt(p))
        console.log(parseInt(r) + parseInt(p))
        console.log('terminando')
        if (parseInt(r) == parseInt(p)) {
          contador_aciertos++

        } else {
          contador_desaciertos++
        }
        if ((parseInt(contador_aciertos) + parseInt(contador_desaciertos)) == array.length) {

          document.getElementById("paciertos").innerHTML = contador_aciertos
          document.getElementById("pdesaciertos").innerHTML = contador_desaciertos


          parar();
          guardar(contador_aciertos, contador_desaciertos, tiempo);

          document.getElementById("ptiempo").innerHTML = tiempo
          $('#exampleModalCenter').modal('show')
        }
      });

    }
  </script>




  <script type="text/javascript">
    console.log(array)
    for (let i = 1; i <= array.length; i++) {
      document.querySelector("#contenedor" + i).addEventListener("dragover", e => {
        e.preventDefault();
      });
      document.querySelector("#contenedor" + i).addEventListener("drop", e => {
        if (document.querySelector("#contenedor" + i).childElementCount == 0) {
          if (document.querySelector("#caja" + 1).draggable == true) {
            document.querySelector("#contenedor" + i).appendChild(document.querySelector("#caja" + 1))
            document.querySelector("#caja" + 1).draggable = false
          } else if (document.querySelector("#caja" + 2).draggable == true) {
            document.querySelector("#contenedor" + i).appendChild(document.querySelector("#caja" + 2))
            document.querySelector("#caja" + 2).draggable = false
          } else if (document.querySelector("#caja" + 3).draggable == true) {
            document.querySelector("#contenedor" + i).appendChild(document.querySelector("#caja" + 3))
            document.querySelector("#caja" + 3).draggable = false
          } else if (document.querySelector("#caja" + 4).draggable == true) {
            document.querySelector("#contenedor" + i).appendChild(document.querySelector("#caja" + 4))
            document.querySelector("#caja" + 4).draggable = false
          }
          let elementp = document.getElementById("contenedor" + i);
          console.log("Ticket # = " + elementp.getAttribute('datacolum'));
          p = elementp.getAttribute('datacolum');



        }
      });
    }
  </script>

  <script type="text/javascript">




  </script>

  <script type="text/javascript">
    function guardar(a, d, t) {
      var usuario = 0;
      var id_tema = <?php echo  $_GET["id_tema"]; ?>;
      axios.post('db/guardarjuego.php?aciertos=' + a + '&desaciertos=' + d + '&tiempo=' + t,

        )
        .then(function(res) {
          console.log(res.data)
        })
        .catch(function(err) {
          console.log(err);
        })
        .then(function() {

        });

    }
  </script>
</body>

</html>