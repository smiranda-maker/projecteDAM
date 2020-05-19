<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- GOOGLE FONTS MODAK -->
    <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">

</head>
<style>
    body{
        background-image: url(images/fondocity2.jpg);
    }
    label{
        color: black;
    }

    #logo{
        font-family: 'Modak', cursive;
        border-radius: 20px;
        background-color: white;
        /* background-image: url(fondoRegister.jpg); */
    }

    #login{
        border-radius: 20px;
        background-color: white;
        opacity: .9;

    }
    #botonLog{
        font-size: 15px;
        background-color: green;
    }

    #botonReg{
        font-size: 15px;
        background-color: green;
    }


    #butonJugar{
        size: 300px;
    }

    #formulario>h3{
        font-family: 'Modak', cursive;
        
    }

    #register{
        border-radius: 20px;
        background-color:whitesmoke;
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
            <div  class="col m4 offset-m5">
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
					<div  class="card-panel">
						<ul class="collapsible">
						<li>
							<div class="collapsible-header">EXPLICACIÓN DE PAGINA</div>
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