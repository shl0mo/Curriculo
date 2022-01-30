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
			padding-left: 50px;
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
			margin-bottom: 10px;
			margin-top: 25px;
		}
		
		.container-header {
			position: absolute;
			background-color: #03071e;
			width: 25%;
			height: 100%;
			padding: 20px;
			left: 555px;
			z-index: 10;
		}
		
		.container-sessao {
			padding-left: 50px;
			padding-right: 35px;
			margin-bottom: 5px;
			margin-right: 250px;
		}
		
		.descricao-sessao {
			text-align: justify;
			margin-bottom: 0px;
			margin-top: 7px;
		}
		
		.descricao-curso {
			text-align: justify;
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
		
		.mb-10 {
			margin-bottom: 10px;
		}
		
		.mt-10 {
			padding-botom: 0px;
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
					<p class='descricao-sessao'>Autodidata com gosto por desafios, vontade de aprender sem medir esforços pra evoluir e provido de um apurado senso analítico que me possibilita econtrar métodos e estratégias que levam à solução mais eficiente de cada problema.</p>
	</div>");
	$mpdf->WriteHTML("
		<div class='container-sessao'>
			<h2 class='titulo-sessao'>Formação Acadêmica</h2>
			<div class='subtitulo-sessao'>Engenharia da Computação, Universidade Federal do Amazonas, Manaus</div>
			<div class='periodos'>Março 2019 - Dezembro 2023</div>
			<p class='descricao-sessao'>Atualmente faço Engenharia da Computação na Universidade Federal do Amazonas. Composto tanto disciplinhas de hardware quanto de software e com um bom aprofundamento em códigos, apresentando algoritmos e estruturas de dados avançados, projetos de programas e inteligência artificial, o curso se mostra bem completo.</p>
		</div>
	
		<span>
		<div class='container-sessao mt-10'>
			<h2 class='titulo-sessao'>Experiência Profissional</h2>
			<div class='subtitulo-sessao'>Desenvolvedor Full Stack, Freelance, Manaus</div>
			<div class='periodos'>Janeiro 2020 - Janeiro 2022</div>
			<p class='descricao-sessao mt-10'>Trabalhei como desenvolvedor Full-Stack freelancer por dois anos. Desenvolvi diversos projetos para web, desde jogos, landing pages e sistemas completos. Pude aplicar meus conhecimentos de HTML5, CSS3, Javascript, PHP e em bibliotecas e frameworks, sobretudo os de JavaScript.</p>
		</div>
		</span>
		
		<div class='container-sessao'>
			<h2 class='titulo-sessao'>Cursos</h2>
			<div class='subtitulo-sessao'>Bootcamp Eduzz FullStack Developer #2, Digital Innovation One.Inc</div>
			<div class='periodos mb-10'>Dezembro 2021 - Janeiro 2022</div>
			<div class='subtitulo-sessao'>Curso Web Moderno, COD3R</div>
			<div class='periodos mb-10'>Junho 2021 - Julho 2021</div>
			<div class='subtitulo-sessao'>Curso Desenvolvimento Web 2.0, Danki Code</div>
		<div class='periodos'>Abril 2021 - Abril 2021</div>
	</div>");
	$mpdf->WriteHTML("</body>");
	$mpdf->Output();
?>x
