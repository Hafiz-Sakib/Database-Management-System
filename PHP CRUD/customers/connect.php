<?php
$con  = new mysqli('localhost', 'root', '', 'customers');
if (!$con) {
    die(mysqli_error($con));
}
