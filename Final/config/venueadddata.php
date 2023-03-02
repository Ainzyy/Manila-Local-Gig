<?php
// Connection
$connection = mysqli_connect("localhost","root","");
$db =  mysqli_select_db($connection,'gig_website');


// Update the Database
if(isset($_POST['insertdata']))
{

    $gig_id = $_POST['gig_id'];
    $gig_name = $_POST['gig_name'];
    $place = $_POST['place'];
    $date = $_POST['date'];

    $query ="INSERT INTO schedule (`gig_id`,`gig_name`,`place`,`date`) VALUES ('$gig_id','$gig_name','$place','$date')";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        echo '<script> alert("Data Saved");</script>';
        header('Location: ../admin/venueadmin.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
    }

}
  

?>