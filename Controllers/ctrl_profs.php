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

            default:
                self::theView();
                break;
        }
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
                    extract($_POST);
                    Mdl_prof::save_data($nom, $email);
                    header("location:/mine/PHP/index.php?page=Ctrl_profs");
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
                    Mdl_prof::set_data($nom, $email, $id);
                    header("location:/mine/PHP/index.php?page=Ctrl_profs");
                }
                break;
        }
    }
    public static function theView($page = 'list')
    {
        if ($page != "list") {
            if ($page == "edit" && isset($_GET['id'])) {
                $profs = Mdl_prof::get_data($_GET['id']);   
            }
        } else {
            $profs = Mdl_prof::list_data();
            $modules = Mdl_module::list_data();
        }
        include('Views/profs/' . $page . '_profs.php');
    }
 
}
   
