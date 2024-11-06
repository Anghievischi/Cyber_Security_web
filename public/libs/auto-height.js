(function(jQuery){
	 jQuery.fn.autoHeight=function(){

		jQuery(this).css('min-height', 'auto');
		elements= jQuery(this);
		var tempAltura =0;
		jQuery(elements).each(function(index, el) {
			jQuery(elements).css('min-height', '0');
			jQuery(elements).addClass('no__Transition');//precisa da classe css para  remover transições
			
			var altura = jQuery(this).outerHeight();

			if (altura>tempAltura) {
				tempAltura = altura;
				jQuery(elements).css('min-height', tempAltura+1); //+1 por que o a funcÃ£o autoHeight() arredonta pra baixo e quebra o grid
			}else{
				jQuery(elements).css('min-height', tempAltura+1);
			}
			jQuery(elements).removeClass('no__Transition');
		});
	}
})( jQuery );

//on resize chama "autoHeight"
function autoResize(element,minWidth) {
	jQuery(window).resize(function(event) {
		jQuery(element).css('min-height', 'auto');
		jQuery(element).addClass('no__Transition'); //precisa da classe css para  remover transições

		WindowWidth = jQuery(window).width();
		if(WindowWidth >= minWidth){
			jQuery(element).autoHeight();
		}else{
			jQuery(element).css('min-height', 'auto');
		}
		jQuery(element).removeClass('no__Transition');
	});
}
