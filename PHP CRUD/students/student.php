<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $clg = $_POST['clg'];
    $year = $_POST['year'];
    $subject = $_POST['subject'];
    $result = $_POST['result'];
    $sql = "INSERT INTO `students` (name,clg,year,subject,result) values ('$name','$clg','$year','$subject','$result')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:show.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style></style>
</head>

<body>
    <div>
        <form action="" method="post">
            <div>
                <p>Name : </p>
                <input type="text" name="name" placeholder="Enter your name" autocomplete="off">
            </div>
            <div>
                <p>Institution Name :</p>
                <input type="text" name="clg" placeholder="Enter your Institutuion name" autocomplete="off">
            </div>
            <div>
                <p>Passing Year:</p>
                <input type="year" name="year" placeholder="Enter your Passing year" autocomplete="off">
            </div>
            <div>
                <p>Subject Name :</p>
                <input type="text" name="subject" placeholder="Enter your Subject" autocomplete="off">
            </div>
            <div>
                <p>Result :</p>
                <input type="text" name="result" placeholder="Enter your Result" autocomplete="off">
            </div>
            <br>
            <br>
            <button name="submit">Submit</button>
        </form>
    </div>
</body>

</html>