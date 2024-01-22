<?php

// Establish a connection to your database (replace with your database details)
$conn = new mysqli("localhost", "username", "password", "database");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Display student information in a table
if ($result->num_rows > 0) {
    echo '<table class="table-auto w-full mb-8">';
    echo '<thead><tr><th class="border px-4 py-2">ID</th><th class="border px-4 py-2">Name</th><th class="border px-4 py-2">Section</th><th class="border px-4 py-2">Department</th><th class="border px-4 py-2">Email</th><th class="border px-4 py-2">Phone Number</th></tr></thead>';
    echo '<tbody>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td class="border px-4 py-2">' . $row['ID'] . '</td>';
        echo '<td class="border px-4 py-2">' . $row['name'] . '</td>';
        echo '<td class="border px-4 py-2">' . $row['section'] . '</td>';
        echo '<td class="border px-4 py-2">' . $row['department'] . '</td>';
        echo '<td class="border px-4 py-2">' . $row['email'] . '</td>';
        echo '<td class="border px-4 py-2">' . $row['phone_no'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
} else {
    echo "No students found";
}

// Close the database connection
$conn->close();

?>
