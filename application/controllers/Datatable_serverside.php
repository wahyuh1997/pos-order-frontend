<?php

class Datatable_serverside extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function basic_information_item()
  {
    $post = $this->input->post();
    $get = $this->input->get();
    // checking if there param called filter
    if (isset($get['filter'])) {
      $parse = json_decode($get['filter'], true);

      if (isset($parse[0])) {
        $post['category_id'] = $parse[0];
      }

      if (isset($parse[1])) {
        $post['subcategory_id'] = $parse[1];
      }

      if (isset($parse[2])) {
        $post['color_id'] = $parse[2];
      }
    }

    // doing request into API
    $response =  $this->lib_curl->curl_request($this->service_sas . 'dt_serverside/basic_information_item', 'POST', $post);
    // trace($response);

    $data   = array();
    $no     = $post['start'];
    foreach ($response['data'] as $field) {
      $no++;

      $row = array();
      $row[] = $no;
      $row[] = '<a href="' . base_url('user/basic_information/') . 'edit/' . $field['ref_item_id'] . '" class="btn btn-primary btn-sm">' . $this->translator_engine->_translate_manual("{{Edit}}") . '</a>';
      $row[] = $field['ref_item_name'];
      $row[] = check_null($field['ref_item_color_name']);
      $row[] = !isset($field['ref_item_image']) ? "-" : "<img class='images-modal' src=" . $field['ref_item_image'] . " width='150' height='100'>";
      $row[] = check_null($field['ref_item_label_desc']);
      $row[] = $field['ref_item_category_name'];
      $row[] = check_null($field['ref_item_subcategory_name']);
      $row[] = check_null($field['ref_item_spec']);
      if ($_SESSION['sas_wh_user']['client_key'] == '621f4425-2fcd-11ec-bcee-02001700') {
        # FOR HWALIN 
        if ($field['ref_item_to_kg'] == 1) {
          $row[] = 0;
        } else {
          $row[] = $field['ref_item_to_kg'] != 0 ? number_format($field['ref_item_to_kg'] * 1000, 2) : 0;
        }
      } else {
        # FOR GLOBAL
        $row[] = $field['ref_item_to_kg'] != 0 ? number_format($field['ref_item_to_kg'] * 1000, 2) : 0;
      }
      $row[] = check_null($field['ref_item_width']);
      $row[] = check_null($field['ref_item_selling_price']);
      $row[] = check_null($field['total_stock_qty']);
      $row[] = $field['is_selling'] == 1 ? '<i class="fa fa-circle text-success" style="font-size: 20px;">' : '<i class="fa fa-circle text-danger" style="font-size: 20px;">';
      $row[] = check_null($field['ref_item_desc']);
      $row[] = check_null($field['ref_vendor_name']);
      $row['DT_RowId'] = $field['ref_item_id'];
      $data[] = $row;
    }


    $res = [
      "draw"              => $response['draw'],
      "recordsFiltered"   => $response['recordsFiltered'],
      "recordsTotal"      => $response['recordsTotal'],
      "data"              => $data
    ];

    echo json_encode($res);
  }

  function basic_information_customer()
  {
    $post = $this->input->post();
    $get = $this->input->get();
    // checking if there param called filter
    if (isset($get['filter'])) {
      $parse = json_decode($get['filter'], true);

      if (isset($parse[0])) {
        $post['customer_type_id'] = $parse[0];
      }
    }

    // doing request into API
    $response =  $this->lib_curl->curl_request($this->service_sas . 'dt_serverside/basic_information_customer', 'POST', $post);

    $data   = array();
    $no     = $post['start'];
    foreach ($response['data'] as $field) {
      $no++;

      $row = array();
      $row[] = $no;
      $row[] = '<a class="btn btn-primary" href="' . base_url('user/basic_information/update_customer/') . $field['ref_customer_id'] . '">' . $this->translator_engine->_word("{{Edit}}") . '</a>';
      $row[] = $field['ref_customer_name'];
      $row[] = $field['status'] == 1 ? '<i class="fa fa-circle text-success" style="font-size: 20px;">' : '<i class="fa fa-circle text-danger" style="font-size: 20px;">';
      $row[] = $field['ref_customer_type_name'];
      $row[] = check_null($field['ref_customer_fax']);
      $row[] = check_null($field['address']);
      $row[] = check_null($field['ref_customer_updated_datetime']);
      $row['DT_RowId'] = $field['ref_customer_id'];
      $data[] = $row;
    }


    $res = [
      "draw"              => $response['draw'],
      "recordsFiltered"   => $response['recordsFiltered'],
      "recordsTotal"      => $response['recordsTotal'],
      "data"              => $data
    ];

    echo json_encode($res);
  }

  function basic_information_vendor()
  {
    $post = $this->input->post();
    $get = $this->input->get();
    // checking if there param called filter
    if (isset($get['filter'])) {
      $parse = json_decode($get['filter'], true);

      if (isset($parse[0])) {
        $post['vendor_type_id'] = $parse[0];
      }
    }

    // doing request into API
    $response =  $this->lib_curl->curl_request($this->service_sas . 'dt_serverside/basic_information_vendor', 'POST', $post);

    $data   = array();
    $no     = $post['start'];
    foreach ($response['data'] as $field) {
      $no++;

      $row = array();
      $row[] = $no;
      $row[] = '<a class="btn btn-primary" href="' . base_url('user/basic_information/update_vendor/') . $field['ref_vendor_id'] . '">' . $this->translator_engine->_word("{{Edit}}") . '</a>';
      $row[] = $field['ref_vendor_name'];
      $row[] = $field['status'] == 1 ? '<i class="fa fa-circle text-success" style="font-size: 20px;">' : '<i class="fa fa-circle text-danger" style="font-size: 20px;">';
      $row[] = $field['ref_vendor_type_name'];
      $row[] = check_null($field['ref_vendor_cp_name']);
      $row[] = check_null($field['ref_vendor_pn_value']);
      $row[] = check_null($field['ref_vendor_fax']);
      $row[] = check_null($field['ref_vendor_updated_datetime']);
      $row['DT_RowId'] = $field['ref_vendor_id'];
      $data[] = $row;
    }


    $res = [
      "draw"              => $response['draw'],
      "recordsFiltered"   => $response['recordsFiltered'],
      "recordsTotal"      => $response['recordsTotal'],
      "data"              => $data
    ];

    echo json_encode($res);
  }

  /**
   * SEARCH DATATABLE
   */

  /**
   * Search item
   */
  function search_item()
  {
    // get form
    $post   = $this->input->post();

    // get param
    $get    = $this->input->get();

    foreach ($get as $key => $value) {
      $post[$key] = $value;
    }

    // doing request into API
    $response =  $this->lib_curl->curl_request($this->service_sas . 'dt_serverside/item_search', 'POST', $post);
    // trace($response);
    // process to item search
    $data   = array();
    $no     = $post['start'];
    foreach ($response['data']['datatable'] as $field) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $field['ref_item_name'];
      $row[] = $field['ref_item_spec'];
      $row[] = check_null($field['ref_item_color_name']);
      $row[] = '<img class="images-modal" src="' . $field['ref_item_image'] . '" style="width:100px;">';
      $row[] = check_null($field['ref_warehouse_name']);
      $row[] = check_null($field['ref_warehouse_area_name']);
      $row[] = '<a href="' . base_url('user/dashboard/get_warehouse_area_info/') . $field['ref_warehouse_area_id'] . '/' . $field['ref_rack_name'] . '" class="popup-rack" data-wh="' . $field['ref_warehouse_name'] . '-' . $field['ref_warehouse_area_name'] . '-' . $field['ref_rack_series_number'] . '" data-rack="' . $field['ref_rack_series_number'] . '" data-toggle="modal" data-target=".area-modal">
            ' . $field['ref_rack_layer_sn'] . '
        </a>';
      $row[] = check_null($field['ref_rack_layer_desc']);
      $row[] = check_null($field['item_desc']);
      $row[] = check_null(number_format($field['whm_inv_qty'], 2, '.', '') + 0);
      $row[] = check_null($field['ref_item_unit_name']);
      $row[] = currency_format($field['whm_inv_qty'] * $field['ref_item_to_kg']);
      $row[] = 'Kg';
      /* Doze Pair Data */
      if ($_SESSION['sas_wh_user']['client_key'] == '1f2c5765-4679-11ec-9b10-02001700' || $_SESSION['sas_wh_user']['client_key'] == '3537b9c6-4681-11ec-9b10-02001700') {
        /* Change Tone */
        $row[] = $field['ref_item_unit_id'] == '750c17dc-4755-11ec-9b10-02001700' ? currency_format($field['doze']) : '-';
        $row[] = $field['ref_item_unit_id'] == '750c17dc-4755-11ec-9b10-02001700' ? currency_format($field['pair']) : '-';
      }
      $row[] = check_null($field['ref_storage_comment_name']);
      $row[] = check_null($field['whm_inv_updated_datetime']);
      $row[] = check_null($field['whm_inv_created_datetime']);
      $row[] = check_null($field['whm_inv_remark']);
      $row[] = check_null($field['search_remark']);
      $row['DT_RowId'] = $field['whm_inv_item_id'];
      $row['DT_RowData']['pid'] = $field['whm_inv_id'];
      $data[] = $row;
    }


    $res = [
      "draw"              => $response['data']['draw'],
      "recordsFiltered"   => $response['data']['recordsFiltered'],
      "recordsTotal"      => $response['data']['recordsTotal'],
      "data"              => $data
    ];

    echo json_encode($res);
  }

  /**
   * Search item shifting
   */
  function search_item_shifting()
  {
    // get form
    $post   = $this->input->post();

    // get param
    $get    = $this->input->get();

    foreach ($get as $key => $value) {
      $post[$key] = $value;
    }

    // doing request into API
    $response =  $this->lib_curl->curl_request($this->service_sas . 'dt_serverside/item_search', 'POST', $post);

    // process to item search
    $data   = array();
    $no     = $post['start'];
    foreach ($response['data']['datatable'] as $field) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $field['ref_item_name'];
      $row[] = $field['ref_item_spec'];
      $row[] = check_null($field['ref_item_color_name']);
      $row[] = '<img class="images-modal" src="' . $field['ref_item_image'] . '" style="width:100px;">';
      $row[] = check_null($field['ref_warehouse_name']);
      $row[] = check_null($field['ref_warehouse_area_name']);
      $row[] = '<a href="' . base_url('user/dashboard/get_warehouse_area_info/') . $field['ref_warehouse_area_id'] . '/' . $field['ref_rack_name'] . '" class="popup-rack" data-wh="' . $field['ref_warehouse_name'] . '-' . $field['ref_warehouse_area_name'] . '-' . $field['ref_rack_series_number'] . '" data-rack="' . $field['ref_rack_series_number'] . '" data-toggle="modal" data-target=".area-modal">
            ' . $field['ref_rack_layer_sn'] . '
        </a>';
      $row[] = check_null($field['ref_rack_layer_desc']);
      $row[] = check_null($field['item_desc']);
      $row[] = check_null($field['whm_inv_qty']);
      $row[] = 'Kg';
      $row[] = currency_format($field['whm_inv_qty'] / $field['ref_item_to_kg']);
      $row[] = check_null($field['ref_item_unit_name']);
      $row[] = check_null($field['ref_storage_comment_name']);
      $row[] = check_null($field['whm_inv_updated_datetime']);
      $row[] = check_null($field['whm_inv_created_datetime']);
      $row[] = check_null($field['whm_inv_remark']);
      $row[] = check_null($field['search_remark']);
      $row['DT_RowId'] = $field['whm_inv_item_id'];
      $data[] = $row;
    }


    $res = [
      "draw"              => $response['data']['draw'],
      "recordsFiltered"   => $response['data']['recordsFiltered'],
      "recordsTotal"      => $response['data']['recordsTotal'],
      "data"              => $data
    ];

    echo json_encode($res);
  }
}
