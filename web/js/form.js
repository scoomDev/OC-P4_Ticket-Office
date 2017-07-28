$(document).ready(function() {
    var $container = $('div#tl_corebundle_basket_tickets');
    var $index = $('input[name="_nbrPerson"]').val();

    function addForm($container, $index) {
        for (var i = 0; i < $index; i++) {          
            var template = $container.attr('data-prototype')
                .replace(/__name__label__/g, 'Visiteur ' + (i+1))
                .replace(/__name__/g, 'ticket'+ (i+1))

            var $protoype = $(template);
            $container.append($protoype);
        }
    }
    addForm($container, $index);
})