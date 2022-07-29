     <?php
        include "Views/shared/header.php";

        $auth = isset($_GET['auth']) ? $_GET['auth'] : NULL;
        
        if (isset($auth)) {
            require('Controllers/Ctrl_auths.php');
            Ctrl_auths::index();
        }
        else{
            require('Controllers/Ctrl_pages.php');
            Ctrl_pages::index();
        }
        
        include "Views/shared/footer.php";
    ?>

