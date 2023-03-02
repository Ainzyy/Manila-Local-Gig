<?php
// Connection
$connection = mysqli_connect("localhost","root","");
$db =  mysqli_select_db($connection,'gig_website');


// Update the Database
if(isset($_POST['insertdata']))
{

    $artist_id = $_POST['artist_id'];
    $band_name = $_POST['band_name'];
    $band_type = $_POST['band_type'];
    $ig_links = $_POST['ig_links'];
    $image_url = $_POST['image_url'];
    $descript = $_POST['descript'];

    $query ="INSERT INTO artist_data (`artist_id`,`band_name`,`band_type`,`ig_links`,`image_url`,`descript`) VALUES ('$artist_id','$band_name','$band_type','$ig_links','$image_url', '$descript')";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo '<script> alert("Data Saved");</script>';
        header('Location: ../admin/artistadmin.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
    }

}
  

?>