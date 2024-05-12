
<?php
// Include the database connection script
include 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is for retrieval
    if (isset($_POST['retrieveIdInput'])) {
        // Get ID for retrieval
        $retrieveId = $_POST['retrieveIdInput'];
        
        // Perform retrieval based on the ID
        // Example query:
        $retrieve_query = "SELECT * FROM students_info WHERE id = '$retrieveId'";
        $result = $conn->query($retrieve_query);
        
        if ($result->num_rows > 0) {
            // Fetch the first row of the result
            $row = $result->fetch_assoc();
            
            // Encode retrieved data as query parameters
            $urlParams = http_build_query($row);
            
            echo "$urlParams";
            // Redirect to display_data.php with query parameters
            header("Location: show.php?$urlParams");
            exit;
        } else {
            echo "No records found for the given ID.";
        }
    }
}
?>
