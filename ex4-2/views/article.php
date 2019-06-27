<?php include 'header.php';  ?>
    <div class="container">
        <h1><?=$article['title']?></h1>
        <div>
            <div class="article">  
                <em>Опубликовано: <?=$article['created']?></em>
                <p><?=$article['content']?></p>
             </div>
            <a href="index.php">Назад</a>
          </div>
        </div>
<?php include 'footer.php';  ?> 
                
    


