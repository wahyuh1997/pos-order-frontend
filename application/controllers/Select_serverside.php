<?php

class Select_serverside extends MY_Controller
{
  // constructor
  function __construct()
  {
    parent::__construct();
  }

  /**
   * getData
   * 
   * to universal select2 request
   * 
   * @return string
   */
  public function getData()
  {
    // get params
    $get = $this->input->get();

    // for save the param string
    $paramString = '';

    // recreated the array remove URL and V param
    $paramsArr = [];

    // recreated the array remove URL and V param
    $i = 0;
    $paramsArr = [];
    foreach ($get as $key => $value) {
      $i++;

      if (
        $key !== 'url'
      ) {
        $paramsArr[$key] = $value;
      }
    }

    // create params url
    $i = 0;
    foreach ($paramsArr as $key => $valueParam) {
      $i++;
      if ($i == 1) {
        $paramString .= '?' . $key . '=' . $valueParam;
      } else {
        $paramString .= '&' . $key . '=' . $valueParam;
      }
    }

    // trace($paramsArr);

    $response = $this->lib_curl->curl_request($this->pos_service_v1 . $get['url'] . $paramString)['data'];

    echo json_encode($response);
  }
}
