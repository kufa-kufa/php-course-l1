<?php

require_once 'controllers/article_controller.php';
$articles = articles_all();
include 'views/articles.php';
