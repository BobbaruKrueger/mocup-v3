<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Ads App</title>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
	<div id="site-wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-12 text-right">
						<!-- logged in user information -->
						<?php  if (isset($_SESSION['username'])) : ?>
							<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> | <a href="index.php?logout='1'" style="color: red;">logout</a></p>
						<?php endif ?>
					</div>
				</div>
			</div>
		</header>
		<section id="section1" class="subHeader">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header">
							<h2>Home Page</h2>
						</div>
						<div class="content">
							<!-- notification message -->
							<?php if (isset($_SESSION['success'])) : ?>
							  <div class="error success" >
								<h3>
								  <?php 
									echo $_SESSION['success']; 
									unset($_SESSION['success']);
								  ?>
								</h3>
							  </div>
							<?php endif ?>
							<p><a href="app/index.php">Go to app</a></p>
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
