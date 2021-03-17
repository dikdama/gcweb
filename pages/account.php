<?php
session_start();
require '../script/conexao.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
    	<meta name="author" content="dikdama"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    	<title>Criar Conta</title>
        <link rel="icon" type="image/ico" href="../media assets site/Icon.ico" />
        <link rel="stylesheet" href="../lib/bootstrap.min.css">
		<link rel="stylesheet" href="../stylesheet/mycssgc.css"/>
	</head>
	<body><center>
		<header>
        <img src="../media assets site/anigif.gif"  width="1200" height="323" alt="headermain"/> 
        <div class="base">
          <a href="../index.php">
          <img src="../media assets site/nav-base.png" width="1200" height="286" alt="base"/>
           </a>
        </div>
            </header>
            <?php
				    if(isset($_SESSION['msg'])){
					   echo $_SESSION['msg'];
					   unset($_SESSION['msg']);
				    }
            ?>
              <div class="forms">
			         <form action="../script/criarconta.php" method="post" role="form">
            	  <div class="form-group" align="left">
                <label id="label-form" for="user">User</label>
                <input type="text" maxlength="12" name="user" id="user" class="form-control" placeholder="Digite seu apelido">
                </div>
                <div class="form-group" align="left">
                <label id="label-form" for="senha">Senha</label>
                <input type="password" maxlength="16" name="senha" id="senha" class="form-control" placeholder="Digite sua senha">
                </div>
                <div class="form-group" align="left">
                <label id="label-form" for="sexo">Gênero</label>
                <select class="form-control" name="sexo" id="sexo">
                    <option>Masculino</option>
                    <option>Feminino</option>
                    </select>
                </div>
                <div class="form-group" align="center">
					<label id="label-form">
						<input type="checkbox" name="aceito" id="aceito" required> Eu aceito os termos de ingresso do <a href="#myModal" data-toggle="modal">acordo</a>.</label>
				</div>
                <div class="form-group" align="center">
                	<button type="submit" class="btn btn-primary" id="criar" name="criar">Criar conta</button>
                </div>
              </form>
            </div>
             <div class="reqs" align="left">
                <ul>
                <li>O usuário deve conter no mínimo 4 caracteres, e deve ser diferente de todos os salvos no banco de dados;</li>
                <li>A senha deve contem no mínimo 8 caracteres, e deve conter no mínimo 1 caractere especial;</li>
                <li>Para que sua conta seja aprovada, você deve aceitar os termos de uso.</li>
                </ul>
            </div>
        	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel" align="">Termos de uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;
						</button>
						</div>
   						 <div class="modal-body">
							Termos blá blá blá que ainda vou pensar.<br>
                            Qualquer ato de violação, pejorativo, ou de caratér discriminatório resultará em penalidade.<br>
                            by adm@dikdama "não sabendo o que está fazendo, pra variar"
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Li e Concordo</button>
                      	</div>
                      </div><!-- fecha modal-content  -->
                 	</div>  <!-- fecha modal-dialog -->
                 </div><!-- fecha modal fade -->
			  </center>
       <footer>
                <center>
                <img src="../media assets site/footer.png" width="1201" height="623" alt="rodape" /></center>
             </footer>
             <script type="text/javascript" src="../lib/jquery-3.5.1.min.js">
				</script>
             <script type="text/javascript" src="../lib/bootstrap.min.js">
			 </script>
	</body>
</html>
