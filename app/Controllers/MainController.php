<?php

class MainController 
{
        public function notFound404()
    {
        // Pour avoir une vraie page 404, il faut que la réponse
        // http retourne un code 404 (au lieu de 200 OK)
        // Si http retourne un code 404, c'est que la page n'existe pas
        // On renvoie alors la page 404
        header("HTTP/1.1 404 Not Found");
        $this->display('404');
    }

    // Affichage de la page d'accueil
    public function home()
    {
        $this->display('home');
    }

    // On créer une méthode display, qui va afficher le contenu en fonction de la page demandée
    private function display($viewName, $viewData = [])
    {

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
    
}