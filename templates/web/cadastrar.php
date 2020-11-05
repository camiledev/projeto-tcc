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
    
    <footer>
      <div class="social">
        <p class="logo-footer">MediCasa</p>
        <p id="email">medicasacontato@gmail.com</p>
        <p class="duv-footer">Dúvidas frequentes</p>
        <img class="card"
          src="/projeto-tcc/templates/web/images/mastercard.svg"
        />
        <img class="card"
          src="/projeto-tcc/templates/web/images/visa.svg"
        />
        <img style="margin-right: 5vw;"
          src="/projeto-tcc/templates/web/images/instagram.svg"
        />
      </div>
      <p>MediCasa &copy</p>
      <p>Todos direitos reservados 2020</p>
    </footer>

    <script src="js/index.js"></script>
    <script>
				<?php include 'js/menu-hamburguer-home.js'?>
		</script>
  </body>
</html>
