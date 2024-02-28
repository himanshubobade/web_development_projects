<?php
    require('config/config.php');
    require('config/db.php');



    if(isset($_POST['delete'])){
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
        $query = "DELETE FROM tasks WHERE id ={$delete_id}";

    mysqli_query($conn, $query);
    header('location: index.php');
    }



    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = 'SELECT * FROM tasks WHERE id = '.$id;

    $result = mysqli_query($conn, $query);

    $task = mysqli_fetch_assoc($result);
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
		<h1><?php echo $task['title']; ?></h1>
        <div class="row">
            <nav>
                <div class="row">
                    <ul class="main-nav">
                        
                        <li><a  href="<?php echo ROOT_URL ; ?>">Back</a></li>
                    </ul>
                </div>

            </nav>

            
            <small>Created on <?php echo $task['created_on']; ?> <br>Deadline <?php echo $task['deadline']; ?></small>
            <p class="bodytext"><?php echo $task['note']; ?></p>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <input type="hidden" name="delete_id" value="<?php echo $task['id']; ?>">
                <input type="submit" name="delete" value="Delete" class="btn btn-ghost">

            </form>
            

        </div>
		
			
	</header>

</body>
</html>