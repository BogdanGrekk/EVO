<?php
$fd = fopen("info1.txt", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
    echo $str;
    echo "<br>";
}
fclose($fd);
?>