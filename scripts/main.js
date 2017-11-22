$(document).ready( function(){
    $('#btn-ticket').click( function(){           
        if ($('#texto_ticket').val().length > 0){
           $.ajax({
               url: 'inclui_ticket.php',
               method: 'post',
               data: $('#form_ticket').serialize(),
               success: function(data) {
                   $('#texto_ticket').val(''); //Limpar campo ao inserir mensagem
                   alert('Ticket Enviado com Sucesso!');
               }
           })
        }     
    });
    function atualizaTicket() {
        $.ajax({
            url: 'get_ticket.php',
            success: function (data) {
                $('#tickets').html(data);
            }
        });
    }
    atualizaTicket();

});

