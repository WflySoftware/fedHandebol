
<link rel="stylesheet" href="./views/cronometro/cronometro.css" type="text/css" media="screen" />
<script src="./views/cronometro/cronometro.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.4/angular.min.js"> </script>
</head>
<body>
<p><b>CRONOMETRO:</b></p>
<div>
	<input type="button" value="Comeca" onclick="dadosTempo = comeca();"><br> 
	<span id="hora">00h</span><span id="minuto">00m</span><span id="segundo">00s</span><br>
	<input type="button" value="Volta" onclick="volta();"><br>
	<div id="parar"><input type="button" value="Parar" onclick="parar();"></div>
	<div id="comeca" style="display:none;"><input type="button" value="Comeca" onclick="continua(dadosTempo);"><br></div>
	<input type="button" value="Limpa" onclick="limpa();"><br><br>
	<div id="voltas"></div>
	
</div>
