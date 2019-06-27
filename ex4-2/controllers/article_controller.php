<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/ex4-2/models/Article.php';

function articles_all() {
    $articles = Article::getAll();
    return $articles;
}

function articles_single($id) {
    $article = Article::getOne($id);
    /*
    if ($article['title'] =="") {
        header("Location: /ex3/");
        die();
    }
     
     */
    return $article;
}
function article_save($title, $content) {
    $article = Article::save($title, $content);
    return $article;

}
?>