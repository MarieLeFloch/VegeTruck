<?php

// FRONT CONTROLLER

// A la racine de notre projet, dans le dossier public, on place le fichier .htaccess
// Fichier de configuration du serveur apache
// Celui-ci fait en sorte que les URL redirigent vers index.php

//*** On inclut les éléments dont on a besoin ***/
// On utilise __DIR__ pour que l'url soit relatif - s'adapte à chaque org
// Autoload pour Altorouter
require __DIR__ . '/../vendor/autoload.php';


//*** On utilise Altorouter - installé via le composer ***/

$router = new AltoRouter();

// var_dump($_SERVER); 
// On voit que dans la superglobale $_SERVER, on a notamment 'BASE_URI' => string '/VegeTruck/public' (length=17)
// On utilise la valeur de cette clé pour définir la racine de notre projet

// On utilise la méthode setBasePath() de Altorouter, pour définir une racine de projet dynamique
$router->setBasePath($_SERVER['BASE_URI']);


//*** On définit les routes ***/

// On crée un tableau de routes
// Avec AltoRouter, on utilise la méthode map() pour gérer les routes, on fourni :
// 1- la méthode HTTP (get) autorisée pour la route
// 2- la partie d'url correspondant à la page
// 3- dans un tableau, les infos sur les controllers et méthodes
// 4- et à la fin, un identifiant unique de la route

//* Page d'accueil
$router->map(
    'GET', 
    '/', 
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'main-home' 
);

//* Page du menu
$router->map(
    'GET', 
    '/menu', 
    [
        'controller' => 'MenuController',
        'method' => 'menu'
    ],
    'menu' 
);

$router->map(
    'GET', 
    '/menu/[i:id]', // Partie dynamique de l'url correspondant à l'integer id
    [
        'controller' => 'MenuController',
        'method' => 'oneMenu'
    ],
    'menu-details' 
);

//* Page des horaires
$router->map(
    'GET', 
    '/schedule', 
    [
        'controller' => 'ScheduleController',
        'method' => 'schedule'
    ],
    'schedule' 
);

//* On appelle la méthode match() d'Altorouter, qui vérifie que tout est ok
// Retourne les infos si il y a bien une route correspondant à la page demandée
$match = $router->match();
//dump($match);  // VegeTruck/public/
// ^ array:3 [▼
//   "target" => array:2 [▶]
//   "params" => []
//   "name" => "main-home"
// ]
// A ce stade, rien dans params, car correspond à une partie dynamique qui suit l'url qu'on n'a pas encore élaboré (ex : une page d'un plat qui correspondrait à public/menu/2)

//*** Si il y a bien une route correspondante, on instancie la controller et on appelle la méthode
if ($match !== false) {

    // On a une clé target dans notre tableau retourné par match(), qui contient les infos liées au controller et à la méthode
    //1.1 On récupère ces infos 
    $routeDatas = $match['target'];

    //1.2 On récupère le nom du controller concerné
    // On met l'adresse entière avec le namespace
    // On met les \\ pour éviter que ça soit considéré comme un antislash
    $controllerToInstanciate = 'App\\Controllers\\'.$routeDatas['controller'];

    //1.3 Idem pour la méthode
    $methodToUse = $routeDatas['method'];

    //1.4 On récupère le contenu dynamique de l'url
    $urlParams = $match['params'];

    //2.1 On instancie le controller
    $controller = new $controllerToInstanciate();

    //2.2 On appelle la méthode
    // On passe en argument les paramètres dynamiques, pour les méthodes qui le nécessitent (sinon sera ignoré)
    $controller->$methodToUse($urlParams);

    //var_dump($routeDatas);

// Sinon, si la valeur passée en paramètre de l'url ne correspond à aucune route, on renvoie vers une page d'erreur
}else{
    // Pour utiliser notre controller, on indique son nom entier avec le namespace
    $controller = new App\Controllers\MainController();
    $controller->notFound404();
}