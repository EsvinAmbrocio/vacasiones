$(function(){
    //let editar= false;
    console.log("jQuery is working");
    //$('#task-result').hide();

    //fetchTasks();

    $('#nombre').keyup(function(){
        if($('#nombre').val()){ 

            let search =$('#nombre').val();
        $.ajax({
            url:'./nombre.php',
            type:'POST',
            data:{search:search},
            success: function(response){
                
                let task=JSON.parse(response);
                //console.log(task[0].Puesto);
                console.log(response);
                //let template ='';
                /*task.forEach(task => {
                    //console.log(task);
                  template+=
                `
                <li>${task.puesto}</li>
                ` 
                ;
                });*/
                
                $('#puesto').html(task[0].Puesto);
                $('#dpi').val(task[0].dpi);
                //$('#task-result').show();
            }
        });
        }
        
    });
    $('#vacasiones').submit(function(e){
        // console.log('submiting');
        var postData={
            dpi:$('#dpi').val(),
            periodo:$('#periodo').val(),
            fechaInicial:$('#fechaInicial').val(),
            proceso:"En proceso",
            fechaFinalizacion:$('#fechaFinalizacion').val(),
        };
        let init =new Date(postData.fechaInicial);
        let fin = new Date(postData.fechaFinalizacion)
        let calcular =init.getDate() - fin.getDate();        
        let diasVacasiones= 15;
        //console.log(calcular);
        if( calcular == diasVacasiones || calcular == -15){
                let url='enviar.php';
                $.post(url,postData,function(response){
                    console.log(response);
                    //
                });
                $('#vacasiones').trigger('reset');
                $('#alerta').text("Solicitud enviada");
            }
            else{
                $('#alerta').text("No es el plazo correcto");
                $('#vacasiones').on("click", "#nombre",()=>{
                    $('#alerta').hide();
                })
            }
        e.preventDefault();
    });

})
