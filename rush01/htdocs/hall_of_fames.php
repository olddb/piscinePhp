<?php

require_once("top_filed.php");

?>

<center>
<table class="hall">
<caption>
<img src="img/hof.jpg">
</caption>
<tr class="salut">
<th>Classement</th>
<th>Login</th>
<th>Score</th>
<th>Victimes</th>
</tr>

<?php
//session_start();
if (file_exists("../private/score"))
{
	$file = file_get_contents("../private/score");
	$row = unserialize($file);
	function sortByOrder($a, $b) {
		return (-1 * ($a['score'] - $b['score']));
	}
	usort($row, 'sortByOrder');
	$i = 0;
	foreach ($row as $value)
	{
?>
<tr>
	<td> <?php $i++; echo $i; ?></td>
	<td><?php echo $value['login']; ?></td>
	<td><?php echo $value['score']; ?></td>
	<td><?php echo $value['Victimes'];?></td>
</tr>

<?php } ?>
</table>
</center>
<img src="img/left.png" style="float:left">
<img src="img/right.png" style="float:right">
<?php
}
include_once("footer.php");
?>
