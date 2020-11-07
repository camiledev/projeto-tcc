<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width">
		<link rel="icon" href="/projeto-tcc/templates/web/images/fav.png">

		<!-- <link rel="stylesheet" href="./css/all.min.css"> -->

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
    <title>Agendamento</title>
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

    <section class="form-section">
      <ul class="agend-progress">
          <li>DETALHES DO AGENDAMENTO</li>
          <li>CONFERIR E PEDIR</li>
          <li>AGENDAMENTO REALIZADO</li>
      </ul>

      <h1>Agendamento</h1>

      <form method="get" action="./pagamento.html" class="form-group2 form-group">
        <div class="form-item">
          <label for="especialidade">Especialidade:</label>
          <select name="especialdade" id="especialdade" required>
            <option>
              Cardiologia
            </option>
            <option>
              Clínica geral
            </option>
            <option>
              Dermatologia
            </option>
            <option>
              Gastroenterologia
            </option>
            <option>
              Geriatra
            </option>
            <option>
              Ginecologia
            </option>
            <option>
              Nutrição
            </option>
            <option>
              Oftalmologia
            </option>
            <option>
              Ortopedia
            </option>
            <option>
              Otorrinolaringologia
            </option>
            <option>
              Pediatria
            </option>
            <option>
              Psicologia
            </option>
            <option>
              Psiquiatria
            </option>
            <option>
              Reumatologia
            </option>
          </select>

          <label for="data">Data:</label>
          <input name="data" type="date" id="data" required/>

          <label for="horario">Horario:</label>
          <select name="horario" id="horario" required>
            <option>
              8h00
            </option>
            <option>
              9h00
            </option>
            <option>
              10h00
            </option>
            <option>
              11h00
            </option>
            <option>
              12h00
            </option>
            <option>
              13h00
            </option>
            <option>
              14h00
            </option>
            <option>
              15h00
            </option>
            <option>
              16h00
            </option>
            <option>
              17h00
            </option>
            <option>
              18h00
            </option>
            <option>
              19h00
            </option>
            <option>
              20h00
            </option>
          </select>
        </div>

        <div class="form-item">
          <label for="cep">Cep:</label>
          <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" required/>

          <label for="uf">Estado:</label>
          <input name="uf" type="text" id="uf" size="2" required/>
        
          <label for="cidade">Cidade:</label>
          <input name="cidade" type="text" id="cidade" size="40" required/>
        </div>

        <div class="form-item">
          <label for="bairro">Bairro:</label>
          <input name="bairro" type="text" id="bairro" size="40" required/>

          <label for="rua">Rua:</label>
          <input name="rua" type="text" id="rua" size="60" required/>

          <label for="complemento">Complemento:</label>
          <input name="complemento" type="text" id="complemento" size="40" required/>
        </div>
          
        <div class="button">
					<span class="button"><a href="<?=url("pag")?>">Avançar</a></span>
				</div>
      </form>
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
				<?php include 'js/menu-hamburguer-all.js'; ?>
				<?php include 'js/index.js'; ?>
		</script>
  </body>
</html>
