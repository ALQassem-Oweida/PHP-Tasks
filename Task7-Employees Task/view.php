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

    <title>Employee View</title>
    <style>
      .row{
        width: 50%;
        margin: auto;
      }
    </style>
</head>

<body>

    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Details
                            <a href="index.php" class="btn btn-info float-end">Go BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_POST['view'])) {
                            $employee_id = mysqli_real_escape_string($conn, $_POST['view']);
                            $query = "SELECT *   FROM employees where id='$employee_id'";

                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $employee = mysqli_fetch_array($query_run);

                        ?>
                                <form action='Edite Form.php' method='POST'>


                                  <center>  <div class="mb-3">

                                        <div class="card" style="width: 18rem;">
                                            <img src="<?= $employee['img']; ?>" class="card-img-top" alt="User img">
                                            <div class="card-body">
                                                <h6 class="card-title"> <?= $employee['name']; ?></h6>
                                                <h6 class="card-text">Address : <?= $employee['address']; ?>.</h6>
                                                <h6 class="card-text">Salary : <?= $employee['salary']; ?> JOD</h6>
                                                <div class="mb-3">
                                                    <button type="submit" name="update" class="btn btn-primary" value=<?= $employee['id']; ?>>
                                                        Update User
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                </form>
                            </center>  
                        <?php
                            } else {
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