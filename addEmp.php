<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];

$sql="insert into `emp`(name, email) values('$name', '$email')";
$result=mysqli_query($con, $sql);

if($result){
    //echo "Data inserted successfully";
    header('location:home.php');
}else{
    die(mysqli_error($con));
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
    <div>
        <h1>Register new Employee</h1>
        <form method="post">
            <div>
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" autocomplete="off">         
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" autocomplete="off">         
            </div>
            <div>
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>

    </div>
    
</body>
</html>