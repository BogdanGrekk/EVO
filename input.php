<?php
$datafile = 'info1.txt';
$fd = fopen("info1.txt", 'a+') or die("не удалось открыть файл");
$name = htmlentities($_POST["name"]);
$surename = htmlentities($_POST["surename"]);
if(is_file($datafile))
{
    if(preg_match('/^[A-zА-я\s]+$/uis', $_POST['name']))
    {
        $datalines = file($datafile);
        $rt = true;
        foreach ($datlines as $nl){
            foreach($datalines as $sl){
                if(preg_match('/^'.$name. '/ius', $nl) and preg_match('/^'.$surename. '/ius', $sl)){
                    $rt=false;
                    break;
                }
            }
        }
        if($rt){
            echo 'Привіт, '. $name;
            echo ' '. $surename;
            fseek($fd, 0, SEEK_END);
            fwrite($fd, $name);
            fwrite($fd, " ");
            fwrite($fd, $surename);
            fwrite($fd, "\n");
            fseek($fd, 0, SEEK_END);
            fclose($fd);
            echo "<p style='margin-left: .5em;'></p>","<form action=http://bogdangrekk.lovestoblog.com><button><i>Повернутись на головну</i></button></form>";
        }
        else{
            echo 'Вже бачилися, '. $name;
            echo "<p style='margin-left: .5em;'></p>","<form action=http://bogdangrekk.lovestoblog.com><button><i>Повернутись на головну</i></button></form>";
        }
                }
    else{
        echo 'Можуть бути використані лише букви і декотрі символи';
        echo "<p style='margin-left: .5em;'></p>","<form action=http://bogdangrekk.lovestoblog.com><button><i>Повернутись на головну</i></button></form>";
    }
    }
?>
