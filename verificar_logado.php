<?php

  @session_start();

  //verificar se existe a sessao
  if (isset($_SESSION['login_usuario']) && isset($_SESSION['senha_usuario'])){
      $usuario_logado="1";
  }else{
      echo "<script>alert('Voc� n�o esta logado');location.href='index.php'</script>";
  	$usuario_logado="0";
  	exit;
  }

?>