<?php
    require('config/config.php');
    require('config/db.php');

    $query = 'SELECT * FROM tasks';

    $result = mysqli_query($conn, $query);

    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($tasks);

    mysqli_free_result($result);

    mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link type=""text/css href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>TODO</title>

</head>
<body>

	<header>
		<h1>MY TO-DO LISTS</h1>
		<nav>
                <div class="row">
                    <ul class="main-nav">
                        <li><a href="<?php echo ROOT_URL;?>addtask.php">Add a to do</a></li>
                        <li><a href="#">Home</a></li>
                    </ul>
                </div>

        </nav>
        
        <?php foreach($tasks as $task) :?>

		        <div class="row">

			        <h2><?php echo $task['title']; ?></h2>
			        <small>Created on <?php echo $task['created_on']; ?> Deadline at <?php echo $task['deadline']?></small>
			        <br>
			        <a class="btn btn-full" href=" task.php?id=<?php echo $task['id'];?>">View Details</a>
			
		        </div>

        <?php endforeach; ?>
	</header>
	
<?php include('inc/footer.php'); ?>