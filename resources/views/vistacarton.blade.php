<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        /*function changeNumber() {
            value = $('#value').text();
            $.ajax({
                type: "GET",
                url: "/numerosquehansalido",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                async: true,
                success: function(data) {
                    $('#value').text(data['data']);
                }
            });
        }*/

        function marcarnumero() {
            $.ajax({
                type: "GET",
                url: "/ultimonumero",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                async: true,
                success: function(data) {
                    var elem = document.getElementById(data['data']);
                    $('#value').text(data['data']);
                    console.log(elem);
                    if (elem != null) {
                        elem.style.background = "red";
                    }
                }
            });


        }

            $.ajax({
                type: "GET",
                url: "/numerosquehansalido",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                async: true,
                success: function(data) {
                    var res = data['data'];
                    separadores = [','];
                    textoseparado = res.split(new RegExp(separadores.join('|'), 'g'));
                    jQuery.each(textoseparado, function(i, val) {
                        var elem = document.getElementById(val);
                        if (elem != null) {
                            console.log(elem);
                            elem.style.background = "red";
                        }
                    });

                }
            });
        

        $.ajax({
            type: "GET",
            url: "/numerosquehansalido",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: true,
            success: function(data) {
                var res = data['data'];
                separadores = [','];
                textoseparado = res.split(new RegExp(separadores.join('|'), 'g'));
                jQuery.each(textoseparado, function(i, val) {
                    $("#tabla-numeros-mostrado").append("<p>" + val + "</p>")
                });

            }
        });


        //setInterval(changeNumber, 3000);
        setInterval(marcarnumero, 3000);
    });
</script>
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
    <link rel="stylesheet" href="/css/partida.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

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
        @foreach($numerossplit as $n)
        <div class=" col s6">
            <div class="carton">
                <div class="logo-bingo">
                    <img src="city-logo.png">

                </div>
                <div class="efecto">
                    <h1>.</h1>

                </div>
                <div class="numeros">
                    @foreach(explode(',', $n['numeros']) as $row)
                    <p class="numero" id="{{ $row }}">{{ $row }}</p>
                    @endforeach
                </div>


            </div>

        </div>
        @endforeach


    </div>


    <footer style="margin-bottom:;" class="page-footer">
        <div class="container">
            <div class="row">

                <div class="col s9">
                    <p class="numero"><span id="value"></span>
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
            <div class="tabla-numeros" id="tabla-numeros-mostrado">

            </div>
        </div>

        <div class="container row " style="margin-top:0%; ">

            @foreach($numerossplit as $n)
            <div class=" col s6">
                <div class="carton">
                    <div class="logo-bingo">
                        <img src="city-logo.png">

                    </div>
                    <div class="efecto">
                        <h1>.</h1>

                    </div>
                    <div class="numeros">
                        @foreach(explode(',', $n['numeros']) as $row)
                        <p class="numero" id="{{ $row }}">{{ $row }}</p>
                        @endforeach
                    </div>


                </div>

            </div>
            @endforeach




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