
<?php 
include "./config/dbconnect.php";
    
    $id= $_GET['id'];
    $query="DELETE FROM contact where id='$id'";

    $delete_query= mysqli_query($con, $query);

    if($delete_query){
        header("location: viewContact.php");
        echo"Item Deleted";
    }

    else{
        echo"Not able to delete";
    }

?>
    