<?php require("subpag/topo-login.php");  ?>


    <div class="login">

      <div class="login-top">
        <h1>Login do Usu&aacute;rio</h1>
      </div>

      <form action="login.php" method="post" class="flogin">
      <?php
			if ($_GET['msg']=='1'){
				echo '<div class="msn">Usu&aacute;rio não Cadastrado!</div>';
			}
	  ?>
       <div class="left">
          <p>
            <label>Usu&aacute;rio</label>
            <input type="text" class="usuario" name="usuario" />
          </p>
          <p>
            <label>Senha</label>
            <input type="password" class="psw" name="senha"/>
          </p>
          <p align="right"><input type="submit" value="Entrar" class="botao" /></p>
       </div>

       <div class="right"><img src="imagens/encrypted-128.png" width="128" height="128" alt="" /></div>
       <div class="clear"></div>
      </form>


    </div><!-- /login -->



<?php require("subpag/rodape-login.php");  ?>