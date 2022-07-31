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

            default:
                self::theView();
                break;
        }
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
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

                    Mdl_etudiant::save_data($nom,$prenom,$date_naissance,$cin,$email,$tel,$comptefb,$name,$password);
                    header("location:/mine/PHP/index.php?page=Ctrl_etudiants");
                }
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Mdl_etudiant::delete_data($id);
                    header("location:/mine/PHP/index.php?page=Ctrl_etudiants");
                }
                break;
            case 'edit':
                if (isset($_POST['update'])) {
                    extract($_POST);
                    Mdl_etudiant::set_data($nom,$prenom,$date_naissance,$cin,$email,$tel,$comptefb, $photo,$password, $id);
                    header("location:/mine/PHP/index.php?page=Ctrl_etudiants");
                }
                break;
        }
    }
    public static function theView($page = 'list')
    {
        if ($page != "list") {
            if ($page == "edit" && isset($_GET['id'])) {
                $etudiant = Mdl_etudiant::get_data($_GET['id']);   
            }
        } else {
            $etudiants = Mdl_etudiant::list_data();
        }
        include('Views/etudiants/' . $page . '_etudiants.php');
    }
 
}
   
