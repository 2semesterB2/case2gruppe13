// Snippet fra: http://d2o0t5hpnwv4c1.cloudfront.net/378_jqueryKeyboard/demo/index.html

$(function(){
	var $write = $('#product-search'),
		shift = false,
		capslock = false;
	
	$('#keyboard li').click(function(){
		var $this = $(this),
			character = $this.html(); // If it's a lowercase letter, nothing happens to this variable
		
		// Shift keys
		if ($this.hasClass('left-shift') || $this.hasClass('right-shift')) {
			$('.letter').toggleClass('uppercase');
			$('.symbol span').toggle();
			
			shift = (shift === true) ? false : true;
			capslock = false;
			return false;
		}
		
		// Caps lock
		if ($this.hasClass('capslock')) {
			$('.letter').toggleClass('uppercase');
			capslock = true;
			return false;
		}
		
		// Delete
		if ($this.hasClass('delete')) {
			var html = $write.val();
			
			$write.val(html.substr(0, html.length - 1));
			return false;
		}
		
		// Special characters
		if ($this.hasClass('symbol')) character = $('span:visible', $this).html();
		if ($this.hasClass('space')) character = ' ';
		if ($this.hasClass('tab')) character = "\t";
		if ($this.hasClass('return')) character = "\n";
		
		// Uppercase letter
		if ($this.hasClass('uppercase')) character = character.toUpperCase();
		
		// Remove shift once a key is clicked.
		if (shift === true) {
			$('.symbol span').toggle();
			if (capslock === false) $('.letter').toggleClass('uppercase');
			
			shift = false;
		}
		
		// Add the character - her er html udskiftet med val, for at keyboardet virker
		$write.val($write.val() + character);
	});
});// JavaScript Document


 // viderebygning toggle kode fra nina - virker
$(document).ready(function(){
	
  $.fn.mytoggle =function(mytime) {
		if(this.css("display")=="none"){
			this.fadeIn(mytime);
		}
		
		else {
			this.fadeOut(mytime);
		}
  };
	

	$("#product-search").click(function(){
        $("#keyboard").mytoggle(1000);

	});
}); 