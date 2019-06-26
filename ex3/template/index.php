<?php
require_once('header.php');
$title = 'Заголовок 2';
$meta = 'Описание 2';
$obj = new Header($title, $meta);
$obj->f_display();
?>
<div class="container">
    <div>Основное содержание страницы</div>
</div>
<?php
require_once('footer.php');
?>
