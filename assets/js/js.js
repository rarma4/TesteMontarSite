
function confirmE() {
   if (confirm("Tem certeza que deseja excluir?")) {
		location.href="<?php controllers/ControllersDel.php?id={$fetch['id']}?>";
   }else{
		window.event.preventDefault()
   }
}
function validarForm() {
   var nome = form.nome.value;

   
    
   if (nome == "" || nome.length < 5 || nome == null || nome.split(" ").length - 1 < 1) {
      alert('Por favor digite seu NOME COMPLETO');
      form.nome.focus();
      return false;
   }


     
}
