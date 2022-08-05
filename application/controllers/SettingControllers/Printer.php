<?php

class Printer extends MY_Controller
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

    // dataView
    $dataView = [
      'title'     => '{{Printer}}',
      'subtitle'  => '{{Printer}}'
    ];

    // view
    $this->load_template('settings/printer/page/index', $dataView);
  }

  public function add()
  {
    $post = $this->input->post(null, true);

    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => '{{Printer}}',
        'subtitle'  => '{{Add New printer}}'
      ];

      // view
      $this->load_template('settings/printer/page/add', $dataView);
    } else {
      echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/settings/printer', 'POST', $_POST));
    }
  }

  public function edit($locationId)
  {
    $post = $this->input->post(null, true);
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/settings/printer/get-details?printerId=' . $locationId);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => '{{Printer}}',
        'subtitle'  => '{{Edit Printer}}',
        'data'      => $data
      ];

      // view
      $this->load_template('settings/printer/page/edit', $dataView);
    } else {
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/settings/printer', 'PUT', $_POST);
      echo json_encode($menuCategoriesResponse);
    }
  }

  public function delete()
  {
    // get params
    $get = $this->input->get();

    $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/settings/printer?printerId=' . $get['printerId'], "DELETE");
    echo json_encode($menuCategoriesResponse);
  }
}
