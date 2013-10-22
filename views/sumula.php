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
.tr{
	border: 1px solid #666;
}
.esp{
	margin-left: 5px;
}
</style>
<h2 style="margin: 0 auto; width: 1024px; text-align:center;">INICIAR JOGO  No.:</h2>
<form method="post" style="margin: 0 auto;" action="">
<table class="medidas" border="0" style="border-bottom: 1px solid #CCC; padding: 4px;">
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

<table class="medidas" border="0" style=" border-bottom: 1px solid #CCC; padding: 4px; margin-bottom: 10px;">
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
<table class="medidas" boder="0" style=" border-bottom: 1px solid #CCC; padding: 4px; margin-bottom: 10px;">
       <thead>
        <tr>
        	<th id="a" class="td"></th>
        	<th id="b"><small>A</small></th>
        	<th id="c"  colspan="3"><small>Tempo Técnico - Equipe A</small></th>
            <th id="d" colspan="3"><small>Tempo Técnico - Equipe B</small></th>
        	<th id="e"></th>
            <th id="f"><small>B</small></th>
        </tr>
       </thead>
       <tfoot>
    	<tr>
        	<th class="td" id="a1" hearders="a"><small>n° de 7 Metros</small></th>
            <th class="fundo td" id="b1" hearders="b"></th>
            <th class="fundo td" id="c1" hearders="c">I</th>
            <th class="fundo td" id="c2" hearders="c">II</th>
            <th class="fundo td" id="c3" hearders="c">III</th>
            <th class="fundo td" id="d1" hearders="d">I</th>
            <th class="fundo td" id="d2" hearders="d">II</th>
            <th class="fundo td" id="d3" hearders="d">III</th>
            <th class="td" id="e1" hearders="e"><small>n° de 7 Metros</small></th>
            <th class="fundo td" id="f1" hearders="f"></th>
         </tr>
       </tfoot>
</table>
<table class="medidas" boder=0   style=" border-bottom: 1px solid #CCC; padding: 4px; margin-bottom: 10px;">
	<thead>
    	<tr class="tr">
        
        	<th class="tr"><small>N°</small></th>
            <th class="tr medida-td2"><small>Equipe <b>- A -</b></small></th>
            <th class="tr"><small>G</small></th.
            <th class="tr"><small>A</small></th>
            <th class="tr"><small>2'</small></th>
            <th class="tr"><small>D</small></th>
            <th class="tr"><small>D+R</small></th>
            <th></th>
            
            <th class="tr"><small>N°</small></th>
            <th class="tr medida-td2"><small>Equipe <b>- B -</b></small></th>
            <th class="tr"><small>G</small></th>
            <th class="tr"><small>A</small></th>
            <th class="tr"><small>2'</small></th>
            <th class="tr"><small>D</small></th>
            <th class="tr"><small>D+R</small></th>
		
        </tr>
	</thead>
    <tfoot>
    	<tr>
        	<td class="tr">1</td>
			<td class="tr">2</td>
            <td class="tr">3</td>
            <td class="tr">4</td>
            <td class="tr">5</td>
            <td class="tr">6</td>
            <td></td>
            <td class="tr">7</td>
            <td class="tr">8</td>
            <td class="tr">9</td>
            <td class="tr">10</td>
            <td class="tr">11</td>
            <td class="tr">12</td>
            <td class="tr">13</td>
		</tr>
	</tfoot>
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
</form>