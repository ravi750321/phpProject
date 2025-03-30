
<?php
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "shop_management";
$conn = "";

try {
    $conn = mysqli_connect($server, $user, $pass, $dbname);
} catch (mysqli_sql_exception) {
    echo "database connection failed!!<br/> " . mysqli_connect_error();
}
