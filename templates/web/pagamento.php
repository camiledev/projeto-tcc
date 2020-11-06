<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link rel="stylesheet" href="css/styleAgendamento.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
      let ClientInfo = {}
      window.onload = function(){
        if(window.localStorage.pedido){
          ClientInfo = JSON.parse(window.localStorage.pedido)

          const newInfos = Object.values(ClientInfo)
          newInfos.splice(-3).sort()

          const { data, horario, especialidade } = ClientInfo
          const newInfos2 = [data, horario, especialidade].sort()

          for(let i = 0; i < newInfos2.length; i++){
            const li = document.createElement("li");
            li.appendChild(document.createTextNode(newInfos2[i]))
            infos2.appendChild(li)
          }

          for(let i = 0; i < newInfos.length; i++){
            const li = document.createElement("li");
            li.appendChild(document.createTextNode(newInfos[i]))
            infos.appendChild(li)
          }
        }
      }
      // Caso queira remover as informações local após finalizar
      // Basta trocar o input Submit para este abaixo
      // <input type="submit" value="Finalizar" @click="delLocal()">

      function delLocal(){
        window.localStorage.removeItem("pedido")
      }

    </script>
    <title>Pagamento</title>
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

    <section class="form-section form-section3">

      <ul class="agend-progress agend-progress-2 item-1">
          <li>DETALHES DO AGENDAMENTO</li>
          <li>CONFERIR E PEDIR</li>
          <li>AGENDAMENTO REALIZADO</li>
      </ul>

      <h1 class="item-2">Método de pagamento</h1>

      <form method="get" action="./finalizado.html" class="form-group item-3">
        <div class="form-item">
          <div style="display: flex;">
            <h2>Cartão de crédito</h2>
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-cc-mastercard"></i>
          </div>

          <div>
            <label for="parcelas">Parcelas *</label>
            <select name="parcelas" id="parcelas" required>
              <option>
                1 x R$140
              </option>
              <option>
                2 x R$70
              </option>
              <option>
                3 x R$46,67
              </option>
              <option>
                4 x R$35
              </option>
            </select>
          </div>
          <div>
            <label for="cartao">Número do Cartão *</label>
            <label for="cvv" style="margin-left: 25px">CVV *</label><br>
            <input name="cartao" type="text" id="cartao" value="" size="25" maxlength="9" required/>
            <input name="cvv" type="text" id="cvv" value="" size="3" maxlength="3" required/>
          </div>
          <div>
            <label for="cartao_nome">Nome impresso no cartão *</label><br>
            <input name="cartao_nome" type="text" id="cartao_nome" value="" size="35" required/>
          </div>
          <div>
            <label for="expira_cartao">Expira *</label><br>
            <input name="expira_cartao" type="text" id="expira_cartao_mes" placeholder="Mês" size="3" required/>
            <input name="expira_cartao" type="text" id="expira_cartao_ano" placeholder="Ano" size="3" required/>
          </div>
        </div>
        <input type="submit" value="Finalizar">
      </form>

      <div class="detalhes item-4">
        <h2>Detalhes</h2>
        <div>
          <ul id="infos">
          </ul>
          <div>
            <ul id="infos2">
            </ul>
          </div>
        </div>
        <h3>Total: R$140,00</h3>
      </div>
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
  </body>
</html>
