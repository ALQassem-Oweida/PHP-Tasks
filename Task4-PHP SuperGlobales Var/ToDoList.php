<?php 
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "todo");


	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			echo "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: ToDoList.php');
		}
	}	

  

?>



<!DOCTYPE html>
<html>
<head>
	<title>ToDo List</title>
</head>
<body>
	<div class="heading">
		<h2 >ToDo List : </h2>
	</div>
	<form method="post" action="ToDoList.php" >
    
		<input type="text" name="task" >
		<button type="submit" name="submit"  >Add</button>
        </form>

<table>
	

      <h3>Your Tasks : </h3>
	<tbody>
		<?php 
		// select all tasks if page is visited or refreshed
		$tasks = mysqli_query($db, "SELECT * FROM tasks");

		$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td > <?php echo $row['task']; ?> </td>
				
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>
</body>
</html>