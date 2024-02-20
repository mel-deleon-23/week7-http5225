<?php

    if(isset($_POST['addGrades'])){
    // print_r($_POST);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mark = $_POST['mark'];
    $imageURL = $_POST['imageURL'];

    //connection string
    include('../includes/connect.php');
    $query = "INSERT INTO students (fname, lname, mark, imageURL)
              VALUES (
                '".mysqli_real_escape_string( $connect, $fname)."',
                '".mysqli_real_escape_string( $connect, $lname)."', 
                '".mysqli_real_escape_string( $connect, $mark)."', 
                '".mysqli_real_escape_string( $connect, $imageURL)."')";
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