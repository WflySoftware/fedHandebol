function persistirDados(jogadorId,jogadorGol,jogadorA,jogadorP,jogadorD,jogadorR){
	var xmlhttp;
	
	
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	  {  
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		  {
		  	//alert("inserido");
			  alert(xmlhttp.responseText);
		  }
	  }
	xmlhttp.open("GET","view/AjaxDadosView.php?jogadorId="+jogadorId+"&jogadorGol="+jogadorGol+"&jogadorA="+jogadorA+"&jogadorP="+jogadorP+"&jogadorD="+jogadorD+"&jogadorR="+jogadorR+"",true);
	xmlhttp.send();
	}
