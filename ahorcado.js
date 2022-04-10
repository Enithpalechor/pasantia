// ### VARIABLES ###

// Array de palabras
var palabras = [  ["seguridad", "Ausencia de peligro"],["integridad", "Prevención  de modificaciones  no autorizadas"],
["confidencialidad", "confianza"],["Vulnerabilidad", " debilidad  en un sistema"],
["virus", "Código malicioso "],["Protocolo", "Medida de protección"],["Riesgo", "amenazas "],
["Antivirus", "progra para detectar y eliminar virus informaticos "],
["Disponibilidad", "apacidad de asegurar la fiabilidad de los datos "],
["Hakers", "es alguien que descubre las vulnerabilidades de una computadora "]];
// Palabra a averiguar
var palabra = "";
// Nº aleatorio
var rand;
// Palabra oculta
var oculta = [];
// Elemento html de la palabra
var hueco = document.getElementById("palabra");
// Contador de intentos
var cont = 8;
// Botones de letras
var buttons = document.getElementsByClassName('letra');
// Boton de reset
var btnInicio = document.getElementById("reset");



// ### FUNCIONES ###

// Escoger palabra al azar
function generaPalabra() {
  rand = (Math.random() * (palabras.length-1)).toFixed(0);
  palabra = palabras[rand][0].toUpperCase();
 
}

// Funcion para pintar los guiones de la palabra
function pintarGuiones(num) {
  oculta = [];
  for (var i = 0; i < num; i++) {
    oculta[i] = "_";
  }

  hueco.innerHTML = oculta.join("");
}

//Generar abecedario
function generaABC (a,z) {
  document.getElementById("abcdario").innerHTML = "";
  var i = a.charCodeAt(0), j = z.charCodeAt(0);
  var letra = "";
  for( ; i<=j; i++) {
    letra = String.fromCharCode(i).toUpperCase();
    document.getElementById("abcdario").innerHTML += "<button value='" + letra + "' onclick='intento(\"" + letra + "\")' class='letra fondoboton' id='"+letra+"'>" + letra + "</button>";
    if(i==110) {
      document.getElementById("abcdario").innerHTML += "<button value='Ñ' onclick='intento(\"Ñ\")' class='letra fondoboton' id='"+letra+"'>Ñ</button>";
    }
  }
}

// Chequear intento
function intento(letra) {
  document.getElementById(letra).disabled = true;
  if(palabra.indexOf(letra) != -1) {
    for(var i=0; i<palabra.length; i++) {
      if(palabra[i]==letra) oculta[i] = letra;
    }
    hueco.innerHTML = oculta.join("");
    document.getElementById("acierto").innerHTML = "Bien!";
    document.getElementById("acierto").className += "acierto verde";
  }else{
    cont--;
    document.getElementById("intentos").innerHTML = cont;
    document.getElementById("acierto").innerHTML = "Fallo!";
    document.getElementById("acierto").className += "acierto rojo";
    document.getElementById("image"+cont).className += "fade-in";
  }
  compruebaFin();
  setTimeout(function () { 
    document.getElementById("acierto").className = ""; 
  }, 800);
}

// Obtener pista
function pista() {
  document.getElementById("hueco-pista").innerHTML = palabras[rand][1];
}
var estado="";
// Compruba si ha finalizado
function compruebaFin() {
  if( oculta.indexOf("_") == -1 ) {
    estado="gano";
    console.log(estado);
    guardar();
    document.getElementById("msg-final").innerHTML = "Felicidadess !!";
    document.getElementById("msg-final").className += "zoom-in";
    document.getElementById("palabra").className += " encuadre";
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].disabled = true;
    }
    document.getElementById("reset").innerHTML = "Empezar";
    btnInicio.onclick = function() { location.reload() };
  }else if( cont == 0 ) {
    estado="perdio";
  console.log(estado);
  guardar();
    document.getElementById("msg-final").innerHTML = "perdistes";
    document.getElementById("msg-final").className += "zoom-in";
    for (var i = 0; i < buttons.length; i++) {
      buttons[i].disabled = true;
    }
    document.getElementById("reset").innerHTML = "Empezar";
    btnInicio.onclick = function () { location.reload() };
  }
}

// Restablecer juego
function inicio() {
  generaPalabra();
  pintarGuiones(palabra.length);
  generaABC("a","z");
  cont = 8;
  document.getElementById("intentos").innerHTML=cont;
}
function guardar(){ 
console.log(estado)
       axios.post('db/guardarjuego.php?estado='+estado, 
   
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

    function salir(){
      Swal.fire({
  title: 'Desea Salir?',
  
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'si!'
}).then((result) => {
  if (result.isConfirmed) {
   location.href="paginaprincipal.php"
  }
})
    }
// Iniciar
window.onload = inicio();
