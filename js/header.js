// Création d'un eventlistener qui sera une fonction à appeler quand un évènement se produira sur la cible
document.addEventListener("DOMContentLoaded", function () {

    // Déclaration d'une constante qui récupère la barre de navigation dans l'HTML
    const navbar = document.getElementById('navbar');
    // Fonction permettant de récupérer la position verticale du niveau de scroll de la page
    document.addEventListener('scroll', (e) => {
        const actualScrollValue = window.scrollY; // On récupère la valeur intitale du scroll
        if (actualScrollValue === 0) { // Instruction si le niveau de scroll est à 0 (haut de page)
            navbar.style.position = 'static'; // Alors on affiche la barre de navigation
        } else {
            navbar.style.position = 'fixed'; // Sinon on ne l'affiche pas
        }
    });
});