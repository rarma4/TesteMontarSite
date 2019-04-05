<?php
if (isset($_POST['acao'])){
	$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['acao'])){
	$acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$acao = "";
}

if (isset($_POST['id'])){
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$id = 0;
}

if (isset($_POST['nome'])){
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['nome'])){
	$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$nome = "";
}

if (isset($_POST['criado'])){
	$criado = filter_input(INPUT_POST, 'criado', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['criado'])){
	$criado = filter_input(INPUT_GET, 'criado', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$criado = date('Y-m-d H:i:s');
}

if (isset($_POST['modificado'])){
	$modificado = filter_input(INPUT_POST, 'modificado', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['modificado'])){
	$modificado = filter_input(INPUT_GET, 'modificado', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$modificado = date('Y-m-d H:i:s');
}
?>