
var mapa;
var marcador;
var linemarker;
var direccion;
var latitud='32.508752';
var longuitud='-116.989058';
var info;
var linea;
var latitudStatic;
var longitudStatic;
var cobertura=[];
var propertyMarker;


function startMap()
{
	centro = new google.maps.LatLng(latitud, longuitud); //Establecer el punto
	var atributosMap=
	{
		center: centro,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		panControl: false,
		panControlOptions:false,
		scaleControl: false,
		zoom:12
	};
	mapa=new google.maps.Map(document.getElementById('mapa'), atributosMap);
	addMarker( mapa);
	marcador.addListener('dragend', capturePosition);
	//input manipulado por el usuario
	direccion=document.getElementById('direccionRest');
	//invoca la busqueda
	shearch();
}



function shearch()
{
	var active=true;
	//objecto  de clase google.maps.places.Automcomplete
	var lugar= new google.maps.places.Autocomplete(direccion);
	lugar.bindTo('bounds', mapa);

	lugar.addListener('place_changed', function()
	{
		marcador.setVisible(false);
		var lugarMarcador=lugar.getPlace();

		if(!lugarMarcador.geometry) { window.alert("No se encuentra la ubicación"); return;}
		if(lugarMarcador.geometry.viewport) { mapa.fitBounds(lugarMarcador.geometry.viewport);}
		else { mapa.setCenter(lugarMarcador.geometry.location); mapa.setZoom(18); }
		marcador.setPosition(lugarMarcador.geometry.location);

		//Capturar la posicion del marcador una vez concluida la shearch
		latitudStatic=marcador.getPosition().lat();
		longitudStatic=marcador.getPosition().lng();

		//mueves el marcador de lugar
		 marcador.setDraggable(true);

		linea= new google.maps.Polyline({ strokeColor: '#C5C5C5', strokeWeight: 5});
		//escucha el click para dibujar
		mapa.addListener('click', coverage);
		linea.setMap(mapa);
		marcador.setVisible(true); //muestra el marcador

		var direccionDescom='';
		if(lugarMarcador.address_components)
		{
			direccionDescom=[
			(lugarMarcador.address_components[0] & lugarMarcador.address_components[0].short_name || ''),
			(lugarMarcador.address_components[1] & lugarMarcador.address_components[1].short_name || ''),
			(lugarMarcador.address_components[2] & lugarMarcador.address_components[2].short_name || ''),
			(lugarMarcador.address_components[3] & lugarMarcador.address_components[3].short_name || '')
			].join('');
		}

	});
}

function capturePosition(event)
{
	console.log(marcador.getPosition().lat());
	console.log(marcador.getPosition().lng());
}//end position

//dibujar la cobertura
function coverage(event)
{
	//latLng contiene las cordenadas
	var  ruta= linea.getPath() ;
	ruta.push(event.latLng);
	var propiedadesMarcador=
	{
		position: event.latLng,//event.latLng},
		title: '#' + ruta.getLength(),
		icon:
		{
			path: google.maps.SymbolPath.CIRCLE,
			strokeColor: '#000000',
			scale: 5,
			stokeWeight: 5
		},
		map:mapa
	};
	info= new google.maps.InfoWindow();
	linemarker=new google.maps.Marker(propiedadesMarcador);
	var getPositions=new Array(linemarker.getPosition().lat(), linemarker.getPosition().lng());
	cobertura.push(getPositions);

	linemarker.addListener('click', function()
	{

		console.log(cobertura);
	});

}//endLinear

function addMarker(mapa)
{
	//atributos del marcador
	propertyMarker=
	{
		icon:
		{
			path: google.maps.SymbolPath.CIRCLE,
			scale: 5,
			strokeColor:'#04B431',
			strokeWeight: 10
		},
		editable: true,
		map:mapa
	};
	marcador=new google.maps.Marker(propertyMarker);
	//agregar las propiedades a la clase Marcador
	 marcador.setMap(mapa);
}

function save()
{
	var a = {lat: '32.16', lon: '-16.214'};

	$.ajax({
		type: "POST",
		url: "http://localhost/smarttracking/index.php/route/index",
		data: {lat:'32.123456', lon:'-16.21478', positions: cobertura },
		success: function (req){
			console.log(req)
		}
	});
}

function getRoute()
{
	$.ajax({
		type: 'GET',
		url: 'http://localhost/smarttracking/index.php/route/find/'+ 1,
		success: function (req)
		{
			var rutas = [];
				$.each(req, function( index, value ) {
				  $.each(value, function( index, v ) {
					  rutas.push(new google.maps.LatLng(v.latitud, v.longitud))
					});
				});

			var lineas = new google.maps.Polyline({
		    path: rutas,
		    map: mapa,
		    strokeColor: '#000',
		    strokeWeight: 4,
		    clickable: false});
		}

		 });
}
