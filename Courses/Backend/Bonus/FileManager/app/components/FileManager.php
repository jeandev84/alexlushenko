<?php
namespace app\components;

/**
 * @FileManager
 *
 * @package app\components
*/
class FileManager
{

      /**
       * @var string
      */
      protected $resource;



      /**
       * @param string $resource
      */
      public function __construct(string $resource)
      {
           $this->resource = rtrim($resource, '\\/');
      }


      /**
       * @param string $source
       * @return string
      */
      public function makeList(string $source): string
      {
           $source = $this->resource . DIRECTORY_SEPARATOR . trim($source, '\\/');

           $html[] = '<ul>';

           // проверяем если передан параметр (folder) является папкой или каталог.
           if (is_dir($source)) {

              // пытаемся открывать задано каталог
              // dh - дескриптор - код для обращения
              if ($dh = opendir($source)) {

                  // читаем текущую папку
                  while (($file = readdir($dh)) !== false) {
                      if ($file != '.' && $file != '..') {
                          if (is_dir($source .'/'. $file)) {
                              $html[] = "<li>". $this->renderCatalog($file) ."</li>";
                          }else{
                              $html[] = "<li>". $this->renderFile($file, $source) ."</li>";
                          }
                      }
                  }

                  closedir($dh);
              }
           }

           $html[] = '</ul>';

           return join("\n", $html);
      }


      /**
       * @param string $catalogName
       * @return string
      */
      protected function renderCatalog(string $catalogName): string
      {
          return "<img src='/images/folder.png' class='folder'> $catalogName";
      }



      /**
       * @param string $fileName
       * @param string|null $dir
       * @return string
      */
      public function renderFile(string $fileName, string $dir): string
      {
          $file = $dir . DIRECTORY_SEPARATOR . $fileName;
          $ft = filetype($file); // file type
          $fs = filesize($file);

          return "<img src='/images/file.png' class='file'> $fileName {$fs}";
      }
}