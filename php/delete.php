<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>
    <form method="post">
        <label for="username">Username to delete:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <input type="submit" value="Delete User">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'koneksi.php';
        
        $username = $conn->real_escape_string($_POST['username']);
        
        $sql = "DELETE FROM user WHERE username = '$username'";
        
        if ($conn->query($sql) === TRUE) {
            echo "User deleted successfully";
        } else {
            echo "Error deleting user: " . $conn->error;
        }
        
        $conn->close();
    }
    ?>
</body>
</html>