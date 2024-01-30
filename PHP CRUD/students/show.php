<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>

<body>
    <section>
        <div>
            <button>
                <a href="student.php"> Add Student
                </a>
            </button>
            <div>
                <div>
                    <h2>Student List</h2>
                </div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Institution</th>
                                <th>Year</th>
                                <th>Subject</th>
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `students`";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $email = $row['clg'];
                                    $phone = $row['year'];
                                    $address = $row['subject'];
                                    $password = $row['result'];
                                    echo '<tr>
                                        <td>' . $id . '</td>
                                        <td>' . $name . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $phone . '</td>
                                        <td>' . $address . '</td>
                                        <td>' . $password . '</td>
                                    </tr>';
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>