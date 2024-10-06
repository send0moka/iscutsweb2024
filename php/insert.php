<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
</head>
<body>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="status">Status:</label>
        <select id="status" name="status" required>
            <option value="administrator">Administrator</option>
            <option value="member">Member</option>
        </select><br><br>
        
        <input type="submit" value="Insert User">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'koneksi.php';
        
        $username = $conn->real_escape_string($_POST['username']);
        $status = $conn->real_escape_string($_POST['status']);
        
        $sql = "INSERT INTO user (username, status) VALUES ('$username', '$status')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New user inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    ?>
</body>
</html>