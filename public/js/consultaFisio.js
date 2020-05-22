$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
    }
});
function deletaLinha(idFisio)
{
    idFisio = parseInt(idFisio);
    var rows = $('#tableFisio>tbody>tr');
    var row = rows.filter(function(i, element) {
        return element.cells[0].textContent == idFisio
    });
    if (row) {
        row.remove();
    }
    if ($('#tableFisio>tbody>tr').length == 0) {
        location.reload();
    }
}
function deletaFisio(idFisio)
{
    $.ajax({
        url: '/api/fisio/' + idFisio,
        type: 'DELETE',
        context: this,
        success: function(data) {
            deletaLinha(idFisio);
        }, 
        error: function(data) {
            console.log(data);
        }
    });
}
$('.btnDelete').on('click', function() {
    let idFisio = $(this).data('id');
    $('#btnDeleteConfirm').attr('data-id', idFisio);
});
$('#btnDeleteConfirm').on('click', function() {
    let idFisio = $('button#btnDeleteConfirm').attr('data-id');
    deletaFisio(idFisio);
    $('#closeModalDelete').click(); 
});