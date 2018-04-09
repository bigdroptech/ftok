$(document).ready(function(){
	
    //$('.body').hide();
	
    $.fn.preload = function() {
    this.each(function(){
        $('<img/>')[0].src = this;
    });
	}
	
	// Usage:
	
	$(['../img/Architect203.jpg']).preload();

	
	$('#gwijie').click(function(e){
	e.preventDefault();
	window.open("http://www.gwijie.com");
	});
	
});

$(window).load(function() {
  $('.body').fadeIn(1000);
  
  function process(html)
	{
		if(parseFloat(html))
		{
		$('#err').slideDown(1000);
		$('#err').html(html);
		}
		else
		{
		$('#err').html(html);
		$('#err').slideDown(1000);
		}
	}
	
	$('form#reg').submit(function(e){
	e.preventDefault();
		
		var email = $('#email').val();
		var password = $('#password').val();
		var conf = $('#conf').val();
		var type = $('#type').val();
		
	
		$.ajax({
			url: 'home/register',
			type: 'POST',
			data: 'email=' + email + '&password=' + password + '&conf=' + conf + '&type=' + type,
			success: function(html){
					process(html);
					}
		});
	});
	
	function change_($li,$div,$hide,$class)
	{
		$($li).click(function(){
		$($div).show();
		$($hide).hide();
		$(this).removeClass('label-inverse').addClass('label-ftok');
		$($class).removeClass('label-ftok').addClass('label-inverse');
		});	
	}
	
	change_('.history','#history','#vision,#mission,#goal,#profiles,#values,#objectives','.history,.vision,.mission,.goal,.profiles,.values,.objectives');
	change_('.vision','#vision','#history,#mission,#goal,#profiles,#values,#objectives','.history,.mission,.goal,.profiles,.values,.objectives');
	change_('.mission','#mission','#history,#vision,#goal,#profiles,#values,#objectives','.history,.vision,.goal,.profiles,.values,.objectives');
	change_('.goal','#goal','#history,#vision,#mission,#profiles,#values,#objectives','.history,.vision,.mission,.profiles,.values,.objective');
	change_('.profiles','#profiles','#history,#vision,#mission,#goal,#values,#objectives','.history,.vision,.mission,.goal,.values,.objectives');
	change_('.values','#values','#history,#vision,#mission,#goal,#profiles,#objectives','.history,.vision,.mission,.goal,.profiles,.objectives');
	change_('.objectives','#objectives','#history,#vision,#mission,#goal,#profiles,#values','.history,.vision,.mission,.goal,.profiles,.values');

    $('#slider').nivoSlider({
        effect:'fade',
        slices:15,
        animSpeed:500,
        pauseTime:3000,
        directionNav:true, //Next & Prev
        directionNavHide:true, //Only show on hover
        controlNav:true, //1,2,3...
        keyboardNav:true, //Use left & right arrows
        pauseOnHover:true, //Stop animation while hovering
        manualAdvance:false, //Force manual transitions
        captionOpacity:0.8, //Universal caption opacity
        beforeChange: function(){},
        afterChange: function(){},
        slideshowEnd: function(){} //Triggers after all slides have been shown
    });
	
	
$('.gallery img').click(function(e){
e.preventDefault();
$('#myModalOrder').modal('show');
var src = $(this).attr('src');
var title = $(this).attr('title');
$('.modal-body').html('<img src="'+src+'" />');
$('.modal-header h4').html(title);
});

});