<?php

class Kitchen extends MY_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();

    if (!isset($_SESSION['dapur_pos_order'])) {
      redirect('login');
    }
  }

  /**
   * index
   */
  public function index()
  {
    // $kitchen  = $this->lib_curl->curl_request($this->pos_service_v1 . 'kitchen/get_order_detail');

    // $dataView = [
    //   'data_kitchen'     => $kitchen,
    // ];
    // trace($_SESSION);
    $this->load->view('kitchen',);
  }

  public function load_kitchen()
  {
    $kitchen  = $this->lib_curl->curl_request($this->pos_service_v1 . 'kitchen/get_order_detail');

    $dataView = [
      'data_kitchen'     => $kitchen,
    ];

    $this->load->view('templates/menu/kitchen', $dataView);
  }

  public function order_completed($id, $param)
  {

    if ($param == 'complete') {
      $_POST['harga']     = '';
      $_POST['sub_harga'] = '';
    } else {
      $_POST['harga']     = 0;
      $_POST['sub_harga'] = 0;
    }

    echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'kitchen/confirmation_menu/' . $id, 'PUT', $_POST));
  }

  public function logout()
  {
    unset($_SESSION['dapur_pos_order']);
    redirect('login');
  }
}
