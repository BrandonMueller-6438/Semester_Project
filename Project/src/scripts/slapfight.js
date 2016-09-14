function rumble(){
	setTimeout("trumpslap()", 250);
	setTimeout("clintonslap()", 250);
	setTimeout("trumpback()", 250);
	setTimeout("clintonback()", 250);
	setTimeout("rumble()",250);
}
			
function trumpslap(){
	$("#ts").animate({left: '+=33%'});
}

function trumpback(){
	$("#ts").animate({left: '-=33%'});
}
			
function clintonslap(){
	$("#cs").animate({left: '-=33%'});
}

function clintonback(){
	$("#cs").animate({left: '+=33%'});
}