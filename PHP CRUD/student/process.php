<?php

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establish a connection to your database (replace with your database details)
    $conn = new mysqli("localhost", "root", "", "student");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process form based on action
    $action = $_POST['action'];
    if ($action == 'add') {
        $name = $_POST['name'];
        $section = $_POST['section'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];

        // Insert into database
        $sql = "INSERT INTO students (name, section, department, email, phone_no) VALUES ('$name', '$section', '$department', '$email', '$phone_no')";
        if ($conn->query($sql) === TRUE) {
            echo "Student added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}

?>
