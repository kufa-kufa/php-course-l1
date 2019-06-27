<?php include 'header.php';?>
    <div class="container">
        <h1>мой первый блог</h1>
        <div>
            <div class="article">
                <ul>
                    <?php 
                        foreach ($articles as $article) {
                            $url = base64_encode($article["id"]);
                            $url = urlencode($url);
                            echo '<li style="list-style:none;"><a href=article.php?id='.$url.'>'.$article["title"].'</a></li>';
                        }
                    ?>
                </ul>
               
             </div>
          </div>
        </div>
<?php include 'footer.php';?>      



