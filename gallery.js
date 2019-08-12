var $overlay = $("<div id='overlay'></div>");

$('body').append($overlay);

var $image = $("<img id='clickImage'>");

$overlay.append($image);

var $close = $("<img id='closeImage'>");
 
$overlay.append($close);

$('#imageGallery a').click(function(event){
	event.preventDefault();
	
	var imageSource = $(this).attr('href');
	$image.attr('src',imageSource);
	$close.attr('src','images/user.jpg');
	$overlay.show();
});

$close.click(function(){
	$($overlay).hide();
});