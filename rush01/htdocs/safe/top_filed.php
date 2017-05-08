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
	  <a class="navbar-brand" href="index.php"><img class="minilog" src="img/minilogo.png"></a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">

		<!-- Bare menu deroulant -->
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu deroulant <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li role="separator" class="divider"></li>
			<li><a href="#">Fille</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Garçon</a></li>
		</ul>
		<!-- Trucs a droite -->
</li>
		<ul class="nav float_r navbar-nav navbar-right">
<?PHP
if (empty($_SESSION['loggued_on_user'])) :
?>
			<li>
				<a href="log.php"><button type="submit" class="btn btn-default btn-sm">Log In</button></a>
			</li>
			<li>
				<a href="create.php"><button type="submit" class="btn btn-default btn-sm">Sign In</button></a>

			</li>
<?PHP endif; ?>

<?PHP
if (isset($_SESSION['loggued_on_user']) && $_SESSION['loggued_on_user'] != "") :
?>
			<li>
			<p class="cracra">Welcome <?PHP echo $_SESSION['loggued_on_user'] ?></p>
			</li>
<?PHP endif; ?>
</ul>
</div>
</div>
</nav>
