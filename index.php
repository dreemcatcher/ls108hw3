<?php
error_reporting(-1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашняя работа 3</title>
    <style>
        <?php
        include "css/main.css";
        ?>
    </style>
</head>
<body>
<table width=100% border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <?php
            for($i=1;$i<5; $i++){
                echo "<a href='z".$i.".php'>Задание ".$i."</a><br> ";
            }
           // echo "<a href='z7_2.php'>Задание 7.2 Потому-что там 2 задания под номером 7</a><br>";
            ?>
            </center></td>
        <td>
        </td>
    </tr>
</table>
</body>
</html>
