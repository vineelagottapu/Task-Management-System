<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employee') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
</head>
<body>
    <h1>Welcome, Employee!</h1>
    <p>Hello <?php echo $_SESSION['username']; ?> 👋</p>
    <a href="logout.php">Logout</a>
</body>
</html>
