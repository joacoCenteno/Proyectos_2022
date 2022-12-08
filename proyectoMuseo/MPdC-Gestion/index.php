<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPC-Gestión</title>
    <link rel="stylesheet" href="css/gestion.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    
    <form action="" method="post" class="formulario">
        <div class="form-control">
            <input type="text" required="" id="nombre" name="nombre">
            <label>
                <span style="transition-delay:0ms">U</span><span style="transition-delay:50ms">s</span><span style="transition-delay:100ms">u</span><span style="transition-delay:150ms">a</span><span style="transition-delay:200ms">r</span><span style="transition-delay:250ms">i</span><span style="transition-delay:300ms">o</span>
            </label>
        </div>
        <div class="form-control">
            <input type="text" required="" id="contraseña" name="contraseña">
            <label>
                <span style="transition-delay:0ms">C</span><span style="transition-delay:50ms">o</span><span style="transition-delay:100ms">n</span><span style="transition-delay:150ms">t</span><span style="transition-delay:200ms">r</span><span style="transition-delay:250ms">a</span><span style="transition-delay:300ms">s</span><span style="transition-delay:350ms">e</span><span style="transition-delay:400ms">ñ</span><span style="transition-delay:450ms">a</span>
            </label>
        </div>

        <input type="submit" value="Iniciar Sesión" name="iniciarSesion" class="button_inicio">
    </form>

    <div id="message">
        <?php
            include "con_db.php"; //Incluimos el archivo con_db.php

            if(isset($_POST['iniciarSesion'])){ //Se verifica si existe la variable POST iniciarSesion

                $name = $_POST['nombre']; //Se almacena dentro de la varaible $nombre el valor del POST con name nombre
                $pass = $_POST['contraseña']; //Se alacena dentro de la variable $pass el valor POST con name contraseña

                $sql = "SELECT `usuario`, `contraseña` FROM `admin` WHERE 1;"; //Se realiza consulta SQL de tipo SELECT y seleccionamos de el los campos usuario y contraseña de la tabla admin
                $result = mysqli_query($con,$sql); //Se almacena dentro de la varaible $result el resultado de la consulta

                $mostrar =mysqli_fetch_array($result); //Se almacena dentro de la variable $mostrar un array con los valores de la consulta
                $nombre = $mostrar['usuario']; //Se almacena dentro de la variable $nombre el valor del campo usuario
                $contra = $mostrar['contraseña']; //Se almacena dentro de la variable $contra el valor del campo contraseña

                if($name != $nombre || $pass != $contra){ //Se verifica si son de igual valor el usuario ingresado y el de la BD y lo mismo con la contraseña
                    echo "<h2 class='mensaje'>Verifique sus datos</h2>"; //En caso de no cumplirse se crea un h2 con un mensaje de alerta
                }else{ //Caso contrario se crea un h2 con mensaje de exito y un link hacia la pagina principal
                    echo "<h2 class='mensaje'>Sesión Iniciada Correctamente</h2> 
                    <a href='inicio.php'><button>
                <span>Continue</span>
                <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-big-right' width='44' height='44' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                <path stroke='none' d='M0 0h24v24H0z' fill='none'/>
                <path d='M4 9h8v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1z' />
                </svg>
                </button></a>";
                }
    
            }
        ?>
    </div>

</body>
</html>