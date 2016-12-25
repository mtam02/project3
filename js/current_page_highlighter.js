$(function(){
	$('nav li a').each(function() {
		if ($(this).prop('href') == window.location.href) {
			$(this).parent('li').addClass('active');
		}
	});
});

$(function(){
	if (window.location.href.substr(window.location.href.lastIndexOf("/")+1) == "index.php") {
		$('nav li:first-child').addClass('active');
	}
});

$(function(){
	if (window.location.href.substr(window.location.href.lastIndexOf("/")+1) == "contact-thanks.php") {
		$('nav li:last-child').addClass('active');
	}
});