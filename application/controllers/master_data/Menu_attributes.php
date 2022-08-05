<?php

class Menu_attributes extends MY_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();
  }

  public function dtb_serverside()
  {
    // trace();
    echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attributes/get-all?page=1&limit=10&sorty_by=&sort_type=&menuCatName'));
  }

  /**
   * index
   */
  public function index()
  {
    // dataView
    $dataView = [
      'title'     => '{{Master Data}}',
      'subtitle'  => '{{Menu Attributes}}',
      'js'        => 'master_data/menu_attributes/js/data'
    ];

    // view
    $this->load_template('master_data/menu_attributes/page/index', $dataView);
  }

  public function add()
  {
    $post = $this->input->post(null, true);
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => '{{Master Data}}',
        'subtitle'  => '{{Add New Menu attributes}}'
      ];

      // view
      $this->load_template('master_data/menu_attributes/page/add', $dataView);
    } else {
      // request insert menu attributes
      $menuattributesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attributes', 'POST', $_POST);
      echo json_encode($menuattributesResponse);
    }
  }

  public function edit($id)
  {
    // get body
    $get = $this->input->get();
    $post = $this->input->post();

    // check body
    if (count($post) == 0) {
      // get menu category details data
      $menuattributesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attributes/get-details?menuAttrId=' . $id);
      // response check
      if ($menuattributesResponse['success'] == true) {
        // dataView
        $dataView = [
          'title'       => '{{Master Data}}',
          'subtitle'    => '{{Edit Menu Attributes}}',
          'data'        => $menuattributesResponse['data']
        ];

        // view
        $this->load_template('master_data/menu_attributes/page/edit', $dataView);
      } else {
        // redirect
        redirect('master-data/menu-attributes');
      }
    } else {
      $menuattributesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attributes', "PUT", $post);
      echo json_encode($menuattributesResponse);
    }
  }


  /* Addon Function */
  public function set_addon($menuAttrId)
  {
    // get body
    $post = $this->input->post(null, true);
    $menuattributesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attributes/get-details?menuAttrId=' . $menuAttrId);
    // check body
    if (count($post) == 0) {
      // dataView
      $dataView = [
        'title'     => '{{Master Data}}',
        'subtitle'  => '{{Set AddOn}}',
        'data'      => $menuattributesResponse['data'],
        'js'        => 'master_data/menu_attributes/js/data'
      ];

      // view
      $this->load_template('master_data/menu_attributes/page/set_addon', $dataView);
    } else {
      $menuInsertResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attribute-selections', 'POST', $post);
      echo json_encode($menuInsertResponse);
    }
  }

  public function get_addon($menuAttrSelectId)
  {
    echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attribute-selections/get-details?menuAttrSelectId=' . $menuAttrSelectId));
  }

  public function update_addon($menuAttrSelectId)
  {
    $_POST['menuAttrSelectId'] = $menuAttrSelectId;
    echo json_encode($this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attribute-selections', 'PUT', $_POST));
  }

  public function delete_addon()
  {
    // get params
    $get = $this->input->get();

    $menuattributesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attribute-selections?menuAttrSelectId=' . $get['menuAttrSelectId'], "DELETE");
    echo json_encode($menuattributesResponse);
  }


  /**
   * delete
   */
  public function delete()
  {
    // get params
    $get = $this->input->get();

    $menuattributesResponse = $this->lib_curl->curl_request($this->pos_service_v1 . 'v1/menu-attributes?menuAttrId=' . $get['menuAttrId'], "DELETE");
    echo json_encode($menuattributesResponse);
  }
}
