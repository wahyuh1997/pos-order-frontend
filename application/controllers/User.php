<?php

class User extends MY_Controller
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
      'title'     => 'User',
      'subtitle'  => 'User',
    ];

    // view
    $this->load_template('user/page/index', $dataView);
  }

  public function add()
  {
    $post = $this->input->post(null, true);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => 'Master Data',
        'subtitle'  => 'Add New Menu Categories'
      ];

      // view
      $this->load_template('user/page/add', $dataView);
    } else {
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-categories', 'POST', $_POST);
      echo json_encode($menuCategoriesResponse);
    }
  }


  public function edit()
  {
    // get body
    $get = $this->input->get();
    $post = $this->input->post();

    // check body
    if (count($post) == 0) {
      // get menu category details data
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-categories/get-details?menuCatId=' . $get['menuCatId']);
      // response check
      if ($menuCategoriesResponse['success'] == true) {
        // dataView
        $dataView = [
          'title'       => 'Master Data',
          'subtitle'    => 'Edit Menu Categories',
          'menuCatData' => $menuCategoriesResponse['data']
        ];

        // view
        $this->load_template('master_data/menu_categories/page/edit', $dataView);
      } else {
        // redirect
        redirect('master-data/menu-categories');
      }
    } else {
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-categories', "PUT", $post);
      echo json_encode($menuCategoriesResponse);
    }
  }

  public function change_password()
  {
    $post = $this->input->post(null, true);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => 'User',
        'subtitle'  => 'Ubah Kata Sandi'
      ];

      // view
      $this->load_template('user/page/change', $dataView);
    } else {
      $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-categories', 'POST', $_POST);
      echo json_encode($menuCategoriesResponse);
    }
  }

  /**
   * delete
   */
  public function delete()
  {
    // get params
    $get = $this->input->get();

    $menuCategoriesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-categories?menuCatId=' . $get['menuCatId'], "DELETE");
    echo json_encode($menuCategoriesResponse);
  }
}
