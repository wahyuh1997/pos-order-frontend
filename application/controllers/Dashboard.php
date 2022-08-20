<?php

class Dashboard extends MY_Controller
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
    $data      = $this->lib_curl->curl_request($this->pos_service_v1 . 'dashboard');
    $data_view = [
      'data'  => $data['data'],
      'js'    => 'dashboard/js/data',
    ];
    // trace($data);
    $this->load_template('dashboard/page/index', $data_view);
  }

  public function call_service()
  {
    if (isset($_GET['table'])) {
      set_cookie('table', $_GET['table'], 2);
      set_cookie('text', $_GET['text'], 2);
    }
  }

  public function get_service()
  {
    if (get_cookie('table')) {
      $data = [
        'status' => true,
        'title'   => 'Meja Nomor ' . get_cookie('table'),
        'text'    => get_cookie('text')
      ];
    } else {
      $data = [
        'status'  => false,
      ];
    }

    echo json_encode($data);
  }
}
