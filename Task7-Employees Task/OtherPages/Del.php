<?php
include "./Databaseconfig.php";

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM employees WHERE id=" . $_POST['delete'];
    if ($conn->query($sql) === TRUE) {
        header("location: ../index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

      
?>

