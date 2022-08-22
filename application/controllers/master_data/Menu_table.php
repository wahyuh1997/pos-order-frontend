<?php

class Menu_table extends MY_Controller
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

    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_all_meja');
    // dataView
    $dataView = [
      'title'     => 'Master Data',
      'subtitle'  => 'No. Meja',
      'data'      => $data
    ];

    // view
    $this->load_template('master_data/menu_table/page/index', $dataView);
  }

  public function add()
  {
    $post = $this->input->post(null, true);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => 'Master Data',
        'subtitle'  => 'Tambah No. Meja'
      ];

      // view
      $this->load_template('master_data/Menu_table/page/add', $dataView);
    } else {
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/insert_meja', 'POST', $_POST);
      echo json_encode($menuCategoriesResponse);
    }
  }

  public function edit($id)
  {
    // get body
    $post = $this->input->post();

    // check body
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_meja/' . $id);
    if ($data['status']) {
      if (count($post) == 0) {
        // get menu category details data
        // response check
        if ($data['status'] == true) {
          // dataView
          $dataView = [
            'title'       => 'Master Data',
            'subtitle'    => 'Ubah No. Meja',
            'data' => $data['data']
          ];

          // view
          $this->load_template('master_data/Menu_table/page/edit', $dataView);
        } else {
          // redirect
          redirect('master-data/menu-categories');
        }
      } else {
        $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/edit_meja/' . $data['data']['id'], "PUT", $post);
        echo json_encode($menuCategoriesResponse);
      }
    } else {
      redirect('master_data/menu_table');
    }
  }

  /**
   * delete
   */
  public function delete($id)
  {
    // get params
    // $get = $this->input->get();

    $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/delete_meja/' . $id, "DELETE");
    echo json_encode($menuCategoriesResponse);
  }
}
