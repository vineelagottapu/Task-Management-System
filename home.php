<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['role'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome - Task Management</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		/* General Styling */
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body, html {
			height: 100%;
			font-family: Arial, sans-serif;
		}

		/* Background Image */
		.hero-image {
			background: url('https://miro.medium.com/v2/resize:fit:1000/1*8G1vA7egoxrL4Bb7RAgnPQ.jpeg') no-repeat center center/cover;
			height: 100vh;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			color: #fff;
			text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
		}

		.hero-content {
			text-align: center;
		}

		.hero-content h1 {
			font-size: 3rem;
			margin-bottom: 20px;
		}

		/* Header Section with Navigation */
		.header {
			width: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			padding: 10px 20px;
			position: absolute;
			top: 0;
			left: 0;
			display: flex;
			justify-content: space-between;
			align-items: center;
			color: white;
		}

		.header .logo {
			font-size: 1.5rem;
			font-weight: bold;
		}

		.nav-links {
			display: flex;
			gap: 20px;
		}

		.nav-links a {
			color: white;
			text-decoration: none;
			font-size: 1.1rem;
			padding: 10px 20px;
			border: 2px solid white;
			border-radius: 5px;
			transition: all 0.3s ease;
		}

		.nav-links a:hover {
			background-color: white;
			color: black;
		}

		/* Responsive Design */
		@media (max-width: 768px) {
			.hero-content h1 {
				font-size: 2rem;
			}

			.nav-links a {
				font-size: 1rem;
				padding: 8px 15px;
			}
		}
	</style>
</head>
<body>

	<!-- Header -->
	<div class="header">
		<div class="logo">
			Task Management System
		</div>
		<div class="nav-links">
			<a href="login.php">Login</a>
			<a href="register.php">Register</a>
		</div>
	</div>

	<!-- Hero Section -->
	<div class="hero-image">
		<div class="hero-content">
			<h1>Welcome to Task Management</h1>
			<p>Efficiently manage your tasks and stay organized</p>
		</div>
	</div>

</body>
</html>
