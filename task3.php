<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="t4.css">
</head>
<body>
<div class="container">
	<form action="" method="post">
		<h2>Golbal Tech Intern</h2>
		<div class="content">
			<div class="input-box">
				<label>Full Name</label>
				<input type="text" name="name" placeholder="Enter Full Name" required="">
			</div>
			<div class="input-box">
				<label>Username</label>
				<input type="text" name="uname" placeholder="Enter Username" required="">
			</div>
			<div class="input-box">
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Your Email" required="">
			</div>
			<div class="input-box">
				<label>Mobile Number</label>
				<input type="tel" name="mobile" placeholder="Enter Your Mobile No." required="">
			</div>
			<div class="input-box">
				<label>Password</label>
				<input type="password" name="Password" placeholder="Enter Password" required="">
			</div>

			<div class="input-box">
				<label>Confirm Password</label>
				<input type="Password" name="Confirmpass" placeholder="Enter Confirm Password" required="">
			</div>
			<span class="gender-title">Gender</span>
			<div class="gender-category">
				<input type="radio" name="gender" id="male">
				<label>Male</label>
				<input type="radio" name="gender" id="female">
				<label>Female</label>
				<div class="button-container">
					<button type="submit">Register</button>
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>