     <?php
        session_start();


        $auth = isset($_POST['auth']) ? $_POST['auth'] : NULL;
        $authS = isset($_GET['auth']) ? $_GET['auth'] : NULL;
        if (isset($auth) || isset($authS)) {
            require('Controllers/Ctrl_auths.php');
            Ctrl_auths::index();
        } else {
            if (isset($_SESSION['status'])) {
                include "Views/shared/header.php";
                require('Controllers/Ctrl_pages.php');
                Ctrl_pages::index();
                include "Views/shared/footer.php";
                if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                    Ctrl_auths::logout();
                }
            } else{
                include 'Views/auths/auth.php';
            }
            
        }

        ?>

