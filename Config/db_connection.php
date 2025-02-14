<?php
class Database {
    private $host = "sql210.byethost11.com"; // Remplacez par votre hôte
    private $dbname = "b11_38304081_cpa"; // Remplacez par le nom de votre base de données
    private $username = "b11_38304081"; // Remplacez par votre nom d'utilisateur
    private $password = "Abdo.2004"; // Remplacez par votre mot de passe
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
