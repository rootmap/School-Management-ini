// Ams IT Message Counter

$(function(){
	 var $remaining = $('#remaining'),
	$messages = $remaining.next();

	$('#message').keyup(function(){
		var chars = this.value.length,
			messages = Math.ceil(chars / 160),
			remaining = messages * 160 - (chars % (messages * 160) || messages * 160);
	
		$remaining.text(remaining + ' /');
		$messages.text(messages);
	});
});