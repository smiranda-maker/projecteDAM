<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="author" content="Omar Loza , Sebastian  y Victor" />
    <meta name="copyright" content="Bingo VO'S  copyright" />
    <meta name="description" content="Bingo" />
    <meta charset="UTF-8">
    <title>BINGO CITIES</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/footer.css">


</head>

<body>
    <div class="black">
        <div class="container section" style="padding: 1.5%; ">
            <a href="/welcome" class="logo-nav" style="font-size: 28px;"> BINGO CITIES</a>
            <a href="#" data-target="menu-side" class="right sidenav-trigger" style="margin-top: 1%;"><i class="right material-icons orange-text text-lighten-2">menu</i></a>

            <ul class="sidenav" id="menu-side">

                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="bingo-online.png" class="responsive-img" alt="">
                        </div>
                        <a href="#">
                            <img src="icn.png" alt="" class="circle">
                        </a>
                        <a href="#">
                            <span style="background:rgba(0,0,0,.6); width:110%; margin-left: -4%; " class="name white-text">{{ auth()->user()->nombre }}</span>
                        </a>

                        <a href="#">
                            <span style="background:rgba(0,0,0,.6); width:110%; margin-left: -4%; " class="email white-text">{{ auth()->user()->email }}</span>
                        </a>
                        <a href="#">
                            <span style="background:rgba(0,0,0,.6); width:110%; margin-left: -4%; " class="email white-text">{{ auth()->user()->fichas }}</span>
                        </a>

                    </div>


                </li>
                <div class="divider"></div>
                <li>
                    <a href="/welcome">
                        <i class="material-icons">home</i>
                        BINGO CITIES
                    </a>
                </li>
                <div class="divider"></div>
                <li>
                    <a href="/ciudades">
                        <i class="material-icons">videogame_asset</i>
                        SALAS
                    </a>
                </li>
                <div class="divider"></div>
                <li>
                    <a href="/todosproductos">
                        <i class="material-icons">store</i>
                        PRODUCTOS
                    </a>
                </li>
                <div class="divider"></div>
                <li>
                    <a href="/productoscomprados">
                        <i class="material-icons">shopping_cart</i>
                        MIS COMPRAS
                    </a>
                </li>
                @if (Auth::check())

                <div class="divider"></div>
                <li>
                    <a href="/logout">
                        <i class="material-icons">shopping_cart</i>
                        LOGOUt
                    </a>
                </li>
                @endif


            </ul>
        </div>

    </div>

    <div class="carousel carousel-slider center">

        <div class="carousel-item red white-text" style="background-image: url('/images/las-vegsa.jpg') " href="#one!">
            <img src="/images/bingo-title.png" alt="logo" style="width: 20%">
            <p class="lasvegas">LAS VEGAS</p>
        </div>
        <div class="carousel-item amber white-text" style="background-image: url('/images/dubai.jpeg') " href="#two!">
            <img src="/images/bingo-title.png" alt="logo" style="width: 20%">
            <p class="dubai">DUBAI</p>
        </div>
        <div class="carousel-item madrid" style="background-image: url('/images/madrid.jpg') " href="#three!">
            <img src="/images/bingo-title.png" alt="logo" style="width: 20%">
            <p class="madrid">MADRID</p>
        </div>

    </div>

    <ul class="collapsible">
        <li class="active">
            <div class="collapsible-header" style="margin-left: 100px;">EXPLICACIÓN DE PAGINA</div>
            <div class="collapsible-body"><span>Creamos este Bingo para entretener a la gente sin necesidad de que tengan que invertir dinero real, para que de esta manera todo el mundo pueda jugar.
            </span> <br>  <br> <span>  En caso de que tengas suerte y acumules muchos puntos podras ser recompensado con algunos productos a tu elección , depende de tú dedicación conseguir lo que quieras o no.ado con algunos productos a tu eleccion , depende de tu dedicacion conseguir lo que quieras o no.
            
            </span>  <br> <br><span> Solo buscamos que la gente se divierta y entretenga . 

           

</span></div>
        </li>
        <li>
            <div class="collapsible-header">COMO SE JUEGA</div>
            <div class="collapsible-body">
            <h5>Introducción</h5><br>
            
            <span>En el bingo se extraen al azar un a una hasta 99 bolas numeradas del 1 al 99. 
            Puede haber un número ilimitado de jugadores, cada uno con al menos un cartón. Cada cartón contiene 25 números de los 99 posibles. 
            Conforme se van generando los numeros al azar, los numeros se tacharan del carton</span><br>
           

        <h5>Dos tipos de ganadores en cada jugada</h5><br>
        <span>1. Gana la persona o personas que antes tachen una fila completa (Llamado línea). Se da un premio menor y el juego continúa.<br>
        2. Gana la persona o personas que antes tachen el cartón completo (Llamado bingo). Se da un premio mayor y el juego termina.</span>
            
            
            </div>
        </li>
        <li>
            <div class="collapsible-header">PREMIOS</div>
            <div class="collapsible-body">
            <h5>Bingo Coins</h5><br>
            
            <span>Nuestro sistema de juego permite que cada jugador pueda acumular Bingo Coins ,los cuales se podrán cambiar por productos.
            Los Bingo Coins son necesarios tanto para comprar cartones y entrar en partidas como para canjearlos por productos.
            
             </span><br>

            <h5>Como cajear los productos</h5><br>
            
            <span>Para canjear los Bingo Coins por productos solo tendrás que ir a el apartado de productos y seleccionar el que quieras , te mandaremos un correo con un código para canjear tu producto en otras tiendas.</span>
            
            </div>
        </li>
        <li>
            <div class="collapsible-header">SALA DE JUEGOS</div>
            <div class="collapsible-body">
            
            <h5>Ciudades</h5><br>
            
            <span> En Nuestro Bingo cada ciudad tiene un valor diferente por ende las recompensas son mayores, es asi que dejamos a vuestra eleccion 
            en que "ciudad" quereis jugar. <br>

            "ciudad": cada sala esta basada en una ciudad como tematica.
            
             </span><br>
            
            </div>
        </li>
    </ul>


    <div class="container">

        <div class="row">

            <div class="input-field col s4"></div>




            <div class="row">

                <div class="col s12">


                </div>




            </div>

        </div>

     </div>
     <footer class="page-footer" style="background: linear-gradient(0deg, #000, #262626); bot:0%; position :relative;">
        <div class="container">
            <div class="row">
                <div class="col l6 s12" id="fott">



                    <div class="footer-condiciones">
                        <p>Ayuda</p>
                        <a href="#">Instrucciones</a>
                        <a href="#">Soporte</a>
                        <a href="#">Empezar a jugar</a>
                        <a href="#">Normas de la comunidad</a>
                    </div>

                    <div class="footer-info">
                        <p>Información</p>
                        <a href="#">Empleo</a>
                        <a href="#">¿Quienes somos?</a>

                    </div>

                    <div class="contenido-footer">
                        <p>Terminos y condiciones</p>
                        <a href="#">Condiciones legales</a>
                        <a href="#">Politica de privacidad</a>
                        <a href="#">Afiliados</a>

                    </div>

                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contactanos</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!"><img  id="icono" src="images/insta.png" alt="instagram" class="circle responsive-img" ></a> 
                            <a class="grey-text text-lighten-3" href="#!"><img id="icono" src="images/face.png" alt="facebook" class="circle responsive-img" ></a>
                            <a class="grey-text text-lighten-3" href="#!"><img id="icono"  src="images/youtube.png" alt="youtube" class="circle responsive-img" ></a> 
                            <a class="grey-text text-lighten-3" href="#!"><img  id="icono" src="images/twit.png" alt="twitter" class="circle responsive-img" ></a>
                            <a class="grey-text text-lighten-3" href="#!"><img id="icono"  src="images/goo.png" alt="google+" class="circle responsive-img" ></a> 
                        
                        
                        
                        
                        
                        </li>
              


                    </ul>
                </div>
            </div>
        </div>
        
        <div class="footer-copyright" style="    background-color: #070606;">
            <div class="container">
                © 2020 Copyright Victor, Sebastian y Omar
                <a class="grey-text text-lighten-4 right" href="#!">Más información</a>
            </div>
        </div>
    </footer>


        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                var elems = document.querySelectorAll('.sidenav');
                var instances = M.Sidenav.init(elems);

                var elems = document.querySelectorAll('select');
                var instances = M.FormSelect.init(elems);

            });


            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.carousel');
                var instances = M.Carousel.init(elems);
            });


            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.collapsible');

                var instances = M.Collapsible.init(elems);
            });
        </script>
</body>

</html>