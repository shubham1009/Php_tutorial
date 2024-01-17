<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Update data in the database
    $sql = "UPDATE notes SET title='$title', content='$content' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header("Location: index.php"); // Redirect to the index page
        exit(); // Make sure to exit after the header redirection
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Fetch data for the selected note
    $id = $_GET["id"];

    $sql = "SELECT id, title, content FROM notes WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Edit Note</h2>

    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

        <label for="title">Title:</label>
        <input type="text" name="title" value="<?php echo $row["title"]; ?>" required>

        <br>

        <label for="content">Content:</label>
        <textarea name="content" required><?php echo $row["content"]; ?></textarea>

        <br>

        <input type="submit" value="Update">
    </form>

    <br>

    <a href="index.php">Back to Notes</a>
</body>
</html>
