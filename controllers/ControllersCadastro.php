<?php
session_start();
include ("../includes/variaveis.php");
include ("../class/ClassCrud.php");

if($acao == "Cadastrar"){
	$crud = new ClassCrud();
	$crud->insertDB(
	        "usuarios",
	        "?,?,?,?",
	        array($id, $nome, $criado, $modificado)
	);
	$_SESSION['msg'] = "<div class='alert alert-warning' role='alert'>Gravado com sucesso!</div>";
	header('location:../cadastro.php');
echo $acao;
}else{
	$crud = new ClassCrud();
	$crud->editDB(
		"usuarios",
		"nome=?, modificado=?",
		"id=?",
		array($nome, $modificado, $id)
	);
	$_SESSION['msg'] = "<div class='alert alert-warning' role='alert'>Editado com sucesso!</div>";
	header('location:../selecao.php');
	echo $acao;
}
?>