<base href="<?= base_url() ?>"></base>
<div id="mapa"></div>
<form>
<div class="row">
	<div class="col-lg-12">
	<?php 	$attributes = array( 'id' => 'form', 'method'=> 'post', 'role'=> 'form','class'=> 'form-horizontal');
							echo form_open('home/saveItem', $attributes);?>	
		<div class="col-lg-4">
			<hr>
			<div class="form-group">
				<div class="col-lg-12">
					<label class="control-label col-lg-4">Start Point:</label>
					<input type="text" class="form-control col-lg-2" id="direccionRest" placeholder="Start Point">
				</div>
			</div>
			<div class="form-group"> 
			    <div class="col-lg-12">
			    <br>
			    <input type="hidden"  name="positions" id="positions">
			    <input type="submit" class="btn btn-info col-lg-4" id='enviarDatos' value="Guardar Rutas">
			    </div>
			</div>
		</div>
	</div>
	
</div>
</form>
<script type="text/javascript" src="vendor/site/js/mapa.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQpAltksQGBLkPx5BJb8Mxo_pWPFxkipM&signed_in=true&libraries=places&callback=startMap" async defer></script>