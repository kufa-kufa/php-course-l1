<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

// Создание нового класса Class1:
        class Class1 {

            public $name;       // свойство

            function GetName() {    // метод
                echo "<h3>Тилек</h3>";
            }
        }
        
        $object = new Class1;          // Создание объекта класса Class1
        $object->name = "Асан";     // Получение доступа к членам класса
        echo $object->name;           // Вывод Асан

        $object->GetName();     /* Доступ к методу класса. Вывод 'Тилек'    	
          заголовком 3 уровня */
        ?>

    </body>
</html>
