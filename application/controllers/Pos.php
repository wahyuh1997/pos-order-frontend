<?php

class Pos extends MY_Controller
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
    $menu     = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_all_menu');
    $kategori = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_all_category');

    $dataView = [
      'data_menu'     => $menu,
      'data_kategori' => $kategori,
    ];

    $this->load->view("pos", $dataView);
  }

  public function get_detail_item($id)
  {
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_menu/' . $id);
    // trace($response);
    $dataView = [
      'data'     => $response['data'],
    ];

    $this->load->view("templates/modal/pos_detail_item", $dataView);
  }
}
