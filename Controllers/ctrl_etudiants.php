<?php
//include 'Models/mdl_etudiant.php';
class Ctrl_etudiants
{
    public static function index()
    {
        $view = isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'add':
                self::theView($view);
                break;

            case 'edit':
                self::theView($view);
                break;
            case 'details':
                self::theView($view);
                break;
            default:
                self::theView();
                break;
        }
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'add':
                if (isset($_POST['add']) && isset($_FILES['photo'])) {
                    extract($_POST);
                    $m = Mdl_auth::verif_email_etudiant($email);

                    if ($m) 
                    {
                        $err = "Un autre etudiant est déjà inscrit sous cet email";
                        include('Views/etudiants/add_etudiants.php');
                    }
                    else
                    {
                        Mdl_etudiant::save_data($nom,$prenom,$date_naissance,$cin,$email,$tel,$comptefb,upload_pic(),$password);
                        header("location:./index.php?page=Ctrl_etudiants");
                    }
                }
                else{
                    header("location:./index.php?page=Ctrl_etudiants&view=add");
                }
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Mdl_etudiant::delete_data($id);
                    header("location:./index.php?page=Ctrl_etudiants");
                }
                break;
            case 'edit':
                if (isset($_POST['update'])) {
                    extract($_POST);

                    Mdl_etudiant::set_data($nom,$prenom,$date_naissance,$cin,$email,$tel,$comptefb, upload_pic(),$password, $id);
                    header("location:./index.php?page=Ctrl_etudiants");
                }
                break;
        }
    }
    public static function theView($page = 'list')
    {
        if ($page != "list") {
            if ( ($page == "edit"  | $page == 'details') && isset($_GET['id'])) {
                $etudiant = Mdl_etudiant::get_data($_GET['id']);   
            }
        } else {
            $etudiants = Mdl_etudiant::list_data();
        }
        include('Views/etudiants/' . $page . '_etudiants.php');
    }
 
}
   
