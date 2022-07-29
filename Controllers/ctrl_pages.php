<?php
include("Models/mdl_page.php");
include("Controllers/Ctrl_acceuils.php");
include("Controllers/Ctrl_profs.php");
include("Controllers/Ctrl_auths.php");
include("Controllers/Ctrl_etudiants.php");
include("Controllers/Ctrl_contacts.php");
include("Controllers/Ctrl_modules.php");


class Ctrl_pages
{
    public static function index()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : NULL;
        extract($_POST);
        switch ($page) {
            case 'Ctrl_profs':
                self::thePage($page);
                break;
            case 'Ctrl_etudiants':
                self::thePage($page);
                break;
            case 'Ctrl_contacts':
                self::thePage($page);
                break;
            case 'Ctrl_modules':
                self::thePage($page);
                break;
            case 'Ctrl_acceuils':
                self::thePage($page);
                break;
            default:
                header("location:views/auths/auth.php");
                break;
        }
    }
    public static function thePage($page)
    {
        $page::index() ;
    }
}
