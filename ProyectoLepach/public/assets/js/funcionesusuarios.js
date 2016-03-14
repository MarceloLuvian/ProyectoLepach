function mostrarcontra(id){

	var route = "http://localhost:8000/desencripta/"+id;

	$.get(route, function(res){

		$('#contra').val(res);
	});

}
