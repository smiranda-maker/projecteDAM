<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="author" content="Omar Loza , Sebastian  y Victor" />
    <meta name="copyright" content="Bingo VO'S  copyright" />
    <meta name="description" content="Bingo" />
    <meta charset="UTF-8">
    <title>Canjear</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">




    <style>
        body {
            background: black;
        }

        h1 {
            color: white;
        }

        footer {
            display: block;
            position: fixed;
            width: 100%;
            bottom: 0%;
        }

        .titulo {
            color: white;
            height: 9vh;
            position: relative;
            width: 100%;

        }


        .cont {}


        .neon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            padding: 0 20px;
            font-size: 5em;
            color: rgba(255, 255, 255, .9);
            text-shadow: 0 0 20px #2266FF;
            /*#ff005b*/

        }

        .neon:after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            padding: 0 20px;
            z-index: -1;
            color: #2266FF;
            /*#ff005b*/
            filter: blur(15px);
        }


        .neon:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #5388FF;
            /*#fe3a80*/
            z-index: -2;
            opacity: .5;
            filter: blur(40px);

        }

        .carton {
            color: aliceblue;
            background: linear-gradient(0deg, #000, #262626);
            margin: 2%;
            position: relative;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            flex-wrap: wrap;
        }



        .efecto {
            background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000);
            position: absolute;
            background-size: 400%;
            width: 100.8%;
            height: 100.8%;
            z-index: -1;
            animation: animate 30s linear infinite;

        }

        .efecto:before {
            filter: blur(20px; )
        }


        @keyframes animate {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 300% 0;
            }

            100% {
                background-position: 0 0;
            }

        }








        .logo-bingo {}


        .logo-bingo img {

            height: 100px;


        }

        .numeros {
            width: 70%;
            display: flex;
            flex-flow: row;
            flex-wrap: wrap;
            text-align: center;
            border: 1px solid aliceblue;
            margin: 2%;
        }

        .carton>.logo-bingo {
            flex: 1 1 100%;

        }

        .numeros>p {
            flex: 1 1 18%;
        }

        .numeros p {
            margin: 1%;
            ;
            padding: 1%;
            border: 1px solid aliceblue;
        }







        .tabla-numeros p:hover {
            background-color: #40f2fe;
            box-shadow: inset -2px -1px 19px 8px rgba(0, 0, 0, 0.46);
            color: white;
            text-shadow:
                0 0 5px rgba(0, 178, 255, 1),
                0 0 10px rgba(0, 178, 255, 1),
                0 0 20px rgba(0, 178, 255, 1),
                0 0 40px rgba(38, 104, 127, 1),
                0 0 80px rgba(38, 104, 127, 1),
                0 0 90px rgba(38, 104, 127, 1),
                0 0 100px rgba(38, 104, 127, 1),
                0 0 140px rgba(38, 104, 127, 1),
                0 0 180px rgba(38, 104, 127, 1);
        }




        .tabla-numeros>p {
            height: 50px;
            width: 50px;
            flex: 1 1 10%;
        }


        .carton {
            color: aliceblue;
            background: linear-gradient(0deg, #000, #262626);
            margin: 2%;
            position: relative;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            flex-wrap: wrap;
        }



        .efecto {
            background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000);
            position: absolute;
            background-size: 400%;
            width: 100.8%;
            height: 100.8%;
            z-index: -1;
            animation: animate 30s linear infinite;

        }

        .efecto:before {
            filter: blur(20px; )
        }


        @keyframes animate {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 300% 0;
            }

            100% {
                background-position: 0 0;
            }

        }








        .logo-bingo {}


        .logo-bingo img {

            height: 100px;


        }

        .numeros {
            width: 70%;
            display: flex;
            flex-flow: row;
            flex-wrap: wrap;
            text-align: center;
            border: 1px solid aliceblue;
            margin: 2%;
        }

        .carton>.logo-bingo {
            flex: 1 1 100%;

        }

        .numeros>p {
            flex: 1 1 18%;
        }

        .numeros p {
            margin: 1%;
            ;
            padding: 1%;
            border: 1px solid aliceblue;
        }



        .contenedor-all {
            margin-top: 4%;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            text-align: center;
            height: 100%;
            width: 100%;
    
            display: none;


        }


        .popup {

            justify-content: center;
            align-items: center;
            align-content: center;
            text-align: center;
            display: flex;
            flex-flow: column;
            width: 40%;
            box-shadow: -1px 6px 19px 1px rgba(0, 0, 0, 0.75);

        }

        .popup>a {
            flex: 1 1 00%;
            background: black;
            width: 100%;
        }

        .popup>.tabla-numeros {
            flex: 1 1 90%;
            background: linear-gradient(0deg, #000, #262626);
            width: 100%;
        }

        .tabla-numeros {
            justify-content: center;
            align-items: center;
            align-content: center;
            text-align: center;
            display: flex;
            flex-flow: row;
            flex-wrap: wrap;
            padding: 5%;
        }

        .tabla-numeros p {
            justify-content: center;
            align-items: center;
            align-content: center;
            text-align: center;
            background: white;
            margin: 1%;
            padding: 0;
            font-size: 25px;
            border-radius: 80px;
            border: solid transparent 2px;
            background-color: grey;
            transition-property: all;
            transition-duration: 3s;

        }





        .tabla-numeros p:hover {
            background-color: #40f2fe;
            box-shadow: inset -2px -1px 19px 8px rgba(0, 0, 0, 0.46);
            color: white;
            text-shadow:
                0 0 5px rgba(0, 178, 255, 1),
                0 0 10px rgba(0, 178, 255, 1),
                0 0 20px rgba(0, 178, 255, 1),
                0 0 40px rgba(38, 104, 127, 1),
                0 0 80px rgba(38, 104, 127, 1),
                0 0 90px rgba(38, 104, 127, 1),
                0 0 100px rgba(38, 104, 127, 1),
                0 0 140px rgba(38, 104, 127, 1),
                0 0 180px rgba(38, 104, 127, 1);
        }




        .tabla-numeros>p {
            height: 50px;
            width: 50px;
            flex: 1 1 10%;
        }


        .carton {
            color: aliceblue;
            background: linear-gradient(0deg, #000, #262626);
            margin: 2%;
            position: relative;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            flex-wrap: wrap;
        }



        .efecto {
            background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000);
            position: absolute;
            background-size: 400%;
            width: 100.8%;
            height: 100.8%;
            z-index: -1;
            animation: animate 30s linear infinite;

        }

        .efecto:before {
            filter: blur(20px; )
        }


        @keyframes animate {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 300% 0;
            }

            100% {
                background-position: 0 0;
            }

        }








        .logo-bingo {}


        .logo-bingo img {

            height: 100px;


        }

        .numeros {
            width: 70%;
            display: flex;
            flex-flow: row;
            flex-wrap: wrap;
            text-align: center;
            border: 1px solid aliceblue;
            margin: 2%;
        }

        .carton>.logo-bingo {
            flex: 1 1 100%;

        }

        .numeros>p {
            flex: 1 1 18%;
        }

        .numeros p {
            margin: 1%;
            ;
            padding: 1%;
            border: 1px solid aliceblue;
        }


        .contenedor-all {
            z-index: -2;
            top: 6%;
            width: 100%;
            height: 100%;
            position: absolute;
            background: rgba(0, 0, 0);
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: center;

        }

        .popup {
            margin-left: 1%;
            background: black;
            width: 100%;
            max-width: 1100px;
            height: 900px;
            display: flex;
            flex-flow: column;
            color: red;
            justify-content: center;
            align-content: center;
            align-items: center;
            text-align: center;
            border: solid -2px red;
        }

        .tabla-numeros {
            justify-content: center;
            align-content: center;
            align-items: center;
            display: flex;
            flex-flow: row;
            flex-wrap: wrap;
            padding: 3%;
            background: pink;
        }

        .tabla-numeros h1 {

            text-align: center;
            width: 60px;
            height: 60px;
            border: 1px solid red;
            border-radius: 20px;
            padding: 1px;
            font-size: 18px;
            color: red !important;
            background-color: black;
            background-image: url(marco.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
        }

        .tabla-numeros>h1 {

            margin: 1px;
            padding: 3%;
            flex: 1 1 10%;
        }

        .cerrar {
            background: red;
            width: 100%;
            max-width: 1204px;
            height: 60px;
            text-align: right;
            border: 4px solid blue;
        }

        .cerrar p {
            margin-top: -0%;
            margin-right: 2%;
            font-size: 30px;
        }

        /**----------------------------*/
        .carton {
            color: aliceblue;
            background: linear-gradient(0deg, #000, #262626);
            margin: 2%;
            position: relative;
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            flex-wrap: wrap;
        }



        .efecto {
            background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000);
            position: absolute;
            background-size: 400%;
            width: 100.8%;
            height: 100.8%;
            z-index: -1;
            animation: animate 30s linear infinite;

        }

        .efecto:before {
            filter: blur(20px; )
        }


        @keyframes animate {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 300% 0;
            }

            100% {
                background-position: 0 0;
            }

        }








        .logo-bingo {}


        .logo-bingo img {

            height: 100px;


        }

        .numeros {
            width: 70%;
            display: flex;
            flex-flow: row;
            flex-wrap: wrap;
            text-align: center;
            border: 1px solid aliceblue;
            margin: 2%;
        }

        .carton>.logo-bingo {
            flex: 1 1 100%;

        }

        .numeros>p {
            flex: 1 1 18%;
        }

        .numeros p {
            margin: 1%;
            ;
            padding: 1%;
            border: 1px solid aliceblue;
        }

        #bola1 {

            /* animation-name: spin;*/
            animation: mover;
            animation-duration: 10s;
            animation-iteration-count: 1;
            animation-timing-function: linear;


        }

        #bola1:before {
            margin-left: 30%;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);

            }


        }

        @keyframes mover {

            0% {
                margin-left: 0%;
                transform: rotate(0deg);
                opacity: 0%;
            }

            10% {
                margin-left: 10%;
                transform: rotate(90deg);
                opacity: 30%;
            }

            20% {
                margin-left: 20%;
                transform: rotate(180deg);
                opacity: 60%;
            }

            30% {
                margin-left: 30%;
                transform: rotate(270deg);
                opacity: 80%;
            }

            40% {
                margin-left: 40%;
                transform: rotate(360deg);
                opacity: 100%;
            }

            50% {
                margin-left: 40%;
                transform: rotate(0deg);
                opacity: 100%;
            }

            60% {
                margin-left: 40%;
                transform: rotate(0deg);
                opacity: 80%;
            }

            70% {
                margin-left: 50%;
                transform: rotate(90deg);
                opacity: 60%;
            }

            80% {
                margin-left: 60%;
                transform: rotate(180deg);
                opacity: 40%;
            }

            90% {
                margin-left: 70%;
                transform: rotate(270deg);
                opacity: 20%;
            }

            100% {
                margin-left: 80%;
                transform: rotate(360deg);
                opacity: 0%;
            }


        }

    </style>
</head>

<body>
    <div class="row">


        <div class="black col s12" style="
                        background-repeat: no-repeat;
                        background-image: url('/images/fnd3.jpg');
                        background-size: cover;">

            <div class="cont">
                <div class="titulo">

                    <h1 class="neon" data-text="Madrid"> Madrid</h1>
                    

                </div>
            </div>
        </div>

    </div>

    <div class="container row " style="margin-bottom: 8%;">

        <div class=" col s6">
            <div class="carton">
                <div class="logo-bingo">
                    <img src="city-logo.png">

                </div>
                <div class="efecto">
                    <h1>.</h1>

                </div>
                <div class="numeros">
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>


                </div>


            </div>

        </div>
        <div class=" col s6">
            <div class="carton">
                <div class="logo-bingo">
                    <img src="city-logo.png">

                </div>
                <div class="efecto">
                    <h1>.</h1>

                </div>
                <div class="numeros">
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>


                </div>


            </div>

        </div>
        <div class=" col s6">
            <div class="carton">
                <div class="logo-bingo">
                    <img src="city-logo.png">

                </div>
                <div class="efecto">
                    <h1>.</h1>

                </div>
                <div class="numeros">
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>


                </div>


            </div>

        </div>
        <div class=" col s6">
            <div class="carton">
                <div class="logo-bingo">
                    <img src="city-logo.png">

                </div>
                <div class="efecto">
                    <h1>.</h1>

                </div>
                <div class="numeros">
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>


                </div>


            </div>

        </div>

        <div class=" col s6">
            <div class="carton">
                <div class="logo-bingo">
                    <img src="city-logo.png">

                </div>
                <div class="efecto">
                    <h1>.</h1>

                </div>
                <div class="numeros">
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>
                    <p>1</p>


                </div>


            </div>

        </div>

    </div>


    <footer style="margin-bottom:;" class="page-footer">
        <div class="container">
            <div class="row">

                <div class="col s9">
                    <img src="uno.png" id="bola1" alt="" class="circle responsive-img " style="height: 75px; width: 75px;">

                </div>
                   <div class="col s2">
                    <div>Resultado bolas</div>
                     </div>  
                  <div class="col s1" style="text-align: center;">
                <a style=" padding: 5%;; color: white;text-align: center ; font-size: 60px;" href="#" class="material-icons" id="abrir" onclick="mostrar()">art_track</a>
                     </div>  
            </div>
        </div>

    </footer>

    <div class="contenedor-all" id="modal" style="display: none;">


        <div class="popup">


            <a href="#" onclick="cerrar()" class="material-icons" style="color: white; margin-top:5px; background: black; text-align: left;">arrow_back</a>


            <div class="tabla-numeros">

                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>
                <p>90</p>

            </div>


        </div>


        <div class="container row " style="margin-top:0%; ">

            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">


                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>


                    </div>


                </div>

            </div>
            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">


                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>


                    </div>


                </div>

            </div>
            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">


                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>


                    </div>


                </div>

            </div>
            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">


                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>


                    </div>


                </div>

            </div>

            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">


                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>


                    </div>


                </div>

            </div>

            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">


                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>


                    </div>


                </div>

            </div>

            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">


                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>


                    </div>


                </div>

            </div>

            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">


                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>
                        <p>1</p>


                    </div>


                </div>

            </div>


        </div>



    </div>







    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);



        });

        function cerrar() {
            document.getElementById("modal").style.display = "none";
            document.getElementById("modal").style.top = "1000px";
    document.getElementsByTagName("html")[0].style.overflow = "auto";
        }


        function mostrar() {
            document.getElementById("modal").style.display = "flex";
            document.getElementById("modal").style.top = "0px";
            document.getElementById("modal").style.zIndex = "1";
            document.getElementsByTagName("html")[0].style.overflow = "hidden";
        }

    </script>


</body>

</html>
