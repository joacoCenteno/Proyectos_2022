<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPC-Turnos</title>
    <link rel="stylesheet" href="css/turnos.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="nav">
        <a href="index.php"><img src="img/logo.png" class="logo_nav" alt=""></a> 
    </nav>

    <h1 class="main_title">Bienvenido Al Sistema de Turnos</h1>

    <main class="main">
        

        <form action="" method="post">
            <input type="text" class="input_name input" name="nombre" placeholder="Ingrese su nombre"> <br>
            <label for="" class="label_muestra" class="label">¿Que desea visitar? <br>
            <select name="provincia" id="muestras">
                <option value="" disabled selected>Seleccione una Atracción...</option>
	            <option value="1">Dinosaurios</option>
	            <option value="2">Mamíferos</option>
	            <option value="3">Geología</option>
	            <option value="4">Astronomía</option>
	            <option value="5">Historia</option>
            </select>
             </label> <br>
             <p style="margin-top: 1em;">Ingrese el Horario </p>
             <label for="" class="label_horario" class="label">
             </label>
             <p style="margin-top: 1em;">Ingrese la fecha</p>
             <input type="date" name="dia"> <br>
             <input type="number" class="input" value="" min="1" max="12" name="cantidad" placeholder="Ingrese la cantidad de personas que acompañarán"><br>
             <input type="submit" class="input_submit" name="registro" value="Solicitar Turno">
        </form>

        <div class="contenedor_mensaje">
        <?php
            include "con_db.php";

            require 'phpqrcode/qrlib.php';

            $dir = 'temp/';

            if(!file_exists($dir)){
                mkdir($dir);
            }


            if(isset($_POST['registro'])){

                if(strlen($_POST['nombre']) >= 1){
                    $nombre = $_POST['nombre'];
                    $muestras = $_POST['provincia'];
                    $horario = $_POST['horario'];
                    $dia = $_POST['dia'];
                    $cantidad = $_POST['cantidad'];

                    switch($muestras){
                        case '1': $nombreMuestra = 'Dinosaurios'; break;
                        case '2': $nombreMuestra = 'Mamíferos'; break;
                        case '3': $nombreMuestra = 'Geología'; break;
                        case '4': $nombreMuestra = 'Astronomía'; break;
                        case '5': $nombreMuestra = 'Historia'; break;
                    }

                    $firstsql = "SELECT `nombre` FROM `turnos` WHERE `id_turno_muestra` = '$muestras' AND `horario`= '$horario' AND `dia` = '$dia';";
                    $firstresult = mysqli_query($con,$firstsql);

                    if(mysqli_num_rows($firstresult) > 0){
                        echo "<h2 class='mensaje'>TURNO NO DISPONIBLE, POR FAVOR SELECCIONA OTRO</h2>";

                    }else{
                        $secondsql = "INSERT INTO `turnos`(`horario`, `dia`, `nombre`, `cantidad`, `id_turno_muestra`) VALUES ('$horario','$dia','$nombre','$cantidad','$muestras')";

                        $secondresult = mysqli_query($con,$secondsql);

                        if($secondresult){
                            $tamanio = 10;
                            $level = 'M';
                            $frameSize = 3;
                            $contenido = "TURNO MPdC DIA: $dia HORARIO: $horario MUESTRA: $nombreMuestra";

                            QRcode::png($contenido,'temp/test.png',$level,$tamanio,$frameSize);

                            echo "<h2 class='mensaje'>FORMULARIO ENVIADO CON ÉXITO!!!</h2>
                            <p class='p'>Por favor descargá el siguiente QR y presentalo en la puerta del Museo</p>
                            <img src='temp/test.png' class='img_qr' alt=''>";
                        }

                    }

                    
            
                
                }else{echo "<h2 class='mensaje'>INGRESA UN NOMBRE</h2>";}

            }


        ?>
    </div>
        
    </main>

    <script>

            let horario = document.querySelector('.label_horario');

            var select = document.getElementById('muestras');
            select.addEventListener('change',
            function(){
            var selectedOption = this.options[select.selectedIndex];


            var eleccion = selectedOption.value;
            if(eleccion == 1){
            horario.innerHTML = "<input type='radio' name='horario' value='08:00:00'>08:00:00<br> <input type='radio' name='horario' value='14:00:00'>14:00:00<br>  <input type='radio' name='horario' value='18:00:00'>18:00:00<br>"
            }else if(eleccion == 2){
            horario.innerHTML = "<input type='radio' name='horario' value='09:00:00'>09:00:00<br> <input type='radio' name='horario' value='13:00:00'>13:00:00<br>  <input type='radio' name='horario' value='17:00:00'>17:00:00<br>"
            }else if(eleccion == 3){
            horario.innerHTML = "<input type='radio' name='horario' value='08:00:00'>08:00:00<br> <input type='radio' name='horario' value='12:00:00'>12:00:00<br>  <input type='radio' name='horario' value='16:00:00'>16:00:00<br>"
            }else if(eleccion == 4){
            horario.innerHTML = "<input type='radio' name='horario' value='10:00:00'>10:00:00<br> <input type='radio' name='horario' value='14:00:00'>14:00:00<br>  <input type='radio' name='horario' value='18:00:00'>18:00:00<br>"
            }else if(eleccion == 5){
            horario.innerHTML = "<input type='radio' name='horario' value='08:00:00'>08:00:00<br> <input type='radio' name='horario' value='11:00:00'>11:00:00<br>  <input type='radio' name='horario' value='14:00:00'>14:00:00<br>"
            }
        });
    </script>
</body>
</html>
