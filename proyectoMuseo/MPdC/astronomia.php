<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPC-Astronomía</title>
    <link rel="stylesheet" href="css/secondarias.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="nav">
        <div class="contenedor_logo">
            <a href="index.php"><img src="img/logo.png" alt="" class="nav_img"></a> 
        </div>
        <div class="turno_contenedor">
            <a href="turno.php" class="link_turno">Sacar Turno</a>
        </div>
    </nav>

    <header class="header">
    <?php
            include "con_db.php"; //Se incluye el archivo con_db.php

            $sql="SELECT `nombre`, `banner` FROM `muestras` WHERE `id_muestra`=4;"; //Se realiza el SQL de tipo SELECT y se seleccionan los campos nombre y banner de la tabla muestras cuando el id_muestra sea 4
            $result = mysqli_query($con,$sql); //Se almacena el resultado de la consulta en la variable $result

            $mostrar =mysqli_fetch_array($result);  //Se almacena el resultado de la consulta en la variable $result
            $nombre = $mostrar['nombre']; //Se crea la variable $nombre y se almacena en el el valor del campo nombre
            $banner = $mostrar['banner']; //Se crea la variable $banner y se almacena en el el valor del campo banner

            echo "<img src=$banner class='img_header'>"; //Se crea un elemento img con el src traido desde la BD
            echo "<h1 class='title_header'>$nombre</h1>"; //Se crea el elemento h1 con el contenido traido desde la BD
        ?>
    </header>

    <section class="sound">
        <h3 class="tile_sound">¿Quieres dar a conocer a personas con dificultades visuales sobre lo que se ofrece en las exposiciones de Atronomía?</h3>
        <button class="button_sound"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-volume-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M15 8a5 5 0 0 1 0 8" />
            <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a0.8 .8 0 0 1 1.5 .5v14a0.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
          </svg></button>
    </section>

    <main class="main">
        <h2 class="title">Una Exposición Con Años Luz De Calidad</h2>

        <div class="main_principal">
        <?php
            include "con_db.php"; //Se incluye el archivo con_db.php

            $sql="SELECT `descripcion`, `img` FROM `muestras` WHERE `id_muestra`=4;"; //Se realiza la segunda consulta SQL, en este caso un SELECT y se selecciona los campos descripcion e img de la tabla muestras cuanod el  id_muestra sea 4 (Astronomia)
            $result = mysqli_query($con,$sql); //Se almacena el resultado de la consulta en la variable $result

            $mostrar =mysqli_fetch_array($result); //Se gurada el resultado de la consulta en un arrat y se guarda en la variuable $mostrar
            $desc = $mostrar['descripcion'];  //Se crea la variable $desc y se almacena en el el valor del campo descripcion
            $img = $mostrar['img']; //Se crea la variable $img y se almacena en el el valor del campo img

            echo "<img src=$img class='principal_img'>"; //Se crea un elemento img con el src traido desde la BD
            echo "<p class='p_principal' style='font-size: .9em;'>$desc</p>"; //Se crea el elemento p con el contenido traido desde la BD
        ?>
        </div>
    </main>

    <section class="prom">
        <h2 class="title">¿Te interesó lo que leíste?</h2>
        <p>Puedes vistarnos inscribiendote a un turno. ¿Cómo? <a href="turno.php">Click Aquí</a>.</p>
    </section>

    <footer class="footer">
        Museo Provincial De Ciencias © Todos los Derechos Reservados 2022
    </footer>

    <script>
        let button = document.querySelector('.button_sound'); //Se crea la variable button y se almacena en el el elemento con la clase button_sound
        let audio = new Audio('sounds/astronomia.mp3'); //Se crea la variable audio y se crea el objeto Audio 
        let contador = 0; //Se crea variable llamada contador con valor inicial de 0

    button.addEventListener('click',()=>{ //Se añade el evento click al button
    
        if(contador == 0){ //Se verifica si el contador tinee el valor de 0
            audio.play(); //Se ejecuta el metodo play 
            contador = 1; //Se le asigna el alor 1 al contador
            button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-pause" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="6" y="5" width="4" height="14" rx="1" />
            <rect x="14" y="5" width="4" height="14" rx="1" />
            </svg>`; //Se le agrega el contendio HTML al button
        }else{ //Caso contrario
            audio.pause(); //Se ejecuta el metodo pause()
            contador = 0; //Se le asigna el valor 0 al contador
            button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-play" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M7 4v16l13 -8z" />
            </svg>`;  //Se le agrega el contendio HTML al button
        }  
})
    </script>
</body>
</html>