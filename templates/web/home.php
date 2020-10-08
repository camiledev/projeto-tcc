<!DOCTYPE html>
<html>
    <head>
        <title>Site</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0, width=device-width">
        <link rel="stylesheet" type="text/css"   href="templates/web/css/reset.css" >
        <link rel="stylesheet" type="text/css"   href="templates/web/css/menuhamburguer.css">
        <link rel="stylesheet" type="text/css"  href="templates/web/css/768.css">
        <link rel="stylesheet" type="text/css"  href="templates/web/css/768-1200.css">
        <link rel="stylesheet" type="text/css"  href="templates/web/css/desktop.css">
    </head>
    </head>

    <body>
			<header class="header">            
					
					<nav class="navigation">
							<ul class="menu">
									<li><a href="templates/web/login.html">Login / Registre-se</a></li>
									<li><a href="templates/web/especialidades.html">Especialidades</a></li>
									<li><a href="#">Como Funciona</a></li>
									<li><a href="#">Quem Somos</a></li>
									<li><a href="templates/web/trabalhe-conosco.html">Trabalhe conosco</a></li>
							</ul>

							<div class="menu-icon-navigation">
									<img class="menu-icon-image-nav" src="templates/web/images/menu2.svg" alt="">
							</div>
					</nav>

					<div class="menu-icon-header">
						<img class="menu-icon-image-header" src="templates/web/images/menu.svg" alt="">
					</div>
			</header>
			<main class="main">
				 <img src="images/background.png" class="banner" alt="fundo" /> 
				
				<div class="botao-agendamento">
					<h1 class="agendar">
						<a>Clique aqui para<br> agendar </a>
					</h1>
				</div>


				<!--CONTEÚDO-->
				<div class="infos">
					<div class="info">
						<img src="templates/web/images/quemsomos.svg" id="primeira-imagem" class="info-box-imagem" />
						<div class="info-box">
							<h3 class="box-title"><strong>Como Funciona</strong>  </h3><br><br>
							<span class="box-description">Para receber o médico no local desejado, 
								é necessário agendar uma consulta,escolhendo a data, o horário e a especialidade.
							</span>
						</div>
					</div>
					<div class="info" id="segundo-box">
						<img src="templates/web/images/comofunciona.svg" id="segunda-imagem" class="info-box-imagem">
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
						<span class="ajuda-link">Dúvidas frequentes</span>
					</div>

					<div class="info">
						<div class="bandeiras-container">
							<h6 class="bandeiras-title">BANDEIRAS ACEITAS</h6>
							<div class="bandeiras-imagens">
								<img src="templates/web/images/visa.svg " alt="visa" class="bandeiras">
								<img src="templates/web/images/mastercard.svg " alt="mastercard" class="bandeiras">
							</div>
						</div>
		
						<div class="social">
							<h6 class="social-title">SOCIAL</h6>
							<img src="templates/web/images/instagram.svg " alt="instagram" class="insta">
						</div>
					</div>
				</div>

				<div class="copyright">
					<span class="medi">MediCasa©</span>
					<span class="direitos">Todos direitos Reservados 2019</span>
				</div>
			</footer>

      <script src="templates/web/js/menu-hamburguer.js"></script>
    </body>
</html>