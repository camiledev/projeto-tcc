<!DOCTYPE html>
<html>
    <head>
    	<title>Medicasa</title>
			<meta charset="UTF-8">
			<link rel="icon" href="/projeto-tcc/templates/web/images/fav.png">
    	<meta name="viewport" content="initial-scale=1.0, width=device-width">

			<style>
				<?php include 'css/reset.css'; ?>
				<?php include 'css/menuhamburguerhome.css'; ?>
				<?php include 'css/768.css'; ?>
				<?php include 'css/768-1200.css'; ?>
				<?php include 'css/desktop.css'; ?>
			</style>
    </head>

    <body>
		<header class="header-home">            
				
				<nav class="navigation-home">
						<ul class="menu-home">
								<li><a href="<?=url("perfcli")?>">Perfil</a></li>
								<li><a href="<?=url("especialidades")?>">Especialidades</a></li>
								<li><a href="">Como Funciona</a></li>
								<li><a href="">Quem Somos</a></li>
						</ul>

						<div class="menu-icon-navigation-home">
							<img class="menu-icon-image-nav-home" src="/projeto-tcc/templates/web/images/menu2.svg" alt="">
						</div>
				</nav>

				<div class="menu-icon-header-home">
					<img class="menu-icon-image-header-home" src="/projeto-tcc/templates/web/images/menu.svg" alt="">
				</div>
		</header>
			<main class="main-home">
				<!-- <img src="img/medicasa.png" class="banner" alt="fundo" /> -->
				
				<div class="botao-agendamento">
					<h1 class="agendar">
						<a>Clique aqui para<br> agendar </a>
					</h1>
				</div>


				<!--CONTEÚDO-->
				<div class="infos">
					<div class="info">
						<img src="/projeto-tcc/templates/web/images/quemsomos.svg" id="primeira-imagem" class="info-box-imagem" />
						<div class="info-box">
							<h3 class="box-title"><strong>Como Funciona</strong>  </h3><br><br>
							<span class="box-description">Para receber o médico no local desejado, 
								é necessário agendar uma consulta,escolhendo a data, o horário e a especialidade.
							</span>
						</div>
					</div>
					<div class="info" id="segundo-box">
						<img src="/projeto-tcc/templates/web/images/comofunciona.svg" id="segunda-imagem" class="info-box-imagem">
						<div class="info-box">
							<h3 class="box-title"><strong>Quem Somos</strong>  </h3> <br><br>
							<span class="box-description">Plataforma web para realizar agendamento de
									consulta online e atendimento onde desejar, visando o conforto do usuário.
							</span>
						</div>
					</div>
				</div>
							
			</main>

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
				<?php include 'js/menu-hamburguer-home.js'?>
			</script>
    </body>
</html>