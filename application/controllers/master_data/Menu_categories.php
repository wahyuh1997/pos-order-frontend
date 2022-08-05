<?php

class Menu_categories extends MY_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();
  }

  public function dtb_serverside()
  {
    // trace();
    echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-categories/get-all?page=1&limit=10&sorty_by=&sort_type=&menuCatName'));
  }

  /**
   * index
   */
  public function index()
  {
    // dataView
    $dataView = [
      'title'     => 'Master Data',
      'subtitle'  => 'Menu Categories',
      'js'        => 'master_data/menu_categories/js/data'
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
        'subtitle'  => 'Add New Menu Categories'
      ];

      // view
      $this->load_template('master_data/menu_categories/page/add', $dataView);
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
