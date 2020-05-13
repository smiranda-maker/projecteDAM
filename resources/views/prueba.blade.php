<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
   </head>
<body>

<style>
    body{
    background-image: url(fondoRegister.jpg);

}
.content{
    height: 600px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    

}

.content>div{
    /* border:3px solid black; */
    /* background-color: brown; */
}

.logo{
    text-align: center;
}

.login{
    margin: auto;
    padding: 2em;
    text-align: center;
    background-color: black;
}



.register{
    width: auto;
    grid-column: 1/3;
}
.register h2{
    color: whitesmoke;
    text-align: center;
    font-size: 40px;
}
.register h3{
    text-align: center;
    font-size: 25px;
}

.register>form
{
    margin:5px auto;
    background-color: #40DFD6;   
    border: 10px solid black;
    width: 30%;
    padding: 1em;

}

.register form button{
    text-align: center;
}

.register input{
    width: 90%;
    padding: .7em;
    border-radius: 7px;
    color: white;
}

.register label{
    font-size: 19px;

    text-align: left;
}

/* .register>form{
    width: auto;
    border:10px solid black;
    padding: 1em;
} */




.informacion{
    margin: auto;
    grid-column: 1/3;
    border: 5px solid black;
}

.informacion>button{
    background-color: #5DDF4E;
    font-size: 20px;
    width:200px;
    height:100px;
}

.explicacion{
    width: 800px;
}
</style>

    
<div class="content">
        <div class="logo">
            <img src="logo.png" width="200px" height="100px">
        </div>

        <div class="login">
            <form action="">
                <!-- <label for="nickname">Nickname:</label> -->
                <input placeholder="Nickname" type="text" name="nickname">
                <!-- <label for="">Password</label> -->
                <input placeholder="Contraseña" type="password" name="password">
                <button type="submit">LOGIN</button>
            </form>
        </div>


        <div class="register">
            <h2>BINGO CITIES</h2>

                <form action="">
                    <h3>Registrarse</h3>

                    <p>
                        <label for="correo">Introduce tu correo:</label><br>
                        <input type="email">
                    </p>
    
                    <p>
                        <label for="nickname">Escoge un nombre de usuario:</label><br>
                        <input type="text" name="nickname">
                    </p>
               
                    <p>
                        <label for="password">Escoge una contraseña:</label><br>
                        <input type="password" name="password">
                    </p>
    
                    <p>
                        <label for="">Repetir contraseña:</label><br>
                        <input type="password" name="password">
                    </p>
                    
                    <button type="submit">JUGAR</button>
                   
    
                   
                </form>
            
        </div>




        <div class="informacion">
            <button>CÓMO JUGAR</button>
            <button>REGALOS</button>
            <button>RANK</button>
            <button>AYUDA</button>
            <div class="explicacion">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore repellat laudantium adipisci cupiditate optio assumenda, eaque deleniti magni officiis ipsa? Repellat optio quibusdam nihil et omnis quisquam blanditiis assumenda ea.
                </p>
            </div>
            
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>