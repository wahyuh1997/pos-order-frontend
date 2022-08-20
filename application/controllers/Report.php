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
    $data      = $this->lib_curl->curl_request($this->pos_service_v1 . 'order/get_all_order');
    $data_view = [
      'title'     => 'Order',
      'subtitle'  => 'Order',
      'data'      => $data,
      'js'        => 'order/js/data'
    ];

    $this->load_template('order/page/index', $data_view);
  }
}
