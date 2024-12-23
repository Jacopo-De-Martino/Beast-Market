// Assicurati che il DOM sia completamente caricato
document.addEventListener("DOMContentLoaded", function() {
    const backToTopButton = document.getElementById('back-to-top');
    const navbarHeight = document.querySelector('.navbar').offsetHeight;

    // Funzione per mostrare o nascondere il bottone
    function toggleButton() {
        if (window.scrollY > navbarHeight) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    }

    // Funzione per scrollare verso l'alto
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Aggiungi l'event listener per lo scroll
    window.addEventListener('scroll', toggleButton);

    // Aggiungi l'event listener per il click
    backToTopButton.addEventListener('click', scrollToTop);
});
