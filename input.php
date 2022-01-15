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
        foreach ($datalines as $line) {
            if(preg_match('/^'.$name. '/ius', $line))
            {
                $rt = false;
                break;
            }
        }
        if($rt){
            echo 'Привіт, '. $name;
            echo ' '. $surename;
        }
        else
            echo 'Вже бачилися, '. $name;
                }
        else
            echo 'Можуть бути використані лише букви і декотрі символи';
        }
fseek($fd, 0, SEEK_END);
fwrite($fd, $name);
fwrite($fd, " ");
fwrite($fd, $surename);
fwrite($fd, "\n");
fseek($fd, 0, SEEK_END);
fclose($fd);
?>