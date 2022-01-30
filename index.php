<?php
	require_once __DIR__.'/vendor/autoload.php';
	
	$mpdf = new Mpdf\Mpdf();
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
			font-family: Calibri;
			line-height: 22px;
		}
		
		.container-nome {
			padding-top: 70px;
			padding-left: 45px;
		}
		
		.nome {
			position: relative;
			color: black;
			font-size: 22pt;
			font-weight: bold;
			margin-bottom: 5px;
			
		}
		
		.o-m {
			color: gray;
		}
		
		.titulo-sessao {
			color: black;
			font-size: 15pt;
		}
				
		.ul-contato {
			margin-top: 20px;
		}
		
		.container-header {
			position: absolute;
			background-color: #03071e;
			width: 29%;
			height: 100%;
			padding: 20px;
			left: 525px;
			z-index: 10;
		}
		
		.contatos-negocios {
			width: 100%;
		}
		
		.item {
			color: white;
		}
		
		.container-sessao {
			padding-left: 45px;
			padding-right: 35px;
			margin-bottom: 5px;
			margin-right: 280px;
		}
		
		.descricao-sessao {
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
		
		.cargo {
			padding-top: 10px;
		}
		
		.subtitulo-sessao {
			margin-bottom: 5px;
			font-weight: bold;
		}
		
		.periodos {
			color: gray;
			
		}
		</style>");
	$mpdf->WriteHTML("<body>");
	$mpdf->WriteHTML("<div class='container-header'>
	</div>");
	$mpdf->WriteHTML("<div class='container-nome'>
		<div class='nome'>Salomão Cruz</div>
		<span class='cargo o-m'>Estudante de Engenharia da Computação</span>
	</div>");
	$mpdf->WriteHTML("<div class='container-sessao'>
				<h2 class='titulo-sessao'>Perfil</h2>
					<p class='descricao-sessao'>Autodidata com gosto por desafios, vontade de aprender sem medir esforços pra evoluir e provido de um apurado senso analítico que me possibilita econtrar métodos e estratégias que levam à solução mais eficiente de cada problema</p>
	</div>");
	$mpdf->WriteHTML("<div class='container-sessao'>
	<h2 class='titulo-sessao'>Formação Acadêmica</h2>
		<div class='subtitulo-sessao'>Engenharia da Computação, Universidade Federal do Amazonas, Manaus</div>
		<div class='periodos'>Março 2019 - Dezembro 2023</div>
	</div>");
		$mpdf->WriteHTML("<div class='container-sessao'><h2 class='titulo-sessao'>Experiência Profissional</h2><div class='subtitulo-sessao'>Desenvolvedor Full Stack, Freelance, Manaus</div>
			<div class='periodos'>Janeiro 2020 - Janeiro 2022</div>
			<p class='descricao-sessao'>Trabalhei como desenvolvedor FullStack freelancer por dois anos. Desenvolvi diversos projetos para web, desde jogos, landing pages e sistemas completos. Pude aplicar meus conhecimentos de HTML5, CSS3, Javascript, PHP e em bibliotecas e frameworks, sobretudo de JavaScript</p>
		</div>");
	$mpdf->WriteHTML("<div class='container-sessao'><h2 class='titulo-sessao'>Cursos</h2>
		<div class='subtitulo-sessao'>Bootcamp Eduzz FullStack Developer #2, Digital Innovation One.Inc</div>
		<div class='periodos'>Dezembro 2021 - Janeiro 2022</div>
		<div class='subtitulo-sessao'>Curso Web Moderno, COD3R</div>
		<div class='periodos'>Junho 2021 - Julho 2021</div>
		<div class='subtitulo-sessao'>Curso Desenvolvimento Web 2.0, Danki Code</div>
		<div class='periodos'>Abril 2021 - Abril 2021</div>
	</div>");
	$mpdf->WriteHTML("</body>");
	$mpdf->Output();
?>
