<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="author" content="Omar Loza , Sebastian  y Victor" />
    <meta name="copyright" content="Bingo VO'S  copyright" />
    <meta name="description" content="Bingo" />
    <meta charset="UTF-8">
    <title>PRODUCTOS</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/css/productos.css">

</head>

<body>
    <div class="black">
        <div class="container section" style="padding: 1.5%; ">
            <a href="#" class="logo-nav" style="font-size: 28px;"> BINGO CITIES</a>
            <a href="#" data-target="menu-side" class="right sidenav-trigger" style="margin-top: 1%;"><i class="right material-icons orange-text text-lighten-2 menu">menu</i></a>

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


                </li>
                <div class="divider"></div>
                <li>
                    <a href="/">
                        <i class="material-icons">home</i>
                        BINGO CITIES
                    </a>
                </li>
                <div class="divider"></div>
                <li>
                    <a href="#">
                        <i class="material-icons">videogame_asset</i>
                        SALAS
                    </a>
                </li>
                <div class="divider"></div>
                <li>
                    <a href="/productos">
                        <i class="material-icons">store</i>
                        PRODUCTOS
                    </a>
                </li>
                <div class="divider"></div>
                <li>
                    <a href="#">
                        <i class="material-icons">shopping_cart</i>
                        COMPRAS
                    </a>
                </li>

            </ul>
        </div>

    </div>






    <div class="container">

        <div class="row">
            <div class="input-field col s6" style="margin-top: 3%;">
                <select class=" browser-default icons ">
                    <option style="color: rgba(0,0,0,.6);" value="" disabled selected>Ordenar por...</option>
                    <option value="" class="left ">
                        <p class="orange-text text-lighten-2">Mas puntos</p>
                    </option>
                    <option value="" class="left orange-text text-lighten-2">
                        <p class="orange-text text-lighten-2">Menos puntos</p>
                    </option>
                    <option value="" class="left orange-text text-lighten-2">
                        <p class="orange-text text-lighten-2">Mas comprados</p>
                    </option>
                </select>

            </div>
            <div class="input-field col s4"></div>

            <div class="input-field col s2">
                <div class="row" id="topbarsearch">
                    <div class="input-field  orange-text text-lighten-2">
                        <i class="orange-text text-lighten-2 material-icons prefix">search</i>
                        <input type="text" placeholder="search" id="autocomplete-input" class="autocomplete orange-text text-lighten-2">
                    </div>
                </div>
            </div>
        </div>
       
        <div class="añadirproducto">
            <form method="POST" action="/nuevoproducto" enctype="multipart/form-data">

                <div class="form-group">
                    <label>nombre</label>
                    <input type="text" name="nombre" class="form-control" />
                </div>
                <div class="form-group">
                    <label>descripcion</label>
                    <input type="text" name="descripcion" class="form-control" />
                </div>
                <div class="form-group">
                    <label>precio</label>
                    <input type="number" name="precio" class="form-control" />
                </div>
                <div class="form-group">
                    <label>stock</label>
                    <input type="number" name="stock" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Imagen Producto</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create Producto</button>
                </div>
                {{ csrf_field() }}
            </form>

        </div>


        <div class="row">
            <div class="col s12">

            </div>
            @foreach($producto as $producto)

            <div class="col s4">
                <div class="card medium">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator responsive-img " src="{{$producto['url']}}" style="margin:auto; padding: 20%; margin-top:-15%;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{$producto['nombre']}}<i class="material-icons right orange-text">navigation</i></span>
                        <p><a class="orange-text" href="#">Cangear Bingo Coins </a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">{{$producto['nombre']}}<i class="material-icons right">close</i></span>
                        <p>{{$producto['descripcion']}}</p>
                        @if($producto['disposicion']==1)
                        <p>Disponible, quedan {{$producto['stock']}}</p>
                        @else
                        <p>Producto no disponible</p>
                        @endif


                    </div>
                </div>
            </div>
            @endforeach
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
    </script>
</body>

</html>