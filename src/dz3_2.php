<?php

/**
 * task3.1
 * 
 * Функцией прочесть из файла все строки. Другой функцией померять длину каждой строки. 
 * Третьей функцией записать в совершенно другой файл только те строки, которые длиннее 
 * средней длины по файлу.
 * 
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

 function fileWriteAverageSizeElem( string $filePath, $arrayString){

 $dataStreamTo = fopen( $filePath, 'w+');
 $sumSizeElem = 0;
 $averageSizeElem = 0;

    foreach ($arrayString as $key => $str) {
    
        $sumSizeElem += strlen($arrayString[$key]); 
    }
    
    $averageSizeElem = $sumSizeElem / count($arrayString);

    echo PHP_EOL;
    echo '--------------------------------------'.PHP_EOL.PHP_EOL;
    echo $sumSizeElem.'- сумарный размер всех строк'.PHP_EOL;
    echo (int)$averageSizeElem.'- среднее значение размера строки по масиву'.PHP_EOL.PHP_EOL;
    echo 'значения которые будут записаны в файл'.PHP_EOL;
    echo '--------------------------------------'.PHP_EOL;

     foreach ($arrayString as $key => $str) {

        $data = $arrayString[$key];
        
       if (strlen($data) > $averageSizeElem){

        echo $data.PHP_EOL;
                 
        fputs($dataStreamTo, $data.PHP_EOL);
     
       }
       
    }

    echo $averageSizeElem.PHP_EOL;

    fclose($dataStreamTo);
}

 $arrayString=fileRead('textFile.txt');
 fileWriteAverageSizeElem('writingTextFileAverageSizeElem.txt', $arrayString);
