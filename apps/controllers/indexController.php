<?php

	$url=(isset($_GET['url'])) ? $_GET['url'] : '';
	$url = explode("/", $url);

	if ($url[0]=="") {
		include "../views/post-page.phtml";
	}
	if ($url[0]=="pagina-incial") {
		include "../views/post-page.phtml";
	}
	if ($url[0]=="arquivos") {
		include "../views/archive-page.phtml";
	}
?>