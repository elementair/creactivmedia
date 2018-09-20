
with(document.index){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		// NOMBRE
		if(ok && nombre.value==""){
			ok=false;
			alert('Ingresa tu nombre por favor');
			nombre.focus();
		}
		// EMPRESA
		if(ok && empresa.value==""){
			ok=false;
			alert('Ingresa tu empresa por favor');
			empresa.focus();
		}
		// TELEFONO
		if(ok && telefono.value==""){
			ok=false;
			alert('Ingresa tu telefono por favor');
			telefono.focus();
		}
		// MOVIL
		if(ok && num_movil.value==""){
			ok=false;
			alert('Ingresa tu movil por favor');
			num_movil.focus();
		}
		// CORREO
		if(ok && correo.value==""){
			ok=false;
			alert('Ingresa tu correo por favor');
			correo.focus();
		}
		// MENSAJE
		if(ok && mensaje.value==""){
			ok=false;
			alert('Ingresa tu mensaje por favor');
			mensaje.focus();
		}
		//ASUNTO
		if(ok && asunto.value==""){
			ok=false;
			alert('Ingresa tu asunto por favor');
			asunto.focus();
		}
		
		if(ok){ submit(); alert('En breve nos comunicamos con su usted.'); }
	}
}