<?php
session_start();
require 'script/conexao.php';
$sql = "SELECT COUNT (Connecting) conect FROM users WHERE Connecting=1";
$result = odbc_exec($connection , $sql);
    while(odbc_fetch_row($result)){
    $mostrauser= odbc_result($result,'conect');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
    	<meta name="author" content="dikdama"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    	<title>GrandChase</title>
        <link rel="icon" type="image/ico" href="media assets site/Icon.ico" />
        <link rel="stylesheet" href="lib/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheet/mycssgc.css"/>
	</head>
        <center>
        <header>
        <img src="media assets site/anigif.gif"  width="1200" height="323" alt="headermain"/> 
        <div class="base">
            <a href="index.php">
            <img src="media assets site/nav-base.png" width="1200" height="286" alt="base"/>
           </a>
        </div>
            </header>
            <section>
         <div class="navcustom">
         <a href="pages/account.php">
         <img id="acc" src="media assets site/button-criaracc.png" align="left" width="334" height="180" alt="Criar Conta" />
         </a>
         <a href="#Modal" data-toggle="modal">
         <img id="staff" src="media assets site/button-staff.png" width="334" height="182" alt="Staff" /></a>
         <a href="pages/download.html">
         <img id="down" src="media assets site/button-download.png" align="right" width="334" height="191" alt="Download" />
         </a>
         </div>
         <div id="myCarousel" class="carousel">
        <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="media assets site/sliders/1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="media assets site/sliders/2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="media assets site/sliders/3.png" alt="Third slide">
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">&rsaquo;</a>
         </div>
            </section>
            <div class="escrita">
            	"Esse site faz parte de um projeto do servidor de teste para estudo do jogo chamado Grand Chase, atualmente se encontra na Season 5 oficial. Desenvolvido e administrado de fã para fã by dikdama, e para diversão completa, todos os mapas estão habilitados e eventos também, então venha fazer parte dessa Grande Caçada!"
            </div>
             <div class="server">
            Caçadores em missões <br> <?php echo $mostrauser; ?>
           </div>
            </center>
             <!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="ModalLabel" align="left">Olá! by Staff</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;
                        </button>
                        </div>
                         <div class="modal-body" align="center">
                           Olá amigo, é com muito prazer que a staff lhe dá as boas vindas.<br>
                           Composta por numerosos 1 componente XD, deixo aqui o repositório
                            para o desenvolvimento/contribuição desse projeto ;D.<br>
                           "Não vou desistir dessa grande caçada." by dikdama
                                <div class="contstaff" style="margin-top: 15px"><center>
                                    <h6>#LongLiveTheChase</h6>
                                    <a href="https://github.com/dikdama/gcweb" target="_blank"><h6>repository/grand_chase_project</h6></a>
                                    </center>
                                </div>
                           </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Obrigado!</button>
                        </div>
                      </div><!-- fecha modal-content  -->
                    </div>  <!-- fecha modal-dialog -->
                 </div><!-- fecha modal fade -->
			<footer>
                <center>
                	<img src="media assets site/footer.png" width="1201" height="623" alt="rodape" /></center>
            </footer>
            <script type="text/javascript" src="lib/jquery-3.5.1.min.js">
                </script>
             <script type="text/javascript" src="lib/bootstrap.min.js">
             </script>
                <script type="text/javascript" src="script/myjscriptgc.js">
             </script>
	</body>
</html>