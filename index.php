     <?php
        

        $auth = isset($_POST['auth']) ? $_POST['auth'] : NULL;
        if (isset($auth)) {
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

