<?php

require_once("controllers/article_controller.php");

$article = articles_single($_GET['id']);

include("views/article.php");
?>
