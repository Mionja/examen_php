<?php 

    class Ctrl_acceuils
    {
        public static function index()
        {
            $status = $_GET["status"];
            include("Views/acceuil.php");
        }
    }
?>





