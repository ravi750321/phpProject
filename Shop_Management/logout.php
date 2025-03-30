<?php
   include("./config/database.php");
    $_SESSION["is_user_loggedin"]=false;
    session_destroy();
    header("Location: index.php");
?>