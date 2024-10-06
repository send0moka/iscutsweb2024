<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Number Display</title>
</head>
<body>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumber = intval($_POST["number"]);
        echo "<h3>Odd numbers from 1 to $inputNumber:</h3>";
        for ($i = 1; $i <= $inputNumber; $i += 2) {
            echo $i . " ";
        }
    }
    ?>
</body>
</html>