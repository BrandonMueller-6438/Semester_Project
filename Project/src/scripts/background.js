$(document).ready(function(){
    var $win = $(window);

    var background = document.getElementById("background");
    var speed = 1.5;
    window.onscroll = function(){var yOffset = window.pageYOffset;topDiv.style.backgroundPosition = "0px "+ (yOffset / speed) + "px";}

    /*$('div.background').each(function(){
        var scroll_speed = 10;
        var $this = $(this);
        $(window).scroll(function() {
            var bgScroll = -(($win.scrollTop() - $this.offset().top)/ scroll_speed);
            var bgPosition = 'center '+ bgScroll + 'px';
            $this.css({ backgroundPosition: bgPosition });
        });
    });*/
});