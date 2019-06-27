<?php include 'header.php';  ?>
        <div class="container">
            <h1>Мой первый блог</h1><a href="admin/">Добавить материал</a>
            <div>
                <div class="article">
                    <?php
                    foreach ($articles as $article) {
                        echo '<li><a href=article.php?id=' . $article["id"] . '>' . $article["title"] . '</a></li>';
                    }
                    ?>
                </div>
            </div>
        </div>
<?php include 'footer.php';  ?> 