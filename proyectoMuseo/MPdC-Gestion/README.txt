DOCUMENTACION DE CODIGO DE LA PAGINA DE GESTION DEL MUESO PROVINCIAL DE CIENCIAS

INDEX.PHP

<========INICIO DE SESION=============>

include "con_db.php";

            if(isset($_POST['iniciarSesion'])){

                $name = $_POST['nombre'];
                $pass = $_POST['contraseña'];

                $sql = "SELECT `usuario`, `contraseña` FROM `admin` WHERE 1;";
                $result = mysqli_query($con,$sql);

                $mostrar =mysqli_fetch_array($result);
                $nombre = $mostrar['usuario'];
                $contra = $mostrar['contraseña'];

                if($name != $nombre || $pass != $contra){
                    echo "<h2 class='mensaje'>Verifique sus datos</h2>";
                }else{
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

Se comienza por incluir el archivo con_db.php, luego se verifica que exista el uinput de tipo submit llamado iniciarSesion,
Luego se declaran dos variables, $nombre que almacena el valor del inpout llamado nombre, y $pass que almacena el valor del input de nombre contraseña.
Se realiza la consulta sql, en este caso un SELECT, para traer el usuario y contraseña del administrador de la pagina.
Se almacenan los valores en las variables $nombre (lo que se encutra en el campo usuario) y $contra (lo que se encutra en el campo contraseña)
Por consiguiente se realiza una condicional, que verifica si los valores ingresado y los que estan almacenados en la BD son iguales.
En caso contrario se hará un echo con un h2 mostrando el mensaje Verifique sus datos. En caso de ser iguales se realizará un echo con
un h2 mostrando el mensaje de aprobacion y con ell un link que dirige a la pagina principal.


<=========== EDICION DE CONTENIDO PHP Y JS ==============>

JS

let contenedor = document.querySelector('.container_edit');
    let button2 = document.querySelector('.edit');

    button2.addEventListener('click',()=>{
        contenedor.innerHTML = `
        
        <form action="" method="post"><textarea name="text" id="textarea" cols="30" rows="10"></textarea> <br> <input type="submit" name="btnGuardar" id="btn_guardar" value="Guardar"></form>
        
        `;
    })

Se declara la varibale contenedor que contednra el elemento con al case container_edit
Tambien se declara la variable button2 que alacenará el elemento con la clase edit. A este button2 se le añade un evento de tipo click
Al realizarle click se realizará un funcion que realiza la creacion de contenido HTML en el conenedor.
Lo que se añade es un formulario con un text area y un inoput del tipo submit.

PHP

valor = Dinosaurio => 1
        Mamiferos => 2
        Geologia => 3
        Astronomia => 4
        Historia => 5

include "con_db.php";

            if(isset($_POST['btnGuardar'])){
                    
                $newText = $_POST['text'];

                $firstsql ="UPDATE `muestras` SET `descripcion`='$newText' WHERE `id_muestra` = valor;";
                $firstresult = mysqli_query($con,$firstsql);
            }

            $sql="SELECT `descripcion`, `img` FROM `muestras` WHERE `id_muestra`=valor;";
            $result = mysqli_query($con,$sql);

            $mostrar =mysqli_fetch_array($result);
            $desc = $mostrar['descripcion'];
            $img = $mostrar['img'];

            echo "<img src=$img class='principal_img'>";
            echo "<p class='p_principal' style='font-size: .9em;'>$desc</h1>";

Se incluye el archivo con el nombre con_db.php
Se verifica si existe un input del tipo submit con el name btnGuardar. E caso de existir se guarda en la variable $newText
el valor del text area creado en el codigo JavaScript. Por cinsiguiente se realiza una consunlta sql, en este caso un UPDATE
donde se actualizara el campo descripcion de la tabla muestras mientras el campo id_muestra = valor, la variable result 
almacenara la csonulta. FIN DE LA condicional

Los codigos de las lineas 83, 84, 86, 87, 88, 90, 91 realizan la consulta SELECT desde la BD y  muestra la imagen y descripcion
de las muestras

GRACIAS POR LEER LA DOCUMENTACION DE LA PAGINA WEB DE GESTION DEL MUSEO PROVINCIAL DE CIENCIAS

Realizado el 22 de Septiembre de 2022