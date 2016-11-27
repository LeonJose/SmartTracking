
<div class="row">
	<div class="col-lg-12">
		<div class="col-lg-4">
			<div class="panel widget">
		         <div class="row row-table row-flush">
		            <div class="col-xs-4 bg-inverse text-center">
		               <em class="fa fa-bus fa-2x"></em>
		            </div>
		            <div class="col-xs-8">
		               <div class="panel-body text-center">
		                  <h4 class="mt0"><span id="ruta"></span></h4>
		                  <p class="mb0 text-muted">Ruta</p>
		               </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="col-lg-4">
			<div class="panel widget">
		         <div class="row row-table row-flush">
		            <div class="col-xs-4 bg-danger text-center">
		               <em class="fa fa-eyedropper fa-2x"></em>
		            </div>
		            <div class="col-xs-8">
		               <div class="panel-body text-center">
		                  <h4 class="mt0"><span id="temperatura"></span></h4>
		                  <p class="mb0 text-muted">Temperatura del cajon</p>
		               </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="col-lg-4">
			<div class="panel widget">
		         <div class="row row-table row-flush">
		            <div class="col-xs-4 bg-green text-center">
		               <em class="fa fa-clock-o fa-2x"></em>
		            </div>
		            <div class="col-xs-8">
		               <div class="panel-body text-center">
		                  <h4 class="mt0"><span id="fecha"></span></h4>
		                  <p class="mb0 text-muted">Ultima lectura</p>
		               </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-5">
		<div class="form-group">
		Seleccionar Ruta:
			<select id="rutascamiones" class="form-control">
				<option value="1">Ruta 1</option>
				<option value="2">Ruta 2</option>
			</select>
		</div>
	</div>
</div>
<div id="mapa"></div>

<!--div class="row">
	<div class="col-md-5">
		<div class="form-group">
		<label class="form-control">Ruta:  <span id="ruta"></span> </label>
		<label class="form-control">Temperatura: <span id="temperatura"></span></label>
		<label class="form-control">Fecha: <span id="fecha"></span></label>
		</div>
	</div>
</div-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASo4CStRsaBw-IaFaE_YFzgX64YstKYmY&signed_in=true&libraries=geometry,places&callback=obtenerRutas" async defer></script>

<script type="text/javascript" src="assets/site/js/mapa2.js"></script>
