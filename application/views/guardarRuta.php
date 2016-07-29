<div id="mapa"></div>
<form>
<div class="row">
	<div class="col-lg-12">
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
			    	<button class="btn btn-info col-lg-4" onclick="save()">Save Route</button>
			    </div>
			</div>
		</div>
	</div>
</div>
</form>
<script type="text/javascript" src="vendor/site/js/mapa.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXD3UDuMiDsm16Jz15K8qP3atUzRWWcBs&signed_in=true&libraries=places&callback=startMap" async defer></script>