$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});

function getPacienteInput()
{
    var data = new Date();
    var data_cadastro = 
        data.getFullYear().toString() + '-' + 
        data.getMonth().toString() + '-' + 
        data.getDate().toString();

    var paciente = {
        nome: $('#pacienteNome').val(),
        cpf: $('#pacienteCpf').val(),
        email: $('#pacienteEmail').val(),
        nascimento: $('#pacienteNascimento').val(),
        telefone: $('#pacienteTelefone').val(),
        sexo: $('#pacienteSexo').val(),
        cidade: $('#pacienteCidade').val(),
        bairro: $('#pacienteBairro').val(),
        endereco_residencial: $('#pacienteEnderecoRes').val(),
        endereco_comercial: $('#pacienteEnderecoComer').val(),
        estado_civil: $('#pacienteEstadoCivil').val(),
        naturalidade: $('#pacienteNaturalidade').val(),
        profissao: $('#pacienteProfissao').val(),
        data_cadastro: data_cadastro
    }
    
    return paciente
}
function salvaPaciente(paciente)
{
    $.ajax({
        url: '/api/pacientes',
        type: 'POST',
        data: paciente,
        dataType: 'json',
        success: function (data) {
            if (data.success)
            {
                console.log(data);
                window.location.replace('/fisio/detalhe-paciente/' + data.success);  
            }
            if (data.errors) 
            {
                $('#alertError').removeClass('d-none').addClass('d-block');
            } 
        },
        error: function (data) {
            console.log('error');
        }
    });
}
function deletarLinha(idPaciente)
{
    idPaciente = parseInt(idPaciente);
    var rows = $('#tabelaPaciente>tbody>tr');
    var row = rows.filter(function(i, element) {
        return element.cells[0].textContent == idPaciente
    });
    if (row) {
        row.remove();
    }
    if ($('#tabelaPaciente>tbody>tr').length == 0) {
        location.reload();
    }
}
function deletarPaciente(idPaciente)
{
    $.ajax({
        url: '/api/paciente/' + idPaciente,
        type: 'DELETE',
        context: this,
        success: function(data) {
            deletarLinha(idPaciente);
        }, 
        error: function(data) {
            console.log(data);
        }
    });
}
$('.btnDelete').on('click', function() {
    let idPaciente = $(this).data('id');
    $('#btnConfirmarDeletar').attr('data-id', idPaciente);
});
$('#btnConfirmarDeletar').on('click', function() {
    let idPaciente = $('button#btnConfirmarDeletar').attr('data-id');
    deletarPaciente(idPaciente);
    $('#closeModalDelete').click(); 
});
$('#formPaciente').submit((event) => {
    event.preventDefault();
    $('#alertError').removeClass('d-block').addClass('d-none');
    salvaPaciente(getPacienteInput());
});