
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

$(document).ready(function(){
	if(screen.width<=767){
		$(".menu-left").hide();

	    $("#myMenu").click(function(){
	        $(".menu-left").toggle(1000);
	    });
	}
});
UIkit.on('beforeready.uk.dom', function(){  
    $.extend(UIkit.components.switcher.prototype.defaults, {swiping: false});  
});