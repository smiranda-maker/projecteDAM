<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- GOOGLE FONTS MODAK -->
    <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">

</head>
<style>
    body {
        background-image: url(images/fondocity2.jpg);
    }

    label {
        color: black;
    }

    #logo {
        font-family: 'Modak', cursive;
        border-radius: 20px;
        background-color: white;
        /* background-image: url(fondoRegister.jpg); */
    }

    #login {
        border-radius: 20px;
        background-color: white;
        opacity: .9;

    }

    #botonLog {
        font-size: 15px;
        background-color: green;
    }

    #botonReg {
        font-size: 15px;
        background-color: green;
    }


    #butonJugar {
        size: 300px;
    }

    #formulario>h3 {
        font-family: 'Modak', cursive;

    }

    #register {
        border-radius: 20px;
        background-color: whitesmoke;
        opacity: .9;
    }
</style>


<body>
    <div class="container">
        <div class="row">
            <div class="col m3">
                <div id="logo" class="card-panel">
                    <img src="images/logocity.png">
                </div>
            </div>
            <!-- LOGIN -->
            <div class="col m4 offset-m5">
                <div id="login" class="card-panel">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input placeholder="Email" type="email" name="email">
                        <input placeholder="Contraseña" type="password" name="password" id="password">
                        <button id="botonLog" type="submit" class="waves-effect waves-light btn-large">LOGIN</button>
                        <button id="botonReg" type="submit" class="waves-effect waves-light btn-large"><a style="color:white" href="http://localhost:8000/register">REGISTRARSE</a></button>
                    </form>
                </div>
            </div>

            <!-- INFORMACION DEL JUEGO  -->

            <div class="col m12">
                <div class="card-panel">
                    <ul class="collapsible">
                        <li class="active">
                            <div class="collapsible-header">EXPLICACIÓN DE PAGINA</div>
                            <div class="collapsible-body"><span>Creamos este Bingo para entretener a la gente sin necesidad de que tengan que invertir dinero real, para que de esta manera todo el mundo pueda jugar.
                                </span> <br> <br> <span> En caso de que tengas suerte y acumules muchos puntos podras ser recompensado con algunos productos a tu elección , depende de tú dedicación conseguir lo que quieras o no.ado con algunos productos a tu eleccion , depende de tu dedicacion conseguir lo que quieras o no.

                                </span> <br> <br><span> Solo buscamos que la gente se divierta y entretenga .



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
                                <span>1. Gana la persona o personas que antes tachen una fila,columna o diagonal completa (Llamado línea). Se da un premio menor y el juego continúa.<br>
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
                </div>
            </div>

        </div>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');

            var instances = M.Collapsible.init(elems);
        });
    </script>

</body>


</html>