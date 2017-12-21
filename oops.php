<?php 
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Oops</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Oops..!</h2>
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

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p><strong>Something went Wrong.</strong></p>
			<p>Problem in connecting with server.</p>

		<?php endif ?>
	</div>
		
</body>
</html>
