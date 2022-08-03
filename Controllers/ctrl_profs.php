<?php

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

                    $tmpName = $_FILES['photo']['tmp_name'];
                    $name = $_FILES['photo']['name'];
                    $size = $_FILES['photo']['size'];

                    $tabExt = explode('.', $name);
                    $extension = strtolower(end($tabExt));
                    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                    $maxSize = 400000;

                    $destination_path = getcwd().DIRECTORY_SEPARATOR;
                    $target_path =$destination_path.basename($name);
                    @move_uploaded_file($tmpName, $target_path);                   

                    Mdl_prof::save_data($nom,$prenom ,$email, $name,$mdp);
                    header("location:/mine/PHP/index.php?page=Ctrl_profs");
                }
                else{
                    ?> <script>alert("Formulaire non rempli")</script><?php
                    header("location:/mine/PHP/index.php?page=Ctrl_profs&view=add");
                }
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Mdl_prof::delete_data($id);
                    header("location:/mine/PHP/index.php?page=Ctrl_profs");
                }
                break;
            case 'edit':
                if (isset($_POST['update'])) {
                    extract($_POST);

                    $photo = $_FILES['photo'];
                    $tmpName = $photo['tmp_name'];
                    $name = $photo['name'];
                    $size = $photo['size'];

                    $tabExt = explode('.', $name);
                    $extension = strtolower(end($tabExt));
                    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
                    $maxSize = 400000;
                    
                    $destination_path = getcwd().DIRECTORY_SEPARATOR;
                    $target_path = $destination_path.basename($name);
                    @move_uploaded_file($tmpName, $target_path);

                    Mdl_prof::set_data($nom,$prenom, $email, $name,$mdp, $id);
                    header("location:/mine/PHP/index.php?page=Ctrl_profs");
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
   
