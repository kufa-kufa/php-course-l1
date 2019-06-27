<?php include 'header.php';?>
    <div class="container">
        <h1>мой первый блог</h1>
        <div>
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Опубликовано: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>
        </div>
    </div>
<?php include 'footer.php';?>      
      
    


