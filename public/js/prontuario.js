    /**
    $('#prontuarioExameCompleSim').on('click', () => {
        if($('#prontuarioExameCompleSim').prop('checked'))
        {
            $('#exameComplementar').removeAttr('disabled');
        }
    });
    $('#prontuarioExameCompleNao').on('click', () => {
        if($('#prontuarioExameCompleNao').prop('checked'))
        {
            $('#exameComplementar').prop('disabled', true);
        }
    });
    $('#prontuarioMedicamentosSim').on('click', () => {
        if($('#prontuarioMedicamentosSim').prop('checked'))
        {
            $('#medicamentos').removeAttr('disabled');
        }
    });
    $('#prontuarioMedicamentosNao').on('click', () => {
        if($('#prontuarioMedicamentosNao').prop('checked'))
        {
            $('#medicamentos').prop('disabled', true);
        }
    });
    $('#prontuarioCirurgiaSim').on('click', () => {
        if($('#prontuarioCirurgiaSim').prop('checked'))
        {
            $('#cirurgias').removeAttr('disabled');
        }
    });
    $('#prontuarioCirurgiaNao').on('click', () => {
        if($('#prontuarioCirurgiaNao').prop('checked'))
        {
            $('#cirurgias').prop('disabled', true);
        }
    });
    **/
$('#prontuarioDor').change(function() {
    var rangeValue = $(this).val();
    $('#rangeInput').html(rangeValue);
});
$(document).ready(function () {
    var value = $('#prontuarioDor').val();
    $('#rangeInput').html(value);
});