
<link rel="stylesheet" href="./views/cronometro/cronometro.css" type="text/css" media="screen" />
<script src="./views/cronometro/cronometro.js"></script>


</head>
<body>
<div id="cronometro">
<p><b>CRONOMETRO:</b></p>
<div>
	 
	<h1 style="margin: 0 auto;"><span id="minuto">00min</span><span id="segundo">00s</span><span id="milisegundo">00ms</span></h1><br>
	<div id="botoes"><input id = "comecar"  class="but but-cron" type="button" value="Comecar Nova Contagem" onclick="dadosTempo = comeca();">
	<input id="volta"class="but but-cron" type="button" value="Guardar Volta" onclick="volta();"></div>
	<div id="flutuar"> <div id="parar"><input class="but but-cron" type="button" value="Parar" onclick="parar();"></div></div>
	<div id="retomar" style="display:none; float: left;"><input class="but but-cron" type="button" value="Retomar" onclick="continua(dadosTempo);"><br></div>
	<input class="but but-cron" type="button" value="Limpa" onclick="limpa();"><br><br>
	<div id="voltas"></div>
	
</div>
</div>
