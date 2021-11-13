<?php
	include('vendor/autoload.php');
	
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML("<style>
		* {
			margin: 0;
			padding: 0;
			box-sizin: border-box;
		}
		
		@page {
			margin: 0px;
		}
		
		body {
			font-family: Courier;
			line-height: 22px;
		}
		.nome {
			position: relative;
			color: white;
			text-align: center;
			font-size: 35pt;
		}

		.ocupacao {
			position: relative;
			text-align: justify;
			align-self: center;
			font-size: 13pt;
			color: white;
			weight: 15;
		}
		
		.ul-contato {
			margin-top: 20px;
		}
		
		.container-header {
			background-color: rgb(89, 40, 89);/*rgb(69, 104, 152);*/
			width: 100%;
			height: 250px;
			padding: 20px;
		}
		
		.titulo-secao {
			font-size: 20pt;
			color: rgb(89, 40, 89);/*rgb(69, 104, 152);*/
		}
		
		.contatos-negocios {
			width: 100%;
		}
		
		.item {
			color: white;
		}
		
		.container-secao {
			padding-left: 35px;
			padding-right: 35px;
			margin-bottom: 5px;
		}
		
		.descricao-secao {
			text-align: justify;
		}
		
		.titulo-sub-secao {
			font-size: 16pt;
			font-weight: bold;
			color: rgba(0,0,0,0.01);
			margin-top: 10px;
		}
		
		.descricao-curso {
			text-align: justify;
		}
		
		.prox-pagina {
			padding-top: 60px;
		}

		.prox-pagina-sub {
			padding-top: 80px;
		}

		.instituicao-curso {
			font-weight: normal;
		}
		
		.ul-conceitos-curso {
			margin-top: 0px;
			padding-top: 0px;
			position: absolute;
			top: -10px;
		}
	
		.prox-titulo {
			padding-top: 20px;
		}
		
		.ul-formacao li {
			list-style-type: none; 
		}

		.p-t-50 {
			padding-top: 50px;
		}

		.p-t-20 {
			padding-top: 20px;
		}

		.p-t-10 {
			padding-top: 10px;
		}

		.ocupacao {
			position: absolute;
			width: 100%;
			text-align: center;
			font-weight: bold;
		}

		.m-t-50 {
			margin-top: 50px;
		}

		footer {
			position: relative;
			width: 100%;
			height: 100px;
			background-color: rgb(89, 40, 89);
		}
		</style>");
	$mpdf->WriteHTML("<body>");
	$mpdf->WriteHTML("<div class='container-header'>
				<h1 class='nome'>Salomão Cruz</h1>
				<div class='ocupacao'>Estudante de Engenharia da Computação</div>
				<ul class='ul-contato'>
					<li class='item-1 item'>Celular: (68)9255-6033</li>
					<li class='item-2 item'>E-mail: scc@icomp.ufam.edu.br</li>
					<li class='item-3 item'>GitHub: https://github.com/shl0mo</li>
					<li class='item-4 item'>LinkedIn: https://www.linkedin.com/in/salomao-cruz</li>
				</ul>
			</div>");
	$mpdf->WriteHTML("<div class='container-secao'><h2 class='titulo-secao'>Perfil</h2><p class='descricao-secao'>Autodidata com gosto por desafios, vontade de aprender sem medir esforços pra evoluir e provido de um apurado senso analítico que me possibilita econtrar métodos e estratégias que levam à solução mais eficiente de cada problema</p></div>");
	$mpdf->WriteHTML("<div class='container-secao'>
						<h2 class='titulo-secao'>Competências</h2>
						<ul>
							<li>Apurada lógica de programação</li>
							<li>Conhecimento avançado da linguagem Python</li>
							<li>Conhecimento de bancos de dados relacionais e NoSQL</li>
							<li>Desenvolvimento em Verilog</li>
							<li>Frameworks front-end e back-end</li>
							<li>Python para análise de dados - Pandas e Numpy</li>
							<li>Analítica e resolução de problemas</li>
							<li>Gestão de tempo</li>
							<li>Inglês avançado</li>
						</ul>
					</div>");
	$mpdf->WriteHTML("<div class='container-secao'><h2 class='titulo-secao'>Experiência Profissional</h2><span class='titulo-sub-secao'>Desenvolvedor Full Stack</span><span class='instituicao-curso' style='font-size: 14pt;'>, Agiliza Zap</span><span class='instituicao-curso' style='font-size: 14pt;'> &bull; 04/2021 - 09/2021<ul><li>Manutenção da API do software desenvolvida em Node.js</li><li>Manutenção do código-fonte do software em Visual Basic</li><li>Desenvolvimento de um painel de controle integrado, utilizando PHP com o framework Laravel</li></ul></div>");
	$mpdf->WriteHTML("<div class='container-secao'><h2 class='titulo-secao'>Formação Acadêmica</h2><ul class='ul-formacao'><li><strong>Graduação:</strong> Engenharia da Computação</li><li><strong>Instituição: </strong>Universidade Federal do Amazonas - Manaus, AM</li><li><strong>Período: </strong> 03/2019 - Em andamento</li></ul></div>");
	$mpdf->WriteHTML("<div class='container-secao prox-pagina'><h2 class='titulo-secao'>Cursos Complementares</h2>
		<ul>
			<li class='titulo-sub-secao'>Introdução ao MongoDB e Bancos de Dados NoSQL, <span class='instituicao-curso'>Digital Innovation One Inc.</span></li>
				<p class='descricao-curso'>Concluído em outubro de 2021<br>
					<strong>Principais conceitos aprendidos:</strong>
					<ul>
						<li>Banco de dados não relacionais</li>
						<li>Tipos de bancos de dados NoSQL</li>
						<li>MongoDB</li>
						<li>Schmea design</li>
						<li>Operações de manipulação de dados</li>
						<li>Performance e índices</li>
						<li>Agregações</li>
					</ul>
				</p>
			<li class='titulo-sub-secao p-t-20'>Curso Web Moderno Completo, <span class='instituicao-curso'>COD3R</span></li>
			<p class='descricao-curso'>Concluído em agosto de 2021<br>
				<strong>Principais conceitos aprendidos:</strong>
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>JavaScript</li>
					<li>React.js</li>
					<li>Vue.js</li>
					<li>Bootstrap</li>
					<li>Node.js</li>
					<li>SQL</li>
				</ul>
			</p>
			<li class='titulo-sub-secao p-t-20'>Artificial Intelligence A-Z&trade;: Learn How To Build an AI, <span class='instituicao-curso'>SuperDataScience</span></li>
				<p class='descricao-curso'>Concluído em agosto de 2021<br><strong>Principais conceitos aprendidos:</strong>
				<br> 
				<ul>
					<li>Redes Neurais - conceitos gerais</li>
					<li>Q-Learning</li><li>Deep Q-Learning</li>
					<li>Deep Convolutional Q-Learning</li>
					<li>Redes Neurais Convolucionais</li>
					<li>Advantage Asynchronous Actor-Critic</li>
					<li>Long Short-Term Memory</li>
				</ul>
			</p>
			<br>
			<li class='titulo-sub-secao prox-pagina-sub'>Data Science Foundations, <span class='instituicao-curso'>VAI Academy</span></li>
			<p class='descricao-curso'>Concluído em agosto de 2021<br><strong>Principais conceitos aprendidos:</strong><br> 
				<ul>
					<li>Conceitos gerais de Ciência de Dados</li>
					<li>Algoritmos e estruturas de dados em Python</li>
					<li>Análise de dados com Pandas</li>
					<li>Numpy para análise de dados</li>
					<li>Probabilidade e Estatística</li>
				</ul>
			</p>
			<li class='titulo-sub-secao p-t-20'>Inteligência Artificial Fundamentos 2.0, <span class='instituicao-curso'>Data Science Academy</span></li>
			<p class='descricao-curso'>Concluído em agosto de 2021<br><strong>Principais conceitos aprendidos:</strong><br> 
				<ul>
					<li>Filosofia da IA</li>
					<li>Classificador K-NN</li>
					<li>Tipos de aprendizado de máquina</li>
					<li>Redes Adversárias Generativas</li>
					<li>Implicações da IA na sociedade</li>
				</ul>
			</p>
			<li class='titulo-sub-secao p-t-20'>Curso Desenvolvimento Web 2.0, <span class='instituicao-curso'>Danki Code</span></li>
			<p class='descricao-curso'>Concluído em agosto de 2021<br><strong>Principais conceitos aprendidos:</strong><br> 
				<ul>
					<li>PSR4</li>
					<li>Orientação a objetos em PHP</li>
					<li>Composer e API's</li>
					<li>CSS Avançado</li>
					<li>Segurança em aplicações web</li>
				</ul>
			</p>
			<li class='titulo-sub-secao p-t-20'>PHP Jedai, <span class='instituicao-curso'>Danki Code</span></li>
			<p class='descricao-curso'>Concluído em junho de 2021<br><strong>Principais conceitos aprendidos:</strong><br> 
				<ul>
					<li>Linguagem PHP</li>
					<li>Arquitetura MCV</li>
					<li>Web Services e API</li>
					<li>Laravel</li>
					<li>MySQL no PHP</li>
				</ul>
			</p>
			</ul>");
	$mpdf->WriteHTML("</body>");
	$mpdf->Output();
?>
