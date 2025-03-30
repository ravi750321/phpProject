<?php
if (isset($_SESSION["success"])) {
    echo $_SESSION["success"];
    unset($_SESSION["success"]);
}

?>

<?php
if (isset($_SESSION["error"])) {
    echo  $_SESSION["error"];
    unset($_SESSION["error"]);
}

?>

<?php

// PHP program to pop an alert
// message box on the screen

// Display the alert box 

if (isset($_SESSION["alert"])) {
   $alert = $_SESSION["alert"];
    echo "<script>alert('{$alert}')</script>";
    unset($_SESSION["alert"]);
}

?>