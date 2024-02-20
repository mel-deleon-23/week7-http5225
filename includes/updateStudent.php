<?php

    if(isset($_POST['grades'])){
    // print_r($_POST);
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mark = $_POST['mark'];
    $imageURL = $_POST['imageURL'];

    //connection string
    include('../includes/connect.php');
    $query = "UPDATE students SET fname = '$fname', lname = '$lname', mark = '$mark', imageURL = '$imageURL' 
    WHERE id = '$id'; 

    $student = mysqli_query($connect, $query);

    if($student){
        echo "Success";
    }
    else {
        echo "Failed: " .mysqli_error($connect);
    }
    
    }
    else {
        echo "You shouldn't be here!";
    }
    // mysqli_close($connect);
?>