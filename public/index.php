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
			<div class="ui container section-logos" style="text-align: center;">
				<img src="static/images/ifrn-logo.png" class="ui image medium middle aligned left floated" style="margin-top: 50px; width: 200px;">
				<div style="margin-right: auto; margin-left: auto; width: 500px;">
					<img src="static/images/proenem-logo.png" width="148px" style="margin-top: 30px;" class="ui 	 image middle aligned">
					<img src="static/images/proredacao-logo.png" width="230px" style="margin-top: 30px;" class="ui  image middle aligned">
				</div>
			</div>
			<nav class="ui green inverted secondary menu green-gradient" id="nav-bar">
				<div class="ui container">
					<a href="?url=sobre-programa" class="item menu-link">Sobre o Programa</a>
					<a href="?url=avisos-noticias" class="item menu-link">Avisos e Notícias</a>
					<a href="?url=material-didatico" class="item menu-link">Material Didático</a>					
					<div class="right menu">
						<a href="?url=login" class="item menu-link">Login</a>
					</div>
				</div>
			</nav>
		</header>
		<main class="ui container">
			<div class="ui content left aligned grid" style="margin-top: 25px;margin-bottom: 25px;">
			
			</div>
		</main>
		<footer class="ui inverted vertical footer segment center aligned">
			<div class="ui center aligned container">
				<div class="ui stackable inverted grid center aligned">
					<div class="three wide column">
						<h4 class="ui inverted header">Redes Sociais</h4>
						<div class="ui inverted link list">
							<a class="item" href="https://www.facebook.com/ProEnem-e-ProReda%C3%A7%C3%A3o-161546967872479/" target="_blank"><i class="facebook square icon"></i>Página no Facebook</a>
							<a class="item" href="https://www.instagram.com/proenemred_ifjc/" target="_blank"><i class="instagram icon"></i>Perfil no Instagram</a>
						</div>
					</div>
					<div class="three wide column">
						<h4 class="ui inverted header">Links sugeridos</h4>
						<div class="ui inverted link list">
							<a class="item" href="http://portal.ifrn.edu.br/campus/joaocamara" target="_blank">Portal IFRN</a>
							<a class="item" href="http://docentes.ifrn.edu.br/" target="_blank">Docentes IFRN</a>
							<a class="item" href="https://enem.inep.gov.br/" target="_blank">Enem</a>
						</div>
					</div>
					<div class="seven wide right floated column">
						<img src="static/images/proenem-logo.png" width="70px" class="ui image middle aligned image-logo-white">
						<img src="static/images/proredacao-logo.png" width="112px" class="ui image middle aligned image-logo-white">
					</div>
				</div>
				<div class="ui inverted link list">
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
			$('.ui.accordion')
			  .accordion();
			$('.menu .item')
			  .tab();
		</script>
	</body>
</html>
