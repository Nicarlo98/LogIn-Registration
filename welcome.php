<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Login/login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="./includes/style.css">
</head>

<body>
    <div class="container welcome-container">
        <header class="welcome-header">
            <h2>Welcome, <span class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></span>!</h2>
            <a href="./Login/logout.php" class="logout-btn">Logout</a>
        </header>
        <main class="welcome-content">
            <p>You have successfully logged in. Enjoy your stay!</p>
        </main>
    </div>
</body>

</html>