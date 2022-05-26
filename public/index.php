<?php

// FRONT CONTROLLER

// A la racine de notre projet, dans le dossier public, on place le fichier .htaccess
// Fichier de configuration du serveur apache
// Celui-ci fait en sorte que les URL redirigent vers index.php

//*** On inclut les classes ***/
// On utilise __DIR__ pour que l'url soit relatif - s'adapte à chaque org
require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/MenuController.php';
require __DIR__ . '/../app/Controllers/ScheduleController.php';


//*** On récupère le paramètre de l'url***/

// var_dump($_GET); 
// On voit que dès qu'on tape quelque chose à la suite de public/, cela crée un paramètre _url dans notre superglobale $_GET qui contient la valeur entrée

if (isset($_GET['_url'])) {
    // Si on a un paramètre d'url existant, on récupère sa valeur, et cela devra correspondre à la page à afficher
    $pageToDisplay = $_GET['_url'];
} else {
    // sinon, si on a rien rentré, par défaut, on affiche la page d'accueil, soit ...public/
    $pageToDisplay = '/';
}

//*** On définit les routes ***/

// On crée un tableau de routes
// On associe l'url à la méthode du controller

$routes = [
    '/' => [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    '/menu' => [
        'controller' => 'MenuController',
        'method' => 'menu'
    ],
    '/schedule' => [
        'controller' => 'ScheduleController',
        'method' => 'schedule'
    ]
];

//*** On instancie le controller en fonction de la route demandée ***/

// On filtre pour vérifier si la page à afficher, contenue dans l'url, correspond bien à une route définie dans notre tableau des routes
if (isset($routes[$pageToDisplay])) {
    //1.1 On récupère les infos de la route demandée, contenues dans le tableau $routes
    $routeDatas = $routes[$pageToDisplay];

    //1.2 On récupère le nom du controller concerné
    $controllerToInstanciate = $routeDatas['controller'];

    //1.3 Idem pour la méthode
    $methodToUse = $routeDatas['method'];

    //2.1 On instancie le controller
    $controller = new $controllerToInstanciate();

    //2.2 On appelle la méthode
    $controller->$methodToUse();

    //var_dump($routeDatas);

// Sinon, si la valeur passée en paramètre de l'url ne correspond à aucune route, on renvoie vers une page d'erreur
}else{
    $controller = new MainController();
    $controller->notFound404();
}