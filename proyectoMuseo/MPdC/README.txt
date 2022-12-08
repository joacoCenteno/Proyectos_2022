DOCUMENTACIÓN DE CÓGIDO DEL MUSEO PROVINCIAL DE CIENCIAS


INDEX.PHP

<======== SCROLL ==========>

const scrollUp = document.querySelector(".scroll-up"); /

window.addEventListener("scroll", ()=>{ 
    if(this.scrollY >= 350) scrollUp.classList.add("active");
    else scrollUp.classList.remove("active");
});

Este código hace referencia a la flecha que aparece en la parte inferior derecha de la pagina y que sirve para realizar el scroll hacia arriba
Se declara la variable scrollUpt y le gardamos el elemento con la clase scroll-up, siguiente paso, se le añade un evento
a la ventana del navegador, se verifica si en la ventana se está haciendo un scroll en direción Y mayor a 350, en caso
de cumplirse al elemento se le añadirá la clase active, caso contrario se lo eliminará.


<======== COMENTARIOS ==========>

let input = document.querySelector('.input_asunto'); //seleccionon el elemlento con la clase input_asunto
let text = document.querySelector('.text_opinion'); //seleccionon el elemento con la clase text_opinion
let button = document.querySelector('.button_comentario'); //seleccionon el elemento con la clase ibutton_comentario
let container = document.querySelector('.comentarios_result'); //seleccionon el elemento con la clase comentarios_result

button.addEventListener('click',()=> //creo el evento que al hacer click el boton realizara la creacion de un elemento HTML con titulo y descripcion
{
    if(input.value == '' || text.value == ''){ //Verifica que se haya ingresado un valor en los input
        alert("Por favor llene los campos"); //Muestra mensaje
    }else{
        let contenedor = document.createElement('DIV'); //Creo elemento div
    let titulo = document.createElement('H4') //Creo elemento H4 
    let descripcion = document.createElement("P"); //Creo elemento P

    contenedor.classList.add('result_contenedor'); //Le añado la clase result_contenedor
    titulo.classList.add('result_h4'); //le añado la clase result_h4 
    descripcion.classList.add('result_p'); //le añado la clase reuslt_p

    titulo.textContent = input.value; //Le doy al titulo el valor del input de asunto
    descripcion.textContent = text.value; //Le dos a la descripcion el valor del input texto



    contenedor.appendChild(titulo); //Inserto en el contenedor el elemento titulo
    contenedor.appendChild(descripcion); //Iniserto en eñ contenedor el elemento descripcion

    container.appendChild(contenedor) //Inserto en el contenedor principal el contenedor hijo
    }

    
});

Se comienza por delcarar variables que almacenarán lo que se ingrese en el input de asunto, el input del text, el boton de envio
 y el contenedor de los comentarios.
Cuando se haga click sobre el boton, se verificará si los input estan vacíos, en caso de cumplirse se mandará un alert,
caso contrario tienen contenindo en ellos, se creara un elementno div (contenedor) un h4 (titulo) y un p (descripcion)
al contenedor se le añadira la clase result_contenedor, al titulo la clase result_h4 y al descripcion la clase result_p
Al titulo se le añadirá el valor que s eingreso en el input de asunto y en descripcion el valor del inout text.
Dentro del contenedor hijo se agregaran el titulo y la descirpcion y luego en el container padre se añadira el anterio contenedor.


<======== MAPA ==========>

//Add your LocationIQ Maps Access Token here (not the API token!)
 locationiqKey = 'Your Key of IQMAP';
 //Define the map and configure the map's theme
 var map = new mapboxgl.Map({
     container: 'map',
     attributionControl: false, //need this to show a compact attribution icon (i) instead of the whole text
     style: 'https://tiles.locationiq.com/v3/streets/vector.json?key='+locationiqKey,
     zoom: 15,
     center: [-66.050836,-26.702242]
 });
             
 //Marker can be style either while adding the marker using JS or separately using CSS

 //Here's an example where we use external CSS to specify background image, size, etc
 //https://www.mapbox.com/mapbox-gl-js/api#marker
 // first create DOM element for the marker
 var el = document.createElement('div');
 el.id = 'markerWithExternalCss';
 // finally, create the marker
 var markerWithExternalCss = new mapboxgl.Marker(el)
     .setLngLat([-66.050836,-26.702242])
     .addTo(map);

Se comienza por colocar la key, luego se declara el objeto mapboxgl.Map, cuyo contenedor sera el map, los estilos 
vendran desde el link que se muestra, tednra un zoom de 15 y estará entrado en tales coordenadas.


TURNO.PHP

<========= MOSTRAR HORARIOS ===========>


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

Se guarda dentro de la variable horario el elemento con la clase .label_horario. Se almacena dentro de la variabe select el elemento con el id muestras
Se le añade un evento de cambio al select, cuanod suceda esto, se almacenará dentro de una vairable selectedOption el indice de los options del select
y dentro de la variale eleccion el value del selected Option.
Se procede a realizar condicionales sobre el valor de a variable eleccion, y en cada caso se mostraran los horarios disbponibles
en caso de que la vaiarable eleccion sea 1, 2, 3, 4 o 5. Se añade HTML dentro de horario, que corresponde a inouts del tipo radio.

<============ SISTEMA DE TURNOS PHP ================>

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

Se comienza por incluir el archivo con_db.php que tiene en el la variable $con. Se requiere  el archivo qrlib.php para la creacion de codigos QR
Se declara una variable $dir donde se almacenará la imagen del QR y por consiguientew una condicional donde se verifca si exite el directorio
temp, en caso de no encontrarse de lo creará.

Se verifica si exite el inout de tipo submit llamado registro, en caso de encotrarse se verifica que el input de con name nombre tenga valores.En caso de no poseer se
realizara un echo con un h2 enviando mensaje. En caso de que nombre tenga algun valor se guardan las variables nombre, muestra, horario, fecha y cantidad provenienite de los
inputs, selects del fomulario. Se realiza una sentencia switch en la variable muestras verifcando el valor, y asignandole este a la variable $nombreMuestra.
Se realiza la sentencia sql que en este caso será un SELECT para verificar si existe valors iguales en la tabla turnos, en caso de devolver un registro
se mostraá un echo con un h2 mostrando el mensahje de TURNO NO DISPONIBLE. En caso de que no se devuelva ningun registro,

 se realizaara un segunda consulta SQl que será  un INSERT, se inserta dentyro de la tabla turnos el horario, nombre, dia, cantiadd e id_turno_muestra
 en caso de que la consulta haya resultado exitosa se procede a realizar el codigo QR y por ultimo un echo conteniendo en el un h2, un p y la imagen del QR.




 PÁGINAS SECUNDARIAS

 <=========== LECTURA DE CONTENIDO JS ==========>

let button = document.querySelector('.button_sound');
        let audio = new Audio('sounds/example.mp3');
        let contador = 0;

    button.addEventListener('click',()=>{
    
        if(contador == 0){
            audio.play();
            contador = 1;
            button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-pause" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="6" y="5" width="4" height="14" rx="1" />
            <rect x="14" y="5" width="4" height="14" rx="1" />
            </svg>`;
        }else{
            audio.pause();
            contador = 0;
            button.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-play" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M7 4v16l13 -8z" />
            </svg>`;  
        }  
})

Se declara la variable button que almacenará el objeto con la clase button_sound, se delcara el objeto Audio que proviene de tal direccion
por ultimo un contador que servirá de bandera.
Se añade un evento de tipo click al button, por consiguiente una condicional que verifca elvalor de contador, en caso de ser 0 (valor inicial)
se añade el evento play() al audio, el contador pasará a tener el valor de 1 y el button tendrá en el un SVG con el simbolo de Pausa
En caso contrario de que el contador tenga el valor de 0, se ejecutará el metodo pause() en el audio y el contador pasará a tener el valor de 0,
y el button tendra el lgo de PLAY.

<========== TRAER DATOS DESDE LA BD PHP ==============>

"valor" =   Dinosaurio => 1
            Mamiferos => 2
            Geologia => 3
            Astronomia => 4
            Historia => 5

include "con_db.php";

        $sql="SELECT `nombre`, `banner` FROM `muestras` WHERE `id_muestra`=valor;";
        $result = mysqli_query($con,$sql);

        $mostrar =mysqli_fetch_array($result);
        $nombre = $mostrar['nombre'];
        $banner = $mostrar['banner'];

        echo "<img src=$banner class='img_header'>";
        echo "<h1 class='title_header'>$nombre</h1>";

Se incluye el archivo con_db.php y con el la varaible $con que posee la conexion con la BD. Por consiguiete se realizará la consulta sql
en este caso un SELECT, selecionamos nombre y direccion del banner. , por consiguiente la varaible $result que vontendra valores true (en caso de que la consulta sea exitosa) o false
Declaramos la variable $muestra, que será un array con los valores extraidos de la consulta.
La variable $nombre tendrá el valor de lo que haya almacenado en el campo nombre y la variable $banner lo que haya en el campo banner

Luego se realiza 2 echo, el primero para realizar el banner de las paginas secundarias, el segundo es para el texto qeu está en los banners.



include "con_db.php";

            $sql="SELECT `descripcion`, `img` FROM `muestras` WHERE `id_muestra`=2;";
            $result = mysqli_query($con,$sql);

            $mostrar =mysqli_fetch_array($result);
            $desc = $mostrar['descripcion'];
            $img = $mostrar['img'];

            echo "<img src=$img class='principal_img'>";
            echo "<p class='p_principal' style='font-size: .9em;'>$desc</h1>";

YA SE EXPLICARON LOS CODIGOS DE LA LINEAS 269, 270, 271, 272, 273, 274, 275, 276, 277.
Se relizan 2 echo, el primero para crear el bojeto img con el src traido desde la BD y el srgundo para crear el objeto P
que tednrá por contenido lo traído desde la BD.


GRACIAS POR LA LECTURA DE LOS CÓDIGOS USADOS PARA CREAR LA PÁGINA MUSEO PROVINCIAL DE CIENCIAS.
