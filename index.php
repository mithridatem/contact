<?php
    //imports
    include './utils/bddConnect.php';
    include './utils/functions.php';
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    
    //routeur
    switch ($path) {
        //cas route vide (accueil)
        case '/contact/':
            include './controller/ctrl_add_contact.php';
            break;
        //cas route ajouter un formulaire de contact
        case '/contact/add_contact':
            include './controller/ctrl_add_contact.php';
            break;
        //cas la route n'existe pas
        default:
            include './view/view_404.php';
            break;
    }
?>