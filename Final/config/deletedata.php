<?php
// Connection
$connection = mysqli_connect("localhost","root","");
$db =  mysqli_select_db($connection,'gig_website');


// Update the Database
if(isset($_POST['deletedata']))
{


    $artist_id = $_POST['delete_id'];


    $query ="DELETE FROM artist_data WHERE artist_id='$artist_id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Deleted");</script>';
        header('Location: ../admin/artistadmin.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted");</script>'; 
    }

}
  

?>