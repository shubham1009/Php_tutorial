<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Insert data into the database
    $sql = "INSERT INTO notes (title, content) VALUES ('$title', '$content')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Note</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Create New Note</h2>

    <form action="create.php" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <br>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <br>

        <input type="submit" value="Create">
    </form>

    <br>

    <a href="index.php">Back to Notes</a>
</body>
</html>
