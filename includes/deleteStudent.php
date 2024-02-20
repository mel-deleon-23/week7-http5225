<?php

    if(isset($_GET['delete'])){
    // print_r($_POST);
    $id = $_GET['id'];

    //connection string
    include('../includes/connect.php');
    $query = "DELETE FROM students WHERE 'id' = '$id'";
    // VALUES ('$fname', '$lname', '$mark', '$imageURL')";

    $student = mysqli_query($connect, $query);

    if($student){
        // echo "Success";
        header("Location: ../index.php");
    }
    else {
        echo mysqli_error($connect);
    }
    
    }
    else {
        echo "You shouldn't be here!";
    }
    // mysqli_close($connect);
?>