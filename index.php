     <?php
        include "views/shared/header.php";

        require('Controllers/ctrl_pages.php');
        Ctrl_pages::index();
        
        include "views/shared/footer.php";
    ?>

