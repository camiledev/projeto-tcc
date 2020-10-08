<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <nav class="menu-home">
      <input type="checkbox" id="check2" />
      <label for="check2" class="checkbtn2">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a class="active" href="home-logado.php">Home</a></li>
        <li><a href="#">Perfil</a></li>
        <li><a href="#">Ajuda</a></li>
        <li><a href="especialidades.html">Especialidades</a></li>
      </ul>
    </nav>
    
    <div class="back-home">
      <div class="res-circle">
        <div class="circle-txt"><a href="agendamento.html">Clique aqui para agendar</a></div>
      </div>
      <img src="images/background.png"/>
    </div>
    
    <div class="container">
      <div class="box-home">
        <img
          src="images/comofunciona.svg"
        />
        <div class="box-info">
          <h2>Como funciona?</h2>
          <p>
            Para receber o médico no local desejado, é necessário agendar uma
            consulta, escolhendo a data, o horário e a especialidade.
          </p>
        </div>
      </div>

      <div class="box-home boxspacing">
        <img
          src="images/quemsomos.svg"
        />
        
        <div class="box-info">
          <h2>Quem somos</h2>
          <p>
            O MediCasa é uma plataforma web para realizar agendamento de
            consulta online e atendimento onde desejar, visando o conforto do
            usuário.
          </p>
        </div>
      </div>
    </div>
    
    <footer>
      <div class="social">
        <p class="logo-footer">MediCasa</p>
        <p id="email">medicasacontato@gmail.com</p>
        <p class="duv-footer">Dúvidas frequentes</p>
        <img class="card"
          src="images/mastercard.svg"
        />
        <img class="card"
          src="images/visa.svg"
        />
        <img style="margin-right: 5vw;"
          src="images/instagram.svg"
        />
      </div>
      <p>MediCasa &copy</p>
      <p>Todos direitos reservados 2020</p>
    </footer>
  </body>
</html>
