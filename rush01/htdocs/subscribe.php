<?php
require_once("top_filed.php");
?>
<div class="container">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
		<center>	<img  class="deglon" src="img/minilogo.png" alt="logo"> </center>
			<div class="account-wall">
			<h1 class="text-center login-title">Sign in to continue to Warhammer 40 k</h1>
				<form class="form-signin" action="create.php" method="POST">
				<input name="login" type="text" class="form-control" placeholder="Login" required autofocus>
				<input name="passwd" type="password" class="form-control" placeholder="Password" required>
				<input name="passwd2" type="password" class="form-control" placeholder="Re-enter your password" required>
				<button name="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="OK">
					Create and Sign in</button>
				</form>
			</div>
		</div>
</div>
<?php require_once("footer.php"); ?>
