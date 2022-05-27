<?php

// On indique le namespace ("dossier virtuel") où se trouve notre fichier
namespace App\Controllers;

// On inclut le CoreController dont notre controller dépend
use App\Controllers\CoreController;

// On inclut le Model Menu dont on a besoin plus bas
use App\Models\Menu;


class MenuController extends CoreController
{
    // Affichage de la page d'accueil
    public function menu()
    {
        $this->display('menu');
    }

    // Affichage des détails d'un plat particulier
    // On a besoin d'aller récupérer les infos à partir de l'id passé dans l'url
    // On va créer dans notre Model une méthode findById() à cette fin
    public function oneMenu($urlParams)
    {
        //dump($urlParams);
        // On récupère la valeur de l'id contenu dans l'url
        $idMenu = $urlParams['id'];

        // On instancie notre Model Menu
        $menu = new Menu();
        // Puis on appelle la méthode findById qu'on a crée dans ce Model, à la quelle toutes ses instances ont accès
        // Et on passe en argument de la méthode, l'id concerné
        $menuToDisplay = $menu->findById($idMenu);

        // On passe en argument de la méthode display cet objet, mais on l'extrait sous forme d'une variable, grâce à la méthode extract() définie dans display()
        // Méthode extract() : "cle" => "contenu", la "cle" devient la variable associée au contenu
        // On aura donc accès dans notre template à la variable menu_details
        $this->display('menu-details',
             ['menu_details' => $menuToDisplay] 
         );
    }
    
}