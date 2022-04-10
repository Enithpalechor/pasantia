<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<form onsubmit="return guardar(); "> 
<?php 
                                 require_once "./db/conexion.php";
                                $sql = "SELECT * FROM `pregunta_quiz` ";
                                $result = mysqli_query($con,$sql);
                                $contador=0;
                                
                                while ($data = mysqli_fetch_assoc($result)) {
                                $contador++;
                            ?>
                            <h3><?php echo $data['nombre_pregunta'] ?></h3>
                            <div>
                            	
                           <?php 
                           $sql2 = "SELECT * FROM opciones where id_pregunta=".$data['id_pregunta'];
                            $result2 = mysqli_query($con,$sql2);
                                $contador2=0;
                                while ($opcion = mysqli_fetch_assoc($result2)) { 
                                	?>
                                	<input type="radio" required="true" data-bandera="<?php echo $opcion['bandera'] ?>" value="<?php echo $opcion['id_opcion'] ?>" class="radio_input" name="radio <?php echo $opcion['id_pregunta'] ?>" data-id="<?php echo $opcion['id_pregunta'] ?>"><?php echo $opcion['nombre_opcion'] ?>
                                	<?php } ?>
                            </div>
                        <?php } ?>
                        <button type="submit" >Enviar</button>
     </form>
</body>
</html>
<script type="text/javascript">
	function guardar(){
var dataLista = [];

                

                   $(".radio_input:checked").each(function () {
                     console.log("radio id_pregunta " + $(this).attr('data-id'));
                     console.log("raadio value " + $(this).val());
                        var data = {'id_pregunta': $(this).attr('data-id'), 'value': $(this).val(),'bandera':$(this).attr('data-bandera')};//las preguntas de selecion unica
                       dataLista.push(data)
                    });
console.log(dataLista)
dataJson = JSON.stringify(dataLista);
                    guardarEncuesta(dataJson);
return false;
	}
  function guardarEncuesta(data) {
              
                var id_estudiante= <?php echo 1 ?>;
                 var id_tema=<?php echo 1 ?>;
                $.ajax({
                    url: 'db/guardarRespuestaquiz.php',
                    method: "POST",
                    data: {data_encuesta: data, id_usuario: id_estudiante, id_tema: id_tema},
                    success: function (res) {

                        console.log(res);

                        res = res.trim();//eliminamos espacion en blanco a la izaquerda y delera
 if (res != "") {//validamos si todo salio bien

                            alert("Encuesta guardada");
                          

                        } else {
                            alert("Encuesta no guardada");
                        }
                    },
                    error: function () {
                        alerta("error", "Error en el sistema");
                    }
                });

            }


      
    
</script>