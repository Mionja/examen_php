<?php 
    class Mdl_auth
    {
        public static function db(){
            $host = "localhost";
            $dbname = "examen_php";
            $login = "root";
            $pass = "";
            $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $login, $pass);
            return $pdo;
        }
        public static function save_data($email, $message)
    {
        $query = "INSERT INTO inscription(email, message) VALUES (?,?)";
        $q = self::db()->prepare($query);
        return $q->execute(array($email, $message));
    }
        public static function verif_email_etudiant($email)
        {
            $query = "SELECT id FROM etudiants WHERE email= ?";
            $stmt = self::db()->prepare($query);
            $stmt->execute([$email]);

            return $stmt->fetch();
        }
        public static function verif_email_prof($email)
        {
            $query = "SELECT id FROM profs WHERE email= ?";
            $stmt = self::db()->prepare($query);
            $stmt->execute([$email]);

            return $stmt->fetch();
        }
        public static function verif_mdp_prof($email)
        {
            $query = "SELECT mdp FROM profs WHERE email= ?";
            $stmt = self::db()->prepare($query);
            $stmt->execute([$email]);

            return $stmt->fetch();
        }
        public static function verif_mdp_etudiant($email)
        {
            $query = "SELECT password FROM etudiants WHERE email= ?";
            $stmt = self::db()->prepare($query);
            $stmt->execute([$email]);

            return $stmt->fetch();
        }
        public static function get_nom_e($email)
        {
            $query = "SELECT nom FROM etudiants WHERE email= ?";
            $stmt = self::db()->prepare($query);
            $stmt->execute([$email]);

            return $stmt->fetch();
        }
        public static function get_nom_p($email)
        {
            $query = "SELECT nom FROM profs WHERE email= ?";
            $stmt = self::db()->prepare($query);
            $stmt->execute([$email]);

            return $stmt->fetch();
        }
    }
?>
