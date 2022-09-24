<html>
<head>
    <style>




    </style>
</head>    
<body>

<?php

// Create connection

// require_once 'Databaseconfig.php';
 

$servername = "localhost";
$username = "root";
$password = "";
$database = "connectiontest";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    echo "Connected to $database at $servername successfully.BY : ( PDO Methoed )";
} catch (PDOException $pe) {
    die("Could not connect to the database $database :" . $pe->getMessage());
}




//******** 1  :  insert Data : 


// $addData=$conn->prepare("INSERT INTO users_info( name ,pass , email) 
// VALUES('mohamed', 'asdmmmmmmmmmm23' , 'mmm@gmail.com')");
// $addData ->execute();



//******** 2  :  Delete Data : 
// $del=$conn->prepare("DELETE FROM users_info WHERE id=16");
// $del ->execute();



//******** 3  :  Update Data : 
// $update=$conn->prepare('UPDATE users_info SET pass="Updated pass" WHERE id=17');
// $update ->execute();



// $query = "SELECT * FROM table_name";



// echo '<table border="0" cellspacing="2" cellpadding="2"> 
//       <tr> 
//           <td>id</td> 
//           <td>name</td> 
//           <td>pass</td> 
//           <td>email</td> 

//       </tr>';

// if ($result = $conn->query($query)) {
//     while($row = $result->fetch()){   
//         echo "<tr><td>" . htmlspecialchars($row['id']) . "</td>
//         <td>" . htmlspecialchars($row['name']) . "</td>
//         <td>" . htmlspecialchars($row['pass']) . "</td>
//         <td>" . htmlspecialchars($row['email']) . "</td>
//               </tr>";





              
//     }
//     echo "</table>"; 
// } 
















// $names = [
// 	'qassem',
// 	'ahmad',
// 	'reaid',
// 	'khaled'
// ];

// $sql = 'INSERT INTO user_info(name) VALUES(:name)';

// $statement = $conn->prepare($sql);

// foreach ($names as $name) {
// 	$statement->execute([
// 		':name' => $name
// 	]);



// $users = mysqli_query($conn, "SELECT * FROM tasks");

?>
</body>
</html>