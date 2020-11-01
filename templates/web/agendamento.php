<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link rel="stylesheet" href="css/styleAgendamento.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Agendamento</title>
  </head>

  <body>
    <nav class="menu">
      <img src="images/user.svg"/>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">MediCasa</label>
      <ul>
        <li><a class="active" href="home-logado.html">Home</a></li>
        <li><a href="#">Perfil</a></li>
        <li><a href="#">Ajuda</a></li>
        <li><a href="especialidades.html">Especialidades</a></li>
      </ul>
    </nav>

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
          
        <input type="submit" onclick="saveLocal()" value="Avançar">
      </form>
    </section>
    
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
    <script src="js/indexAgendamento.js"></script>
  </body>
</html>
