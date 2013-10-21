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
</style>
<h2 style="margin: 0 auto; width: 1024px; text-align:center;">RELATÓRIO DE JOGO  No.:</h2>
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