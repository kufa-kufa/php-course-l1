
<form action="url.php?value=kufa&id=123&" method="post">
   
    <input type="submit" value="send">
</form>
<form action="url.php" method="post">
    <input type="text" name="user_name">
    <input type="text" name="user_phone">
    <input type="submit" value="send">
    <a href="file.php?user_name=student&user_email=student@mail.ru">edit</a>
</form>
<?php

if(isset($_GET['id']) && isset($_GET['value'])) {
echo $_GET['id'];
echo "<br/>";
echo $_GET['value'];
}

if(isset($_POST['user_name']) && isset($_POST['user_phone'])) {
echo $_POST['user_name'];
echo "<br/>";
echo $_POST['user_phone'];
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

