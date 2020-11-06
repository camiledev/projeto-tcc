<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width">
		<link rel="icon" href="/projeto-tcc/templates/web/images/fav.png">

		<style>
      <?php include 'css/reset.css'; ?>
      <?php include 'css/menuhamburguerhome.css'; ?>
      <?php include 'css/320.css'; ?>
      <?php include 'css/768.css'; ?>
      <?php include 'css/768-1200.css'; ?>
      <?php include 'css/desktop.css'; ?>
		</style>

		<link rel="stylesheet" href="./css/all.min.css">
		<title>Trabalhe conosco</title>
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
								<li><a href="home.html">HOME</a></li>
								<li><a href="">PERFIL</a></li>
								<li><a href="ajuda_default.html">AJUDA</a></li>
								<li><a href="especialidades.html">ESPECIALIDADES</a></li>
						</ul>
						<a href="#">
							<img src="/projeto-tcc/templates/web/images/user.svg" alt="" srcset="">
						</a>
					</div>
				</nav>
		</header>

    <section class="form-section">
      <h1 style="margin-left: -20px;">Trabalhe conosco</h1>

      <form method="get" action="./" class="form-group2 form-group">

        <div class="form-item">
          <div>
            <label for="nome">Nome:</label>
            <input name="nome" type="text" id="nome" placeholder="Insira seu nome" required size="50%"/>
          </div>
        </div>

        <div class="form-item">
          <div>
            <label for="email">Email:</label>
            <input name="email" type="email" id="email" placeholder="Exemplo@gmail.com" required size="50%"/>
          </div>
        </div>

        <div class="form-item-finalizar">
          <div>
            <input id="curriculo" type="file" placeholder="Anexe seu curriculo" required/>
            <label for="curriculo" id="curriculoLbl" style="padding: 10px;">Anexe seu curriculo</label>
          </div>
        </div>
  
        <input type="submit" value="Finalizar" class="general-button">
      </form>
    </section>
    
    		
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

		<script src="./js/menu-hamburguer-all.js"></script>
		<script src="./js/index.js"></script>
		<script src="./js/accordeon.js"></script>
		<script src="./js/all.js"></script>
  </body>
</html>
