<?php

  session_start();
  include_once ("incs/functions.php");
  include_once ("incs/conexao.php");

  $login = anti_injection($_POST['usuario']);
  $senha = anti_injection($_POST['senha']);

  $sql = 'SELECT * FROM usuario WHERE login = "'.$login.'" AND senha = "'.$senha.'"';
  $rs = @mysql_query($sql)or die("Estamos com problemas no BD, Procure o Administrador" );
  $num = @mysql_num_rows($rs);

  if($num > 0){
    //Retorna os dados do banco
    $rst = @mysql_fetch_array($rs);
    $id 	= $rst["codusuario"];
    $nome	= $rst["nome"];
    $login	= $rst["login"];
    $senha	= $rst["senha"];
    $tipo	= $rst["tipo"];
    $data   = $rst["data_aces"];
    $ip     = $rst["ip_aces"];

  	//Registra os dados do usuário na sessão
  	$_SESSION["login_usuario"]	= $login;
  	$_SESSION["senha_usuario"]	= $senha;
  	$_SESSION["nome_usuario"]   = $nome;
  	$_SESSION["tipo_usuario"]	= $tipo;
  	$_SESSION["data_aces"]	    = $data;
  	$_SESSION["ip_aces"]	    = $ip;

    //atualiza a data e hora do ultimo acesso e registra o IP utilizado no acesso
    $ip_new = getenv ("REMOTE_ADDR");
    @mysql_query("UPDATE usuario SET data_aces = NOW(), ip_aces = '$ip_new' WHERE codusuario = '$id'");

  	echo '<script>location.href="principal.php"</script>';
  }else{
  	echo '<script>location.href="index.php?msg=1"</script>';
  	session_destroy();
  }
  mysql_close();

?>