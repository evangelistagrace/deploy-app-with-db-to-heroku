<?php

require 'config.php';

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>
    <h3>Welcome <?php echo $email ?>!</h3>
    <br />
    
    <form action="login.php" method="post">
        <button class="btn btn-primary" name="logout">Logout</button>
    </form>
    
</body>
</html>

