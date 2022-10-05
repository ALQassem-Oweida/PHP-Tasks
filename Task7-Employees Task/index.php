<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Employye Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <style>
    body {
      margin: auto;
    }

    img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit:cover;
    }

    .addbtn {
      padding: 10px;
      padding-left: 30px;
      padding-right: 30px;
      background-color: #E0AC89;
      color: white;
      border-radius: 10px;
    }

    a {
      text-decoration: none;
      font-weight: bold;
    }
  
 
  </style>



</head>

<body>
  <?php
  //   include "./OtherPages/header.php"; 
  ?>
  <br>
  <center>
    <h2>Employees Details</h2>
  </center><br>



  <div class="container">

    <a class="addbtn" href="create.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-dotted" viewBox="0 0 16 16">
        <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
      </svg>&nbsp;&nbsp;&nbsp;&nbsp; Add New Employee</a><br><br>
    <?php
    // Include config file
    require "./OtherPages/Databaseconfig.php";


    $query = "SELECT * FROM employees";

    if ($result = $conn->query($query)) {
      echo '<table class="table">
                        <tr> 
                            <th>User img</th> 
                            <th>id</th> 
                            <th>Name</th> 
                            <th>Address</th> 
                            <th>Salary</th> 
                            <th></th> 
                            <th>Actiones</th> 
                            <th></th> 
                  
                          
                  
                        </tr>';

      if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                          <td><img src=" . $row['img'] . "></td>
                          <td>" . $row['id'] . "</td>
                          <td>" . $row['name'] . "</td>
                          <td>" . $row['address'] . "</td>
                          <td>" . $row['salary']." JOD" . "</td>
                       
                
                          <td> <form  action='view.php' method='POST'><button class='btn btn-secondary' type='submit' name='view' value='" . $row['id'] . "'><i class='bi bi-eye'></i></button></form></td>
                          <td> <form  action='Edite Form.php' method='POST'><button class='btn btn-primary' type='submit' name='update' value='" . $row['id'] . "'><i class='bi bi-pencil-square' ></i></button></form></td>
                          <td> <form  action='./OtherPages/Del.php' method='POST'><button class='btn btn-danger' type='submit' name='delete' value='" . $row['id'] . "'><i class='bi bi-trash'></i></button></form></td>
                  
                  
                                </tr>";
        }
        echo "</table><br><Br>";
      }
    }


    




    ?>

  </div>
  <?php include "./OtherPages/footer.php"; ?>
</body>

</html>