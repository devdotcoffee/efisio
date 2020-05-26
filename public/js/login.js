$('#collapseFisio').on('show.bs.collapse', () => {
    $('#collapsePaciente').collapse('hide');
});
$('#collapsePaciente').on('show.bs.collapse', () => {
    $('#collapseFisio').collapse('hide');
});
$(document).ready(function(){
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
});