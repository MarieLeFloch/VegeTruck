<?php

// On indique le namespace ("dossier virtuel") où se trouve notre fichier
namespace App\Models;

// On inclut Database et PDO pour nos requêtes SQL
use App\Utils\Database;
use PDO;

class Menu
{
    //* Définition des propriétés du Model (= BDD) */
    private $id;
    private $type;
    private $name;
    private $description;
    private $price;
    private $picture;
    private $created_at;
    private $updated_at;

    //* Définition des getters (lire une propriété) et setters (modifier son contenu) */

    public function getId()
    {
        return $this->id;
    }
    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
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
        $sqlRequest = 'SELECT * FROM `menu`';

        // Execution de la requête
        // query car on consulte seulement
        $pdoStatement = $pdoConnexion->query($sqlRequest);

        // Récupération des données
        // On utilise fetchAll, méthode de PDO
        // On indique en option qu'on veut retourner une instance de la classe Menu
        // On indique la classe courante avec self::class (évite de mettre tout le namespace)
        $menuList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        // On retourne le résultat
        return $menuList;
    }

}