<?php


/**
 * @param string $dir
 * @return string
*/
/*
function makeFileList(string $dir): string
{

    $html[] = '<ul>';

    // проверяем если передан параметр (folder) является папкой или каталог.
    if (is_dir($dir)) {

        // пытаемся открывать задано каталог
        // dh - дескриптор - код для обращения
        if ($dh = opendir($dir)) {

            // читаем текущую папку
            while (($file = readdir($dh)) !== false) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($dir .'/'. $file)) {
                        $html[] = "<li><img src='./images'> {$file}</li>";
                    }else{
                        $html[] = "<li>file {$file}</li>";
                    }
                }
            }

            closedir($dh);
        }
    }

    $html[] = '</ul>';

    return join("\n", $html);
}



function makeFileManagerTesting(string $dir){

    // проверяем если передан параметр (folder) является папкой или каталог.
    if (is_dir($dir)) {

        // пытаемся открывать задано каталог
        if ($dh = opendir($dir)) {

            // читаем текущую папку
            while (($file = readdir($dh)) !== false) {
                echo "файл: $file : тип: " . filetype($dir . $file);
            }

            closedir($dh);
        }
    }
}
*/