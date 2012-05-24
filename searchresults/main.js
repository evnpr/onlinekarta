//<!--This tutorial is provided in part by Server Intellect Web Hosting Solutions http://www.serverintellect.com-->
//<!- - Visit http://www.JavaScriptatoms.com for more JavaScript Tutorials
/* $(document).ready(function () {
    var theBall = $('#ball'); var theBall2 = $('#ball2');
    var theSquare = $('#square');
 

    theBall.click(function () {
        theSquare.animate({
            height:"toggle",
            width:"800",      
        },600,'easeOutQuint')
		
	
	});

    theBall2.click(function () {
	 
	theSquare.animate({
            height:"toggle",
            width:"300",        
        },500,'easeInOutBounce')
		
	
	});
});
*/

function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("ball");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "click here to see the map";
  	}
	else {
		ele.style.display = "block";
		text.style.color = "white";
		text.innerHTML = "click here to hide the map - choose the satellite mode to make it clearer";
	}
} 
