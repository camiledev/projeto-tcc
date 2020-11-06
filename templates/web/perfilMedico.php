<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, width=device-width">
		<link rel="icon" href="/projeto-tcc/templates/web/images/fav.png">

		<!-- <link rel="stylesheet" href="./css/all.min.css"> -->

		<style>
				<?php include 'css/reset.css'; ?>
				<?php include 'css/320.css'; ?>
				<?php include 'css/768.css'; ?>
				<?php include 'css/768-1200.css'; ?>
				<?php include 'css/desktop.css'; ?>
				<?php include 'css/menuhamburguer.css'; ?>
			</style>

		<title>Duvídas Frequentes</title>
	</head>
    <body>
        <div class="header">
            <style type="text/css">
            </style>
                <nav>
                    <ul>
                        <a href="index.html">MediCasa</a>
                    </ul>
                </nav>
        </div>
        
        <section>
            <h1  style="color:black"> Perfil</h1>
            <div class = "Container ">       
                <title>Bordas Arredondadas com CSS</title>
                <style type="text/css">
                    img{border-radius: 60%;}
                </style>
                <base>
                    <figure>
                        <img src= "file:///C:/Users/55119/Documents/TCC/HTML/img%20doutor.jpg" width="150" height="150"/>
                    </figure> 
                </base>
            </div>
            <a href="#" class="btn btn-primary btn-block"><b>Editar perfil</b></a>

            <form>
                <label>Fulano
                    <label>CRM
                    <label>None
                    <label>Especialidade
                </label>
                
                <label>Endereço
                    <label>Rua
                    <label>Bairro
                    <label>Barueri-SP
                    <label>Complemento
                    <label>00000-000
                </label>

                <label>Outros Dados:
                    <label>Masculino
                    <label>00anos
                    <label>000.000.000-00
                </label>

                <h1  style="color:black"> Agenda</h1>

                <footer>
                </form>

                <div class="header">
                <style type="text/css"></style>

                <form name="paciente" action="#" method="get">
                    <select>
                        <option>Selecione um paciente</option>
                        <option>Camile Silva</option>
                    </select>  
                <table>
                    <h4>Diagnósticos</h4>
                    <input type="text" name= "Diagnósticos"  size="100">
                </table>

                    <h4>Exames</h4>
                    <input type="text" name= "Exames"  size="100">

                    <h4>Medicação</h24>
                    <input type="text" name= "Medicação"  size="100">
                </autofocus>
             </div>
                
                <div class="header">
                    <style type="text/css"></style>
                    <nav>
                        <ul>
                            <a href="index.html">Concluir Exame</a>
                            
                        </ul>
                    </nav>
                </div>
     

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