<?php
// Include the database connection script
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['idInput'];
    $fname = $_POST['fnameInput'];
    $lname = $_POST['lnameInput'];
    $age = $_POST['ageInput'];
    $cgpa = $_POST['cgpaInput'];
    
    // Check if ID already exists
    $check_query = "SELECT id FROM students_info WHERE id = '$id'";
    $result = $conn->query($check_query);
    if ($result->num_rows > 0) {
        echo "Error: ID already exists!";
    } else {
         // SQL query to insert data into the table
    $sql = "INSERT INTO `students_info` (id, fname, lname, age, cgpa) 
    VALUES ('$id', '$fname', '$lname', '$age', '$cgpa')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
