<?php 
    class Ctrl_acceuils
    {
        public static function index()
        {
            $i = Mdl_contact::list_data_i();
            include("Views/acceuil.php");
        }
    }
?>





