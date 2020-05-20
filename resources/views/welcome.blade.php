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
        <li>
            <div class="collapsible-header" style="margin-left: 100px;">EXPLICACIÓN DE PAGINA</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
            <div class="collapsible-header">COMO SE JUEGA</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
            <div class="collapsible-header">PREMIOS</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
        </li>
        <li>
            <div class="collapsible-header">SALA DE JUEGOS</div>
            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
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

        <footer class="page-footer" style="background-color: #272626;">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Contenido</h5>
                        <p class="grey-text text-lighten-4">Aqui va algo xD</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Contactanos</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Icono Facebook</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Icono Facebook</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Icono Facebook</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Icono Facebook</a></li>
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