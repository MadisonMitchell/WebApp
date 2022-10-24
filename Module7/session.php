<?php
   session_start();

   $_SESSION['user'] = 'Madie M.';
?>
<html>
    <body>
        <?php
            //will delete the specific 'user' data
            unset($_SESSION['user']);
            //Will delete all the session data. 
            //Session_destroy();
            if(!isset($_SESSION['user'])) {
                echo "Session 'user' still exists,";
            } else {
                echo "Session 'user' is already deleted,";
            }
        ?>
    </body>
</html>
