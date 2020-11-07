<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="initial-scale=1.0, width=device-width">
			<link rel="icon" href="/projeto-tcc/templates/web/images/fav.png">
		
		<style>
			<?php include 'css/reset.css'; ?>
			<?php include 'css/menuhamburguer.css'; ?>
			<?php include 'css/768.css'; ?>
			<?php include 'css/768-1200.css'; ?>
			<?php include 'css/desktop.css'; ?>
			<?php include 'css/estilo.css'; ?>
			<?php include 'css/default.css'; ?>
    	</style>
    
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<title>Pagamento</title>
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
						</ul>
						<a href="#">
							<img src="/projeto-tcc/templates/web/images/user.svg" alt="" srcset="">
						</a>
					</div>
				</nav>
		</header>

    <section class="form-section">

      <ul class="agend-progress agend-progress-3 item-1">
          <li>DETALHES DO AGENDAMENTO</li>
          <li>CONFERIR E PEDIR</li>
          <li>AGENDAMENTO REALIZADO</li>
      </ul>

      <h1 class="item-2" style="margin-top: 100px;">Um email foi enviado para sua caixa de entrada!</h1>
      
    </section>

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
