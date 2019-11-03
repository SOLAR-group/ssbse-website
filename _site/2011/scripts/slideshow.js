$(document).ready(
	function (){
		$("#pikame").PikaChoose({showCaption:false, 
								 autoPlay:true, 
								 speed:2000, 
								 transition:[4], 
								 showCaptions:false, 
								 text:{previous: "", next: ""}});
	
		$("#pikame").jcarousel({scroll:4, wrap:'circular',					
			initCallback: function(carousel) 
			{
		        $(carousel.list).find('img').click(function() {
		        	//console.log($(this).parents('.jcarousel-item').attr('jcarouselindex'));
		            carousel.scroll(parseInt($(this).parents('.jcarousel-item').attr('jcarouselindex')));
		        });
		    }
	    });

	});
	
document.write('<div class="pikachoose">');
document.write('<ul id="pikame" class="jcarousel-skin-pika">');
for (i=1; i<=10; i++) {
	document.write('<li><img src="images/photos/'+i+'.jpg" alt="" /></li>');
}
document.write('</ul>');
document.write('</div>');


