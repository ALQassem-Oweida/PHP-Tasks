<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="./OtherPages/style/create.css" rel="stylesheet">

  

<?php     require "./OtherPages/Databaseconfig.php";?>
</head>    
<body>




<div class="BackToHome"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
</svg><a></div>

<div class="grid text-center">
  <div class="g-col-4">
   
  <h3>Add a new Employee</h3>
 

  <form class="formAll" role="form" action="./create_code.php" enctype="multipart/form-data" method="POST">
                          <div >Image : <input name="uploadedimage" type="file"></div>
                          <div> Name : &nbsp;&nbsp;&nbsp;                     
                          <input  type="text" id="name" name="name" placeholder="name"  ></div>
                          <div>  Salary : &nbsp;&nbsp;&nbsp;   <input  type="number" id="salary" name="salary" placeholder="salary"  ></div>
                          <div>  Address :  <input  type="text" id="address" name="address" placeholder="address" ></div>
                          <button class="addbtn" type="submit" id="submit" name="Add" >Add</button>  
  </form>


  </div>

</div>
<?php 
include 'create_code.php';
?> 
 <?php include './OtherPages/footer.php';?> 






</body>
</html>


