<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width">
		<link rel="icon" href="/projeto-tcc/templates/web/images/fav.png">

		<!-- <link rel="stylesheet" href="./css/all.min.css"> -->

		<style>
				<?php include 'css/reset.css'; ?>
				<?php include 'css/320.css'; ?>
				<?php include 'css/768.css'; ?>
				<?php include 'css/768-1200.css'; ?>
				<?php include 'css/desktop.css'; ?>
				<?php include 'css/menuhamburguer.css'; ?>
		</style>

		<title>Duvídas Frequentes</title>
	</head>

	<body>
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
	
<main>
		<h3 class="titulo">Dúvidas Frequentes</h3>
	
		<div class="items">
			<div class="box-info">
				<h3 class="subtitulo">Como Agendar</h3>
				<div class="box-info__content">
					<p > &nbsp Para agendar é necessário possuir uma conta e estar logado. Clique no botão: "Clique aqui para agendar" e complete os Campos de agendamento.<br><br>
						&nbsp Ao completar você será redirecionado para a aba de pagamento, na qual, será necessário completar todas as informações solicitadas.<br><br>
						&nbsp Ao finalizar, um email será enviado para você como comprovante do agendamento.<br><br>
						&nbsp Aguarde o dia da sua consulta.
					</p>
				</div>
			</div>

			<div class="box-info">
				<h3 class="subtitulo">Pagamento</h3>
				<div class="box-info__content">
					<p> &nbsp O pagamento é feito na aba de pagamento. No qual sucede posteriormente ao complemento de informações de agendamento.<br><br>
						&nbsp É aceita as bandeiras VISA e MASTERCARD.
					</p>
				</div>
			</div>

			<div class="box-info">
				<h3 class="subtitulo">Cancelar Consulta</h3>
				<div class="box-info__content">
					<p> &nbsp Para cancelar sua consulta, basta estar logado, ir ao seu perfil e clicar em "Cancelar consulta".
					</p>
				</div>

			</div>
		</div>

		<div class="items__mobile">
			<h3 class="subtitulo__mobile">Como Agendar
				<i class="subtitulo__icon fas fa-angle-down"></i>	
			</h3>
			
			<div class="box-info__content--mobile">
				<p > &nbsp Para agendar é necessário possuir uma conta e estar logado. Clique no botão: "Clique aqui para agendar" e complete os Campos de agendamento.<br><br>
					&nbsp Ao completar você será redirecionado para a aba de pagamento, na qual, será necessário completar todas as informações solicitadas.<br><br>
					&nbsp Ao finalizar, um email será enviado para você como comprovante do agendamento.<br><br>
					&nbsp Aguarde o dia da sua consulta.
				</p>
			</div>

			<h3 class="subtitulo__mobile">Pagamento
				<i class="subtitulo__icon fas fa-angle-down"></i>
			</h3>
			<div class="box-info__content--mobile">
				<p> &nbsp O pagamento é feito na aba de pagamento. No qual sucede posteriormente ao complemento de informações de agendamento.<br><br>
					&nbsp É aceita as bandeiras VISA e MASTERCARD.
				</p>
			</div>

			<h3 class="subtitulo__mobile">Cancelar Consulta
				<i class="subtitulo__icon fas fa-angle-down"></i>
			</h3>
			<div class="box-info__content--mobile">
				<p> &nbsp Para cancelar sua consulta, basta estar logado, ir ao seu perfil e clicar em "Cancelar consulta".
				</p>
			</div>
		</div>
</main>
<br>
		
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
				<?php include 'js/menu-hamburguer-all.js'; ?>
				<?php include 'js/index.js'; ?>

		</script>
	</body>

</html>