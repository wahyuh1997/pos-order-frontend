<?php

class Location extends MY_Controller
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
      'subtitle'  => '{{Location}}'
    ];

    // view
    $this->load_template('location_management/location/page/index', $dataView);
  }

  public function add()
  {
    $post = $this->input->post(null, true);

    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => '{{Location Management}}',
        'subtitle'  => '{{Add Location}}'
      ];

      // view
      $this->load_template('location_management/location/page/add', $dataView);
    } else {
      echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/locations', 'POST', $_POST));
    }
  }

  public function edit($locationId)
  {
    $post = $this->input->post(null, true);
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/locations/get-details?locationId=' . $locationId);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => '{{Location Management}}',
        'subtitle'  => '{{Edit Location}}',
        'data'      => $data['data']
      ];

      // view
      $this->load_template('location_management/location/page/edit', $dataView);
    } else {
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/locations', 'PUT', $_POST);
      echo json_encode($menuCategoriesResponse);
    }
  }

  public function delete()
  {
    // get params
    $get = $this->input->get();

    $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/locations?locationId=' . $get['locationId'], "DELETE");
    echo json_encode($menuCategoriesResponse);
  }
}
