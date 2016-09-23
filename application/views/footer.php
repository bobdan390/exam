<footer>
	<div class="row ft">
		<span>Empresas</span>
		<ul>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
		</ul>
	</div>

	<div class="row ft">
		<span>Servicios</span>
		<ul>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
		</ul>
	</div>

	<div class="row ft">
		<span>Valora un Servicio</span>
		<ul>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
		</ul>
	</div>

	<div class="row ft">
		<span>Contacto</span>
		<ul>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
			<li>Lorem Ipsum</li>
		</ul>
	</div>
	<div class="clearfix"></div>
	<div class="row ft1">
		<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum risus ac cursus mollis. Praesent pulvinar fringilla neque, in eleifend dui dapibus sit amet. </p>
	</div>

</footer>
<script type="text/javascript">
	$( "form" ).submit(function( event ) {
	    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	    	$(".nombre,.email,.estado,.ciudad,.pass,.re-pass,.descripcion,.re-pass").css("border","initial");
	        if( $(".nombre").val() == "" ){
	            $(".nombre").css("border","2px solid red");
	            return false;
	        }else if( $(".email").val() == "" || !emailreg.test($(".email").val()) ){
	        	$(".email").css("border","2px solid red");
	            return false;
	        }else if( $(".estado").val() == ""){
	        	$(".estado").css("border","2px solid red");
	            return false;
	        }else if( $(".ciudad").val() == "" ){
	        	$(".ciudad").css("border","2px solid red");
	            return false;
	        }else if( $(".pass").val() == "" ){
	        	$(".pass").css("border","2px solid red");
	            return false;
	        }else if( $(".re-pass").val() == "" ){
	        	$(".re-pass").css("border","2px solid red");
	            return false;
	        }else if( $(".pass").val() != $(".re-pass").val()){
	        	$(".pass").css("border","2px solid red");
	        	$(".re-pass").css("border","2px solid red");
	            return false;
	        }else if( $(".descripcion").val() == "" ){
	        	$(".descripcion").css("border","2px solid red");
	            return false;
	        }else{
	        	return true;
	        }
	 
	  event.preventDefault();
	});



</script>
</body>
</html>