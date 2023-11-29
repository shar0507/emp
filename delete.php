<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `emp` where id=$id";
    $result=mysqli_query($con, $sql);

    if($result){
        //echo "Deleted successfully";
        header('location:home.php');
    }else{
        die(mysqli_error($con));
    }
}

?>