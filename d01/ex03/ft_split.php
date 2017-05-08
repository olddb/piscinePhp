<?PHP
function is_empty($arr)
{
	if (strcmp($arr, " ") != 0)
		return ($arr);
	return 0;
}
function ft_split($str)
{
	$rtn = explode(' ', $str);
	$rtn = array_filter($rtn, "is_empty");
	asort($rtn);
	$rtn = array_values($rtn);
	return $rtn;
}
?>
