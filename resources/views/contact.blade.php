<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
   <h1>Formulario</h1>

        <form method="POST" action ="{{route('contact')}}">
            @csrf
            <input name="name" placeholder="Nombre">
            {{ $errors->first('name')}}
            <input type="email" name="email" placeholder="Email">
            {{ $errors->first('name')}}
            <input name="subject" placeholder="Asunto">

           

            <textarea name="Content" placeholder="contenido"></textarea>
            <button>Enviar</button>
        </from>
 


    
</body>
</html>