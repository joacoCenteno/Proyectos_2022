const scrollUp = document.querySelector(".scroll-up"); //selecciono el elemento con la clase scrool-up

window.addEventListener("scroll", ()=>{ // realizo la funcion, que al hacer 350px de scroll en dirección Y, se le agregará al ele,emtno scroll-up la clase active, caso contrario se le quitará
    if(this.scrollY >= 350) scrollUp.classList.add("active");
    else scrollUp.classList.remove("active");
});

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

 //Add your LocationIQ Maps Access Token here (not the API token!)
 locationiqKey = 'pk.9006d83a377ff9a04107aeac8468b1ee';
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