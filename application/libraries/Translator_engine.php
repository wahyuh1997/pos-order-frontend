<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Translator_engine
{
  public function _run($view, $lang_code = 'en')
  {
    if ($lang_code !== 'en') {
      $inputFileName = './assets/lang/ch-pos.xlsx';

      $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
      $objReader     = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
      $objPHPExcel   = $objReader->load($inputFileName);

      $sheet           = $objPHPExcel->getActiveSheet()->toarray();

      for ($i = 0; count($sheet) > $i; $i++) {
        $view = str_replace($sheet[$i][0], $sheet[$i][1], $view);
      }

      return $view;
    } else {
      $view = str_replace(['{{', '}}'], '', $view);
      return $view;
    }
  }

  public function _word($word)
  {
    $CI = &get_instance();

    $lang_code = $CI->input->cookie('language');


    if ($lang_code !== 'en') {
      $inputFileName = './assets/lang/ch-pos.xlsx';

      $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
      $objReader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
      $objPHPExcel = $objReader->load($inputFileName);

      $sheet           = $objPHPExcel->getActiveSheet()->toarray();

      for ($i = 0; count($sheet) > $i; $i++) {
        $word = str_replace($sheet[$i][0], $sheet[$i][1], $word);
      }

      return $word;
    } else {
      $word = str_replace(['{{', '}}'], '', $word);
      return $word;
    }
  }
}
