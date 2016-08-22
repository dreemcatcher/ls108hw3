<?php
    error_reporting(-1);
    mb_internal_encoding('utf-8');
    header('Content-Type: text/html; charset=utf-8');
//Программно создайте массив, в котором перечислено не менее 50 случайных числел от 1 до 100
//Сохраните данные в файл csv
//Откройте файл csv и посчитайте сумму четных чисел
    $arr=array();
    for ($i = 0; $i < 50; $i++){
        $arr[$i] = mt_rand(0, 100);
    }
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";

    //Пункт 1 выполнен.

    $fp = fopen('test.csv', 'w');

        fputcsv($fp, $arr);

    fclose($fp);
    echo 'File saved<br>';

    //Пункт 2 выполнен.

    $csvArray = array();
    $csvFile = fopen("test.csv", "r");
    while (!feof($csvFile)) {
        $a[] = fgetcsv($csvFile, 1024, ";");
    }
    echo 'Lets Watch<br>';
    print_r($a);

    // Начинаем 3 пункт
    // Откройте файл csv и посчитайте сумму четных чисел


    echo '<br>Read some data<br>';

        $csvPath = 'test.csv';
        $csvFile = fopen($csvPath, "r");
        if ($csvFile) {
            $res = array();
            while (($csvData = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
                $res[] = $csvData;
            }
            echo '<pre>';
            print_r($res);
        }

    // определить чётные числа и сложить их.
    echo 'All data red<br>';

    $summa=0;
        foreach ($res as $item){
            foreach ($item as  $x){
                if ($x%2==0){
                    // Проверяем на чётность. Тут число чётное.
                    $summa=$summa+$x;
                    echo $summa."<br>";
                }else{
                    // Тут можно сложить нечётные например
                }
            }
        }
    echo '<br><br>';
    echo 'Summ of all even numbers = '.$summa.'<br><br>';
// И Третье условие выполнено