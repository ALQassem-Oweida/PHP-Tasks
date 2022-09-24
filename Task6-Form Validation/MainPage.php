
<html>
<head>
    <style>
table{
  text-align:center;
}
h5{
    text-align:center;
}
h4{
    text-align:center ;
}

    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>    
<body>

<?php
 session_start();
 
 include "header.php";
 include "./Databaseconfig.php";

$x=$_SESSION['userType'];

if($x==='user'){
    echo '<br><h4>Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"].'</h4><br>';
    echo '<br><h4>youre Email is : '.$_SESSION['email'].'</h4><br>';
}else{

    echo '<br><h4>Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"].'</h4><br>';



    $query ="SELECT email,mobile,first_name,middle_name,last_name,family_name,password ,user_type,id FROM signup_data WHERE  user_type='user'" ;



echo '<table class="table">
      <tr> 
     
          <th>id</th> 
          <th>First Name</th> 
          <th>Middle Name</th> 
          <th>Last Name</th> 
          <th>Family Name</th> 
          <th>Email</th> 
          <th>Phone</th> 
          <th>Password</th> 
          <th>User Type</th> 



      </tr>';

if ($result = $conn->query($query)) {
    while($row = $result->fetch_assoc()){   
        echo "<tr>

        <td>" . $row['id'] . "</td>
        <td>" . $row['first_name'] . "</td>
        <td>" . $row['middle_name'] . "</td>
        <td>" . $row['last_name'] . "</td>
        <td>" . $row['family_name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['mobile'] . "</td>
        <td>" . $row['password'] . "</td>
        <td>" . $row['user_type'] . "</td>
        <td> <form  action='' method='post'><button class='btn btn-danger' type='submit' name='delete' value='" . $row['id'] . "'>Delete</button></form></td>
        <td> <form  action='./Edite Form.php' method='GET'><button class='btn btn-primary' type='submit' name='update' value='" . $row['id'] . "'>Edite</button></form></td>

    



              </tr>";
    }
    echo "</table><br><Br>"; 
} 


}
?>

</html>


<?php

if (isset($_POST['delete'])) {
    
    $sql = "DELETE FROM signup_data WHERE id=" . $_POST['delete'];;
    if ($conn->query($sql) === TRUE) {
        header("Refresh:0");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

      
$query ="SELECT email,mobile,first_name,middle_name,last_name,family_name,password ,user_type,id FROM signup_data WHERE  user_type='user'" ;




?>






<?php include 'footer.php';?> 

