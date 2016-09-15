$(document).ready(function(){
	rumble(); 
});

function rumble(){
	setTimeout("trumpslap()", 250);
	setTimeout("clintonslap()", 250);
	setTimeout("trumpback()", 250);
	setTimeout("clintonback()", 250);
	setTimeout("rumble()",250);
}
			
function trumpslap(){
	$("#ts").animate({left: '+=8%'});
}

function trumpback(){
	$("#ts").animate({left: '-=8%'});
}
			
function clintonslap(){
	$("#cs").animate({left: '-=8%'});
}

function clintonback(){
	$("#cs").animate({left: '+=8%'});
}