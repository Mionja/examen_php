<?php
include 'Models/mdl_module.php';
class Ctrl_modules
{
    public static function index()
    {
        if (isset($_GET['action'])){
            self::action($_GET['action']);
        }
        else{
            self::view(isset($_GET['view']) ? $_GET['view'] : NULL);
        }
    }

    public static function view($view){
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
    }

    public static function action($action){
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
                    extract($_POST);
                    $test = Mdl_module::save_data($nom, $code, $heure,$id_prof);
                    header("location:./index.php?page=Ctrl_modules");
                }
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Mdl_module::delete_data($id);
                    header("location:./index.php?page=Ctrl_modules");
                }
                break;
            case 'edit':
                if (isset($_POST['update'])) {
                    extract($_POST);

                    Mdl_module::set_data($nom, $code, $heure, $id_prof,$id);
                    header("location:./PHP/index.php?page=Ctrl_modules");

                    
                }
                break;
        }
    }

    public static function theView($page = 'list')
    {
        if ($page != "list") {
            if ($page == "edit" && isset($_GET['id'])) {
                $module = Mdl_module::get_data($_GET['id']);   
            }
            $profs = Mdl_prof::list_data();
        } else {
            $modules = Mdl_module::list_data();
        }
        include('Views/modules/' . $page . '_modules.php');
    }
 
}
   
