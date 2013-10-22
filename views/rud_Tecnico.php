<?php 
require_once __APP_PATH.'/view/TecnicoView.php';
$tecnicoVW = new TecnicoView();
?>
    <form method="post" action="exemplo.html" id="frm-filtro">
      <p>
        <label for="pesquisar">Pesquisar</label>
        <input type="text" id="pesquisar" name="pesquisar" size="30" />
      </p>
    </form>
    
    <table  cellspacing="0" summary="Tecnicos">
      <thead>
        <tr>
          <th><input type="checkbox" value="1" id="marcar-todos" name="marcar-todos" /></th>
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>CPF</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
       		<?php 
        		$tr = $tecnicoVW->listarTecnicosParaTabela();
        		for($i=0;$i<count($tr);$i++){
					echo $tr[$i];
				}
        	?> 
      </tbody>
    </table>
    
    <div id="pager" class="pager">
    	<form>
				<span>
					Exibir <select class="pagesize">
							<option selected="selected"  value="1">1</option>
							<option value="2">2</option>
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
