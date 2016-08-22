<?php
//error_reporting(-1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашка 2</title>
    <style>
    </style>
</head>
<body>
<table width=100% border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <?php
            /*Написать скрипт, который выведет всю информацию из этого файла в удобно читаемом виде.
            Результат вашего скрипта будет распечатан и выдан курьеру для доставки.
           */
            $xmlPath = 'data.xml';
            $xml = simplexml_load_file($xmlPath);
            echo 'Номер заказа - '.$xml[PurchaseOrderNumber];
            echo '<br/>';
            echo 'Дата заказа - '.$xml[OrderDate];
            echo '<br/>';

            echo '<pre>';
            echo '</pre>';
            echo '<br/>';
            echo 'Имя заказчика - '.$xml->Address[0]->Name;
            echo '<br/>';
            echo 'Улица\дом - '.$xml->Address[0]->Street;
            echo '<br/>';
            echo 'Город - '.$xml->Address[0]->City;
            echo '<br/>';
            echo 'Штат - '.$xml->Address[0]->State;
            echo '<br/>';
            echo 'Пометки - '.$xml->DeliveryNotes[0];
            echo '<br/>';

            foreach ($xml->Items->Item as $item) {
                echo '<br/>';
                echo '----------------------------------<br/>';
                echo 'Номер партии '.$item[PartNumber]. '<br/>';
                echo 'Наименование '.$item->ProductName. '<br/>';
                echo 'Количество '.$item->Quantity. '<br/>';
                echo 'Цена '.$item->USPrice. '<br/>';
                echo 'Дата доставки '.$item->ShipDate. '<br/>';
            }
            ?>
        </td>
        <td>
        </td>
    </tr>
</table>
</body>
</html>