<?php
error_reporting(-1);
mb_internal_encoding('utf-8');
/*
 * Задача #2
Создайте массив, в котором имеется как минимум 1 уровень вложенности. Преобразуйте его в JSON.  Сохраните как output.json
Откройте файл output.json. Случайным образом решите изменять данные или нет. Сохраните как output2.json
Откройте оба файла. Найдите разницу и выведите информацию об отличающихся элементах
 */
    $cart = array(
        "orderID" => 12345,
        "shopperName" => "Ivan Ivanov",
        "shopperEmail" => "ivanov@example.com",
        "contents" => array(
            array(
                "productID" => 34,
                "productName" => "Some stuff",
                "quantity" => 1
            ),
            array(
                "productID" => 56,
                "productName" => "Super some stuff etc",
                "quantity" => 3
            )
        ),
        "orderCompleted" => true
    );
    $json_text = json_encode($cart);

    $fp = fopen('output.json', 'w');
    file_put_contents('output.json', $json_text);

    fclose($fp);
    echo 'File saved<br/></br>';

    // Тут такое перое условие выполнилось

    $changer=mt_rand(0,1); // Это такое 'Случайным образом'. Можно придумать что-то более сложное, но и так сойдёт.

    if($changer==1){
        $oldname='12345';
        $name='45345';
        $oldname = trim($oldname);               // Значение переменной которую нужно обновить
        $newname = trim($name);                // Переменная на которую мы обновим старое значение
        $file = file_get_contents('output.json');
        $taskList=json_decode($file,TRUE);
        foreach ( $taskList  as $key => $value){
            if ( $oldname == $value) {
                $taskList[$key]  = $newname; // присваиваем значение переменной
            }
        }
        file_put_contents('output2.json',json_encode($taskList)); // Перекодировать в формат и записать в файл.

        unset($taskList);  // Очистить переменную $taskList

    }else
    {
        echo "<br/>Nothing changed!</br>";
        $file = file_get_contents('output.json');
        $taskList=json_decode($file,TRUE);
        file_put_contents('output2.json',json_encode($taskList));
        unset($taskList);
        //не меняем
    }

    echo "Reading file output2.json</br></br>";
    $readFromFiles = file_get_contents('output2.json') or die('ошибка');
    echo $readFromFiles;

    // Второе условие выполнено.
    // Откройте оба файла. Найдите разницу и выведите информацию об отличающихся элементах
    // Выполняем сравнение файлов
    $SourceFile= file_get_contents('output.json');
    $SecondFile= file_get_contents('output2.json');
    $taskListO=json_decode($SourceFile,TRUE);
    $taskListS=json_decode($SecondFile,TRUE);

    echo "<br>";
    $result = array_diff($taskListO, $taskListS);
    echo "<br><br>Some difference between files here! <br>";
    echo "------------------------------------<br>";
    print_r($result);
    // третье условие выполнено. 2 массива сравнили, результат получили
?>