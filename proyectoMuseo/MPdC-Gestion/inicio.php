<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museo Provincial de Ciencias</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
</head>
<body>
   <nav class="nav" id="nav">
    <div class="contenedor_logo">
        <img src="img/logo.png" alt="" class="nav_img">
    </div>
    <div class="turno_contenedor">
      <a href="index.php" class="link_turno">Cerrar Sesón</a>
  </div>
   </nav>


   <header class="header">
    <div id="carouselExampleControls header_container" class="carousel slide" data-bs-ride="carousel">
        <div class="text">
            <div class="text_one"> <h1>Bienvenidos al</h1> </div>
            <div class="text_two"> <h1>Museo Provincial de Ciencias</h1> </div>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" id="contenedor_img">
            <img src="img/portada4.jpg" class="d-block w-100 h-10" id="img" alt="...">
          </div>
          <div class="carousel-item" id="contenedor_img">
            <img src="img/portada2.jpg" class="d-block w-100" id="img" alt="...">
          </div>
          <div class="carousel-item" id="contenedor_img">
            <img src="img/portada3.jpg" class="d-block w-100" id="img" alt="...">
          </div>
        </div>
      </div>
    </header>

    <main class="main">
        <h2 class="color">Un Lugar Para Todos</h2>
        <p>El Museo Provincial de Ciencias fue inaugurado en el año 2010. Con el proposito de contar con atracciones para toda la familia.</p>
        <p>A lo largo de nuestra trayectoria, nos adaptamos a los cambios en la sociedad, es por eso, que les brindamos nuestra mas avanzada tecnología, como lo son nuestros beepcons.</p>

        <h3 class="color">¿Qué es un BeepCon?</h3>
        <p>De manera resumida, esto hace referencia a puntos inteligentes, donde personas con dificultades visuales, pueden interactuar con nuestras atracciones. Gracias a un sistema de voz adaptado.</p>
    </main>

    <section class="oferta">
        <div class="oferta_title_container"><h2 class="color">¿Que Ofrecemos?</h2></div>

        <div class="oferta_logos">
            <ul class="ul_oferta">
                <li class="li_oferta"> <a href="dino.php"> <img src="https://th.bing.com/th/id/OIP.225XmADIFjbpPCmWVGw-fgHaHa?pid=ImgDet&rs=1" class="oferta_img" alt="" title="Dinosaurios"></a></li>
                <li class="li_oferta"> <a href="mamiferos.php"> <img src="https://static.vecteezy.com/system/resources/previews/000/569/805/original/vector-animal-paw-print-icon.jpg" class="oferta_img" title="Mamíferos" alt=""></a></li>
                <li class="li_oferta"> <a href="geologia.php"><img src="https://th.bing.com/th/id/OIP.1XZrSG_hfk_AxhpXnFvR7QHaE7?pid=ImgDet&rs=1" class="oferta_img earth" title="Geología" alt=""></a> </li>
                <li class="li_oferta"> <a href="astronomia.php"><img src="https://th.bing.com/th/id/OIP.Z64QqbUH-XArwfIunzJYIgHaHa?pid=ImgDet&rs=1" class="oferta_img" title="Astronomía" alt=""></a> </li>
                <li class="li_oferta"> <a href="historia.php"> <img src="https://th.bing.com/th/id/R.6c67b9fb2a21069b0eb32052a6b53e82?rik=zP4%2b5tbMgmNI0g&pid=ImgRaw&r=0" title="Historia" class="oferta_img" alt=""></a></li>
                
            </ul>
        </div>
        
    </section>

    <section class="faq">
        <div class="faq_title color"><h2>Preguntas y Respuestas</h2></div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  ¿Qué horarios tienen?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Estamos abiertos de Lunes a Sábados. Desde horas 08:00a.m. hasta las 21:00p.m. Te esperamos!!! ;).
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  ¿Cómo saco turno?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Para sacar turnos es muy sencillo solamente ingresas a este <a href="#">link</a>. Una vez seleccionado la atracción, horario y día, se te ofrecerá un código QR, que te servirá para ingresar.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  ¿Realizan excursiones para instituciones escolares?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Por supuesto, nuestro museo y guías están perfectamente preparados para recibir este tipo de público.
                </div>
              </div>
            </div>
          </div>
    </section>

    <section class="comentarios">
        <h2 class="comentarios_title color">¿Visitaste el Museo? Déjanos tu comentario</h2>
        <div class="comentarios_contenedor">
            <input type="text" class="input_asunto" placeholder="Escribe tu asunto general">
            <input type="text" class="text_opinion" placeholder="Escribe tu descripcion">
            <button class="button_comentario">Subir</button>
        </div> 
        <div class="comentarios_result">
            
            
        </div>
    </section>


    <section class="contacto">
        <h2 class="contacto_title color">Contáctanos</h2>

        <div class="contacto_container">
          <div class="social_media">
            <ul class="ul_contacto">       
                <li class="li_contacto"><a href="https://www.facebook.com/people/Museo-Provincial-de-Ciencias/100086006853854/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                  </svg></a> <p> Museo Provincial de Ciencias</p></li>
                <li class="li_contacto"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-vk" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" />
                    <path d="M20 6c-1 2 -3 5 -5 6h-3" />
                    <path d="M20 18c-1 -2 -3 -5 -5 -6" />
                  </svg> <p> Museo Provincial de Ciencias</p></li>
                <li class="li_contacto"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                  </svg> <p>@MuseoProvCiencias</p> </li>
            </ul>
        </div>

        <div id="map"></div>
        </div>
        
    </section>

    <footer class="footer">
        Museo Provincial De Ciencias © Todos los Derechos Reservados 2022
    </footer>

    <div class="scroll-up">
        <a href="#nav"><img src="img/circle-arrow-up-solid.svg" class="img-scroll" alt=""></a>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body> 
</html>