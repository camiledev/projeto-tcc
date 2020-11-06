<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>

    <style>
      <?php include 'css/reset.css'; ?>
      <?php include 'css/estilo.css'; ?>
      <?php include 'css/320.css'; ?>
      <?php include 'css/768.css'; ?>
      <?php include 'css/768-1200.css'; ?>
      <?php include 'css/desktop.css'; ?>
      <?php include 'css/menuhamburguer.css'; ?>
    </style>

    <title>Cadastrar</title>
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

      <h1>Cadastrar</h1>

      <form method="get" action="./" class="form-group2 form-group">

        <div class="form-item">
          <div>
            <label for="nome">Nome:</label>
            <input name="nome" type="text" id="nome" placeholder="Insira seu primero nome" required size="25"/>
          </div>
          <div>
            <label for="sobrenome">Sobrenome:</label>
            <input name="sobrenome" type="text" id="sobrenome" placeholder="Insira seu segundo nome" required size="25"/>
          </div>
        </div>

        <div class="form-item">
          <div>
            <label for="NascDate">Data de nascimento:</label>
            <input name="NascDate" type="date" id="NascDate" required size="25"/>
          </div>

          <div>
            <label for="sexo">Sexo:</label>
            <select name="sexo" id="sexo" required>
              <option value="Feminino">Feminino</option>
              <option value="Masculino">Masculino</option>
              <option value="Não Binário">Não Binário</option>
              <option value="NotResp">Prefiro não dizer</option>
            </select>
          </div>
        </div>

        <div class="form-item">
          <div>
            <label for="email">Email:</label>
            <input name="email" type="email" id="email" placeholder="Exemplo@gmail.com" required size="25"/>
          </div>
          <div>
            <label for="cpf">CPF:</label>
            <input name="cpf" type="text" id="cpf" maxlength="9" minlength="8" required size="25"/>
          </div>
        </div>
  
        <div class="form-item">
          <div>
            <label for="password">Senha:</label>
            <div class="passInput">
              <input name="password" type="password" id="password" placeholder="Insira sua senha" required size="25"/>
              <i class="fas fa-eye" id="olho"></i>
            </div>
          </div>
          <div>
            <label for="passwordConf">Confirme sua senha:</label>
            <div class="passInput">
              <input name="passwordConf" type="password" id="passwordconf" placeholder="Confirme sua senha" required size="25"/>
              <i class="fas fa-eye 1" id="olho"></i>
            </div>
          </div>
        </div>      
        <button onclick="window.location.href = 'home-logado.php'">Cadastrar</button> 
        
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
				<?php include 'js/menu-hamburguer-all.js';?>
				<?php include 'js/index.js';?>
				<?php include 'js/accordeon.js';?>
		</script>
  </body>
</html>
