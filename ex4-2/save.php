<?php
require_once 'controllers/article_controller.php';

session_start();       
if (isset($_POST["save"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    if (trim($title) != "" && trim($content)) {
        $article = article_save($title, $content); 
        if($article["status"]=="success")
        {                   
            $_SESSION["message"] = $article["message"];
        }
        else {
            $_SESSION["message"] = $article["message"];
        }

        header("Location:save.php");
    }
    else {
        $_SESSION["message"] = 'Fields_empty';
    }
}

$message = isset($_SESSION["message"]) ? $_SESSION["message"]: '';
include 'views/admin/article_save.php';      
?>
    