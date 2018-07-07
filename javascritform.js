<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
function valida () {
	st=1;
	if (document.cadastro.nome.value =="") {
		alert ("Por favor, preencha o campo: Nome");
		document.cadastro.nome.focus ();
		st=0;
	} else if (document.getElementByld ('feminino') checked !=true) 
	{
		if (document.getElementByld) ('masculino'). checked !=true)
		 {
		 		alert ("Favor Preencher o campo: Sexo");
		 		st=0;
		}
	} else if (document.cadastro.endereço.value =="") {
				alert ("Por favor, prencha o campo: Endereço"); 
		document.cadastro.endereço.focus ();
		st=0;
	}	else if (cadastro.uf.options [cadastro.uf.selectedIndex].value =="") {
				alert ("Por Favor, selecione uma UF");
		document.cadastro.uf.focus();
		st=0;
	
	}	else if (document.cadastro.fone.value ==""){
				alert ("Por favor, prencha o campo: Telefone");
				document.cadastro.fone.focus ();
				st=0;
	}	else if (document.cadastro.info.value ==""){
				alert ("Por favor, prencha o campo: informações adicionais");
				document.cadastro.info.focus ();
				st=0;
	}		if (st==1) 
				alert ("Seu Fomulário foi válidado")
	function SomenteNumero (e) {
			var tecla=(window.event)=(window.event) ? event.keycode:e.which;
			if ((tecla >47 && tecla < 58))
				return true;
		else {
			if (tecla != 8)
				return false;
		else
				return true;
			}
	}
</body>
</script>
