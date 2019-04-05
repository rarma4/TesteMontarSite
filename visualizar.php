<?php
	include "includes/header.php";
	include "class/ClassCrud.php";
	session_start();
?>
<div class="content">
<h1>visualizar</h1>
	 <?php 
	 	$crud = new ClassCrud();
	 	$idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
	 	$bFetch = $crud->selectDB(
	 		"*",
	 		"usuarios",
	 		"where id=?",
	 		array($idUser)
	 	);

	 	$fetch = $bFetch->fetch(PDO::FETCH_ASSOC);

	 ?>
	 <h2>Dados do Usuário</h2><hr>
	 <strong>ID: </strong><?php echo $fetch['id']; ?><br>
	 <strong>Nome: </strong><?php echo $fetch['nome']; ?><br>
	 <strong>Criado: </strong><?php echo $fetch['criado']; ?><br>
	 <strong>Modificado: </strong><?php echo $fetch['modificado']; ?><br>
	 <button type="button" class="btn btn-warning"  onClick="history.go(-1)">Voltar</button>
</div>


<?php include "includes/footer.php";?>
