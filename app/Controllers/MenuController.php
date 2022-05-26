<?php

class MenuController 
{
    // Affichage de la page d'accueil
    public function menu()
    {
        $this->display('menu');
    }

    // On créer une méthode display, qui va afficher le contenu en fonction de la page demandée
    private function display($viewName, $viewData = [])
    {

        // On récupère la liste des plats qu'on veut afficher dans la page Menu
        // Comme ça on va pouvoir y avoir accès dans notre template
        $menu = new Menu();
        $menuList = $menu->list();

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
    
}