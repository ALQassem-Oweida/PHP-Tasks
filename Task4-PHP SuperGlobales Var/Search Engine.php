<!DOCTYPE html>
<html lang="en">
<head>
   
  
    <title>Task Search</title>
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body{
    margin-top:100px;
  }

  form {
    display:flex;
    flex-direction:column;
    align-items:center;
  }
 #search{
  margin:auto;
  margin-top:30px;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  width:40%;
 }
 h1{
  color:white;
  display:flex;
  margin:auto;
  margin-top:170px;
  text-align: center;
  border-radius: 20px;
  padding: 10px;

 }

 button{
  font-weight:bold;
  width:90px;
  padding:10px;
  border-radius: 20px;
  margin-top:20px;
 }

 button:hover{
 color:white;
 background-color: blue;
 }
 h5{
  color:red;
  display:flex;
    flex-direction:column;
    align-items:center;
 }


</style>

</head>
<body>



<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
     <h1>Search powered by Google</h1>
   <input id="search" type="text" name="searchedWord" placeholder="اكتب ما تبحث عنه يا اخ العرب">
   <button type="submit">Go</button>
</form>

<?php


echo '<body style="background-color:black">';



$name = ($_REQUEST['searchedWord']);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $name!=null ) {

    header("Location: https://www.google.com/search?q=$name");
  
}if ($_SERVER["REQUEST_METHOD"] == "POST" && $name==null ) {
  echo "<br><h5>**Please type something</h5>";
}





?>

</body>
</html>


