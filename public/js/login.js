$(document).ready(($) => {
    $('.cpf').mask('000.000.000-00', {
        placeholder: "000.000.000-00"
    });
});
$('#collapseFisio').on('show.bs.collapse', () => {
    $('#collapsePaciente').collapse('hide');
});
$('#collapsePaciente').on('show.bs.collapse', () => {
    $('#collapseFisio').collapse('hide');
});
$(document).ready(function(){
    setTimeout(function() {
        $(".alert").alert('close');
    }, 1500);
});