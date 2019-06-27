<?php

require_once("controllers/article_controller.php");
$data = urldecode($_GET['id']);
$id = base64_decode($data);
$article = articles_single($id);

include("views/article.php");

?>
