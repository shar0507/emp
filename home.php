<?php 
include 'connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>
<body>
    <h1>Employee Management</h1>
    <button><a href="addEmp.php">Add Employee</a></button>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="select * from `emp`";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        echo '<tr>
                        <th scope="row"> '.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td><button><a href="delete.php?deleteid='.$id.'">Delete</a></button></td>
                        </tr>';


                    }
                }                
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>