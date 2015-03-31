<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 2/14/2015
 * Time: 5:32 PM
 */
?>
<hmtl>
    <body>
    <?php
    session_start();
    if ($_SESSION['loggedIn'] == "IN") {
        echo "Your Session ID = " . session_id();
    } else {
        header("location:http://localhost/labs/lab10");
    }
    ?>
    <p>
        <a href="http://localhost/labs/lab10/killSession.php">Log out</a>
    </p>

    ?>
    </body>
</hmtl>