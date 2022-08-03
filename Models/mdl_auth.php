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
        // public static function get_email_prof()
        // {
        //     $query = "SELECT email FROM profs ORDER BY id";
        //     return self::db()->query($query)->fetchAll();
        // }
        // public static function get_email_etudiant()
        // {
        //     $query = "SELECT email FROM etudiants";
        //     return self::db()->query($query)->fetchAll();
        // }
        // public function get_password_etudiant($id)
        // {
        //     $query = "SELECT password FROM etudiants WHERE id=".$id;
        //     return self::db()->query($query)->fetch();
        // }
        // public function get_password_prof($id)
        // {
        //     $query = "SELECT mdp FROM profs WHERE id=".$id;
        //     return self::db()->query($query)->fetch();
        // }
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
