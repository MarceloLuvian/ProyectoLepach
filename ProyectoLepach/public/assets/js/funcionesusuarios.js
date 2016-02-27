function mostrarcontra(id){

	var route = "http://localhost:8000/desencripta/"+id;

	$.get(route, function(res){

		$('#contra').val(res);
	});

}

function mostrarcon(arreglo){

	var route2 = "http://localhost:8000/decript/"+arreglo;

	$.get(route2, function(res2){

		$('#desencriptacion').val(res2);
	});

}