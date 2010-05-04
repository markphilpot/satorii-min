$(document).ready(function() {
	
	$('div#content div[id^=post]').each(function() { 
		var postId = $(this).attr('id');
		$('div#'+postId+' a[href$=".png"]').addClass('fancybox').attr('rel', postId);
		$('div#'+postId+' a[href$=".gif"]').addClass('fancybox').attr('rel', postId);
		$('div#'+postId+' a[href$=".jpg"]').addClass('fancybox').attr('rel', postId);
		$('div#'+postId+' a[href$=".PNG"]').addClass('fancybox').attr('rel', postId);
		$('div#'+postId+' a[href$=".GIF"]').addClass('fancybox').attr('rel', postId);
		$('div#'+postId+' a[href$=".JPG"]').addClass('fancybox').attr('rel', postId)
	});
	
	$('a.fancybox').fancybox({
		'overlayShow' : true,
		'hideOnContentClick': true
		});
		
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
