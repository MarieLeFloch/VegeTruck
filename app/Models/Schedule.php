<?php

// On indique le namespace ("dossier virtuel") où se trouve notre fichier
namespace App\Models;

// On inclut Database et PDO pour nos requêtes SQL
use App\Utils\Database;
use PDO;


class Schedule
{
    //* Définition des propriétés du Model (= BDD) */
    private $id;
    private $day;
    private $open_hour;
    private $close_hour;
    private $place;
    private $created_at;
    private $updated_at;

    //* Définition des getters (lire une propriété) et setters (modifier son contenu) */

    public function getId()
    {
        return $this->id;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setDay($day)
    {
        $this->day = $day;
    }

    public function getOpenningHour()
    {
        return $this->open_hour;
    }

    public function setOpenningHour($open_hour)
    {
        $this->open_hour = $open_hour;
    }
    public function getClosingHour()
    {
        return $this->close_hour;
    }

    public function setClosingHour($close_hour)
    {
        $this->close_hour = $close_hour;
    }
    public function getPlace()
    {
        return $this->place;
    }

    public function setPlace($place)
    {
        $this->place = $place;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    //* Définition des autres méthodes */

    // Méthode récupérant l'ensemble des plats
    public function list()
    {
        // On établit la connexion à la BDD via PDO
        $pdoConnexion = Database::getPDO();

        // Requête SQL
        $sqlRequest = 'SELECT * FROM `schedule`';

        // Execution de la requête
        // query car on consulte seulement
        $pdoStatement = $pdoConnexion->query($sqlRequest);

        // Récupération des données
        // On utilise fetchAll, méthode de PDO
        // On indique en option qu'on veut retourner une instance de la classe Schedule
        // On indique la classe courante avec self::class
        $scheduleList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        // On retourne le résultat
        return $scheduleList;
    }
}