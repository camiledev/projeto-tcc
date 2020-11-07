<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width">
		<link rel="icon" href="/projeto-tcc/templates/web/images/fav.png">

		<style>
      <?php include 'css/reset.css'; ?>
      <?php include 'css/menuhamburguer.css'; ?>
      <?php include 'css/320.css'; ?>
      <?php include 'css/768.css'; ?>
      <?php include 'css/768-1200.css'; ?>
      <?php include 'css/desktop.css'; ?>
      <?php include 'css/estilo.css'; ?>
		</style>

		<link rel="stylesheet" href="./css/all.min.css">
		<title>Perfil Usuário</title>
	</head>
    <body>
 <!--menu-->
		<!--menu-->
		<header class="header">					
			<nav class="navigation">
					<div class="menu-icon-header">
						<img class="menu-icon-image-header" src="/projeto-tcc/templates/web/images/menu.svg" alt="">
					</div>
					<h1 class="navigation__title">MediCasa</h1>
					<div class="navigation__main">
						<ul class="menu">
								<li><a href="<?=url("")?>">HOME</a></li>
								<li><a href="<?=url("perfcli")?>">PERFIL</a></li>
								<li><a href="<?=url("duvidas")?>">AJUDA</a></li>
								<li><a href="<?=url("especialidades")?>">ESPECIALIDADES</a></li>
								<li><a href="<?=url("workWithUs")?>">TRABALHE CONOSCO</a></li>
						</ul>
						<a href="#">
							<img src="/projeto-tcc/templates/web/images/user.svg" alt="" srcset="">
						</a>
					</div>
				</nav>
		</header>

	<ul class="menu__mobile">
		<div class="menu-icon-navigation">
			<img class="menu-icon-image-nav" src="/projeto-tcc/templates/web/images/menu2.svg" alt="">
		</div>
		<li><a href="<?=url("")?>">HOME</a></li>
		<li><a href="<?=url("perfcli")?>">PERFIL</a></li>
		<li><a href="<?=url("duvidas")?>">AJUDA</a></li>
		<li><a href="<?=url("especialidades")?>">ESPECIALIDADES</a></li>
		<li><a href="<?=url("workWithUs")?>">TRABALHE CONOSCO</a></li>
	</ul>
    
        <div id="container">
            <div id="box-1" class="box">Perfil</div>
            <img class="perfil" src="/projeto-tcc/templates/web/images/perfiluser.png" alt="">
        </div>
        <div class="bottom-text">
             Editar Perfil
          </div>
        <!--Tabela-->
        <table id="tabela1">
            <tr>
            <th>Endereço:</th>
            <th>Outros dados:</th>
            </tr>
            <tr>
            <td>Barueri</td>
            <td>Nenhum</td>
            </tr>
            <tr>
            <td>Nenhum</td>
            <td>Nenhum</td>
            </tr>
        <tr>
            <td>Nenhum</td>
            <td>Nenhum</td>
            </tr>
        </table>
        <!--Tabela2-->
        <div id="container">
            <div id="box-2" class="box">Agendamentos</div>
        </div>

        <table id="tabela2">
            <tr>
            <th>Em andamento:</th>
            </tr>
            <tr>
                <td>Nenhum</td>
            </tr>
            <tr>
                <td>Nenhum</td>
            </tr>
            <tr>
                <td>Nenhum</td>
            </tr>
        </table>
            <!--Tabela3-->
            <div id="container">
                <div id="box-3" class="box">Concluidos</div>
            </div>
            <table id="tabela3">
                <tr>
                <th>DATA:</th>
                <td>10/01/2019</td>
                </tr>
            
            <tr>
                <th>ODIAGNÓSTICO:</th>
                <td>Gastriterite</td>
            </tr>
            <tr>
                <th>EXAME:</th>
                <td>Endoscopia 
                    </td>
            </tr>
            <tr>
                <th>MEDICAÇÃO:</th>
                <td>Antiácido</td>
            </tr>
            
            </table>
        <!--Tabela4-->
        <table id="tabela4">
            <tr>
            <th>DATA:</th>
            <td>28/02/2019</td>
            </tr>
        
        <tr>
            <th>ODIAGNÓSTICO:</th>
            <td>Acne</td>
        </tr>
        <tr>
            <th>EXAME:</th>
            <td>Biópsia de pele

        
                </td>
        </tr>
        <tr>
            <th>MEDICAÇÃO:</th>
            <td>Roacutan</td>
        </tr>
        
        </table>

		<!--RODAPÉ-->
		<footer class="rodape">
			<span class="gmail">medicasacontato@gmail.com</span>
		
			<div class="rodape-main">
				<h3 class="rodape-title">mediCasa</h3>

				<div class="ajuda-container">
					<h6 class="ajuda-title">AJUDA</h6>
					<span class="ajuda-link"><a href="<?=url("duvidas")?>">Dúvidas frequentes</a></span>
				</div>

				<div class="info">
					<div class="bandeiras-container">
						<h6 class="bandeiras-title">BANDEIRAS ACEITAS</h6>
						<div class="bandeiras-imagens">
							<img src="/projeto-tcc/templates/web/images/visa.svg " alt="visa" class="bandeiras">
							<img src="/projeto-tcc/templates/web/images/mastercard.svg " alt="mastercard" class="bandeiras">
						</div>
					</div>

					<div class="social">
						<h6 class="social-title">SOCIAL</h6>
						<img src="/projeto-tcc/templates/web/images/instagram.svg " alt="instagram" class="insta">
					</div>
				</div>
			</div>
			<div class="copyright">
				<span class="medi">MediCasa©</span>
				<span class="direitos">Todos direitos Reservados 2019</span>
			</div>
		</footer>

		<script>
				<?php include 'js/menu-hamburguer-all.js';?>
				<?php include 'js/index.js';?>
				<?php include 'js/accordeon.js';?>
		</script>
  </body>
</html>