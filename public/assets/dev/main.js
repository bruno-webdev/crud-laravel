$(document).ready(function() {
    let telefone = $("#telefone");
    let options =  {
        onKeyPress: function(cep, e, field, options) {
            var masks = [' (00) 0000-00000', '(00) 0 0000-0000'];
            var mask = (cep.length>15) ? masks[1] : masks[0];
            telefone.mask(mask, options);
        }};

    telefone.mask(' (00) 0000-00000', options);
});
