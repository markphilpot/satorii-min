$(document).ready(function() {

	$('table tr').removeClass('odd even');
	$('table tr:even').addClass('odd');
	
	
	$('#comments-list .comment-meta').append(' <span class="meta-sep">|</span> <a class="reply" href="#reply">Reply</a>');
	
	$('.reply').click(function() {
		var who = $(this).parents('.comment').children('.comment-author').children('.fn').text();
		var where = $(this).parents('.comment').attr('id');
		var replyTo = '<a href="#'+where+'">@'+who+':</a> ';
		var previousText = $('textarea#comment').val();
		var previousTextLength = previousText.length;
		var newText = previousText + '\r\r' + replyTo;
		
		var commentForm = $('form#commentform').clone(true);
		$('div#respond, form#commentform').remove();
		commentForm.insertAfter(this);
		
		if ( previousTextLength != '0' ) { 
			$('textarea#comment').focus().val(newText)
		} else {
			$('textarea#comment').focus().val(replyTo)
		}
		
		return false;
	});
});
