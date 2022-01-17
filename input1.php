<?php
$fd = fopen("info1.txt", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
    echo $str;
    echo "<br>";
}
echo "<p style='margin-left: .5em;'></p>","<form action=http://bogdangrekk.lovestoblog.com><button><i>Повернутись на головну</i></button></form>";
fclose($fd);
?>
