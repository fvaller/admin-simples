<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title></title>
  <link rel="stylesheet" href="css/estilo-admin.css" type="text/css" />

</head>
<?php



?>
<body>

  <div id="site">

    <div id="topo">
      <div class="conteudo">
        <div class="left">
          <div id="logo">
            <h1>Jurandy Porto</h1>
          </div>
        </div>

        <div class="right">
          <p class="boxuser">
            Olá <strong><?php echo $_SESSION['nome_usuario']; ?></strong> | <a href=".." target="_blank">Ver site</a> | <a href="sair.php">Sair</a><br />
            <small>Ultimo acesso: <?php echo ajustar_data($_SESSION['data_aces']);  ?><br />IP: <?php echo $_SESSION['ip_aces']; ?></small>
          </p>
        </div>

        <div class="clear"></div>
      </div>

    </div>