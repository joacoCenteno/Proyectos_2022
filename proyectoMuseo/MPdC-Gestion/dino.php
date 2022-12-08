<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPC-Dinosaurios</title>
    <link rel="stylesheet" href="css/secondarias.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="nav">
        <div class="contenedor_logo">
            <a href="inicio.php"><img src="img/logo.png" alt="" class="nav_img"></a> 
        </div>
        <div class="turno_contenedor">
            <a href="index.php" class="link_turno">Cerrar Sesón</a>
        </div>
    </nav>

    <header class="header">
    <?php
            include "con_db.php"; //Se incluye el archivo con_db.php

            $sql="SELECT `nombre`, `banner` FROM `muestras` WHERE `id_muestra`=1;"; //Se realiza el SQL de tipo SELECT y se seleccionan los campos nombre y banner de la tabla muestras cuando el id_muestra sea 1
            $result = mysqli_query($con,$sql); //Se almacena el resultado de la consulta en la variable $result

            $mostrar =mysqli_fetch_array($result); //Se almacena el resultado de la consulta en la variable $result
            $nombre = $mostrar['nombre']; //Se crea la variable $nombre y se almacena en el el valor del campo nombre
            $banner = $mostrar['banner']; //Se crea la variable $banner y se almacena en el el valor del campo banner

            echo "<img src=$banner class='img_header'>";  //Se crea un elemento img con el src traido desde la BD
            echo "<h1 class='title_header'>$nombre</h1>"; //Se crea el elemento h1 con el contenido traido desde la BD
        ?>
    </header>

    <section class="sound">
        <h3 class="tile_sound">¿Quieres dar a conocer a personas con dificultades visuales sobre lo que se ofrece en las exposiciones de Dinosaurios?</h3>
        <button class="button_sound"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-volume-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M15 8a5 5 0 0 1 0 8" />
            <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a0.8 .8 0 0 1 1.5 .5v14a0.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
          </svg></button>
    </section>

    <main class="main">
        <h2 class="title">Ven, Descrubre y Aprende</h2>

        <div class="main_principal">
        <?php

            include "con_db.php"; //Se incluye el archivo con_db.php

            if(isset($_POST['btnGuardar'])){ //Se verifica que exista la vatiable POST con el name btnGuardar
                    
                $newText = $_POST['text']; //Se crea la variable $newText y almacenará la variable POST con el name text

                $firstsql ="UPDATE `muestras` SET `descripcion`='$newText' WHERE `id_muestra` = 1;"; //Se realiza la primera consulta SQl UPDATE y se actualiza el campo descripcion de la tabla muestras cuando el id_muestra sea 1 (Dinosaurios)
                $firstresult = mysqli_query($con,$firstsql); //Se almacena el resultado de la consulta en la variable $firstresult
            }

            $sql="SELECT `descripcion`, `img` FROM `muestras` WHERE `id_muestra`=1;"; //Se realiza la segunda consulta SQL, en este caso un SELECT y se selecciona los campos descripcion e img de la tabla muestras cuanod el  id_muestra sea 1 (Dinosaurios)
            $result = mysqli_query($con,$sql); //Se almacena el resultado de la consulta en la variable $result

            $mostrar =mysqli_fetch_array($result); //Se gurada el resultado de la consulta en un arrat y se guarda en la variuable $mostrar
            $desc = $mostrar['descripcion']; //Se crea la variable $desc y se almacena en el el valor del campo descripcion
            $img = $mostrar['img']; //Se crea la variable $img y se almacena en el el valor del campo img

            echo "<img src=$img class='principal_img'>"; //Se crea un elemento img con el src traido desde la BD
            echo "<p class='p_principal' style='font-size: .9em;'>$desc</p>"; //Se crea el elemento p con el contenido traido desde la BD
        ?>
        </div>
        <div class="container_edit">
            <button class="edit">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                    <line x1="16" y1="5" x2="19" y2="8" />
                  </svg>
            </button>
        </div>
    </main>

    
    <footer class="footer">
        Museo Provincial De Ciencias © Todos los Derechos Reservados 2022
    </footer>



    <script>
        let button = document.querySelector('.button_sound');  //Se crea la variable button y se le almacena el elemento con la clase button_sound

    button.addEventListener('click',()=>{ //Se le añade el evento click al button y se activa el audio
    var audio = new Audio('sounds/dino.mp3');
    audio.play();
    })

    let contenedor = document.querySelector('.container_edit'); //Se crea la variable contenedor y se almacena el elemento con la clase container_edit
    let button2 = document.querySelector('.edit'); //Se crea la variable button2 y se almacena el elemento con la clase edit

    button2.addEventListener('click',()=>{ //Se le añade el evento click al button2 y se le agrega codigo HTML al contenedor
        contenedor.innerHTML = `
        <form action="" method="post"> <textarea name="text" id="textarea" cols="30" rows="10"></textarea>  <br> <input type="submit" name="btnGuardar" id="btn_guardar" value="Guardar"></form>     
        `;
    })
    </script>
</body>
</html>