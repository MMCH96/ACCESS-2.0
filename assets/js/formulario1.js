function validar(){
var nombre, apellido, correo, usuario, clave, telefono, expresionR;
	nombre=document.getElementById('nombre').value;
	apellido=document.getElementById('apellido').value;
	correo=document.getElementById('correo').value;
	usuario=document.getElementById('usuario').value;
	clave=document.getElementById('clave').value;
	telefono=document.getElementById('telefono').value;
	expresionR=/\w+@\w+\.+[a-z]/;
	if (nombre==""|| apellido==""|| correo==""|| usuario==""|| clave==""|| telefono=="") {
		alert("Campo vacio");
		return false;
	}else if (nombre.length>30) {
		alert("Nombre demasiado largo");
		return false;
	}else if (apellido.length>30) {
		alert("Apellido demasiado largo");
		return false;
	}else if (!expresionR.test(correo)) {
		alert("Introduzca un correo valido");
		return false;
	}else if (correo.length>50) {
		alert("Correo demasiado largo");
		return false;
	}else if (usuario.length>10) {
		alert("Nombre de usuario demasiado largo");
		return false;
	}else if (clave.length>10) {
		alert("Contraseña demasiado larga");
		return false;
	}else if (telefono.length>10) {
		alert("Telefono demasiado largo");
		return false;
	}else if (isNaN(telefono)) {
		alert("Numero telefonico invalido");
		return false;
	}
}