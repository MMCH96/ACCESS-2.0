function validar(){
	var  usuario, clave;
	
	usuario = document.getElementById('usuario').value;
	clave = document.getElementById('clave').value;


	if(usuario==""||clave==""){
		alert("Campo  vacío");
		return false;
	} else if(usuario.length>10){
		alert("Usuario demasiado largo");
		return false;
	} else if (isNaN(usuario)){
		alert("Matricula es numérico")
		return false;
	}
}