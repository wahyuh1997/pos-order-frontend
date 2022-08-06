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
    $data_view = [
      'js' => 'dashboard/js/data',
    ];

    $this->load_template('dashboard/page/index', $data_view);
  }

  public function call_service()
  {
    if (isset($_GET['service'])) {
      set_cookie('call_service', 'ok', 1);
    }

    if (get_cookie('call_service') == null) {
      echo json_encode('test');
    } else {
      echo json_encode('ok');
    }
  }

  public function token()
  {
    echo "get";
  }
}
