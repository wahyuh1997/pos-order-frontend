<?php

class Menu_categories extends MY_Controller
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

    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_all_category');
    // dataView
    $dataView = [
      'title'     => 'Master Data',
      'subtitle'  => 'Kategori',
      'data'      => $data
    ];

    // view
    $this->load_template('master_data/menu_categories/page/index', $dataView);
  }

  public function add()
  {
    $post = $this->input->post(null, true);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => 'Master Data',
        'subtitle'  => 'Add New Kategori'
      ];

      // view
      $this->load_template('master_data/menu_categories/page/add', $dataView);
    } else {
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/create_category', 'POST', $_POST);
      echo json_encode($menuCategoriesResponse);
    }
  }

  public function edit($id)
  {
    // get body
    $post = $this->input->post();

    // check body
    $data = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/get_category/' . $id);
    if (count($post) == 0) {
      // get menu category details data
      // response check
      if ($data['status'] == true) {
        // dataView
        $dataView = [
          'title'       => 'Master Data',
          'subtitle'    => 'Edit Kategori',
          'menuCatData' => $data['data']
        ];

        // view
        $this->load_template('master_data/menu_categories/page/edit', $dataView);
      } else {
        // redirect
        redirect('master-data/menu-categories');
      }
    } else {
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/update_category/' . $data['data']['id'], "PUT", $post);
      echo json_encode($menuCategoriesResponse);
    }
  }

  /**
   * delete
   */
  public function delete($id)
  {
    // get params
    // $get = $this->input->get();

    $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'menu/delete_category/' . $id, "DELETE");
    echo json_encode($menuCategoriesResponse);
  }
}
