<?php

namespace App\Controllers;
use App\Models\{Menu,Schedule};

class CoreController
{
    //* Méthode display que les controllers enfants pourront utiliser
    // En paramètre : le nom de la page à afficher, et des données
    // Si rien n'est passé en argument, on aura un tableau vide
    // On utilisera ce paramètre lorsqu'on aura à afficher des données pour un seul élément (ex la page d'un plat)
    protected function display($viewName, $viewData = [])
    {
        // On définit $router comme une variable globale
        // De cette façon on y aura accès dans nos templates pour appeler la route via generate()
        global $router;

        // Avec extract, on créera des variables qui correspondront à chaque clé du tableau associatif passé en paramètre
        extract($viewData);
        
        // On récupère la liste des plats qu'on veut afficher dans la page Menu
        $menu = new Menu();
        $menuList = $menu->list();
        // Idem pour Schedule
        $schedule = new Schedule();
        $scheduleList = $schedule->list();

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';

    }

}