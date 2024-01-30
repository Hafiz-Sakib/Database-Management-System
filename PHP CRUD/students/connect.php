<?php
$con  = new mysqli('localhost', 'root', '', 'students');
if (!$con) {
    die(mysqli_error($con));
}
