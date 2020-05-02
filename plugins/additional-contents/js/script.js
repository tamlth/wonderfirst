$(function() {

	$(".addition_content > li > i.toolbar").click(function(){
		var id = 'addition_content_show_'+$(this).attr('value');
		if($(this).hasClass("content_show")){
			var content = 'show';
			$(this).removeClass('glyphicon-eye-close content_show').addClass('glyphicon-eye-open content_hide');
			$(this).attr('title', 'Hide content');
			$.ajaxSetup({async: false});
			$.post("",{
				fieldname: id,
				content: content,
				target: 'pages',
				token: token,
			});
		} else if($(this).hasClass("content_hide")){
			var content = 'hide';
			$(this).removeClass('glyphicon-eye-open content_hide').addClass('glyphicon-eye-close content_show');
			$(this).attr('title', 'Show content');
			$.ajaxSetup({async: false});
			$.post("",{
				fieldname: id,
				content: content,
				target: 'pages',
				token: token,
			});
		} else{
			var id = 'addition_content_'+$(this).attr('value');
			$.ajaxSetup({async: false});
			$.post("",{
				delac: id,
				token: token,
			});
			new Promise(resolve => setTimeout(resolve, 5000));
			window.location.reload();
		}
	});

	$(".content_plus").click(function(){
		var id = 'addition_content_'+$(this).attr('value');
		var content = "This is a new ediable area. By default it's hidden.";
		$.ajaxSetup({async: false});
		$.post("",{
			addac: id,
			content: content,
			target: 'pages',
			token: token,
		});
		new Promise(resolve => setTimeout(resolve, 5000));
		window.location.reload();
	});
});
