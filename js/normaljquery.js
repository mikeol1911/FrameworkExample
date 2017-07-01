  $(function(){
  	 
  	 $(".col-lg-5ths").hover(function(){
		  	 	$(".alt-tabs-icon:eq("+$(this).index()+")").stop(true).animate({
					fontSize: "65px",
				}, 600, function() {
					// Animation complete.
				});
  	 	
  	 },function(){
  	 
  	 			$(".alt-tabs-icon:eq("+$(this).index()+")").stop(true).animate({
					fontSize: "48px",
				}, 400, function() {
					// Animation complete.
				});
				
  	 });


	/*	
	$(".notactive").click(function(){
		$(".activeb").addClass("notactive");
		$(".activeb").removeClass("activeb");
		$(".activec").addClass("notactive");
		$(".activec").removeClass("activec");
		$(this).addClass("activeb");
	});
	*/
	
	

});
        
        
        
        
        
var slider = document.getElementById('keyboard');

noUiSlider.create(slider, {
	start: 1000,
	step: 10,
	range: {
		'min': 1000,
		'max': 2000
	}
});


slider.noUiSlider.on('update', function( values, handle ) {
	var capitalformat=values.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	var capitalformat=capitalformat.replace(".00","");
	var tocapital=values.toString().replace(".00","");
	
	$(".monto span").html("$"+capitalformat);
	$(".capital").text('$' +capitalformat);
	$("#capital").val(tocapital);
	calcularinteres();
	sumar();
	
});




	function changeplazo(dias){
	$("#plazo").val(dias);
	calcularinteres();
	sumar();
	adddate();
	
	if(dias>1)
		{ var text=" días."}
	else
		{ var text=" día."}
		
	$(".plazo span").html(dias+text);

	//Esta variable nos permite marcar en "activeb" (verde) el día seleccionado
	var diasrelative=dias-1;
	$( ".notactive a" ).removeClass("activeb");
	$( ".notactive:eq("+diasrelative+") a" ).addClass("activeb");
	
}

 var pesos=1000;
 
 
 //Animación del Slider
function timeout() { 
		    setTimeout(function () { 
		         
		        if(pesos<1310) 
		        { 
			        slider.noUiSlider.set(pesos);
					//console.log(pesos);		    	     
		    	    timeout(); 
		    	    
		    	    pesos+=20;
		    	} 
		    	else 
		    	{ 
		    	 
		    	} 
		    }, 80); 
		} 
		