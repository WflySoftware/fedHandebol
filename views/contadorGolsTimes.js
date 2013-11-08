function inserirGolTimeA(tempoAtual){
	switch(tempoAtual){
		case 1:
			document.getElementById("placarATempo1").value = timeGolsTimeA;
		break;
		case 2:
			document.getElementById("placarATempo2").value = timeGolsTimeA;
		break;
		case 3:
			document.getElementById("placarATempo3").value = timeGolsTimeA;
		break;
		case 4:
			document.getElementById("placarATempo4").value = timeGolsTimeA;
		break;
		case 5:
			document.getElementById("placarATempo5").value = timeGolsTimeA;
		break;
	}
}
function inserirGolTimeB(tempoAtual){
	document.getElementById("placarBTempo1").value = timeGolsTimeB;
}
function proximoTempo(tempoAtual){
	if (tempoAtual == 5)
	{
		return tempoAtual;
	}
	else{
		tempoAtual++;
		return tempoAtual;
	}
}