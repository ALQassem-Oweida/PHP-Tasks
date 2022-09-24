<html>
<head>
    <style>
table{
  text-align:center;
}
h5{
    text-align:center;
}

    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>    
<body>
<?php include 'header.php';?> 
<!-- require -->

<?php

require_once 'Databaseconfig.php';




//******** 1  :  insert Data : 

// $addData="INSERT INTO employees(FirstName, LastName,Email,Phone,HiringDate,Salary,Department) 
//  VALUES('Khaled', 'khalel' , '1111111@gmail.com','0782131231','2022-09-30',10000,'IT')";
// $conn->query($addData);


//******** 2 :  Update Data : 
// $update='UPDATE employees SET LastName="AbaZaied" WHERE id=2';
// $conn->query($update);



// ******** 3  :  Delete Data : 
// $del="DELETE FROM employees WHERE id=54";
// $conn->query($del);










$query ="SELECT * FROM employees";



echo '<table class="table">
      <tr> 
     
          <th>FirstName</th> 
          <th>LastName</th> 
          <th>Email</th> 
          <th>Phone</th> 
          <th>HiringDate</th> 
          <th>Salary</th> 

          <th>Department</th> 
   

      </tr>';

if ($result = $conn->query($query)) {
    while($row = $result->fetch_assoc()){   
        echo "<tr>
   
        <td>" . $row['FirstName'] . "</td>
        <td>" . $row['LastName'] . "</td>
        <td>" . $row['Email'] . "</td>
        <td>" . $row['Phone'] . "</td>
        <td>" . $row['HiringDate'] . "</td>
        <td>" . $row['Salary'] . "</td>
        <td>" . $row['Department'] . "</td>
       



              </tr>";
    }
    echo "</table><br><Br>"; 
} 




$query2 ='SELECT employees.FirstName,employees.LastName,employees.Email,employees.HiringDate,employees.Salary,employees.Phone,employeedetails.PassportNum, address.Location,address.Type,skills.Skill from employees
join employeedetails on employees.id = employeedetails.id 
join address on employees.id = address.empID AND address.Type="HOME"
join skills on employees.id = skills.empID';


echo '<center><h3>4 Tables Joined (employees+employeedetails+address+skills)</h3></center><br><br>';

echo '<table class="table" >
      <tr> 

          <th>FirstName</th> 
          <th>LastName</th> 
          <th>Email</th> 
          <th>Phone</th> 
          <th>HiringDate</th> 
          <th>Salary</th> 
          <th>PassportNum</th> 
          <th>Location</th> 
          <th>Type</th> 
          <th>Skill</th>

      </tr>';

if ($result = $conn->query($query2)) {
    while($row = $result->fetch_assoc()){   
        echo "<tr>
   
        <td>" . $row['FirstName'] . "</td>
        <td>" . $row['LastName']. "</td>
        <td>" . $row['Email'] . "</td>
        <td>" . $row['Phone'] . "</td>
        <td>" . $row['HiringDate'] . "</td>
        <td>" . $row['Salary'] . "</td>
        <td>" . $row['PassportNum'] . "</td>
        <td>" . $row['Location'] . "</td>
        <td>" . $row['Type'] . "</td>
        <td>" . $row['Skill'] . "</td>
        
              </tr>";
    }
    echo "</table><br><Br>"; 
} 

?>



 <?php include 'footer.php';?> 
</body>
</html>



