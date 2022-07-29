<?php
include 'Models/mdl_prof.php';
include 'Models/mdl_etudiant.php';

    class Ctrl_auths
    {
        public static function index()
        {
            extract($_POST) ;

            // switch ($status) {
            //     case 'etudiant':
                    
            //         break;
            //     case 'prof':
            //         # code...
            //         break;
            //     case 'admin':
            //         # code...
            //         break;
                
            // }

            header("location:index.php?page=Ctrl_acceuils&status=$status");

        }
    }
?>
