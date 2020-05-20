<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="author" content="Omar Loza , Sebastian  y Victor" />
    <meta name="copyright" content="Bingo VO'S  copyright" />
    <meta name="description" content="Bingo" />
    <meta charset="UTF-8">
    <title>Ciudades</title>
    <link rel="stylesheet" type="text/css" rel="stylesheet" href="css/ciudades.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.css" />
    <link href="css/jquery.nice-number.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/jquery.nice-number.js"></script>
    <script type="text/javascript">
        $(function() {

            $('input[type="number"]').niceNumber();

        });
        </script>

    <style>
    /*numero cartones*/

    .numCartones {
    text-align: center;
    position: absolute;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: 0;

    }
    .in {
    height: 30px !important;
    width: 30px !important;
    margin: 5px !important;
    background: white !important;
    border: none !important;
    outline: none !important;
    padding: 5px !important;
    border-radius: 5px !important;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .5) !important;
    }

    .numCartones p {
    border-radius:10px;    
    background:rgba(0,0,0,.6); 
    color: #fff;
    font-size:20px;
    }

    .in:hover,
    .in:focus {
    background: rgba(73,155,234,1) !important;
    color: white !important;

    }

    .numCartones button {
        
     background: rgba(32,124,229,1)!important; /*background: rgba(32,124,229,1)*/ 

    border: none !important;
    outline: none !important;

    border-radius: 5px !important;
    color: white;
    margin: 5px !important;
    width: 40px !important;
    padding: 0 10px !important;
    font-size: 28px;
    }

    .numCartones button:hover {
        background: rgba(73,155,234,1) !important;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .5) !important;
    }
    </style>

    
</head>

<body>

    <div class="black" style=" position: relative;z-index: 3;">
        <div class="container section" style="padding: 1.5%; ">
            <a href="#" class="brand-logo orange-text text-lighten-2" style="font-size: 28px;"> Bingo</a>
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
                            <span style="background:rgba(0,0,0,.6); width:110%; margin-left: -4%; " class="name white-text">Omar Loza</span>
                        </a>
                        <a href="#">
                            <span style="background:rgba(0,0,0,.6); width:110%; margin-left: -4%; " class="email white-text">Omar@Loza.com</span>
                        </a>

                    </div>
                    <a href="#">
                        <i class="material-icons">home</i>
                        Inicio
                    </a>

                </li>
                <div class="divider"></div>
                <li>
                    <a href="#">
                        <i class="material-icons">home</i>
                        Inicio
                    </a>
                </li>
                <div class="divider"></div>
                <li>
                    <a href="#">
                        <i class="material-icons">home</i>
                        Inicio
                    </a>
                </li>

            </ul>
        </div>

    </div>




    <div id="fullPage">


        <div class="section s1">
            <h1 class="neon" data-text="New York"> New York</h1>
            <a href="#" id="btn1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Buscar Partida</a>

            <div class="numCartones">
                <p>indica el numero de cartones:</p>
                <input class="in" type="number" value="1">
            </div>


        </div>

        <div class="section s2">
            <h1 class="neon" data-text="Los Angeles"> Los Angeles</h1>
            <a href="#" id="btn1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Buscar Partida</a>
            
            <div class="numCartones">
                <p>indica el numero de cartones:</p>
                <input class="in" type="number" value="1">
            </div>

        </div>

        <div class="section s3">
            <h1 class="neon" data-text="Madrid"> Madrid</h1>
            <a href="#" id="btn1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Buscar Partida</a>
            
            <div class="numCartones">
                <p>indica el numero de cartones:</p>
                <input class="in" type="number" value="1">
            </div>

        </div>



    </div>







    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);

            var elems2 = document.querySelectorAll('select');
            var instances2 = M.FormSelect.init(elems2);

            var elems3 = document.querySelectorAll('.scrollspy');
            var instances3 = M.ScrollSpy.init(elems3, {
                scrollOffset: 0

            });

        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.js"></script>

    <script>
        new fullpage('#fullPage', {
            autoScrolling: true,
            navigation: true,

            navigationTooltips: ['New York', 'Las Vegas', 'Madrid'],
            scrollingSpeed: 1500

        });
    </script>
</body></html>