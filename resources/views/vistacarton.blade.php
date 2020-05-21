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
                <p class="numero">{{ $row }}</p>
                @endforeach
            </div>

            @endforeach

        </div>


        <p class="numero">{{ $numerossplit1 }}</p>


    </div>




</div>
<script type="text/javascript">
    function contador() {
        const user = json($numerossplit1);
        console.log(user);
    }
    setInterval('contador()', 2000);
</script>