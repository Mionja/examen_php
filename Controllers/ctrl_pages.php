<?php
include("/mine/PHP/Controllers/Ctrl_acceuils.php");
include("/mine/PHP/Controllers/Ctrl_profs.php");
include("/mine/PHP/Controllers/Ctrl_etudiants.php");
include("/mine/PHP/Controllers/Ctrl_contacts.php");
include("/mine/PHP/Controllers/Ctrl_modules.php");

class Ctrl_pages
{
    public static function index()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : NULL;
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
            case 'Ctrl_contacts':
                self::thePage($page);
                break;
            default:
                Ctrl_acceuils::index();
                break;
        }
    }
    public static function thePage($page)
    {
        $page::index() ;
    }
}
