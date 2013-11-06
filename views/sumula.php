<style>
.medidas{
	margin: 0 auto;
	width: 1024px;
	text-align: center;
	border-bottom: 1px solid #CCC;
	padding: 4px;
}
.fundo{
	background: #CCC;
}
aside{
 width: 300px;
 float: left;
}
.medida-td1{
	width: 100px;
	text-align: center;
}
.medida-td2{
	width: 250px;
	text-align: center;
}
td{
	width: 30px;
}
th{
	width: 30px;
}
.td{
	width: 40px;
}
.td2{
	width: 35px;
}
.input{
    font-family: Arial, Verdana;
    font-size: 14px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 200px;
    color: #797979;
	margin-bottom: 10px;
	-moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

.input2{
    font-family: Arial, Verdana;
    font-size: 14px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 100px;
    color: #797979;
	margin-bottom: 10px;
	   -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
.inputCaixa{
    font-family: Arial, Verdana;
    font-size: 20px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 50px;
    height: 40px;
    color: #797979;
	margin-bottom: 10px;
	   -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
.but {
display: inline-block;
background-color: #ccc;
color: #444;
padding: 10px 20px;
text-decoration: none;
box-sizing: border-box;
font-family: Helvetica, Arial, sans-serif;
font-size: 14px;
border: 0px;
border-radius: 2px;
margin: 1px;
}
.but:hover {
background-image: linear-gradient(to bottom, transparent, rgba(0,0,0,.15));
cursor: pointer;
}
.but-success {
color: #fff;
background-color: #009835;
}
.but-error {
color: #fff;
background-color: #CC0000;
}
.but-cron {
color: #fff;
background-color: #000;
width: 120px;
height: 50px;
}
.but-gol {
color: #fff;
background-color: #009835;
width: 40px;
height: 20px;
padding: 1px 1px;
}
.but-retirarGol {
color: #fff;
background-color: #CC0000;
width: 40px;
height: 20px;
padding: 1px 1px;
}
.align-but{
	float: right;
}
#but{
	margin: 0 auto;
	width: 1024px;
	margin-top: 5px;
	magin-button: 10px;
	border-bottom: 1px solid #CCC;
}
.tr{
	border: 1px solid #666;
}
.esp{
	margin-left: 5px;
}
</style>
<?php 
require_once __APP_PATH.'/view/JogadorView.php';
include_once ('/cronometro/cronometro.php');
include_once ('/contadorGols/contador.php');
$jogadorVW = new JogadorView();	
?>
<script src="./views/cronometro/cronometro.js"></script>

<h2 style="margin: 0 auto; width: 1024px; text-align:center;">INICIAR JOGO  No.:</h2>

<form method="post" style="margin: 0 auto;" action="">
<table class="medidas" border="0">
<tr>
	<td></td>
    <td><small>Equipe Local</small></td>
    <td></td>
	<td></td>
    <td><small>Equipe Visitante</small></td>
    <td><small>Espectadores</small></td>
</tr>
<tr>
	<td>A</td>
	<td>
		<select class="input" name="idTimeA" id="idTimeA" required>
	        	<?php 
	        		$options = $jogadorVW->listarTimesParaSelect();
	        		for($i=0;$i<count($options);$i++){
						echo $options[$i];
					}
	        	?>
	    </select>
    </td>
    <td><small>Versos</small></td>
	<td>B</td>
   <td>
		<select class="input" name="idTimeB" id="idTimeB" required>
	        	<?php 
	        		$options = $jogadorVW->listarTimesParaSelect();
	        		for($i=0;$i<count($options);$i++){
						echo $options[$i];
					}
	        	?>
	    </select>
    </td>
	<td>
		<input type="text" class="inputCaixa" name="espectadores" id="espectadorez" placeholder="Nº" style="text-align: center;" required>
    </td>
</tr>

</table>
<table class="medidas" border=0>
<tr>
	<td class="medida-td1"><small>Cidade</small></td>
    <td class="medida-td1"><small>Local</small></td>
    <td class="medida-td2"><small>Data</small></td>
	<td class="medida-td2"><small>Hora</small></td>
    <td></td>
    <td class="medida-td2"><small>Duração</small></td>

    </tr>
<tr>
	<td class="medida-td2">
		<input class="input" type="text" name="cidade" id="cidade" placeholder="Nome da cidade">
	</td>
    <td class="medida-td2"><input class="input" type="text" name="local" id="local" placeholder="Nome do local"></td>
    <td class="medida-td1"><input class="input2" type="date" name="data" id="data"></td>
    <td class="medida-td1"><input class="input2" type="time" name="hora" id="hora"></td>
    <td></td>
    <td class="medida-td1"><input class="input2" type="time" name="duracao" id="duracao"></td>
</tr>
</form>
</table>
<div id="but">
<input type="submit" name"iniciar-jogo" class="but but-error align-but" value="Limpar">
<input type="submit" name"iniciar-jogo" class="but but-success align-but" value="Iniciar">
<div id="clear"></div>
</div>

<table class="medidas" border="0" style=" border-bottom: 1px solid #CCC; padding: 4px; margin-bottom: 10px;">
	<tr>
    	<div>
	        <td><small>A</small></td>
	       	<td></td>
	        <td><small>B</small></td>
        </div>
        <td></td>
        <td><small>A</small></td>
        <td></td>
    	<td><small>B</small></td>
    	<td></td>
        <td><small>A</small></td>
        <td></td>
        <td><small>B</small></td>
        <td></td>
    	<td><small>A</small></td>
    	<td></td>
        <td><small>B</small></td>
        <td></td>
        <td><small>A</small></td>
        <td></td>
        <td><small>B</small></td>
        <td></td>
    </tr>
    <tr>
    	
        <td>
        	<input type="text" class="inputCaixa" name="placarA" id="placarA" placeholder="Nº" style="text-align: center;"  required>
        </td>
        <td>X</td>
        <td>
        	<input type="text" class="inputCaixa" name="placarB" id="placarB" placeholder="Nº" style="text-align: center;"  required>
        </td>
       <td><img src="./views/images/star.png" width="47" height="47" ></td>
        <td>
        	<input type="text" class="inputCaixa" name="placarA" id="placarA" placeholder="Nº" style="text-align: center;"  required>
        </td>
        <td>X</td>
        <td>
        	<input type="text" class="inputCaixa" name="placarB" id="placarB" placeholder="Nº" style="text-align: center;"  required>
        </td>
        <td><img src="./views/images/star.png" width="47" height="47" ></td>
        <td>
        	<input type="text" class="inputCaixa" name="placarA" id="placarA" placeholder="Nº" style="text-align: center;"  required>
        </td>
        <td>X</td>
        <td>
        	<input type="text" class="inputCaixa" name="placarB" id="placarB" placeholder="Nº" style="text-align: center;"  required>
        </td>
       <td><img src="./views/images/star.png" width="47" height="47" ></td>
    	<td>
        	<input type="text" class="inputCaixa" name="placarA" id="placarA" placeholder="Nº" style="text-align: center;"  required>
        </td>
        <td>X</td>
        <td>
        	<input type="text" class="inputCaixa" name="placarB" id="placarB" placeholder="Nº" style="text-align: center;"  required>
        </td>
        <td><img src="./views/images/star.png" width="47" height="47" ></td>
        <td>
        	<input type="text" class="inputCaixa" name="placarA" id="placarA" placeholder="Nº" style="text-align: center;"  required>
        </td>
        <td>X</td>
        <td>
        	<input type="text" class="inputCaixa" name="placarB" id="placarB" placeholder="Nº" style="text-align: center;"  required>
        </td>
    </tr>
    <tr>
    <td></td>
    <td>1° Tempo(30)'</td>
    <td></td>
    <td></td>
    <td></td>
    <td>Fim do Jogo(60)'</td>
    <td></td>
    <td></td>
    <td></td>
    <td>1° Tempo Extra</td>
    <td></td>
    <td></td>
    <td></td>
    <td>2° Tempo Extra</td>
    <td></td>
    <td></td>
    <td></td>
    <td>Tiro de 7 Metros</td>
    <td></td>
    <td></td>
    </tr>
</table>

<table class="medidas" boder="0" style=" border-bottom: 1px solid #CCC; padding: 4px; margin-bottom: 10px;">
       <thead>
        <tr>
        	
        	<th id="b"><small>A</small></th>
        	<th id="c"  colspan="3"><small>Tempo Técnico - Equipe A</small></th>
            <td></td>
            <th id="d" colspan="3"><small>Tempo Técnico - Equipe B</small></th>
        	
            <th id="f"><small>B</small></th>
        </tr>
       </thead>
       <tfoot>
    	<tr>
        	<script src="./fedHandebol/views/cronometro/cronometro.js"></script>
            <th><input type="text" class="inputCaixa" name="7MetrosA" id="7MetrosA" placeholder="Nº" style="text-align: center;"  required></th>
            <th><input id="volta"class="but but-cron" type="button" value="I" onclick="document.getElementById('tempoTecnicoA1').innerHTML = document.getElementById('minuto').firstChild.data + document.getElementById('segundo').firstChild.data + document.getElementById('milisegundo').firstChild.data;"></th>
            <th><input id="volta"class="but but-cron" type="button" value="II" onclick="document.getElementById('tempoTecnicoA2').innerHTML = document.getElementById('minuto').firstChild.data + document.getElementById('segundo').firstChild.data + document.getElementById('milisegundo').firstChild.data;"></th>
            <th><input id="volta"class="but but-cron" type="button" value="III" onclick="document.getElementById('tempoTecnicoA3').innerHTML = document.getElementById('minuto').firstChild.data + document.getElementById('segundo').firstChild.data + document.getElementById('milisegundo').firstChild.data;"></th>
            <td></td>
            <th><input id="volta"class="but but-cron" type="button" value="I" onclick="document.getElementById('tempoTecnicoB1').innerHTML = document.getElementById('minuto').firstChild.data + document.getElementById('segundo').firstChild.data + document.getElementById('milisegundo').firstChild.data;"></th>
            <th><input id="volta"class="but but-cron" type="button" value="II" onclick="document.getElementById('tempoTecnicoB2').innerHTML = document.getElementById('minuto').firstChild.data + document.getElementById('segundo').firstChild.data + document.getElementById('milisegundo').firstChild.data;"></th>
            <th><input id="volta"class="but but-cron" type="button" value="III" onclick="document.getElementById('tempoTecnicoB3').innerHTML = document.getElementById('minuto').firstChild.data + document.getElementById('segundo').firstChild.data + document.getElementById('milisegundo').firstChild.data;"></th>
            
             <th><input type="text" class="inputCaixa" name="7MetrosB" id="7MetrosB" placeholder="Nº" style="text-align: center;"  required></th>
         </tr>
         <tr><th class="td" id="e1" hearders="e"><small>n° de 7 Metros</small></th>
         <th id="tempoTecnicoA1"></th>
         <th id="tempoTecnicoA2"></th>
         <th id="tempoTecnicoA3"></th>
         <th></th>
         <th id="tempoTecnicoB1"></th>
         <th id="tempoTecnicoB2"></th>
         <th id="tempoTecnicoB3"></th>
         <th class="td" id="e1" hearders="e"><small>n° de 7 Metros</small></th>
      	 </tr>	
       </tfoot>
</table>

<table class="medidas" boder=0   style=" border-bottom: 1px solid #CCC; padding: 4px; margin-bottom: 10px;">
	<aside>
    	<tr class="tr">
    		<th></th>
    		
    		<th class="tr"><small>Nº</small></th>
            <th class="tr medida-td2"><small>Equipe <b>- A -</b></small></th>
            <th class="tr"><small>G</small></th>
            <th class="tr"><small>A</small></th>
            <th class="tr"><small>2'</small></th>
            <th class="tr"><small>D</small></th>
            <th class="tr"><small>D+R</small></th>            
        </tr>
     <?php 
    		
				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
						$timeA = $_POST['idTimeA'];
						$tr = $jogadorVW->listarJogadoresParaSumula($timeA);
						for($i=0;$i<count($tr);$i++){
							echo $tr[$i];
					}
        		}
        ?> 
     
     </aside>
     <aside style="float: right; width: 300px;" >
		 <tr>
		  				<th></th>
			         
			 			<th class="tr"><small>N°</small></th>
			          
			            <th class="tr medida-td2"><small>Equipe <b>- B -</b></small></th>
			            <th class="tr"><small>G</small></th>
			            <th class="tr"><small>A</small></th>
			            <th class="tr"><small>2'</small></th>
			            <th class="tr"><small>D</small></th>
			            <th class="tr"><small>D+R</small></th>
		</tr>
		
		<?php 
				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
						$timeB = $_POST['idTimeB'];
						$tr = $jogadorVW->listarJogadoresParaSumula($timeB);
						for($i=0;$i<count($tr);$i++){
							echo $tr[$i];
												}
        		}
        ?> 
    </aside>
</table>
<table class="medidas" boder=0 >
	<thead>
    	<tr>
        	<th class="tr td"><small>Of.A</small></th>
            <th class="tr medida-td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <td></td>
            <th class="tr td"><small>Of.A</small></th>
            <th class="tr medida-td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
		</tr>
	</thead>
    <tfoot>
    	<tr> 
        	<th class="tr td"><small>Of. B</small></th>
            <th class="tr medida-td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th></th>
            <th class="tr td"> <small>Of. B</small></th>
            <th class="tr medida-td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
		</tr>
    </tfoot>
        <tfoot>
    	<tr> 
        	<th class="tr td"><small>Of. C</small></th>
            <th class="tr medida-td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th></th>
            <th class="tr td"> <small>Of. C</small></th>
            <th class="tr medida-td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
		</tr>
    </tfoot>
        <tfoot>
    	<tr> 
        	<th class="tr td"><small>Of. D</small></th>
            <th class="tr medida-td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th></th>
            <th class="tr td"> <small>Of. D</small></th>
            <th class="tr medida-td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
            <th class="tr td2"></th>
		</tr>
    </tfoot>
</table>

