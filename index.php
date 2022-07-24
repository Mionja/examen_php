     <?php
        include "Views/shared/header.php";

        require('Controllers/Ctrl_pages.php');
        Ctrl_pages::index();
        
        include "Views/shared/footer.php";
    ?>

