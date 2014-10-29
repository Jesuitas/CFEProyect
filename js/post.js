$(document).bind('deviceready', function(){
    $(function(){
        $('form').submit(function(){
            var data = $(this).parent().attr('data-datos-id');
            var postData = $(this).serialize();
			
            $.ajax({
                type: 'POST',
                data: postData+'&lid='+dataID,
                // cargamos la url del servidor externo
                url: 'http://cfeproyect.comyr.com/enviar.php',
                success: function(data){
                    console.log(data);
                    $('#combo').val('');
                    $('#nombre').val('');
                    alert('Tu comentario fue agregado');
                },
                error: function(data){
                    console.log(data);
                    alert('Ocurrio un error al enviar tu comentario');
                }
            });
            return false;
        });
    });
});