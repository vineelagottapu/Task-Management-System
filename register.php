<?php
// Start session
session_start();

// Include database connection
require_once 'DB_connection.php';

// Handle form submission
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hashing
    $role = $_POST['role'];

    // Insert into users table
    $sql = "INSERT INTO users (full_name, username, password, role) VALUES (:full_name, :username, :password, :role)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':full_name', $full_name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':role', $role);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! You can now log in.'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Registration failed!');</script>";
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        html, body {height: 100%;margin: 0; font-family: Arial;}
        body { font-family: Arial; padding: 20px;display:flex;justify-content: center;align-items: center;}
        form { max-width: 400px; margin: auto; background: #f4f4f4; padding: 20px; border-radius: 8px; }
        input{ width: 90%; padding: 10px; margin: 10px 0; }
        select { width: 95%; padding: 10px; margin: 10px 0; }
        form h2 {text-align: center;margin-bottom: 20px;}
        input[type="submit"] { background: #007BFF; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <form method="post" action="">
       <h2>Register</h2>
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="role" required>
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="employee">Employee</option>
        </select>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>