function capturarDatos() {
	var url="registrar.php";

	$.post(url, {
		curso:$.("#txtcurso").val(),
		horario:$("$txthorario").val(),
		cupo:$("$txtcupo").val(),
		instalacion:$("$txtinstalacion").val(),
		maestro:$("$txtmaestro").val(),
		nombre:$("$txtnombre").val(),
		lugar:$("$txtlugar").val()
				},

	function (data) {
		$(".tab-content").html(data);
	});	
	

}

	