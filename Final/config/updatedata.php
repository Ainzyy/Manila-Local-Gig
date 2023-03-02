<?php
// Connection
$connection = mysqli_connect("localhost","root","");
$db =  mysqli_select_db($connection,'gig_website');


// Update the Database
if(isset($_POST['updatedata']))
{

    $id = $_POST['update_id'];
    $artist_id = $_POST['artist_id'];
    $band_name = $_POST['band_name'];
    $band_type = $_POST['band_type'];
    $ig_links = $_POST['ig_links'];

    $query ="UPDATE artist_data SET artist_id ='$artist_id', band_name = '$band_name', band_type= '$band_type', ig_links = '$ig_links' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo '<script> alert("Data Updated");</script>';
        header('Location: ../admin/artistadmin.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>'; 
    }

}
  

?>