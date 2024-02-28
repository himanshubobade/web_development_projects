<?php
    require('config/config.php');
    require('config/db.php');

    if(isset($_POST['submit'])){
        echo 'Submitted';

        $title=mysqli_real_escape_string($conn, $_POST['title']);
        $note=mysqli_real_escape_string($conn, $_POST['note']);
        $deadline=mysqli_real_escape_string($conn, $_POST['deadline']);

        $query = "INSERT INTO tasks(title,note,deadline) VALUES('$title','$note','$deadline')";

        mysqli_query($conn, $query);
        header('location: index.php');

    }

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
		<h1>Add a TODO</h1>
		<nav>
                <div class="row">
                    <ul class="main-nav">
                        <li><a href="<?php echo ROOT_URL ; ?>">Home</a></li>
                    </ul>
                </div>

        </nav>
        
        <div class="row">
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

                <div class="form-group">
                    <div class="col span-1-of-3">
                        <label>Title</label>
                    </div>    
                    <div class="col span-2-of-3">    
                        <input type="text" name="title" class="form-control">
                    </div>

                </div>
                    
                
                <div class="form-group">

                    <div class="col span-1-of-3">
                        <label>Note</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="note" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col span-1-of-3">
                        <label for="start">Start date:</label>
                    </div>    
                    <div class="col span-2-of-3">    
                        <input type="date" id="start" name="deadline" value="2020-05-24" min="2014-01-01" max="2024-12-31">

                    </div>

                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-full">
            </form>
            
        </div>
        
	</header>

</body>    
	
<?php include('inc/footer.php'); ?>