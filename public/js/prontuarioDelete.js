import {getToken} from './main.js';

getToken();

function deletarProntuario(idProntuario)
{
    $.ajax({
        url: '/api/prontuario/' + idProntuario,
        type: 'DELETE',
        context: this,
        success: function(data) {
            location.reload();
        }, 
        error: function(data) {
            console.log(data);
        }
    });
}
$('.btnDelete').on('click', function() {
    let idProntuario = $(this).data('id');
    $('#btnConfirmarDeletar').attr('data-id', idProntuario);
});
$('#btnConfirmarDeletar').on('click', function() {
    let idProntuario = $('button#btnConfirmarDeletar').attr('data-id');
    deletarProntuario(idProntuario);
    $('#modalDelete').modal('toggle');
});