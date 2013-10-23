<?php 
	require_once __APP_PATH.'/view/JogadorView.php';
	$jogadorVW = new JogadorView();
	$action = isset( $_GET['action'] ) ? $_GET['action'] : null;
	if($action == "edit"){
		include(__APP_PATH.'/views/cad_Jogador.php');
	}
	if($action == "exclude"){
		include(__APP_PATH.'/views/cad_Jogador.php');
	}
?>	
	<script src="./views/js/jquery.tablesorter.min.js"></script>
    <script src="./views/js/jquery.tablesorter.pager.js"></script>
<style>
h1{
	font-size:40px;
	font-family: Georgia, "Times New Roman", serif;
	letter-spacing:-2px;
}

a img{
	border:none;
}

form{
  background-color:#f2f2f2;
  width:600px;
  margin:10px 0 10px 0;
  text-align:center;
}

form p{
  padding:12px;
}

form p label{
  color:#333;
  font-weight:900;
}

form input{
  padding:6px;
  border:1px solid #ccc;
  width:300px;
}

table{
  width:600px;
  border:1px solid #ccc;
}

table thead th{
  background-color:#ad2525;
  padding:6px;
  color:#fff;
  text-align:center;
  font-size:14px;
}

table thead th.header{
  cursor:pointer;
}

table tbody td{
  padding:6px;
  text-align:center;
  color:#333;
}

table tbody tr.odd td{
  background-color:#ffffcc;
}

table tbody tr.hover td{
  background-color:#a9d0f5;
}

table tbody tr.selected td{
  background-color:#a9f5a9!important;
}

.pagedisplay{
	width:40px;
	text-align:center;
	border:none;
	background-color:#f2f2f2;
	font-weight:900;
}

#pager span{
	font-weight:900;
	display:inline-block;
	margin:0 0 0 20px;
	color:#666;
	float:right;
}

#pager form{
	text-align:left;
	padding:10px;
	width:580px;
}
</style>
    <form class="medida" style="margin: 0 auto" method="post" action="exemplo.html" id="frm-filtro">
      <p>
        <label for="pesquisar">Pesquisar</label>
        <input type="text" id="pesquisar" name="pesquisar" size="30" />
      </p>
    </form>
    
    <table style="margin: 0 auto"  cellspacing="0" summary="Tecnicos">
      <thead>
        <tr>
          <th><input type="checkbox" value="1" id="marcar-todos" name="marcar-todos" /></th>
          <th>ID</th>
          <th>IDTIME</th>
          <th>Nome</th>
          <th>Data de nascimento</th>
          <th>CPF</th>
          <th>Numero</th>
          <th>A��es</th>
        </tr>
      </thead>
      <tbody>
       		<?php 
        		$tr = $jogadorVW->listarJogadoresParaTabela();
        		for($i=0;$i<count($tr);$i++){
					echo $tr[$i];
				}
        	?> 
      </tbody>
    </table>
    
    <div id="pager" class="pager" align="center">
    	<form style="margin: 0 auto">
				<span>
					Exibir <select class="pagesize">
							<option selected="selected"  value="10">10</option>
							<option value="20">20</option>
							<option value="30">30</option>
							<option  value="40">40</option>
					</select> registros
				</span>

			<img src="./views/images/first.png" class="first"/>
    		<img src="./views/images/prev.png" class="prev"/>
    		<input type="text" class="pagedisplay"/>
    		<img src="./views/images/next.png" class="next"/>
    		<img src="./views/images/last.png" class="last"/>
    	</form>
    </div>  
    <script>
    $(function(){
      
      $('table > tbody > tr:odd').addClass('odd');
      
      $('table > tbody > tr').hover(function(){
        $(this).toggleClass('hover');
      });
      
      $('#marcar-todos').click(function(){
        $('table > tbody > tr > td > :checkbox')
          .attr('checked', $(this).is(':checked'))
          .trigger('change');
      });
      
      $('table > tbody > tr > td > :checkbox').bind('click change', function(){
        var tr = $(this).parent().parent();
        if($(this).is(':checked')) $(tr).addClass('selected');
        else $(tr).removeClass('selected');
      });
      
      $('form').submit(function(e){ e.preventDefault(); });
      
      $('#pesquisar').keydown(function(){
        var encontrou = false;
        var termo = $(this).val().toLowerCase();
        $('table > tbody > tr').each(function(){
          $(this).find('td').each(function(){
            if($(this).text().toLowerCase().indexOf(termo) > -1) encontrou = true;
          });
          if(!encontrou) $(this).hide();
          else $(this).show();
          encontrou = false;
        });
      });
      
      $("table") 
        .tablesorter({
          dateFormat: 'uk',
          headers: {
            0: {
              sorter: false
            },
            5: {
              sorter: false
            }
          }
        }) 
        .tablesorterPager({container: $("#pager")})
        .bind('sortEnd', function(){
          $('table > tbody > tr').removeClass('odd');
          $('table > tbody > tr:odd').addClass('odd');
        });
      
    });
    </script>
    
