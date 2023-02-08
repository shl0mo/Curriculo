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
		
		.titulo-sessao {
			color: black;
			font-size: 15pt;
			margin-bottom: 10px;
			margin-top: 25px;
		}
		
		.container-header {
			position: absolute;
			background-color: rgb(89, 40, 89);
			width: 25%;
			height: 100%;
			padding: 30px;
			left: 536px;
			z-index: 10;
			color: white;
			padding-top: 80px;
		}
		
		.container-sessao {
			padding-left: 50px;
			padding-right: 35px;
			margin-bottom: 5px;
			margin-right: 250px;
		}
		
		.descricao-sessao {
			
			margin-bottom: 0px;
			margin-top: 7px;
		}
			
		.cargo {
			padding-top: 10px;
			color: gray;
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
		
		
		a {
			color: white;
		}
		
		.titulo-header {
			font-weight: bold;
			font-size: 12pt;
			padding-bottom: 3px;
		}
		
		.box-header {	
			padding-bottom: 35px;
		}
		
		.barra-habilidade {
			position: relative;
			background-color: white;
			height: 6px;
			padding: 0;
		}
		
		.bg-b {
			position: absolute;
			width: 33px;
			background-color: rgb(89, 40, 89);	
		}
		
		tr, td, table {
			border: 1px solid #000;
		}
		
		td {
			padding: 2px;
		}
		
		td {
			width: 33px;
		}
		
		
		.label-habilidade {
			margin-top: 6px;
		}
		</style>");
	$mpdf->WriteHTML("<body>");
	$mpdf->WriteHTML("<div class='container-header'>
		<div class='box-header'>
			<div class='titulo-header'>Dados Pessoais</div>
			<div>(92) 98115-2683</div>
			<a href='mailto:scc@icomp.ufam.edu.br?'>scc@icomp.ufam.edu.br</a>
		</div>
		<div class='box-header'>
			<div class='titulo-header'>Websites</div>
			<a href='https://portfolio-r051u44g0-shl0mo.vercel.app/'>Portfólio</a>
		</div>
		<div class='box-header'>
			<div class='titulo-header'>Redes Sociais</div>
			<div><a href='https://linkedin.com/in/salomao-cruz/'>LinkdeIn</a></div>
			<div><a href='https://github.com/shl0mo/'>GitHub</a></div>
		</div>
		<div class='box-header'>
			<div class='titulo-header'>Competências</div>
			<div class='label-habilidade'>HTML5</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div class='label-habilidade'>CSS3</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
				</tr>
			</table>
			<div class='label-habilidade'>JavaScript</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div class='label-habilidade'>React.js</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
				</tr>
			</table>			
			<div class='label-habilidade'>Vue.js</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div class='label-habilidade'>Node.js</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div class='label-habilidade'>MongoDB</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
				</tr>
			</table>
			<div class='label-habilidade'>MySQL</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
					<td class='bg-b'></td>
				</tr>
			</table>
			<div class='label-habilidade'>PostgreSQL</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
				</tr>
			</table>
			<div class='label-habilidade'>PHP</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div class='label-habilidade'>TypeScript</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
					<td class='bg-b'></td>
				</tr>
			</table>
			<div class='label-habilidade'>Pandas</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div class='label-habilidade'>OpvenCV</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
				</tr>
			</table>
			<div class='label-habilidade'>TensorFlow</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
					<td class='bg-b'></td>
				</tr>
			</table>
		</div>

		<div class='box-header'>
			<div class='titulo-header'>Idiomas</div>
			<div class='label-habilidade'>Inglês</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
				</tr>
			</table>
			<div class='label-habilidade'>Italiano</div>
			<table class='barra-habilidade'>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td class='bg-b'></td>
					<td class='bg-b'></td>
					<td class='bg-b'></td>
				</tr>
			</table>
		</div>
	</div>");
	$mpdf->WriteHTML("<div class='container-nome'>
		<div class='nome'>Salomão Cruz</div>
		<span class='cargo'>Estudante de Engenharia da Computação</span>
	</div>");
	$mpdf->WriteHTML("<div class='container-sessao'>
				<h2 class='titulo-sessao'>Perfil</h2>
					<p class='descricao-sessao'>Autodidata com gosto por desafios, vontade de aprender e com um apurado senso analítico que me possibilita econtrar métodos e estratégias que levam à solução mais eficiente de cada problema.</p>
	</div>");
	$mpdf->WriteHTML("
		<div class='container-sessao'>
			<h2 class='titulo-sessao'>Formação Acadêmica</h2>
			<div class='subtitulo-sessao'>Engenharia da Computação, Universidade Federal do Amazonas, Manaus</div>
			<div class='periodos'>Março 2019 - Dezembro 2024</div>
		</div>
	
		<span>
		<div class='container-sessao'>
			<h2 class='titulo-sessao'>Experiência</h2>
			<div class='subtitulo-sessao'>Projeto SUPER, Pesquisador, Manaus</div>
			<div class='periodos'>Junho 2021 - Maio 2022</div>
			<p class='descricao-sessao'>Atualmente sou bolsista pesquisador no projeto SUPER, trabalhando com Ciência de Dados. Gero relatórios sobre o desempenho e evasão dos alunos da UFAM, buscando de prever iminentes evasões acadêmicas. No processo, utilizo Pandas, Pandera, Matplotlib e Seaborn.</p>
		</div>
		</span>
		
		<div class='container-sessao'>
			<h2 class='titulo-sessao'>Cursos</h2>
			<div class='subtitulo-sessao'>Capacitação Profissional em Fotografia Computacional, Instituto de Computação/UFAM</div>
			<div class='periodos mb-10'>Setembro 2021 - Julho 2022</div>
			<div class='subtitulo-sessao'>Bootcamp FullStack Developer #2, Digital Innovation One.Inc</div>
			<div class='periodos mb-10'>Dezembro 2021 - Janeiro 2022</div>
			<div class='subtitulo-sessao'>Bootcamp Cloud Data Engineer, Digital Innovation One.Inc</div>
			<div class='periodos mb-10'>Agosto 2021 - Novembro 2021</div>
			<div class='subtitulo-sessao'>Data Science Foundations, VAI Academy</div>
			<div class='periodos mb-10'>Agosto 2021</div>
			<div class='subtitulo-sessao'>Curso Web Moderno, COD3R</div>
			<div class='periodos mb-10'>Junho 2021 - Agosto 2021</div>
			<div class='subtitulo-sessao'>Curso Desenvolvimento Web 2.0, Danki Code</div>
			<div class='periodos'>Junho 2021 - Julho 2021</div>
	</div>");
	$mpdf->WriteHTML("</body>");
	$mpdf->Output();
?>x
