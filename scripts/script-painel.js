document.addEventListener('DOMContentLoaded', () => {
    const inputComand = document.getElementById('inputComand');
    const estatisticas = document.getElementById('estatisticas');
    const palavraMagica = "status";  // Palavra específica que você quer testar

    inputComand.addEventListener('keyup', (event) => {
        if (event.key === 'Enter') {
            const inputValue = inputComand.value.trim().toLowerCase();
            if (inputValue === palavraMagica) {
                // Gerar posições aleatórias dentro da janela do navegador
                const randomX = Math.random() * (window.innerWidth - estatisticas.offsetWidth);
                const randomY = Math.random() * (window.innerHeight - estatisticas.offsetHeight);

                // Posicionar a div e mostrar
                estatisticas.style.left = `${randomX}px`;
                estatisticas.style.top = `${randomY}px`;
                estatisticas.style.display = 'block';
            }
        }
    });
});