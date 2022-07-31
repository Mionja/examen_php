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
        public static function get_email_prof()
        {
            $query = "SELECT email FROM profs ORDER BY id";
            return self::db()->query($query)->fetchAll();
        }
        public static function get_email_etudiant()
        {
            $query = "SELECT email FROM etudiants";
            return self::db()->query($query)->fetchAll();
        }
        public function get_password_etudiant($id)
        {
            $query = "SELECT password FROM etudiants WHERE id=".$id;
            return self::db()->query($query)->fetch();
        }
        public function get_password_prof($id)
        {
            $query = "SELECT mdp FROM profs WHERE id=".$id;
            return self::db()->query($query)->fetch();
        }
        public static function verify_email($email)
        {
            $query = "SELECT * FROM etudiants WHERE email=".$email;
            return self::db()->prepare($query)->fetch();
        }
    }
?>
