import {getToken} from './main.js';

getToken();

function deletaEvolucao(idEvolucao)
{
    $.ajax({
        url: '/api/evolucao/' + idEvolucao,
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
    let idEvolucao = $(this).data('id');
    $('#btnDeleteConfirm').attr('data-id', idEvolucao);
});
$('#btnDeleteConfirm').on('click', function() {
    let idEvolucao = $('button#btnDeleteConfirm').attr('data-id');
    deletaEvolucao(idEvolucao);
    $('#closeModalDelete').click(); 
});