<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        function changeNumber() {
            value = $('#value').text();
            $.ajax({
                type: "GET",
                url: "/numerosquehansalido",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                async: true,
                success: function(data) {
<<<<<<< HEAD
                    $('#value').text(data['data']); 
=======
                     $('#value').text(data['data']);
>>>>>>> 0f16444441e3a6faf3aa268f5885a522134a9c1e
                }
            });
        }

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
                    elem.style.background = "red";
                }
            });
        }

        function separarnumeros() {
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
        }

        setInterval(changeNumber, 3000);
        setInterval(separarnumeros, 3000);
        setInterval(marcarnumero, 3000);
    });
</script>
<style>
    .cartones {
        width: 70%;
        margin-left: 15%;
        display: grid;
        grid-template-columns: 30% 30%;
    }

    .numeros {

        display: flex;
    }

    .restantes {
        background-color: green;
    }

    .numero {
        padding: 2%;
        border: 1px solid black;

    }

    .filas {
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        margin-left: 5%;
        border: solid 1px black;
        width: 30%;

    }
</style>

    
<div class="cartones">

    <div class="carton">
        <div class="restantes">
            <p>te quedan 7 numeros</p>
        </div>
        <div class="numeros">
            @foreach($numerossplit as $n)
            <div class="filas">

                @foreach(explode(',', $n['numeros']) as $row)
<<<<<<< HEAD
                <p class="numero{{ $row }}">{{ $row }}</p>
=======
                <p class="numero" id="{{ $row }}">{{ $row }}</p>
>>>>>>> 0f16444441e3a6faf3aa268f5885a522134a9c1e
                @endforeach
            </div>

            @endforeach

        </div>


        <p class="numero"><span id="value"></span>
    </div>
</div>