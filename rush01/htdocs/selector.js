/*	jQuery(function($) {
		var $ed = $('#editor')
		, $style = $('#styles')
		, $button = $('#preview')
		;
	$ed.val($style.html());
	$button.click(function() {
		$style.html($ed.val());
		return false;
	});
	});
*/

function action(x, y) {
		console.log("X: " + x + ", Y:" + y);
//		Ajajax.send("Post", "toto.php " + x  " "+  y);
//		var str = Ajavax.reply();
}

	$('td').click(function () {
		var str = $(this)[0].id;
		str = str.substr(1, str.length);
		var x = str.split("_")[0];
		var y = str.split("_")[1];
		action(x, y);
	});
