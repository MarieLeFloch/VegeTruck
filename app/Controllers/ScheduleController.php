<?php

class ScheduleController 
{
    // Affichage de la page d'accueil
    public function schedule()
    {
        $this->display('schedule');
    }

    // On créer une méthode display, qui va afficher le contenu en fonction de la page demandée
    private function display($viewName, $viewData = [])
    {
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
    
}