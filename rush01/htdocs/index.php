<?PHP require_once("top_filed.php"); ?>
<?php 
if (empty($_SESSION['game_on']))
	require_once("init_game.php");
?>
<?php 
if (isset($_SESSION['game_on'])) :
?>
<?php
	require_once("init_game2.php");
?>
<form action="handle.php" method="POST">
<div style="margin-top:5%" class="col-md-3" id="control">
<select name="ship" class="form-control">
<?php
$i = -1;
while (++$i < $_POST['nb_ship'])
	echo "<option value=\"" . $_POST['ship'.$i]['ship_id'] . "\">" . $_POST['ship'.$i]['name'] . "</option>" . PHP_EOL;
?>

</select>
<select name="action" class="form-control">
  <option value="move_n">Deplacement North</option> 
  <option value="move_s">Deplacement South</option> 
  <option value="move_e" selected>Deplacement East</option> 
  <option value="move_w">Deplacement West</option> 
  <option value="rotate_l">Rotation Left</option>
  <option value="rotate_r">Rotation Right</option>
</select>
<select name="value" class="form-control">
  <option value="1" selected>1</option> 
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option> 
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option> 
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="20">20</option>
</select>
<center> <button style="margin-top:10px" action="handle.php" type="submit" class="btn btn-default">Go !</button> 
</form>
<br>
<br>
<form action="shoot.php" method="post">
<select name="ship" class="form-control">
<?php
$i = -1;
while (++$i < $_POST['nb_ship'])
	echo "<option value=\"" . $_POST['ship'.$i]['ship_id'] . "\">" . $_POST['ship'.$i]['name'] . "</option>" . PHP_EOL;
?>

</select>
<button type="submit" class="btn btn-default btn-sm">Exterminate !</button></center>
</div>
</form>

	<div class="battlefield"> 
<?php
if (isset($_SESSION["hero"]))
{
	unset($_SESSION["hero"]);
	echo "<p style=\"text-align:center; color:#7C7F87\">YOU DESTROYED A SHIP ! CONGRATULATIONS !!!!!<br /> (s'il a le meme couleur que toi, tu a tue un membre de ta flotte...)<br /><br />.. Monstre....</p>";
}
?>
<?PHP
require_once("draw.php");
require_once("map_display.php");
?>
	</div>

<?php 
endif;
?>

<?php
if ($_SESSION['loggued_on_user'])
	require_once("view_tchat.html.php");
?>
<?PHP require_once("footer.php"); ?>
