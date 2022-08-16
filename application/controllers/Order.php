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
    $data      = $this->lib_curl->curl_request($this->pos_service_v1 . 'order/get_all_order');
    $data_view = [
      'title'     => 'Order',
      'subtitle'  => 'Order',
      'data'      => $data,
      'js'        => 'order/js/data'
    ];

    $this->load_template('order/page/index', $data_view);
  }

  public function add()
  {
    // trace($_SESSION);
    $post = $this->input->post(null, true);
    $data_meja = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_all_meja');
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => 'Master Data',
        'subtitle'  => 'Add New Menu Order',
        'data_meja' => $data_meja,
      ];

      // view
      $this->load_template('order/page/add', $dataView);
    } else {
      $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'order/insert_order', 'POST', $_POST);
      // trace($response['data']);
      $this->load->library('ciqrcode'); //pemanggilan library QR CODE

      $config['imagedir']     = './assets/img/qrcode/'; //direktori penyimpanan qr code

      $image_name = $response['data']['kode_unik'] . '.png';

      $params['data']   = base_url('pos/get_order_customer/') . $response['data']['kode_unik']; //data yang akan di jadikan QR CODE
      $params['level']  = 'H'; //H=High
      $params['size']   = 10;
      $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
      $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE


      echo json_encode($response);
    }
  }

  public function paid_order($id)
  {
    $post = $this->input->post(null, true);
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'order/get_order/' . $id);
    if (count($post) == 0) {
      # code...
      $dataView = [
        'title'     => 'Bayar Pesanan',
        'subtitle'  => 'Bayar Pesanan',
        'data'      => $data['data'],
        'js'        => 'order/js/data'
      ];

      $this->load_template('order/page/paid', $dataView);
    } else {
      echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'order/final_order/' . $id, 'PUT', $_POST));
    }
  }

  public function print_qrcode($id)
  {
    $this->load->library('core_library');

    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'order/get_order/' . $id);
    $dataView = [
      'title'     => 'QRCODE',
      'subtitle'  => 'QRCODE',
      'data'      => $data
    ];

    $html = $this->load->view('order/page/qrcode', $dataView, true);
    $this->core_library->PdfGenerator($html, 'QR Code-' . $data['data']['no_order'], 'A4', 'potrait');
  }

  public function cancelled($id)
  {
    $delete = $this->lib_curl->curl_request($this->pos_service_v1 . 'order/batal_order/' . $id);
    echo json_encode($delete);
  }
}
