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

    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_all_menu');
    // trace($data);
    // dataView
    $dataView = [
      'title'         => 'Master Data',
      'subtitle'      => 'Menu',
      'data'          => $data['data']
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
      $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_all_category');
      // trace($data['data']);
      // dataView
      $dataView = [
        'title'         => 'Master Data',
        'subtitle'      => 'Add New Menu',
        'kategori'      => $data['data'],
        'js'            => 'master_data/menu/js/data'
      ];

      // view
      $this->load_template('master_data/menu/page/add', $dataView);
    } else {
      // check if the image input exist
      $config = [
        'allowed_types' => '*',
        'max_size'      => '2048',
        'upload_path'   => './assets/img/product',
        'encrypt_name'  => true,
        'remove_spaces' => true,
      ];

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('image')) {
        $post['image'] = null;
      } else {
        $data = $this->upload->data();
        $fileName = $data['file_name'];
        $post['image'] = $fileName;
      }

      // request insert the data
      $menuInsertResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/insert_menu', 'POST', $post);
      echo json_encode($menuInsertResponse);
    }
  }

  public function edit($id)
  {
    $post = $this->input->post(null, true);
    // request menu 
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_menu/' . $id);
    // request menu type
    $category = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_all_category');

    if ($data['status']) {
      # code...
      if (count($post) == 0) {
        // dataView
        $dataView = [
          'title'         => 'Master Data',
          'subtitle'      => 'Edit Menu',
          'data'          => $data['data'],
          'kategori'      => $category['data'],
          'js'            => 'master_data/menu/js/data'
        ];

        // view
        $this->load_template('master_data/menu/page/edit', $dataView);
      } else {
        // check if the image input exist
        $config = [
          'allowed_types' => '*',
          'max_size'      => '2048',
          'upload_path'   => './assets/img/product',
          'encrypt_name'  => true,
          'remove_spaces' => true,
        ];

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
          if ($data['data']['image'] == null) {
            $post['image'] = null;
          } else {
            $post['image'] = $data['data']['image'];
            # code...
          }
        } else {
          $data_image = $this->upload->data();
          $fileName = $data_image['file_name'];
          // delete the tmp image
          unlink('./assets/img/product/' . $data['data']['image']);
          $post['image'] = $fileName;
        }

        $menuInsertResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/edit_menu/' . $data['data']['id'], 'PUT', $post);
        echo json_encode($menuInsertResponse);
      }
    } else {
      redirect('master-data/menu');
    }
  }


  /**
   * delete
   */
  public function delete($id)
  {
    // get params
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_menu/' . $id);
    if ($data['data']['image'] != null) {
      unlink('./assets/img/product/' . $data['data']['image']);
    }

    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/delete_menu/' . $id, "DELETE");
    echo json_encode($response);
  }
}
