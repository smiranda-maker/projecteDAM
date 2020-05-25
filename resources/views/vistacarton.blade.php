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
                    $('#value').text(data['data']); 
                }
            });
        }
       
        setInterval(changeNumber, 3000);
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
                <p class="numero{{ $row }}">{{ $row }}</p>
                @endforeach
            </div>

            @endforeach

        </div>


        <p class="numero"><span id="value"></span>  
    </div>
</div>

