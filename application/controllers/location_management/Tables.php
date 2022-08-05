<?php

class Tables extends MY_Controller
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
      'title'     => '{{Location Management}}',
      'subtitle'  => '{{Tables}}',
      'js'        => 'location_management/tables/js/data'
    ];

    // view
    $this->load_template('location_management/tables/page/index', $dataView);
  }

  public function add()
  {
    $post = $this->input->post(null, true);
    $data_location = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/locations/get-all?page=0&limit=100&sortBy=createdAt&sortType=desc&locationName=');

    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'         => '{{Location Management}}',
        'subtitle'      => '{{Add New Tables}}',
        'data_location' => $data_location['data']
      ];

      // view
      $this->load_template('location_management/tables/page/add', $dataView);
    } else {
      echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/tables', 'POST', $_POST));
    }
  }

  public function edit($id)
  {
    $post = $this->input->post(null, true);
    $data_location = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/locations/get-all?page=0&limit=100&sortBy=createdAt&sortType=desc&locationName=');
    $data_table = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/tables/get-details?tableId=' . $id);
    // trace($data_location['data']);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'         => '{{Location Management}}',
        'subtitle'      => '{{Edit Tables}}',
        'data_location' => $data_location['data'],
        'data'          => $data_table['data']
      ];

      // view
      $this->load_template('location_management/tables/page/edit', $dataView);
    } else {
      echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/tables', 'PUT', $_POST));
    }
  }

  public function delete()
  {
    // get params
    $get = $this->input->get();

    $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/tables?tableId=' . $get['tableId'], "DELETE");
    echo json_encode($menuCategoriesResponse);
  }
}
