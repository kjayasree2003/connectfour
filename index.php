<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Connect Four</title>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="styles.css">

</head>

<body>
		<div id="main-container">

			<div id="player">

				<h1 id="player-type">Player - 1</h1>

			</div>

			<div id="grid">

				<div class="row">

					<div class="col">

						<button class="btn btn-1"></button>

					</div>

					<div class="col">

						<button class="btn btn-2"></button>

					</div>

					<div class="col">

						<button class="btn btn-3"></button>

					</div>

					<div class="col">

						<button class="btn btn-4"></button>

					</div>

					<div class="col">

						<button class="btn btn-5"></button>

					</div>

					<div class="col">

						<button class="btn btn-6"></button>

					</div>

					<div class="col">

						<button class="btn btn-7"></button>

					</div>

				</div>

				<div class="row">

					<div class="col">

						<button class="btn btn-8"></button>

					</div>

					<div class="col">

						<button class="btn btn-9"></button>

					</div>

					<div class="col">

						<button class="btn btn-10"></button>

					</div>

					<div class="col">

						<button class="btn btn-11"></button>

					</div>

					<div class="col">

						<button class="btn btn-12"></button>

					</div>

					<div class="col">

						<button class="btn btn-13"></button>

					</div>

					<div class="col">

						<button class="btn btn-14"></button>

					</div>

				</div>

				<div class="row">

					<div class="col">

						<button class="btn btn-15"></button>

					</div>

					<div class="col">

						<button class="btn btn-16"></button>

					</div>

					<div class="col">

						<button class="btn btn-17"></button>

					</div>

					<div class="col">

						<button class="btn btn-18"></button>

					</div>

					<div class="col">

						<button class="btn btn-19"></button>

					</div>

					<div class="col">

						<button class="btn btn-20"></button>

					</div>

					<div class="col">

						<button class="btn btn-21"></button>

					</div>

				</div>

				<div class="row">

					<div class="col">

						<button class="btn btn-22"></button>

					</div>

					<div class="col">

						<button class="btn btn-23"></button>

					</div>

					<div class="col">

						<button class="btn btn-24"></button>

					</div>

					<div class="col">

						<button class="btn btn-25"></button>

					</div>

					<div class="col">

						<button class="btn btn-26"></button>

					</div>

					<div class="col">

						<button class="btn btn-27"></button>

					</div>

					<div class="col">

						<button class="btn btn-28"></button>

					</div>

				</div>

				<div class="row">

					<div class="col">

						<button class="btn btn-29"></button>

					</div>

					<div class="col">

						<button class="btn btn-30"></button>

					</div>

					<div class="col">

						<button class="btn btn-31"></button>

					</div>

					<div class="col">

						<button class="btn btn-32"></button>

					</div>

					<div class="col">

						<button class="btn btn-33"></button>

					</div>

					<div class="col">

						<button class="btn btn-34"></button>

					</div>

					<div class="col">

						<button class="btn btn-35"></button>

					</div>

				</div>

				<div class="row">

					<div class="col">

						<button class="btn btn-36"></button>

					</div>

					<div class="col">

						<button class="btn btn-37"></button>

					</div>

					<div class="col">

						<button class="btn btn-38"></button>

					</div>

					<div class="col">

						<button class="btn btn-39"></button>

					</div>

					<div class="col">

						<button class="btn btn-40"></button>

					</div>

					<div class="col">

						<button class="btn btn-41"></button>

					</div>

					<div class="col">

						<button class="btn btn-42"></button>

					</div>

				</div>

			</div>

			<button type="button" id="reset-btn">Play Again</button>

		</div>
		
		
		<div>
			<a id="reset-btn" style="margin:650px;" href="logout.php">Logout</a>
		</div>
	<br>

		<script src="script.js"></script>

</body>

</html>