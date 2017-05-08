<?PHP
function ft_is_sort($tab)
{
	$sort_t = array();
	$sort_t = $tab;
	sort($sort_t);
	if (array_diff_assoc($sort_t, $tab))
		return NULL;
	return 1;
}
?>
