<!--corpo-->
<style type="text/css">
.input{
    font-family: Arial, Verdana;
    font-size: 20px;
    padding: 5px;
    border: 1px solid #b9bdc1;
    width: 300px;
    color: #797979;
	margin-bottom: 10px;
	   -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}	
.hint{
    display:none;
}
/*.field:hover .hint {;
	margin: 0 auto
    position: absolute;
    display: block;
    margin: -10px 0 0 200px;
    color: #999;
    padding: 7px 10px;
    background: rgba(0, 0, 0, 0.6);
 
    -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
    border-radius: 7px;
}*/
#contactform {
    color: #999;
    width: 500px;
    padding: 20px;
    overflow:auto;
	margin: 0 auto;
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
</style>
<center><h2> Cadastro de Times</h2></center>
	<form id="contactform" method="post" action="">
        <div class="field">
        	<input type="text" class="input" name="tecnico" id="tecnico" placeholder="Nome do Tecnico" required>
        </div>
        <div class="field">
        	<input type="text" class="input" name="nome" id="nome" placeholder="Nome do Time" required>
        </div>
        <div class="field">
        	<input type="text" class="input" name="categoria" id="categoria" placeholder="Categoria" required>
        </div>
        <div class="field">
        	<input type="text" class="input" name="endereço" id="endereço" placeholder="Edereço da sede" required>
        </div>
        <div class="field">
        	<input type="text" class="input" name="data_fundacao" id="data_fundacao" placeholder="Data da Fundação" required>
        </div>
        <div class="field">
        	<input type="text" class="input" name="presidente" id="presidente" placeholder="Nome do Presidente" required>
        </div>
        <div class="field">
    	<input type="text" class="input" name="telefone" id="telefone" placeholder="Telefone" required>
        </div>
        <input type="submit" class="but but-success" name="Cadastrar" value="Cadastrar">
        <input type="reset" class="but but-error" name="apagar" value="Limpar">
	</form>
