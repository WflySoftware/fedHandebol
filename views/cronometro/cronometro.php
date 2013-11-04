
<link rel="stylesheet" href="./views/cronometro/cronometro.css" type="text/css" media="screen" />
<script src="./views/cronometro/cronometro.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.4/angular.min.js"> </script>
</head>
<body>
<p><b>CRONOMETRO:</b></p>
<div>
	<input id = "comecar"  class="but but-cron" type="button" value="Comecar Nova Contagem" onclick="dadosTempo = comeca();"><br> 
	<span id="minuto">00min</span><span id="segundo">00s</span><span id="milisegundo">00ms</span><br>
	<input id="volta"class="but but-cron" type="button" value="Guardar Volta" onclick="volta();"><br>
	<div id="parar"><input class="but but-cron" type="button" value="Parar" onclick="parar();"></div>
	<div id="retomar" style="display:none;"><input class="but but-cron" type="button" value="Retomar" onclick="continua(dadosTempo);"><br></div>
	<input class="but but-cron" type="button" value="Limpa" onclick="limpa();"><br><br>
	<div id="voltas"></div>
	
</div>
