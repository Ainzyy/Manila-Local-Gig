<?php 
// Connect to database
require_once('../config/admindb.php');
$query = "select * from artist_data";
$result = mysqli_query($con,$query)
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Use with Internet if possible for the best UI experience -->
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<!-- Add Data Modal -->
<div class="modal fade" id="artistadddata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Artist</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../config/adddata.php"  method="POST">
      <div class="modal-body">
        <!-- Forms -->
            
                <div class ="form-group">
                    <label> Artist ID </label>
                    <input type ="text" name="artist_id" class="form-control" placeholder="Enter Artist ID">
                </div>
                
                <div class ="form-group">
                    <label> Band Name </label>
                    <input type ="text" name="band_name" class="form-control" placeholder="Enter Band Name">
                </div>

                <div class ="form-group">
                    <label> Band Type </label>
                    <input type ="text" name="band_type" class="form-control" placeholder="Enter Band Type">
                </div>

                <div class ="form-group">
                    <label> Socials </label>
                    <input type ="text" name="ig_links" class="form-control" placeholder="Enter Social Media Links">
                </div>

      </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
        </div>
      </form>

    </div>
  </div>
</div>


<!-- Edit Data Modal -->
<div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Artist Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../config/updatedata.php"  method="POST">
      <div class="modal-body">
        <!-- Forms -->


                <input type="hidden" name="update_id" id="update_id">

                <div class ="form-group">
                    <label> Artist ID </label>
                    <input type ="text" name="artist_id" id="artist_id" class="form-control" placeholder="Enter Artist ID">
                </div>
                
                <div class ="form-group">
                    <label> Band Name </label>
                    <input type ="text" name="band_name" id="band_name" class="form-control" placeholder="Enter Band Name">
                </div>

                <div class ="form-group">
                    <label> Band Type </label>
                    <input type ="text" name="band_type" id="band_type" class="form-control" placeholder="Enter Band Type">
                </div>

                <div class ="form-group">
                    <label> Socials </label>
                    <input type ="text" name="ig_links" id="ig_links" class="form-control" placeholder="Enter Social Media Links">
                </div>

      </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
        </div>
      </form>

    </div>
  </div>
</div>

    <!-- Arist Dashboard -->
	<header class="header text-center">
		<a href="">Artist Dashboard</a>
		<div class="addData">
            <!-- ADD DATA BUTTON -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#artistadddata">
                    ADD DATA
                </button>


		</div>

	</header>


        <!-- Table -->
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
                                <!-- While Loop for proper data ingest scaling -->
                            <?php                
                                           
                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?> 
                                <td><?php echo $row['artist_id']?></td>
                                <td><?php echo $row['band_name']?></td>
                                <td><?php echo $row['band_type']?></td>
                                <td><?php echo $row['ig_links']?></td>
                                <td><button type ="button" class="btn btn-success editbutton">Edit</button></td>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<!-- edit script -->
<script>
    $(document).ready(function(){
        $('.editbutton').on('click',function() {


            $('#editdata').modal('show');

                $tr = $tr.children("td");

                var data = $tr.children("td").map(function() {
                    return $(this).text();

                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#artist_id').val(data[1]);
                $('#band_name').val(data[2]);
                $('#band_type').val(data[3]);
                $('#ig_links').val(data[4]); 
    
        }); 
        
    });
</script>

</body>
</html>
