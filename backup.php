<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('reusables/nav.php') ?>

    <div class="conatiner">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Update Student Profile</h1>
            </div>
        </div>
    </div>

    <?php 
        $id = $_GET['id'];
        $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
        $query = "SELECT * FROM students WHERE `id` = '$id'";
        $student = mysqli_query($connect, $query);

        $result = $student -> fetch_assoc();

    ?>

    <div class="row">
        <div class="col">

            <form action="includes/addGrades.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>" >
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="first name"
                value="<?php echo $student['fname']; ?>">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="last name"
                value="<?php echo $student['lname']; ?>">
            </div>
            <div class="mb-3">
                <label for="mark" class="form-label">Marks</label>
                <input type="number" class="form-control" id="mark" name="mark" aria-describedby="enter marks"
                value="<?php echo $student['mark']; ?>">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Image Path</label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="image URL"
                value="<?php echo $student['imageURL']; ?>">
            </div>
            
            <button type="submit" name="grades" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>


</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php include('reusables/nav.php') ?>

    <div class="conatiner">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Add Grades</h1>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <form action="includes/addGrades.php" method="POST">
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="first name">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="last name">
            </div>
            <div class="mb-3">
                <label for="mark" class="form-label">Marks</label>
                <input type="number" class="form-control" id="mark" name="mark" aria-describedby="enter marks">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Image Path</label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="image URL">
            </div>

            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            
            <button type="submit" name="grades" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


</body>
</html>





