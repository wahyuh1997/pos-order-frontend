<?php

class order extends MY_Controller
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
      'title'     => '{{Order}}',
      'subtitle'  => '{{Order}}',
      'js'        => 'order/js/data',
    ];
    $this->load_template('order/page/index', $data_view);
  }

  public function delete()
  {
    // get params
    $get = $this->input->get();

    $delete = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders?orderId=' . $get['orderId'], "DELETE");
    echo json_encode($delete);
  }
}
