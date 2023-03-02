<?php 

require_once('config/admindb.php');
$query = "select * from artist_data";
$result = mysqli_query($con,$query)


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<header class="header">
		<a href="">Artist Dashboard</a>
		<div class="addData">
			<a href="logout.php" class="btn btn-primary text-center">ADD DATA</a>

		</div>

	</header>



    <div class = "container">
        <div class ="row mt-5">
            <div class ="col">
                <div class ="card mt-5">
                    <div class = "card-header">
                        <h2 class = "display-6 text-center">Artist Database</h2>
                    </div>
                    <div class ="card-body">
                        <table class = "table table-bordered text-center">
                            <tr class = "bg-dark text-white">
                                <td>Artist Id</td>
                                <td>Band Name</td>
                                <td>Band Type</td>
                                <td>Socials</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                            <?php                               
                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?>
                                <td><?php echo $row['artist_id']?></td>
                                <td><?php echo $row['band_name']?></td>
                                <td><?php echo $row['band_type']?></td>
                                <td><?php echo $row['ig_links']?></td>
                                <td><a href="#" class="btn btn-primary">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                            </tr>
                                <?php
                                }
                                ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
