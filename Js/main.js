let botao = document.querySelector('.opcoes-menu-botao');
let menuPrincipal = document.querySelector('.opcoes-menu');

botao.addEventListener('click', abreFechaMenu);

function abreFechaMenu(evento){
    menuPrincipal.classList.toggle('opcoes-menu-fechado')
}
