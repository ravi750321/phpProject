<?php
if ($_SESSION["is_user_loggedin"]==true) {
    return true;
} else {
    header("Location: index.php");
}
?>