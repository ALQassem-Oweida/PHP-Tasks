

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "employee_task";

// Create connection
try {
    $conn = mysqli_connect($servername, $username, $password,$database);
    // echo "<h5 ><br>Connection succsess to ( $database ) database<h5><br><br>";

} catch (\Throwable $th) {

    die ("<h5><br>Connection failed to (  $database ) database</h5><br>");
}

?>