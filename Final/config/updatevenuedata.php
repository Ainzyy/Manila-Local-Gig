<?php
// Connection
$connection = mysqli_connect("localhost","root","");
$db =  mysqli_select_db($connection,'gig_website');


// Update the Database
if(isset($_POST['updatedata']))
{


    $gig_id = $_POST['gig_id'];
    $gig_name = $_POST['gig_name'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $gig_image_url = $_POST['gig_image_url'];
    $gig_desc = $_POST['gig_desc'];

    $query ="UPDATE schedule SET gig_id ='$gig_id', gig_name = '$gig_name', place= '$place', date = '$date', gig_image_url = '$gig_image_url', gig_desc = '$gig_desc'  WHERE gig_id='$gig_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Updated");</script>';
        header('Location: ../admin/venueadmin.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved");</script>'; 
    }

}
  

?>