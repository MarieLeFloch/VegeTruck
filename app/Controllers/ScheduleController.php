<?php

// On indique le namespace ("dossier virtuel") où se trouve notre fichier
namespace App\Controllers;

// On inclut le CoreController dont notre controller dépend
use App\Controllers\CoreController;

class ScheduleController extends CoreController
{
    // Affichage de la page d'accueil
    public function schedule()
    {
        $this->display('schedule');
    }
    
}