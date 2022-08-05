<?php

class MY_Controller extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->pos_service_v1 = "http://wh.i2b.digital/pos-service-dev/api/";
    // $this->pos_service_v1 = "http://127.0.0.1:8000/api/";
    $this->image_server = "http://wh.i2b.digital/pos-service/";
  }


  /**
   * load_template function
   *
   * @return view
   */
  public function load_template($view = null, $data_view)
  {
    $this->load->view("templates/header", $data_view);
    $this->load->view($view, $data_view);
    $this->load->view("templates/footer", $data_view);
    if (isset($data_view['js'])) {
      $this->load->view($data_view['js'], $data_view);
    }
  }
}
