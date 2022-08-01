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
                            // print($p[0]);
                            if ($p[0] == $pass) {
                                print("etudiant, votre email est dans notre bdd et votre mot de passe y correspond");   
                                header("location:index.php?page=Ctrl_acceuils");               
                            }
                            else {
                                print("Mot de passe érroné");
                            }
                        }
                        else{
                            ?><script>alert("Ouups, votre mail n'est pas encore registré chez nous")</script> <?php
                            header("location:index.php");
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
                                print("Mot de passe érroné");
                            }
                        }
                        else{
                            print("Ouups, vous n'êtes pas encore registré chez nous");
                            header("location:index.php");
                        }
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
            }

            if (isset($_GET['dec'])) {
                session_destroy();
                header("location:index.php");
            }

        }
    }

