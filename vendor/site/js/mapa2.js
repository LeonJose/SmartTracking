
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
var id = 1;

function obtenerRutas()
{

	$('#rutascamiones').change(function()
	{
		id = $("#rutascamiones").val();
		startMap();
	});
	startMap();
	setInterval( startMap, 8000);
}


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
	getRoute(id);

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


function getRoute(id)
{
	$.ajax({
		type: 'GET', 
		url: 'http://localhost/smarttracking/index.php/route/find/'+ id,
		success: function (req)
		{
			$.ajax({
			type: 'GET', 
			url: 'http://localhost/smarttracking/index.php/route/location/'+ id,
			success: function (req2) 
			{
				var pos = new google.maps.LatLng(req2.location[0]['latitud'],req2.location[0]['longitud']);
				 
				var marker = new google.maps.Marker({
				      position: pos,
				      map: mapa,
				      title:"Ubiaccion Actual del Camion",
				      animation: google.maps.Animation.DROP
				  });
				console.log(req2.location[0]['latitud']);
				console.log(req);
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

				if (google.maps.geometry.poly.isLocationOnEdge(pos, rutas, 10e-1)) {
				    alert("Relocate!");
				  }

		    }

		 });

		}

		 });
}