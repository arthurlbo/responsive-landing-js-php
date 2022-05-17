/*let botao = document.querySelector('.opcoes-menu-botao');
let menuPrincipal = document.querySelector('.opcoes-menu');

botao.addEventListener('click', abreFechaMenu);

function abreFechaMenu(evento){
    menuPrincipal.classList.toggle('opcoes-menu-fechado')
}*/

$('document').ready(() => {
    //Botão do menu
    $('.opcoes-menu-botao').click(() => {
        $('.opcoes-menu').toggleClass('opcoes-menu-fechado');
    });

    //Slides dos depoimentos
    $('.depoimentos-caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true,
    });

    //Validação do formulario

    $('.formulario').validate({
        rules: {
            nome: 'required',

            email: {
                required: true,
                email: true
            },

            mensagem: 'required'
        },

        messages: {
            nome: {
                required: 'Insira seu nome para continuar.'
            },
            email: {
                required: 'Insira seu E-mail para continuar.',
                email: 'Digite um endereço de E-mail valido.'
            },
            mensagem: {
                required: 'Deixe a sua mensagem.'
            }
        }
    });
})

