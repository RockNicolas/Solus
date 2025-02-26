let menuOpen = false; // Flag para controlar se o menu está aberto

function toggleMenu(event) {
    // Alterna a classe "clicked" na imagem para rotação
    document.getElementById('logo').classList.toggle('clicked');
    
    // Seleciona o menu dropdown
    const menu = document.querySelector('.dropdown-menu');
    
    // Alterna a classe "show" para mostrar ou ocultar o menu
    menu.classList.toggle('show');
    
    // Se o menu for aberto, marca o menu como aberto
    menuOpen = !menuOpen;

    // Previne que o menu feche automaticamente ao clicar dentro do logo ou do menu
    event.stopPropagation();
}

// Adiciona um ouvinte de evento para fechar o menu caso o usuário clique fora do menu ou logo
document.addEventListener('click', function(event) {
    const menu = document.querySelector('.dropdown-menu');
    const logoContainer = document.querySelector('.logo-container');

    // Se o menu estiver aberto e o clique não for no logo nem no menu, fecha o menu
    if (menuOpen && !logoContainer.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.remove('show');
        document.getElementById('logo').classList.remove('clicked');
        menuOpen = false; // Marca o menu como fechado
    }
});
