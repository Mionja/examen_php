<?php

include 'Models/mdl_contact.php';
class Ctrl_contacts
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
            case 'message':
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
                    Mdl_contact::save_data($nom,$email, $fonction);
                    header("location:./index.php?page=Ctrl_contacts");
                }
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Mdl_contact::delete_data($id);
                    header("location:./index.php?page=Ctrl_contacts");
                }
                break;
            case 'edit':
                if (isset($_POST['update'])) {
                    print_r($_POST);
                    extract($_POST);
                    Mdl_contact::set_data($nom,$email, $fonction,$id);
                    header("location:./index.php?page=Ctrl_contacts");
                }
                break;
        }
    }

    public static function theView($page = 'list')
    {
        if ($page != "list") 
        {
            if ($page == 'edit' | $page == 'message') {
                $id = isset($_GET['id']) ? $_GET['id'] : NULL;
                $contacts = Mdl_contact::get_data($id);
            }
        }
        
        else 
        {
            $contacts = Mdl_contact::list_data();
            $i = Mdl_contact::list_data_i();
        }
        include('Views/contacts/' . $page . '_contacts.php');
    }
 
}
   
