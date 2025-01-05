document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.carousel-container');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    
    nextBtn.addEventListener('click', () => {
        container.scrollLeft += 300; // ajuste conforme a largura das imagens
    });
    
    prevBtn.addEventListener('click', () => {
        container.scrollLeft -= 300; // ajuste conforme a largura das imagens
    });
});