<?

  $HOST = "localhost";
  $USER = "root";
  $SENHA = "";
  $BD = "";

  $conexao = mysql_connect($HOST,$USER,$SENHA) or print (mysql_error());
  mysql_select_db($BD, $conexao) or print(mysql_error());

?>
