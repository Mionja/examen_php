<?php
include('Utils/fonction.php');
//include 'Models/mdl_prof.php';
class Ctrl_profs
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
                    $m = Mdl_auth::verif_email_prof($email);

                    if ($m) {
                        $err = "Un autre prof est déjà inscrit sous cet email";
                        include('Views/profs/add_profs.php');
                    }
                    else{
                        $photo = upload_pic('prof');
                        
                        Mdl_prof::save_data($nom,$prenom ,$email, $tel, $adresse, $reseau, $photo, $genre, $mdp);
                        header("location:./index.php?page=Ctrl_profs");
                    }
                }
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Mdl_prof::delete_data($id);
                    header("location:./index.php?page=Ctrl_profs");
                }
                break;
            case 'edit':
                if (isset($_POST['update'])) {
                    extract($_POST);
                    
                    Mdl_prof::set_data($nom,$prenom, $email, $tel, $adresse, $reseau, upload_pic('prof'),$genre,$mdp, $id);
                    header("location:./index.php?page=Ctrl_profs");
                }
                break;
        }
    }
    public static function theView($page = 'list')
    {
        if ($page != "list") 
        {
            if ($page == 'edit' | $page == 'details') {
                $id = isset($_GET['id']) ? $_GET['id'] : NULL;
                $profs = Mdl_prof::get_data($id);
                $modules = Mdl_prof::module($id);
            }
        }
        
        else 
        {
            $profs = Mdl_prof::list_data();
        }
        include('Views/profs/' . $page . '_profs.php');
    }
 
}
   
