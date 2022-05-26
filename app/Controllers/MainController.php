<?php

// On indique le namespace ("dossier virtuel") où se trouve notre fichier
namespace App\Controllers;

// On inclut le CoreController dont notre controller dépend
use App\Controllers\CoreController;

class MainController extends CoreController
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
    
}