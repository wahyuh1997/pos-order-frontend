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
    $this->load->view("pos", null);
  }

  public function bill($orderId)
  {
    $this->load->library('core_library');

    $data_view = [
      'data'  =>  $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/get-details?orderId=' . $orderId)
    ];

    $html = $this->translator_engine->_run($this->load->view("report/pos_bill", $data_view, TRUE), $this->_lang);
    $this->core_library->PdfGenerator($html, 'RECEIPT', 'B5', 'potrait', 'receipt');
  }

  public function billCheckout($orderId)
  {
    $this->load->library('core_library');

    $data_view = [
      'data'  =>  $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/get-details?orderId=' . $orderId)
    ];

    $html = $this->translator_engine->_run($this->load->view("report/pos_bill_checkout", $data_view, TRUE), $this->_lang);
    $this->core_library->PdfGenerator($html, 'RECEIPT', 'B5', 'potrait', 'checkout');
  }

  public function bill_qty($orderId)
  {
    $this->load->library('core_library');
    // request order detail
    $orderDetailsResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/get-details?orderId=' . $orderId);
    // define order data
    $orderDetails = $orderDetailsResponse['data'];
    $orderMenuDetails = $orderDetails['orderDetails'];
    // loop printing
    foreach ($orderMenuDetails as $omenuDetail) {
      if ($omenuDetail['isPrinted'] == 0) {
        $data_view = [
          'orderData' => $orderDetails,
          'orderMenu' => $omenuDetail
        ];

        // printer type selection
        switch ($omenuDetail['menuTypeName']) {
          case "Food":
            $printerType = "food";
            break;
          case "Dish":
            $printerType = "dish";
            break;
          case "Drink":
            $printerType = "bar";
            break;
          default:
            $printerType = "kitchen";
            break;
        }

        $html = $this->load->view('report/pos_bill_kitchen', $data_view, TRUE);
        $this->core_library->PdfGenerator($html, 'RECEIPT', 'B5', 'potrait', $printerType);

        // send request to sign the menu is printed
        $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/print-details?orderId=' . $orderId);
      }
    }
  }

  public function load_menu()
  {
    $page = $_GET['page'] * 10;
    $datatableResponese = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menus/get-all?page=' . $page . '&limit=20&sortBy=&sortType=&menuName=' . $_GET['menuName']);
    $data_view = [
      'data'          => $datatableResponese,
    ];

    $this->load->view('templates/menu/pos_menu', $data_view);
  }

  /* Load HTML Booking Table into Modal */
  public function load_new_order()
  {
    if ($_POST == null) {
      echo $this->translator_engine->_run($this->load->view("templates/modal/pos_new_order", null, TRUE), $this->_lang);
    } else {
      delete_cookie('orderId');
      $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders', 'POST', $_POST);

      echo json_encode($response);
    }
  }

  public function load_boking_table()
  {
    if ($_POST == null) {
      $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/customers/get-all?page=0&limit=20&sortBy=&sortType=ASC');
      $data_view = [
        'data'          => $data,
      ];
      $this->load->view('templates/modal/pos_book_table', $data_view);
    } else {
      $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/table-books', 'POST', $_POST);

      echo json_encode($response);
    }
  }

  public function new_orders()
  {
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/details', 'POST', $_POST);
    echo json_encode($response);
  }

  public function update_orders()
  {
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/details', 'PUT', $_POST);
    echo json_encode($response);
  }

  /* Submit ORDER */
  public function submit_order()
  {
    delete_cookie('orderId');
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders', 'PUT', $_POST);
    echo json_encode($response);
  }

  public function submit_checkout()
  {
    $_POST['payAt'] = date('Y-m-d H:i:s');
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/checkout', 'PUT', $_POST);
    echo json_encode($response);
  }

  /* history Section */
  public function get_order_history($orderId, $typeFrom = null)
  {
    if ($typeFrom != null) {
      # code...
      set_cookie('orderId', $orderId, 3600);
    }

    echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/get-details?orderId=' . $orderId));
  }

  public function load_history()
  {
    $data_all_order     = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/get-all?page=0&limit=100&sortBy=createdAt&sortType=desc');

    $data_view = [
      'data_all_order'          => $data_all_order,
    ];
    echo $this->translator_engine->_run($this->load->view("templates/menu/pos_history", $data_view, TRUE), $this->_lang);
  }
  /* End Of History Section */

  public function get_detail_product($menuId)
  {
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menus/get-details?menuId=' . $menuId);
    $data_view = [
      'data'          => $data['data'],
    ];

    echo $this->translator_engine->_run($this->load->view("templates/modal/pos_detail_item", $data_view, TRUE), $this->_lang);
  }

  public function delete_order()
  {
    // get params
    $get = $this->input->get();

    $delete = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/orders/details?orderDetailId=' . $get['orderDetailId'], "DELETE");
    echo json_encode($delete);
  }
}
