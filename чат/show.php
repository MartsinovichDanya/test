<?php
$color = "red";
// вывод сообщений

require 'config.php'; // подключаем конфиг


$file = file($filename);

$count = count($file);

for($i = $count; $i-- > 0;) {
    echo <p><font color=$color>$file[$i]</font>"; // выводим сообщение
    echo "<br>"; // а вместе с ним HTML-тег <br> для переноса строки
}

