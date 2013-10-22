<style>
.medidas{
	margin: 0 auto;
	width: 1024px;
	text-align: center;
}
.fundo{
	background: #CCC;
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
</style>
<h2 style="margin: 0 auto; width: 1024px; text-align:center;">INICIAR JOGO  No.:</h2>
<form method="post" action="">
<table class="medidas" border=0 style=" border-bottom: 1px solid #CCC; padding: 4px;">
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
	<td class="fundo medida-td2"></td>
    <td><small>Versos</small></td>
	<td>B</td>
    <td class="fundo medida-td2"></td>
	<td class="fundo medida-td1"></td>
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
	<td class="medida-td2"><select class="input"><option>Cidade1</option><option>Cidade2</option><option>Cidade3</option></select></td>
    <td class="medida-td2"><select class="input"><option>local1</option><option>local2</option><option>local2</option></select></td>
    <td class="medida-td1"><input class="input2" type="date" name="data" id="data"></td>
    <td class="medida-td1"><input class="input2" type="time" name="hora" id="hora"></td>
    <td></td>
    <td class="medida-td1"><input class="input2" type="time" name="duracao" id="duracao"></td>
</tr>
</table>
<div id="but">
<input type="submit" name"iniciar-jogo" class="but but-error align-but" value="Limpar">
<input type="submit" name"iniciar-jogo" class="but but-success align-but" value="Iniciar">

<div id="clear"></div>
</div>
</form>
<table class="medidas" border="0" style=" border-bottom: 1px solid #CCC; padding: 4px;">
	<tr>
    	<td></td>
        <td><small>A</small></td>
        <td><small>B</small></td>
        <td></td>
        <td><small>A</small></td>
    	<td><small>B</small></td>
        <td></td>
        <td><small>A</small></td>
        <td><small>B</small></td>
        <td></td>
    	<td><small>A</small></td>
        <td><small>B</small></td>
        <td></td>
        <td><small>A</small></td>
        <td><small>B</small></td>
    </tr>
    <tr>
    	<td>1° Tempo(30)'</td>
        <td class="fundo"></td>
        <td class="fundo"></td>
        <td>Fim do Jogo(60)'</td>
        <td class="fundo"></td>
        <td class="fundo"></td>
        <td>1° Tempo Extra</td>
        <td class="fundo"></td>
        <td class="fundo"></td>
        <td>2° Tempo Extra</td>
    	<td class="fundo"></td>
        <td class="fundo"></td>
        <td>Tiro de 7 Metros</td>
        <td class="fundo"></td>
        <td class="fundo"></td>
    </tr>
</table>
<table class="medidas" border="0">
	<tr>
    	<td></td>
        <td><small>A</small></td>
        <td><small>Tempo Técnico - Equipe A</small></td>
        <td><small>Tempo Técnico - Equipe B</small></td>
        <td></td>
        <td><small>B</small></td>
    </tr>
	<tr>
        <td><small>n° de 7 Metros</small></td>
        <td class="fundo"></td>
        <td> 
        	<tr>
        		<td  class="fundo">I</td>
        		<td  class="fundo">II</td>
        		<td  class="fundo">III</td>
           	</tr>
        </td>
       
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<table class="medidas" boder=1>
	<thead>
    	<tr><th><small>A</small></th>
        	<th><small>Tempo Técnico - Equipe A</small></th>
            <th><small>Tempo Técnico - Equipe B</small></th>
        	<th></th>
            <th><small>B</small></th>
        </tr>
    </thead>
</table>