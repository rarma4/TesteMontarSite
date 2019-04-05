
<?php
include "class/ClassCrud.php";

#edicao de dados
	if(isset($_GET['id'])){
		$acao = "Editar";
			$crud = new ClassCrud();
			$bFetch = $crud->selectDB(
				"*",
				"usuarios",
				"where id=?",
				array($_GET['id'])
			);
			$fetch = $bFetch->fetch(PDO::FETCH_ASSOC);
			$id = $fetch['id'];
			$nome = $fetch['nome'];
			$criado = $fetch['criado'];
			$modificado = date('Y-m-d H:i:s');

#cadastro novo
	}else{
		$acao = "Cadastrar";
		$id = "";
		$nome = "";
		$criado = date('Y-m-d H:i:s');
		$modificado = date('Y-m-d H:i:s');

	}
?>

<h1><?php echo $acao; ?></h1>	<hr>
<div>

	<form method="post" name="form" action="controllers/ControllersCadastro.php">
		<input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>">
		<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
		<div class="alert alert-light" role="alert">
		<h5><?php echo "ID: ". $id ; ?></h5>
		</div>
		<div class="form-group">
			<label>Nome:  <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" placeholder="Digite o Nome" autofocus ></label>
		</div>
		<div class="form-group">
			<label>Criado:  <input type="text" disabled="disabled" name="criado" id="criado" value="<?php echo $criado; ?>" ></label>
		</div>
		<div class="form-group">
			<label>Modificado:  <input type="text" disabled="disabled" name="modificado" id="modificado" value="<?php echo $modificado; ?>" ></label>
		</div>
		<button type="submit" onclick="return validarForm()"  class="btn btn-warning"><?php echo $acao; ?></button>
		<input type="button" class="btn btn-primary" value="Cancelar" onclick="javascript: location.href='index.php';" />
	</form>
</div>
