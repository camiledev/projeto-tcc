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
        <?php include 'css/styleAgendamento.css'; ?>
        <?php include 'css/style.css'; ?>
    </style>
    
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
    <!--menu-->
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

      <ul class="agend-progress agend-progress-2 item-1">
          <li>DETALHES DO AGENDAMENTO</li>
          <li>CONFERIR E PEDIR</li>
          <li>AGENDAMENTO REALIZADO</li>
      </ul>

      <h1 class="item-2">Método de pagamento</h1>

      <form method="get" action="<?=url("finalizado")?>" class="form-group item-3">
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
          <button>Finalizado</button> 

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
    <script>
				<?php include 'js/menu-hamburguer-all.js';?>
				<?php include 'js/index.js';?>

		</script>
  </body>
</html>
