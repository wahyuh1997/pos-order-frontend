<?php

class Report extends MY_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * index
   */
  public function index()
  {

    $data_view = [
      'title'     => 'Report',
      'subtitle'  => 'Report',
      'js'        => 'report/js/data'
    ];

    $this->load_template('report/page/index', $data_view);
  }

  public function result()
  {
    $post = $this->input->post(null, true);
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'report', 'POST', $post);
    // trace($response);
    if ($response['status'] == true) {
      $data_view = [
        'title'     => 'Hasil ' . $response['message'],
        'subtitle'  => 'Hasil ' . $response['message'],
        'data'      => $response,
        'js'        => 'report/js/result'
      ];

      if ($post['type'] == 1) {
        # code...
        $this->load_template('report/page/result', $data_view);
      } else {
        $this->load_template('report/page/result_menu', $data_view);
      }
    } else {
      redirect('report');
    }
  }
}
