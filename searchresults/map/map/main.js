//<!--This tutorial is provided in part by Server Intellect Web Hosting Solutions http://www.serverintellect.com-->
//<!--Visit http://www.JavaScriptatoms.com for more JavaScript Tutorials-->
$(document).ready(function () {
    var theBall = $('#ball');var theBall2 = $('#ball2');
    var theSquare = $('#square');

   

    theBall.click(function () {
        theSquare.animate({
            height:"toggle",
            width:"300",        
        },1000,'easeOutElastic')
		
	
	});theBall2.click(function () {
        theSquare.animate({
            height:"toggle",
            width:"300",        
        },1000,'easeOutElastic')
		
	
	});
});