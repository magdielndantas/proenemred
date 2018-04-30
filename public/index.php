<!DOCTYPE html>
<html>
	<head>
		<title>Pro Enem e Pro Redação</title>
		<link rel="stylesheet" type="text/css" href="static/css/main.css">
		<link rel="stylesheet" type="text/css" href="static/css/semantic.min.css">
		<script
		src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script>
		<script src="static/js/semantic.min.js"></script>
	</head>
	<body>
		<header class="grey-gradient">
			<div class="ui container" style="text-align: center;">
				<img src="static/images/ifrn-logo.png" class="ui image medium middle aligned left floated" style="margin-top: 50px; width: 200px;">
				<div style="margin-right: auto; margin-left: auto; width: 500px;">
					<img src="static/images/proenem-logo.png" width="100px" class="ui 	 image middle aligned">
					<img src="static/images/proredacao-logo.png" class="ui small image middle aligned">
				</div>
			</div>
			<nav class="ui green inverted secondary menu green-gradient" id="nav-bar">
				<div class="ui container">
					<a href="?url=pagina-inicial" class="item menu-link">Página Inicial</a>
					<a href="?url=mural-de-avisos" class="item menu-link">Mural de Avisos</a>
					<a href="?url=arquivos" class="item menu-link">Arquivos</a>					
					<div class="ui inline dropdown item menu-link">
						Sobre os projetos
						<i class="dropdown icon"></i>
						<div class="ui green inverted secondary menu green-gradient">
							<a class="item menu-link">Sobre</a>
							<a class="item menu-link">Equipe</a>
						</div>
					</div>
					<div class="right menu">
						<a href="" class="item menu-link">Entrar</a>
					</div>
				</div>
			</nav>
		</header>
		<main class="ui container" style="background: #fefefe; padding: 20px 20px 20px 60px;">
			<div class="ui content left aligned grid" style="margin-top: 25px;margin-bottom: 25px;">
				<?php include("../app/controllers/indexController.php")?>
			</div>
		</main>
		<footer class="ui green inverted vertical footer segment green-gradient" style="padding-top: 30px;">
			<div class="ui center aligned container">
				<div class="ui stackable inverted grid">
					<div class="three wide column">
						<h4 class="ui inverted header">Redes Sociais</h4>
						<div class="ui inverted link list">
							<a class="item" href="https://www.facebook.com/" target="_blank"><i class="facebook square icon"></i>Página no Facebook</a>
							<a class="item" href="https://www.instagram.com/" target="_blank"><i class="instagram icon"></i>Perfil no Instagram</a>
						</div>
					</div>
					<div class="three wide column">
						<h4 class="ui inverted header">Links sugeridos</h4>
						<div class="ui inverted link list">
							<a class="item" href="http://portal.ifrn.edu.br/campus/joaocamara" target="_blank">Portal IFRN</a>
							<a class="item" href="http://docentes.ifrn.edu.br/" target="_blank">Docentes</a>
							<a class="item" href="https://enem.inep.gov.br/" target="_blank">Enem</a>
						</div>
					</div>
					<div class="seven wide right floated column">
						<img src="static/images/proenem-logo.png" width="68px" class="ui image middle aligned image-logo-white">
						<img src="static/images/proredacao-logo.png" width="100px" class="ui image middle aligned image-logo-white">
					</div>
				</div>
				<div class="ui horizontal inverted small  link list">
					<a class="item" href="http://portal.ifrn.edu.br" target="_blank">Desenvolvido por: IFRN</a>
				</div>
			</div>
		</footer>
		<script type="text/javascript">
			$('.ui.dropdown')
			.dropdown();
			var offset = $('#nav-bar').offset().top;
			var $navBar = $('#nav-bar');
			$(document).on('scroll', function () {
				if (offset <= $(window).scrollTop()) {
					$navBar.addClass('fixar-nav-bar');
				} else {
					$navBar.removeClass('fixar-nav-bar');
				}
			});
		</script>
	</body>
</html>