$(document).ready(($) => {
    $('.cpf').mask('000.000.000-00', {
        placeholder: "000.000.000-00"
    });
    var maskTelefone = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    }
    $('.telefone').mask(maskTelefone);
});