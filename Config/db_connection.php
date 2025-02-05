<?php
class Database {
    private $host = "fdb1030.awardspace.net"; // Remplacez par votre hôte
    private $dbname = "4585479_name"; // Remplacez par le nom de votre base de données
    private $username = "4585479_name"; // Remplacez par votre nom d'utilisateur
    private $password = "r58I#t-N9!^gB/Hp"; // Remplacez par votre mot de passe
    private $pdo;
    private static $instance = null;

    private function __construct() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8";
            $this->pdo = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active le mode exception pour les erreurs
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Définit le mode de récupération par défaut
                PDO::ATTR_EMULATE_PREPARES => false // Désactive l'émulation des requêtes préparées
            ]);
        } catch (PDOException $e) {
            die("Erreur de connexion : ");
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->pdo;
    }
}

// Exemple d'utilisation
$db = Database::getInstance();
