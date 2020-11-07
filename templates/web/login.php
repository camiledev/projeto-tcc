!DOCTYPE html>
<html>
    <head>
    	<title>Medicasa</title>
			<meta charset="UTF-8">
			<link rel="icon" href="/projeto-tcc/templates/web/images/fav.png">
    		<meta name="viewport" content="initial-scale=1.0, width=device-width">

			<style>
				<?php include 'css/reset.css'; ?>
				<?php include 'css/768.css'; ?>
				<?php include 'css/768-1200.css'; ?>
				<?php include 'css/desktop.css'; ?>
				<?php include 'css/estilo.css'; ?>
			</style>
    </head>
  <body>
    <section>
      <form action="" class="logSection">
        <div>
          <h1>MediCasa</h1>
    
          <div>
            <label for="sou">Eu sou</label><br>
            <select name="sou" id="EuSou">
              <option>Paciente</option>
              <option>Colaborador</option>
            </select>
          </div>
        </div>
        <div>
          <a href="">Outros acessos</a>
  
          <div>
            <h2>Login</h2>
            <div>
              <label for="email">Email:</label>
              <input name="email" type="email" id="email" placeholder="Exemplo@gmail.com" required size="25">
            </div>
            <div>
              <label for="password">Senha:</label>
              <div class="passInput">
                <input name="password" type="password" id="password" placeholder="******" required size="25">
              </div>
            </div>
            <div>
              <a href="">Esqueceu a senha?</a>
              <input type="submit" value="Entrar">
              <a href="cadastrar.html">Não possui uma conta? Registre-se</a>
            </div>
          </div>
        </div>
      </form>
    </section>
  
    <script src="./js/index.js"></script>
  </body>
  </html>