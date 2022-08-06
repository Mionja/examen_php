     <?php
        

        $auth = isset($_POST['auth']) ? $_POST['auth'] : NULL;
        $authS = isset($_GET['auth']) ? $_GET['auth'] : NULL;
        if (isset($auth) || isset($authS)) {
            require('Controllers/Ctrl_auths.php');
            Ctrl_auths::index();
        }


        else{
        include "Views/shared/header.php";
            require('Controllers/Ctrl_pages.php');
            Ctrl_pages::index();
        include "Views/shared/footer.php";
        }
        
        
    ?>

