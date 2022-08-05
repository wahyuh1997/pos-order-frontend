<?php

class Menu extends MY_Controller
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
    // request menu type
    $menuTypesData = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-types');

    // dataView
    $dataView = [
      'title'         => 'Master Data',
      'subtitle'      => 'Menu',
      'menuTypesData' => $menuTypesData['data'],
      'js'            => 'master_data/menu/js/data'
    ];

    // view
    $this->load_template('master_data/menu/page/index', $dataView);
  }

  public function add()
  {
    // get body
    $post = $this->input->post();
    // check body
    if (count($post) == 0) {
      // request menu type
      $menuTypesData = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-types');

      // dataView
      $dataView = [
        'title'         => 'Master Data',
        'subtitle'      => 'Add New Menu',
        'menuTypesData' => $menuTypesData['data'],
        'js'            => 'master_data/menu/js/data'
      ];

      // view
      $this->load_template('master_data/menu/page/add', $dataView);
    } else {
      // check if the image input exist
      $config['upload_path']          = './assets/tmp/';
      $config['allowed_types']        = 'gif|jpg|png';

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('menuImage')) {
        $post['menuImage'] = null;
      } else {
        // process convert image into base64
        $data = $this->upload->data();
        $extension = $data['file_ext'];
        $type = $data['file_type'];
        $fileName = $data['file_name'];
        $image = file_get_contents('./assets/tmp/' . $fileName);
        $imageBase64 = "data:" . $type . ';base64,' . base64_encode($image);
        // delete the tmp image
        unlink('./assets/tmp/' . $fileName);
        $post['menuImage'] = $imageBase64;
      }

      // request insert the data
      $menuInsertResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menus', 'POST', $post);
      echo json_encode($menuInsertResponse);
    }
  }

  public function edit($id)
  {
    $post = $this->input->post(null, true);
    // request menu 
    $menu = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menus/get-details?menuId=' . $id);
    // request menu type
    $menuTypesData = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-types');

    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'         => 'Master Data',
        'subtitle'      => 'Edit Menu',
        'data'          => $menu['data'],
        'menuTypesData' => $menuTypesData['data'],
        'js'            => 'master_data/menu/js/data'
      ];

      // view
      $this->load_template('master_data/menu/page/edit', $dataView);
    } else {

      // check if the image input exist
      $config['upload_path']          = './assets/tmp/';
      $config['allowed_types']        = 'gif|jpg|png';

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('menuImage')) {
        $post['menuImage'] = null;
      } else {
        // process convert image into base64
        $data = $this->upload->data();
        $extension = $data['file_ext'];
        $type = $data['file_type'];
        $fileName = $data['file_name'];
        $image = file_get_contents('./assets/tmp/' . $fileName);
        $imageBase64 = "data:" . $type . ';base64,' . base64_encode($image);
        // delete the tmp image
        unlink('./assets/tmp/' . $fileName);
        $post['menuImage'] = $imageBase64;
      }

      $menuInsertResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menus', 'PUT', $post);
      echo json_encode($menuInsertResponse);
    }
  }


  /**
   * delete
   */
  public function delete()
  {
    // get params
    $get = $this->input->get();

    $menuDeleteResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menus?menuId=' . $get['menuId'], "DELETE");
    echo json_encode($menuDeleteResponse);
  }
}
