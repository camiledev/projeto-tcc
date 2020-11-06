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
    </style>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title>Especialidades</title>
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

  <ul class="menu__mobile">
    <div class="menu-icon-navigation">
      <img class="menu-icon-image-nav-home" src="./projeto-tcc/templates/web/images/menu2.svg" alt="">
    </div>
    <li><a href="">HOME</a></li>
    <li><a href="">PERFIL</a></li>
    <li><a href="#">AJUDA</a></li>
    <li><a href="#">ESPECIALIDADES</a></li>
  </ul>

    <section class="section-box">
      <div>
        <h1>
          Especialidades
        </h1>
        <p>
          Algumas especialidades podem exigir exames para o complemento da
          consulta, feito na unidade de atendimento!
        </p>
      </div>
      <ul class="grid especialidades-grid">
        <li>
          <div class="box">
            <h2>Cardiologia</h2>
            <a>R$140,00</a>
          </div>
          <p>
            O Cardiologista é o médico que faz o diagnóstico e tratamento das
            doenças do coração e também do sistema circulatório. Trata doenças
            como hipertensão, AVC e arritmia, o Cardiologista deve ser procurado
            para uma orientação preventiva.<br /><br />Alguns dos sintomas
            avaliados pelo cardiologista são: dores no peito, tontura, fadiga,
            cansaço, arritmias, suor excessivo, inchaço.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Dermatologia</h2>
            <a>R$120,00</a>
          </div>
          <p>
            O Dermatologista é o médico que faz diagnóstico e tratamento das
            doenças da pele, como acne, dermatite, micose e psoríase.<br /><br />Alguns
            dos sintomas avaliados pelo Dermatologista são: acne, queda de
            cabelos, micose de unhas, alergias e manchas na pele.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Gastroenterologia</h2>
            <a>R$120,00</a>
          </div>
          <p>
            O Gastroenterologista é o médico que faz o diagnóstico e tratamento
            das doenças do aparelho digestivo, como gastrite, prisão de ventre e
            úlcera péptica.<br /><br />Alguns dos sintomas avaliados pelo
            Gastroenterologista são: dor de estômago, azia, refluxo, engasgos,
            dor de barriga, diarreia, prisão de ventre.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Ginecologia</h2>
            <a>R$120,00</a>
          </div>
          <p>
            O Ginecologista é o médico que trata do organismo da mulher e de seu
            aparelho genital, fazendo o acompanhamento contínuo da saúde
            feminina.<br /><br />Alguns dos sintomas avaliados pelo
            Ginecologista são: problemas de corrimento, dor na relação sexual,
            suspeita de gravidez, prevenção de doenças relacionadas ao aparelho
            reprodutor feminino.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Otorrinolaringologia</h2>
            <a>R$120,00</a>
          </div>
          <p>
            O Otorrinolaringologista é o médico que faz diagnóstico e tratamento
            dos problemas de ouvido, nariz e garganta. Cuida de doenças como
            otite, sinusite e faringite.<br /><br />Alguns dos sintomas
            avaliados pelo Otorrinolaringologista são: zumbido, tonturas, roncos
            constantes, alterações no nariz, ouvido e boca.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Ortopedia</h2>
            <a>R$120,00</a>
          </div>
          <p>
            O Ortopedista é o médico que cuida das doenças e lesões nos ossos e
            nos músculos, como artrite, tendinite e fraturas.<br /><br />Alguns
            dos sintomas avaliados pelo Ortopedista são: dores nas costas, dores
            nas articulações, dores nas juntas, dores na lombar, dor muscular,
            lombalgia, inchaço na articulação, desgaste dos ossos, desgaste das
            articulações, dificuldade de movimentos.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Pediatria</h2>
            <a>R$120,00</a>
          </div>
          <p>
            O Pediatra é o médico que atua na assistência a crianças e
            adolescentes, fazendo a prevenção e o tratamento de doenças e
            acompanhando o desenvolvimento de seus pacientes.<br /><br />Alguns
            dos sintomas avaliados pelo Pediatra são: falta de apetite, erros
            alimentares, baixo peso e/ou estatura, dor abdominal, diarreia,
            constipação intestinal, tosse, obstrução nasal, coriza, espirros,
            alergias, crises de chiado no peito.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Psicologia</h2>
            <a>R$100,00</a>
          </div>
          <p>
            O Psicólogo é o profissional que acolhe, avalia e auxilia na
            prevenção e tratamento de doenças mentais, distúrbios emocionais e
            de personalidade. Além disso acompanha atitude, sentimentos e
            mecanismos psíquicos do comportamento humano, por intermédio da
            análise de emoções, ideias e valores, atuando de forma
            terapêutica.<br /><br />O Psicólogo avalia: conflitos pessoais e
            profissionais, orientação de pais e filhos, crises em
            relacionamentos, depressão.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Geriatria</h2>
            <a>R$160,00</a>
          </div>
          <p>
            O Geriatra é o médico que trata de pacientes idosos, acompanhando as
            mudanças naturais referentes ao processo de envelhecimento.<br /><br />Alguns
            dos sintomas avaliados pelo Geriatra são: esquecimentos constantes,
            dores de cabeça, tonturas, vontade de urinar com muita frequência,
            sede constante, perda de peso, fadiga, nervosismo, mudanças de
            humor, náusea e vômito, infecções frequentes, visão embaçada,
            dificuldade de cicatrização de feridas, dor nas articulações.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Psiquiatria</h2>
            <a>R$160,00</a>
          </div>
          <p>
            O Psiquiatra é o médico que trata da prevenção, diagnóstico e
            tratamento dos sofrimentos mentais de cunho orgânico ou funcional,
            como depressão, transtorno bipolar e de ansiedade.<br /><br />Alguns
            dos sintomas avaliados pelo Psiquiatra são: tristeza, ansiedade,
            angústia, medo.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Nutrição</h2>
            <a>R$100,00</a>
          </div>
          <p>
            O Nutricionista é o profissional de saúde que trabalha com educação
            alimentar, orientação de dietas e estudo dos alimentos.<br /><br />Alguns
            dos sintomas avaliados pelo Nutricionista são: obesidade,
            alimentação desregulada, intolerâncias a alguns alimentos.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Oftalmologia</h2>
            <a>R$120,00</a>
          </div>
          <p>
            A Nutrologia é a especialidade na qual o médico se dedica à
            prevenção, diagnóstico e tratamento de patologias no comportamento
            alimentar, como: obesidade, colesterol Alto, hipertensão Arterial.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Reumatologia</h2>
            <a>R$140,00</a>
          </div>
          <p>
            O Reumatologista é o médico que trata as doenças reumáticas, como
            artrite, esclerose, osteoporose e fibromialgia.<br /><br />Alguns
            dos sintomas avaliados pelo Reumatologista são: rigidez nas mãos,
            inchaço nas juntas, mãos roxas, mancha escura nas bochechas.
          </p>
          <hr />
        </li>

        <li>
          <div class="box">
            <h2>Clínica Geral</h2>
            <a>R$100,00</a>
          </div>
          <p>
            O Clínico Geral é o médico que trata de pacientes adultos,
            acompanhando diferentes doenças.<br /><br />Alguns dos sintomas
            avaliados pelo Clínico Geral são: cefaleia, mal-estar em geral,
            tontura, fadiga, diarreia, constipação, dores no peito.
          </p>
          <hr />
        </li>
      </ul>
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
