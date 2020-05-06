<?php
echo "<html lang=\"en\">
<link href='index.css' rel='stylesheet'>
<head>
    <meta charset=\"UTF-8\">
    <title>2 лаба 2 вариант</title>
</head>
<body>";
echo "<div align='center'>";
echo "<form action=\"laba2_var2.php\" method=\"get\">
    <input type=\"text\" name=\"input\">
    <input type=\"submit\" value=\"Отправить\" name=\"submit\">
</form>";
$input = (int)$_GET['input'];
echo "Введенное значение: $input"; //вывод введенного значения
if($input>0 && $input<256) //если число натуральное
    {
    echo "<table border='1'>"; //открываем таблицу
    for($i=1;$i<=$input;$i++) //заполняем таблицу строками
    {
        //$color=(int)(0x808080+((0xffffff-0x808080)/$input)*($i-1));
        //$color=(int)(0xfff/$input)*($i-1);
        $step=(int)(256/$input);
        $color=(int)($step*0x010101)*($i-1); //выбор оттенка серого
        $color = dechex($color); //перевод цвета в 16-значную систему
        if($i%5==0) //каждая 5-ая строка будет с зеленым фоном
        {
            echo "<tr class='tr-green'><td></td></tr>"; //вставляем строку с зеленым фоном
        }
        else echo "<tr style='background-color: $color'><td></td></tr>"; //вставляем строку
    }
    echo "</table>"; //закрываем таблицу
    }
else echo "Введенное значение должно быть >0"."<h1>";
echo "</div>";
echo "</body>";