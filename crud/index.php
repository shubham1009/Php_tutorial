<?php
include 'config.php';

// Fetch data from the database
$sql = "SELECT id, title, content FROM notes";
$result = mysqli_query($conn, $sql);
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
    <h2>Notes</h2>

    <form action="search.php" method="GET" onsubmit="return validateForm()">
        <label for="search">Search here:</label>
        <input type="text" name="search" id="search" placeholder="Enter search term" !important>
        <button type="submit">Search</button>
    </form>



    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>

        <?php
        // Display data in a table
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["content"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br>

    <a href="create.php">Add New Note</a>

    <script>

        function validateForm() {
            var searchTerm = document.getElementById('search').value.trim();

            if (searchTerm === '') {
                alert('Please enter a search term.');
                return false; // Prevent form submission
            }

            return true; // Allow form submission
        }
    </script>
</body>

</html>