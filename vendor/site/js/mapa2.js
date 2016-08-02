
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
	getRoute();
}


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