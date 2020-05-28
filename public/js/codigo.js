
 $.ajax({
    type: "GET",
    url: "/cuentaatras",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    async: true,
    success: function(data) {
        var res = data['fechaEmpieza'];
        var fecha= new Date(res)
        console.log("Mes "+fecha.getMonth()+1+"  Dia"+fecha.getDate()+"Hora "+fecha.getHours());

        
$(function(){    
    $('#countdown').countdown({
        timezone:+4, //zona horaria
        
        //establecemos la fecha exacta en qué termina el countdown
        year: fecha.getFullYear(),
        month: fecha.getMonth()+1,
        day: fecha.getDate(),
        hour: fecha.getHours()+1, //formato 24hr
        minute: fecha.getMinutes(),
        second: fecha.getSeconds(),
        
        //Establecemos qué haremos luego que termina el countdown
        onFinish: function () { 
            alert("Finalizó el countdown");
        } 
    });
   
});
    }

    

});


