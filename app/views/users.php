<h1>Users</h1>
<p>List of our users.</p>

<?php
// USING MYSQLI
// $query = "SELECT * FROM users";
// $result = $db->query($query);

// // Check if the query was successful
// if ($result) {
//     // Fetch and display the results
//     while ($row = $result->fetch_assoc()) {
//         echo "User: " . $row['username'] . "<br>";
//     }
// } else {
//     // Handle query failure
//     echo "Error executing query: " . $db->error;
// }
// // Close the database connection when done
// $database->closeConnection();

// USING PDO
$query = "SELECT * FROM users";
$result = $db->query($query);

// Check if the query was successful
if ($result) {
    // Fetch and display the results
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "User: " . $row['username'] . "<br>";
    }
} else {
    // Handle query failure
    $errorInfo = $db->errorInfo();
    echo "Error executing query: " . $errorInfo[2];
}

// Close the database connection when done
$database->closeConnection();