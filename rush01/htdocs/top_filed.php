<?php
require_once("header.php");
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand"><img style="margin-top:-20px" class="minilog" src="img/minilogo.png"></a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">

		<!-- Bare menu deroulant -->


		<!-- Trucs a droite -->
		<ul class="nav navbar-nav navbar-right" >
<?PHP
if (empty($_SESSION['loggued_on_user'])) :
?>
			<li>
				<a href="log.php"><button type="submit" class="btn btn-default btn-sm">Log In</button></a>
			</li>
			<li>
				<a href="subscribe.php"><button type="submit" class="btn btn-default btn-sm">Sign In</button></a>

			</li>

<?PHP endif; ?>

<?PHP
if (isset($_SESSION['loggued_on_user']) && $_SESSION['loggued_on_user'] != "") :
?>

		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ma vie, mon oeuvre <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li role="separator" class="divider"></li>
				<a href="index.php">Partie en cours</a>
			</li>
			<li role="separator" class="divider"></li>
				<a href="hall_of_fames.php">Hall of Fames</a>
			</li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Mes Stats</a></li>
		</ul>
</li>

			<li>
				<a href="logout.php">
				<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
			</li>
<?PHP endif; ?>
</ul>
</div>
</div>
</nav>
