<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-box active">
                <h2>Welcome to Dashboard</h2>
                <div class="alert success">
                    <p><strong>Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</strong></p>
                    <p>Email: <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                    <p>You have successfully logged in.</p>
                </div>
                
                <div style="text-align: center; margin-top: 30px;">
                    <a href="logout.php" class="btn" style="display: inline-block; text-decoration: none; padding: 12px 30px;">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
