<?php 
include_once(__APP_PATH.'/view/MainView.php');
$mainVW = new MainView();

?>
<style>
#caixa1{
	margin: 0 auto;
	width: 1024px;
}
#graficos{
	width: 660px;
	margin: 0 auto;
}
table{
	float: left;
	border: 1px solid #CCC;
	border-radius: 3px 3px 3px 3px;
	background: #F2F2F2;
}
tr{
	border: 1px solid #ccc;
}
th{
	border: 1px solid #ccc;
	border-width: thin;
}
.th-cor{
	background: #FFF;
}
.th-piqueno{
	width: 40px;
}
.aling{
	margin: 0 auto;
	width: 1024px;
}
</style>
        <div id="caixa1">
        <h2 style="margin: 0 auto; width: 1024px; text-align:center;">Graficos</h2><br/>
         	<div id="graficos">
            	<div id="butao-cliente">
                	<?php echo $mainVW->contarRegistrosTime();?><br />TIMES
                </div>
                <div id="butao-cliente">
                	<?php echo $mainVW->contarRegistrosJogador();?><br />JOGADORES
                </div>
                <div id="butao-cliente">
                	<?php echo $mainVW->contarRegistrosTecnico();?><br />TECNICOS
                </div>
                <div id="butao-cliente">
                	<?php echo $mainVW->contarRegistrosArbitro();?><br />ARBITROS
                </div>
                <div id="clear"></div>            
             </div>
        </div>
      <aside class="aling"> 
      <h2 style="margin: 0 auto; width: 1024px; text-align:center; margin-top: 10px;">Tabela do campeonato</h2><br/>
        <table border=0 style="width: 650px;">
        	<thead>
            	<tr style="background: #09F; border:#09f; color: #fff;">
                	<th><small>Time</small></th>
                    <th class="th-piqueno"><small>P</small></th>
                    <th class="th-piqueno"><small>J</small></th>
                    <th class="th-piqueno"><small>V</small></th>
                    <th class="th-piqueno"><small>E</small></th>
                    <th class="th-piqueno"><small>D</small></th>
                    <th class="th-piqueno"><small>GP</small></th>
                    <th class="th-piqueno"><small>GC</small></th>
                    <th class="th-piqueno"><small>SG</small></th>
                    <th class="th-piqueno"><small>%</small></th>
                </tr>
            </thead>
            	<tr>
                	<th class="th-cor">Tabajara FC</th>
                    <th class="th-piqueno th-cor">2</th>
                    <th class="th-piqueno th-cor">3</th>
                    <th class="th-piqueno th-cor">4</th>
                    <th class="th-piqueno th-cor">5</th>
                    <th class="th-piqueno th-cor">6</th>
                    <th class="th-piqueno th-cor">7</th>
                    <th class="th-piqueno th-cor">8</th>
                    <th class="th-piqueno th-cor">9</th>
                    <th class="th-piqueno th-cor">10</th>
                </tr>
        </table>
        
        <table border=0 style="width: 320px; margin-left: 10px;">
        	<thead>
            	<tr style="background: #09F; border:#09f; color: #fff; ">
                	<th><small>Artilheiros</small></th>
                    <th><small>Time</small></th>
                    <th class="th-piqueno"><small>G</small></th>
                </tr>
            </thead>
            	<tr>
                	<th class="th-cor"><?php echo $mainVW->listarArtilheiros()->NOME_JOGADOR?></th>
                    <th class="th-cor"><?php echo $mainVW->listarArtilheiros()->NOME_TIME?></th>
                    <th class="th-piqueno th-cor"><?php echo $mainVW->listarArtilheiros()->GOL?></th>
                </tr>
        </table>
       <div id="clear"></div>
       </aside>
        
            	