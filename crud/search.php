<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    // Get the search term from the form
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);

    // Construct the SQL query with the LIKE clause
    $sql = "SELECT * FROM notes WHERE title LIKE '%$searchTerm%'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {

        if (mysqli_num_rows($result) > 0) {
            // Display the search results in an HTML table
            echo "<table border='1'>
     <tr>
         <th>Title</th>
         <th>Content</th>
         <!-- Add more header columns as needed -->
     </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
         <td>" . $row['title'] . "</td>
         <td>" . $row['content'] . "</td>
         <!-- Add more cells as needed -->
     </tr>";
            }

            echo "</table>";
        } else {
            // No results found message
            echo "No results found.";
        }

        // Free the result set
        mysqli_free_result($result);
    } else {
        // If the query fails, handle the error
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
    ?>
</body>

</html>