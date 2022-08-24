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

    if (isset($_SESSION['pos_order']['qrcode'])) {
      # code...
      $order = $this->lib_curl->curl_request($this->pos_service_v1 . 'customer/get_order/' . $_SESSION['pos_order']['qrcode']);
      if ($order['data']['status'] != 0) {
        unset($_SESSION['pos_order']['qrcode']);
        $order = [
          'status' => false,
          'data'   => null
        ];
      }
    } else {
      $order = [
        'status' => false,
        'data'   => null
      ];
    }
    // trace($order);
    $dataView = [
      'data_menu'     => $menu,
      'data_kategori' => $kategori,
      'data_order'    => $order
    ];

    $this->load->view("pos", $dataView);
  }

  public function get_order_customer($qrcode)
  {
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'customer/get_order/' . $qrcode);
    if ($response['status'] == true && $response['data']['status'] == 0) {
      $_SESSION['pos_order']['qrcode']  = $qrcode;
      redirect('pos');
    } else {
      $this->session->set_flashdata('notice', 'Pesanan Anda Telah Berakhir');
      redirect('pos');
    }
  }

  public function get_detail_item($id)
  {
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_menu/' . $id);
    $dataView = [
      'data'     => $response['data'],
    ];

    $this->load->view("templates/modal/pos_detail_item", $dataView);
  }

  public function new_orders()
  {
    echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'customer/insert_order_detail', 'POST', $_POST));
  }

  public function update_orders($id)
  {
    $res = $this->lib_curl->curl_request($this->pos_service_v1 . 'customer/update_order_detail/' . $id, 'PUT', $_POST);
    echo json_encode($res['status']);
  }

  public function submit_order($id)
  {
    echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'customer/final_order_detail/' . $id, 'PUT', $_POST));
  }

  public function get_history()
  {
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'customer/get_order/' . $_SESSION['pos_order']['qrcode']);

    if ($response['status'] == true && $response['data']['status'] == 0) {
      $dataView = [
        'data'     => $response,
      ];

      $this->load->view("templates/menu/pos_history", $dataView);
    } else {
      redirect('pos');
    }
  }

  public function delete_order($id)
  {
    $delete = $this->lib_curl->curl_request($this->pos_service_v1 . 'customer/delete_order_detail/' . $id, "DELETE");
    echo json_encode($delete['status']);
  }
}
