<div>
	<div id="my_chat" style="widht:560px; height:120px; max-width:560px; max-height:120px; overflow:auto;"></div>
	<form action="chat/create.php" method="post">
		<br />
		<label>Message: <input type="text" id="text" name="text" value=""/>
		<input type="submit" id="tchat_send" name="submit" value="OK"/>
	</form>
</div>
<script>
function	load()
{
	setTimeout(function()
	{
		$.ajax({
			url: "chat/index.php", 
			type: "GET",
			success: function(html)
			{
				$("#my_chat").html(html);
			}	
		});	
		load();
	}, 500);
}

$("#tchat_send").click(function(e) {
	e.preventDefault();
	var message = encodeURIComponent($("#text").val());
	if (message != "")
	{
		$.ajax({
			url: "chat/create.php",
			type: "POST",
			data: "text=" + message
		});
	}
	$("#text").val("");
});
load();
</script>
