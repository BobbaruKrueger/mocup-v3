<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Login</title>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
	<div id="site-wrapper">
		<header id="header" class="site-header"></header>
		<section id="section1" class="lfW">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="card loginW">
							<div class="card-body">
								<h2 class="card-title text-center">Login</h2>
								<form method="post" action="login.php">
									<?php include('errors.php'); ?>
									<div class="form-group">
										<label for="username">Username:</label>
										<input type="text" class="form-control" id="username" name="username" placeholder="Username">
									</div>
									<div class="form-group">
										<label for="password">Password:</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="Password">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="login_user">Login</button>
									</div>
									<p>
										Dont have an account? <a href="register.php">Sign up</a>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer" class="site-footer"></footer>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
</body>
</html>
