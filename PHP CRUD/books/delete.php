<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM books WHERE ID='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Entry Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Error Deleting Book");
}
}else{
    echo "Invalid Request";
}
?>