<?php

/**
 * task3.1
 * Написать программу, которая открывает файл, считывает оттуда данные, закрывает файл, 
 * создает другой файл, записывает туда данные через строку (первую пишет, вторую нет, 
 * третью пишет, четвертую нет и т.д.), закрывает файл. Имена файлов написать в комментариях в коде программы.
 * Действия оформить в две функции: одна для прочтения, другая для записи. 
 * Параметром обеих функций долен быть путь к файлу.
 */

/**
 * @param string $filePath
 * 
 * @return array
 */

 function fileRead( string $filePath): array{

    $strimOfDataFrom = fopen($filePath, 'r');

    while(!feof($strimOfDataFrom)){
        
        $str=fgets($strimOfDataFrom);
        
        $nums=explode(',', $str);
        
        return $nums;
    }
    
   
    return $nums;
    fclose($strimOfDataFrom);

   
 }

 function fileWrite( string $filePath, $arrayString){

 $dataStreamTo = fopen( $filePath, 'w+');

 echo '____________';


    foreach ($arrayString as $key => $str) {
        $data=$arrayString[$key];
        echo $key;
          if($key%2==0){
            fputs($dataStreamTo, $data.PHP_EOL);
          }
    }
    fclose($dataStreamTo);
}

 $arrayString=fileRead('textFile.txt');
 //var_dump($arrayString);
 fileWrite('writingTextFile.txt', $arrayString);
