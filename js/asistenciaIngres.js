function crearAjax()
{
	var res;

	if(window.XMLHttpRequest)
		res = new XMLHttpRequest();
	else
		res = new ActiveXObject("Microsoft.XMLHTTP");

	return res;
}

//VALIDAR QUE EL TOKEN SEA CORRECTO
function ingresarAsistenciaIngres()
{	
	var cbx_estado = document.getElementById('cbx_estado').value;
	var datosingresados_id = document.getElementById('datosingresados_id').value;
    var ingrese_url = document.getElementById('ingrese_url').value;
    var ingrese_nombre = document.getElementById('ingrese_nombre').value;
    //alert(cbx_estado+" ; "+datosingresados_id+" ; "+ingrese_url+" ; "+ingrese_nombre);
    
    // acceder_id
	// //alert(identificacion+" , "+ codigo_postulacion);
	// if(validarObligatorio(identificacion,codigo_postulacion))
	// {
	var fdata = new FormData();
	    fdata.append('cbx_estado', cbx_estado);
	 	fdata.append('datosingresados_id', datosingresados_id);
        fdata.append('ingrese_url', ingrese_url);
        fdata.append('ingrese_nombre', ingrese_nombre);
	 	fdata.append('accion', 'insert');
	 	var request = crearAjax();	
	 	request.open('POST', 'procesar.php', true);
         request.onreadystatechange = function()
         {
             if(request.readyState == 4)
             {
	 			registro_completo = request.responseText;
	 			if(registro_completo  == "si")
	 			{
                     alert("Registrado correctamente");
	 			}
	 			else
	 			{
                 alert("Error al registrar");
	 		    }
	 		} 
	 	}
	 	request.send(fdata);
}