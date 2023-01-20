// Création d'un eventlistener qui sera une fonction à appeler quand un évènement se produira sur la cible
document.addEventListener("DOMContentLoaded", function () {

    // Déclaration des constantes
    const navbar = document.getElementById('navbar');
    const video = document.getElementById('video');

    // Fonction permettant de récupérer la position verticale du niveau de scroll de la page
    if (video !== null) {
        document.addEventListener('scroll', (e) => {
            const actualScrollValue = window.scrollY; // On récupère la valeur intitale du scroll

            // Système de repérage dans la barre de navigation avec une démarcation du titre concerné selon le chapitre de la page (couleur, taille, poids, bordure)
            const entreprise_y = (window.scrollY - 5) + document.getElementById('entreprise').getBoundingClientRect().top; // On récupère les cordonnées veticales Y de la section qui est située après la vidéo

            if (actualScrollValue > entreprise_y) { // Si la valeur du scroll est strictement supérieure à la valeur du scroll ou est située la section qui succède la vidéo
                navbar.style.backgroundColor = 'rgba(34,34,34,1)'; // Alors l'opacité de la barre de navigation est pleine
                navbar.style.backdropFilter = 'blur(0px)'; // Et on retire le flou sous le header
            } else {
                navbar.style.backgroundColor = 'rgba(0,0,0,0.5)'; // Si l'utilisateur reviens au sommet de la page, on remets le fond transparent
                navbar.style.backdropFilter = 'blur(2px)'; // Et le blur
            }
        });
    } else {
        navbar.style.backgroundColor = 'rgba(34,34,34,1)'; // Alors l'opacité de la barre de navigation est pleine
        navbar.style.backdropFilter = 'blur(0px)'; // Et on retire le flou sous le header
    }

    function menuBurger() {
        const menu_burger = document.getElementById('open_menu'),
            menu_slide = document.getElementsByClassName('menu_slide');

        menu_burger.addEventListener('click', (e) => {
            if (menu_slide[0].style.transform === 'translateY(0%)') {
                menu_slide[0].style.transform = 'translateY(-100%)';
            } else {
                menu_slide[0].style.transform = 'translateY(0%)';
            }
        });
    }
    menuBurger();
});
