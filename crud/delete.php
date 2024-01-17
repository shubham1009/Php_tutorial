<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['yes'])) {
    // Get the ID of the note to be deleted
    $id = $_GET["id"];

    // Delete the note from the database
    $sql = "DELETE FROM notes WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Note</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Delete Note</h2>

    <p>Are you sure you want to delete this note?</p>

    <form action="delete.php" method="get">
        <input type="hidden" name="yes" value="yes">
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        <input type="submit" value="Delete">
    </form>

    <br>

    <a href="index.php">Back to Notes</a>
</body>
</html>
