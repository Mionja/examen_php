<?php
session_start();
include 'Models/mdl_prof.php';
include 'Models/mdl_etudiant.php';
include 'Models/mdl_auth.php' ;
    class Ctrl_auths
    {

        public static function index()
        {
            $mail = "admin@gmail.com";
            $mdp = "123";

            // $m_profs = Mdl_auth::get_email_prof();
            $m_etudiants = Mdl_auth::get_email_etudiant();
            // $m_etudiants = ["test@mail.com","mionjaranaivoarison@gmail.com", "aaa@aa.com"];
            
            extract($_POST) ;
            
            $_SESSION["status"] = $status;


            switch ($status) {
                case 'etudiant':
                    // $a = Mdl_auth::verify_email($login);
                    // print($login);
                    // print_r($a);
                    // if ($a == null) {
                    //     echo'email non existant';
                    // }
                    // else{
                    //     echo'ok';
                    // }
                    break;
                case 'prof':
                    header("location:index.php");
                    break;
                case 'admin':
                    if ($login == $mail && $pass == $mdp) {
                        header("location:index.php?page=Ctrl_acceuils");               
                    }
                    else{
                        header("location:index.php");
                        echo 'Mot de passe incorect ou mail invalide';
                    }
                    break;
            }

            if (isset($_GET['dec'])) {
                session_destroy();
            }

        }
    }

