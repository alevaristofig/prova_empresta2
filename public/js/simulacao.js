$(document).ready(function(){
    $.ajax({
        method: 'get',
        url: '/simulacao/instituicao',
        data: '',
        beforeSend: function()
        {
            //$("#loader").css('visibility','visible');
        },
        success: function(resp)
        {  
            let obj = jQuery.parseJSON(resp);
            
            for(var aux in obj)
            {
                $("#instituicao").append(new Option(obj[aux].valor, obj[aux].chave));              
            }
        },
        complete: function()
        {           
           $.ajax({
                method: 'get',
                url: '/simulacao/convenio',
                data: '',
                beforeSend: function()
                {
                    //$("#loader").css('visibility','visible');
                },
                success: function(resp)
                {  
                    let obj = jQuery.parseJSON(resp);

                    for(var aux in obj)
                    {
                        $("#convenio").append(new Option(obj[aux].valor, obj[aux].chave));              
                    }
                },
                complete: function()
                {           
                   // $("#loader").css('visibility','hidden');                        
                }
            });                       
        }
    });
    
    $('#instituicao').change(function(){
        $('#convenio').removeAttr('disabled');
    });
    
    $('#convenio').change(function(){
         $.ajax({
                method: 'get',
                url: '/simulacao/parcelas/'+$('#instituicao').val()+'/'+$('#convenio').val(),
                data: '',
                beforeSend: function()
                {
                    //$("#loader").css('visibility','visible');
                },
                success: function(resp)
                {  
                    let obj = jQuery.parseJSON(resp);
                    let id;

                    for(var aux in obj)
                    {
                        id = obj[aux].id+'|'+obj[aux].coeficiente+'|'+obj[aux].taxajuros;
                        $("#parcela").append(new Option(obj[aux].parcelas, id)); 
                        $("#parcela").removeAttr('disabled');
                    }
                },
                complete: function()
                {           
                   // $("#loader").css('visibility','hidden');                        
                }
            });
    });
});

