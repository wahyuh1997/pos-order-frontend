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
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'order/get_all_order');
    $data_view = [
      'title'     => 'Order',
      'subtitle'  => 'Order',
      'data'      => $data,
      // 'js'        => 'order/js/data',
    ];
    $this->load_template('order/page/index', $data_view);
  }

  public function add()
  {
    $post = $this->input->post(null, true);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => 'Master Data',
        'subtitle'  => 'Add New Menu Order'
      ];

      // view
      $this->load_template('order/page/add', $dataView);
    } else {
      $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'order/insert_order', 'POST', $_POST);
      // trace($response['data']);
      $this->load->library('ciqrcode'); //pemanggilan library QR CODE

      $config['imagedir']     = './assets/img/qrcode/'; //direktori penyimpanan qr code

      $image_name = $response['data']['kode_unik'] . '.png';

      $params['data'] = $response['data']['kode_unik']; //data yang akan di jadikan QR CODE
      $params['level'] = 'H'; //H=High
      $params['size'] = 10;
      $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
      $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE


      echo json_encode($response);
    }
  }

  public function get_order_id()
  {
    /* Get Order by id Using QR Code */
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

  public function delete()
  {
    // get params
    $get = $this->input->get();

    $delete = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders?orderId=' . $get['orderId'], "DELETE");
    echo json_encode($delete);
  }
}
