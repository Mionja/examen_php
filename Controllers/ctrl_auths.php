<?php
session_start();
include 'Models/mdl_prof.php';
include 'Models/mdl_etudiant.php';
include 'Models/mdl_auth.php' ;
    class Ctrl_auths
    {

        public static function index()
        {
            if (isset($_POST['connect'])) {
                $mail = "admin@gmail.com";
                $mdp = "123";
    
                extract($_POST) ;
                $_SESSION["status"] = $status;
    
    
                switch ($status) {
                    case 'etudiant':
                        $m = Mdl_auth::verif_email_etudiant($login);
                        $p = Mdl_auth::verif_mdp_etudiant($login);
    
                        if ($m) {
                            if ($p[0] == $pass) {
                                print("etudiant, votre email est dans notre bdd et votre mot de passe y correspond");   
                                // $nom = Mdl_auth::get_nom_e($login);
                                // $_SESSION["nom"] = $nom;
                                header("location:index.php?page=Ctrl_acceuils");               
                            }
                            else {
                                $err = "Mot de passe érroné";
                                include('Views/auths/auth.php');
                            }
                        }
                        else{
                            $err = "Votre email est invalide";
                            include('Views/auths/auth.php');
                        }
                        break;
    
    
                    case 'prof':
                        $m = Mdl_auth::verif_email_prof($login);
                        $p = Mdl_auth::verif_mdp_prof($login);
    
                        if ($m) {
                            // print($p[0]);
                            if ($p[0] == $pass) {
                                print("prof, votre email est dans notre bdd et votre mot de passe y correspond");   
                                header("location:index.php?page=Ctrl_acceuils");               
                            }
                            else {
                                $err = "Mot de passe érroné";
                                include('Views/auths/auth.php');
                            }
                        }
                        else{
                            $err = "Ouups, vous n'êtes pas encore registré chez nous monsieur/madame le(a) professeur";
                            include('Views/auths/auth.php');
                        }
                        break;
    
    
                    case 'admin':
                        if ($login == $mail) {
                            if ($pass == $mdp) {
                                header("location:index.php?page=Ctrl_acceuils");               
                        }
                        else {
                            $err = "Mot de passe érroné";
                            include('Views/auths/auth.php');
                        }
                    }
                    else{
                        $err = "Email invalide";
                        include('Views/auths/auth.php');
                    }
                        break;
                }   
            }

            else{
                header("location:index.php");
            }

        }
    }

