// Création d'un eventlistener qui sera une fonction à appeler quand un évènement se produira sur la cible
document.addEventListener("DOMContentLoaded", function () {

    // Déclaration d'une constante qui récupère la barre de navigation dans l'HTML
    const navbar = document.getElementById('navbar');
    // Fonction permettant de récupérer la position verticale du niveau de scroll de la page
    document.addEventListener('scroll', (e) => {
        const actualScrollValue = window.scrollY; // On récupère la valeur intitale du scroll
        if (actualScrollValue === 0) { // Instruction si le niveau de scroll est à 0 (haut de page)
            navbar.style.opacity = 1; // Alors on affiche la barre de navigation
        } else {
            navbar.style.opacity = 0; // Sinon on ne l'affiche pas
        }

        // Fonction permettant de modifier le style de la navigation quand l'utilsateur passe sa souris dessus
        navbar.onmouseover = function () { // Si l'utilisateur passe sa souris sur la barre de navigation (invisible)
            navbar.style.opacity = 1; // La barre de navigation apparaît
            navbar.style.backgroundColor = "#FFFFFF"; // On lui donne une couleur de fond blanche
        }

        // Fonction permettant de modifier le style de la navigation quand l'utilsateur ne passe pas sa souris dessus
        navbar.onmouseout = function () { // Si l'utilisateur n'a pas sa souris sur la barre de navigation
            navbar.style.opacity = 0; // La barre de navigation est invisible
        }

        // Système de repérage dans la barre de navigation avec une démarcation du titre concerné selon le chapitre de la page (couleur, taille, poids, bordure)
        const nav_p = document.getElementById('nav_p'); // On récupère l'élément correspondant à l'ID en HTML
        const nav_p_y = (window.scrollY - 5) + document.getElementById('presentation').getBoundingClientRect().top; // On récupère les cordonnées veticales Y de l'ancrage redirigant l'utilisateur à ce chapitre
        // PS : On soustrait 5 à la valeur du scroll pour laisser une petite marge

        const nav_f = document.getElementById('nav_f');
        const nav_f_y = (window.scrollY - 5) + document.getElementById('fonctionne').getBoundingClientRect().top;

        const nav_d = document.getElementById('nav_d');
        const nav_d_y = (window.scrollY - 5) + document.getElementById('deroule').getBoundingClientRect().top;

        const nav_s = document.getElementById('nav_s');
        const nav_s_y = (window.scrollY - 5) + document.getElementById('stage').getBoundingClientRect().top;

        if (actualScrollValue < nav_p_y) { // Si la valeur du scroll est strictement inférieure aux coordonées du premier ancrage
            // Alors les titres de chapitres ont leur style basique dans la barre de navigation
            nav_p.style.color = '#000000';
            nav_p.style.fontSize = '1rem';
            nav_p.style.fontWeight = '400';
            nav_p.style.borderBottom = 'none';

            nav_f.style.color = '#000000';
            nav_f.style.fontSize = '1rem';
            nav_f.style.fontWeight = '400';
            nav_f.style.borderBottom = 'none';

            nav_d.style.color = '#000000';
            nav_d.style.fontSize = '1rem';
            nav_d.style.fontWeight = '400';
            nav_d.style.borderBottom = 'none';

            nav_s.style.color = '#000000';
            nav_s.style.fontSize = '1rem';
            nav_s.style.fontWeight = '400';
            nav_s.style.borderBottom = 'none';
        }

        if (actualScrollValue >= nav_p_y && actualScrollValue < nav_f_y) { // Si la valeur du scroll est supérieure ou égale à la valeur du 
            // scroll du premier ancrage ET est strictement inférieure à la valeur du scroll du deuxième ancrage
            nav_p.style.color = '#FF4444'; // Alors on change la couleur du titre du chapitre concerné
            nav_p.style.fontSize = '1.1rem'; // On augmente la taille de la police
            nav_p.style.fontWeight = 'bold'; // Le texte est mis en gras
            nav_p.style.borderBottom = 'solid 2px #FF4444'; // Et l'on rajoute un border-bottom

            nav_f.style.color = '#000000'; // Les autres titres qui ne sont pas concernés retrouvent leur style basique
            nav_f.style.fontSize = '1rem';
            nav_f.style.fontWeight = '400';
            nav_f.style.borderBottom = 'none';

            nav_d.style.color = '#000000';
            nav_d.style.fontSize = '1rem';
            nav_d.style.fontWeight = '400';
            nav_d.style.borderBottom = 'none';

            nav_s.style.color = '#000000';
            nav_s.style.fontSize = '1rem';
            nav_s.style.fontWeight = '400';
            nav_s.style.borderBottom = 'none';
        }

        if (actualScrollValue >= nav_f_y && actualScrollValue < nav_d_y) {
            nav_f.style.color = '#FF4444';
            nav_f.style.fontSize = '1.1rem';
            nav_f.style.fontWeight = 'bold';
            nav_f.style.borderBottom = 'solid 2px #FF4444';

            nav_p.style.color = '#000000';
            nav_p.style.fontSize = '1rem';
            nav_p.style.fontWeight = '400';
            nav_p.style.borderBottom = 'none';

            nav_d.style.color = '#000000';
            nav_d.style.fontSize = '1rem';
            nav_d.style.fontWeight = '400';
            nav_d.style.borderBottom = 'none';

            nav_s.style.color = '#000000';
            nav_s.style.fontSize = '1rem';
            nav_s.style.fontWeight = '400';
            nav_s.style.borderBottom = 'none';
        }


        if (actualScrollValue >= nav_d_y && actualScrollValue < nav_s_y) {
            nav_d.style.color = '#FF4444';
            nav_d.style.fontSize = '1.1rem';
            nav_d.style.fontWeight = 'bold';
            nav_d.style.borderBottom = 'solid 2px #FF4444';

            nav_f.style.color = '#000000';
            nav_f.style.fontSize = '1rem';
            nav_f.style.fontWeight = '400';
            nav_f.style.borderBottom = 'none';

            nav_p.style.color = '#000000';
            nav_p.style.fontSize = '1rem';
            nav_p.style.fontWeight = '400';
            nav_p.style.borderBottom = 'none';

            nav_s.style.color = '#000000';
            nav_s.style.fontSize = '1rem';
            nav_s.style.fontWeight = '400';
            nav_s.style.borderBottom = 'none';
        }

        if (actualScrollValue >= nav_s_y) {
            nav_s.style.color = '#FF4444';
            nav_s.style.fontSize = '1.1rem';
            nav_s.style.fontWeight = 'bold';
            nav_s.style.borderBottom = 'solid 2px #FF4444';

            nav_f.style.color = '#000000';
            nav_f.style.fontSize = '1rem';
            nav_f.style.fontWeight = '400';
            nav_f.style.borderBottom = 'none';

            nav_p.style.color = '#000000';
            nav_p.style.fontSize = '1rem';
            nav_p.style.fontWeight = '400';
            nav_p.style.borderBottom = 'none';

            nav_d.style.color = '#000000';
            nav_d.style.fontSize = '1rem';
            nav_d.style.fontWeight = '400';
            nav_d.style.borderBottom = 'none';
        }
    });

});
