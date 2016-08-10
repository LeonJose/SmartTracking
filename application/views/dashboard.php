<base href="<?= base_url() ?>"></base>
<div id="mapa"></div>
<div class="row">
	<div class="col-md-5">
		<div class="form-group">
			<select id="rutascamiones" class="form-control">
				<option value="1">Ruta 1</option>
				<option value="2">Ruta 2</option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-5">
		<div class="form-group">
		<label class="form-control">Ruta:  <span id="ruta"></span> </label>
		<label class="form-control">Temperatura: <span id="temperatura"></span></label>
		<label class="form-control">Fecha: <span id="fecha"></span></label>
		</div>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQpAltksQGBLkPx5BJb8Mxo_pWPFxkipM&signed_in=true&libraries=geometry,places&callback=obtenerRutas" async defer></script>

<script type="text/javascript" src="vendor/site/js/mapa2.js"></script>
