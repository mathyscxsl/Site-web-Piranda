// Création d'un eventlistener qui sera une fonction à appeler quand un évènement se produira sur la cible
document.addEventListener("DOMContentLoaded", function () {

    // Déclaration d'une constante qui récupère la barre de navigation dans l'HTML
    const navbar = document.getElementById('navbar');
    // Fonction permettant de récupérer la position verticale du niveau de scroll de la page
    document.addEventListener('scroll', (e) => {
        const actualScrollValue = window.scrollY; // On récupère la valeur intitale du scroll

        // Système de repérage dans la barre de navigation avec une démarcation du titre concerné selon le chapitre de la page (couleur, taille, poids, bordure)
        const entreprise_y = (window.scrollY - 5) + document.getElementById('entreprise').getBoundingClientRect().top; // On récupère les cordonnées veticales Y de la section qui est située après la vidéo

        if (actualScrollValue === '0') { // Quand on arrive sur la page, l'opacité de la barre de navigation est pleine
            navbar.style.backgroundColor = 'rgba(34,34,34,1)';
        }

        if (actualScrollValue > entreprise_y) { // Si la valeur du scroll est strictement supérieure à la valeur du scroll ou est située la section qui succède la vidéo
            navbar.style.backgroundColor = 'rgba(34,34,34,1)'; // Alors l'opacité de la barre de navigation est pleine
        } else {
            navbar.style.backgroundColor = 'rgba(34,34,34,0.5)'; // Sinon elle ne l'est pas
        }
    });

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
