function rumble(){
	setTimeout("trumpslap()", 250);
	setTimeout("clintonslap()", 250);
	setTimeout("trumpback()", 250);
	setTimeout("clintonback()", 250);
	setTimeout("rumble()",250);
}
			
function trumpslap(){
	$("#ts").animate({left: "540px"});
	$('#ts').animate({webkitTransform: 'rotate(45deg)', left: '+=5%'});
}

function trumpback(){
	$("#ts").animate({left: "80px"});
}
			
function clintonslap(){
	$("#cs").animate({left: "540px"});
	$('#cs').animate({webkitTransform: 'rotate(45deg)', left: '-=5%'});
}

function clintonback(){
	$("#cs").animate({left: "1000px"});
}