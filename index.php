<?php
echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>2 лаба общий вариант</title>
</head>
<body>";
if(isset($_GET['sel'])) $sel = $_GET['sel']; //объявляем переменную и присваиваем переданное GET-запросом значение
else $sel = 1; //объявляем переменную и присваиваем стандартное значение
    switch ($sel) //выбор ветки кода с учетом переменной
    {
        case 1: {
            echo "<div style='width: 20%;'>
        <ul>
            <li class=\"button-high\" style='background-color: aquamarine;'><a href=\"index.php?sel=1\">О компании</a></li>
            <li class=\"button\"><a href=\"index.php?sel=2\">Услуги</a></li>
            <li class=\"button\"><a href=\"index.php?sel=3\">Прайс</a></li>
            <li class=\"button\"><a href=\"index.php?sel=4\">Контакты</a></li>
        </ul>
    </div>"; //вывод меню со ссылками с подсвеченной первой ссылкой
            break;
        }
        case 2: {
            echo "<div style='width: 20%;'>
        <ul>
            <li class=\"button\"><a href=\"index.php?sel=1\">О компании</a></li>
            <li class=\"button-high\" style='background-color: aquamarine;'><a href=\"index.php?sel=2\">Услуги</a></li>
            <li class=\"button\"><a href=\"index.php?sel=3\">Прайс</a></li>
            <li class=\"button\"><a href=\"index.php?sel=4\">Контакты</a></li>
        </ul>
    </div>"; //вывод меню со ссылками с подсвеченной второй ссылкой
            break;
        }
        case 3: {
            echo "<div style='width: 20%;'>
        <ul>
            <li class=\"button\"><a href=\"index.php?sel=1\">О компании</a></li>
            <li class=\"button\"><a href=\"index.php?sel=2\">Услуги</a></li>
            <li class=\"button-high\" style='background-color: aquamarine;'><a href=\"index.php?sel=3\">Прайс</a></li>
            <li class=\"button\"><a href=\"index.php?sel=4\">Контакты</a></li>
        </ul>
    </div>"; //вывод меню со ссылками с подсвеченной третьей ссылкой
            break;
        }
        case 4: {
            echo "<div style='width: 20%;'>
        <ul>
            <li class=\"button\"><a href=\"index.php?sel=1\">О компании</a></li>
            <li class=\"button\"><a href=\"index.php?sel=2\">Услуги</a></li>
            <li class=\"button\"><a href=\"index.php?sel=3\">Прайс</a></li>
            <li class=\"button-high\" style='background-color: aquamarine;'><a href=\"index.php?sel=4\">Контакты</a></li>
        </ul>
    </div>"; //вывод меню со ссылками с подсвеченной четвертой ссылкой
            break;
        }

    }
echo "<button type=\"button\"><a href='index.html' style='text-decoration: none;'>Назад</a></button>"; //вывод кнопки "Назад"
echo "</body>";