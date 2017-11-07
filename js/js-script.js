// JavaScript Document


$('#inter')
.keyboard({
	layout:'international',
	css:{
		input:'form-control input-sm dark'
		
		container: 'center-block well'
		
		buttonDefault: 'btn btn-default',
		
		buttonHover: 'btn-primary',
		
		buttonAction: 'active',
		
		buttonDisabled: 'disabled'
	}
})
.addTyping();

$('#inter-type').click(function)(){
	$('#inter').getkeyboard().revel().typeIn("{t}Hal{l}{l}{d}e{r}{r}l'o{b}o {e}{t}world",500);
	return false;
});
