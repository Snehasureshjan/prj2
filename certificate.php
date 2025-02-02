<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SOPHROSYNE 360</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <script src='assets/js/jquery.min.js'></script>
</head>
<body>

<section class="w3l-login-6">
	<div class="login-hny">
		<div class="form-content">

			<div class="form-right">
				<div class="overlay">
					<div class="grid-info-form">
						<h5>SOPHROSYNE 360</h5>
						<h3>Search and find your needs.</h3>
						<p>Find your vaccination certificates here.</p>
						<a href="index.php" class="read-more btn">Read More</a>
					</div>
				</div>
			</div>
			<div class="form-left">
				<div class="top">
					<a href="index.php" class="brand-logo">Back</a>
				</div>
				<div class="middle">
					<h4>Search certificate</h4>
					<p>Welcome! Please enter your certificate.</p>
				</div>
				<form action="certificate_chk.php" method="post" class="signin-form" autocomplete="off">
					<div class="form-input">
						<label>Secure Id</label>
						<input type="text" name="mdcpatid" placeholder="Enter secure id" required />
					</div>	
                    <div class="form-input">
						<label>O T P</label>
						<input type="text" name="otp" placeholder="Enter Otp" required />
					</div>					
					<button class="btn">Search</button>
				</form>
			</div>
		</div>
	</div>
</section>