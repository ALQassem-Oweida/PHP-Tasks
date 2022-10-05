<?php

require "./OtherPages/Databaseconfig.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Employee Edit</title>
    <style>

        img{
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit:cover;
        }

        .imgUp{
            margin-left: 100px;
        }


    </style>
</head>
<body>
  
    <div class="container mt-5">

     
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Employee
                            <a href="index.php" class="btn btn-info float-end">Go BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_POST['update']))
                        {
                            $employee_id = mysqli_real_escape_string($conn, $_POST['update']);
                            $query = "SELECT *   FROM employees where id='$employee_id'" ;
                    
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $employee = mysqli_fetch_array($query_run);
                             
                                ?>

                                <form action="./Editing Code.php" method="POST">

          
                                
                                <div class="mb-3">
                                <center> <label>User img  </label></center><br>
                                      <center>  <img  name="image" src="<?=$employee['img'];?>" ></center>
                                    </div>
                                  
                                    <center><input class="imgUp" name="uploadedimage" type="file"></center>


                                    <input type="hidden" name="id" value="<?= $employee['id']; ?>">

                                    <div class="mb-3">
                                        <label>Name : </label>
                                        <input type="text" name="name" value="<?=$employee['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address : </label>
                                        <input type="text" name="address" value="<?=$employee['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Salary : </label>
                                        <input type="text" name="salary" value="<?=$employee['salary'];?>" class="form-control">
                                    </div>

                                    
                         


                                 
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update User
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>