	</div>
</div>	
<script src="<?php echo base_url().'assets/materialize/js/jquery-2.2.3.min'?>.js"></script>	
<script src="<?php echo base_url().'assets/materialize/js/materialize.min'?>.js"></script>
<script src="<?php echo base_url().'assets/materialize/js/materialize'?>.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".button-collapse").sideNav();
		
		$('.modal-trigger').leanModal();

		var cambio = false;
		$('#menu li a').each(function(index) {
			if(this.href.trim() == window.location){
				$(this).parent().addClass("active");
				cambio = true;
			}
		});

		var cambio = false;
		$('#menu_gerente li a').each(function(index) {
			if(this.href.trim() == window.location){
				$(this).parent().addClass("active");
				cambio = true;
			}
		});

		var cambio = false;
		$('#menu_admin li a').each(function(index) {
			if(this.href.trim() == window.location){
				$(this).parent().addClass("active");
				cambio = true;
			}
		});

		var hab_selec=0;
		$( 'input[type="checkbox"]' ).on( 'click', function() {
			
			if( $(this).attr("checked") =="checked"){
				$(this).removeAttr("checked");
				hab_selec=0;
			} else {
				$(this).attr("checked","checked");
				hab_selec=1;
			}

			if( $(this).attr("checked") =="checked"){
				$(this).attr("name", $(this).attr("id"));
			} 
		});	

		$( '#aceptar' ).on( 'click', function() {
			if( hab_selec!=1){
				alert("Debe seleccionar al menos una (1) habitación");
			} else {
				$(this).attr("type","submit");
			}
		});

		$('select').material_select();

	});

	$('.datepicker').pickadate({
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 15, // Creates a dropdown of 15 years to control year
		format: 'yyyy-mm-dd' //Format date
	});
</script>
</body>
<footer class="container row white black-text ">
    <div class="col s12 z-depth-2">
		© 2016 Copyright
			<div class="right">
				Elaborado por:
				<br>
				Bárbara Lozada CI: 20.950.179
				<br>
				Sara Garrido   CI: 21.017.654
			</div>
</footer>
</html>