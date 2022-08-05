<?php


function get_currencies_list()
{
  $CI = &get_instance();
  $json = file_get_contents('assets/currencies/list/currencies-list.json');

  // payload
  $data = [
    'currencies_list'  => json_decode($json, true),
  ];
  // view
  $CI->load->view('template/sel-currencies', $data);
}

function trace($value)
{
  echo "<pre>";
  var_dump($value);
  exit();
}

function getAlpha($number)
{
  $alphabet = array(
    'a', 'b', 'c', 'd', 'e',
    'f', 'g', 'h', 'i', 'j',
    'k', 'l', 'm', 'n', 'o',
    'p', 'q', 'r', 's', 't',
    'u', 'v', 'w', 'x', 'y',
    'z'
  );

  return strtoupper($alphabet[$number]);
}

/**
 * Decription
 * Check for the value if null or not
 *
 * @param string / int
 * @return string / int
 */

function check_null($value)
{
  if ($value == null) {
    $res = ($value == null  ? '-' : $value);
  } else {
    $res = ($value == ''  ? null : $value);
  }


  return $res;
}

/**
 * Tolerance type desc
 */

function check_tolerance_type($value)
{
  if ($value == 1) {
    return "Percentage";
  } else {
    return "Quantity";
  }
}

/**
 * Print checklist or not
 */

function check_bool_icon($value)
{
  if ($value == 0) {
    $icon = '<i class="fa fa-close text-danger"></i>';
  } else if ($value == 1) {
    $icon = '<i class="fa fa-check text-success"></i>';
  } else {
    $icon = '???';
  }

  return $icon;
}

/**
 * Default currency format
 *
 * @return float
 */

function currency_format($value)
{
  return number_format($value, 2, ".", ",");
}

/***********************************************************************************
 * Description
 * Get Indonesia Date Format
 * 
 * Parameter
 * $date = date
 * 
 ***********************************************************************************/

function datetime_to_date($datetime)
{
  $explode = explode(' ', $datetime);
  return $explode[0];
}

function dateNumber($date)
{
  if ($date == '-') {
    return $date;
    exit();
  }

  $date     = explode(' ', $date)[0];
  $time     = gmdate($date, time() + 60 * 60 * 8);
  $explode  = explode("-", $time);
  $day      = $explode[2];
  $month    = $explode[1];
  $year     = substr($explode[0], -2);
  return $month . '/' . $day . '/' . $year;
}

function dateFormat($date)
{
  if ($date == '-') {
    return $date;
    exit();
  }

  $date  = explode(' ', $date)[0];
  $time   = gmdate($date, time() + 60 * 60 * 8);
  $explode  = explode("-", $time);
  $day      = $explode[2];
  $month    = month($explode[1]);
  $year     = $explode[0];
  return $day . ' ' . $month . ' ' . $year;
}


function timeFormat($date)
{
  $time  = explode(' ', $date)[1];
  return $time;
}

function month($month)
{
  switch ($month) {
    case 1:
      return "January";
      break;
    case 2:
      return "February";
      break;
    case 3:
      return "March";
      break;
    case 4:
      return "April";
      break;
    case 5:
      return "May";
      break;
    case 6:
      return "June";
      break;
    case 7:
      return "July";
      break;
    case 8:
      return "August";
      break;
    case 9:
      return "September";
      break;
    case 10:
      return "October";
      break;
    case 11:
      return "November";
      break;
    case 12:
      return "December";
      break;
  }
}

/**
 * Get currencies data
 * 
 * @return array
 */

function get_currencies()
{
  $json = file_get_contents(CURRENCIES_DIR . 'list/' . '/currencies-list.json');
  $data = json_decode($json, true);

  return $data;
}

/**
 * Show child menu
 */

function show_child_menu()
{
  $menu = $_SESSION['sas_wh_user']['menu'];

  $key = array_search(uri_string(), array_column($menu, 'sm_module_url'));

  // trace($menu[$key]);

  foreach ($menu[$key]['child'] as $child_menu) {
    echo '<div class="col-sm-12 col-md-4 col-lg-3 content-menu">
    <div class="col-sm-12 px-2 text-center content-menu-area" data-url="' . base_url($child_menu['sm_module_url']) . '">
      <i class="' . $child_menu['sm_module_icon'] . '"></i>
      <br>
      <br>
      <span>' . $child_menu['sm_module_name'] . '</span>
    </div>
  </div>';
  }
}

function init_lang()
{
  $ci = &get_instance();
  /* For initial the Language to Cookies */
  $lang_response = $ci->lib_curl->curl_request($ci->service_sas . 'client/lang');
  if ($lang_response == true) {
    foreach ($lang_response['data'] as $key => $value) {
      # Set Cookies
      set_cookie('list_language[' . $key . '][client_key]', $value['client_key'], time() + 864700);
      set_cookie('list_language[' . $key . '][sm_lp_name]', $value['sm_lp_name'], time() + 864700);
      set_cookie('list_language[' . $key . '][sm_lp_name_short]', $value['sm_lp_name_short'], time() + 864700);
      set_cookie('list_language[' . $key . '][sm_lp_flag]', $value['sm_lp_flag'], time() + 864700);
    }
    $data_view['lang']  = get_cookie('list_language');
    set_cookie('dtb_entries_length', 10, 864700);
  } else {
    echo "Languange can't be loaded.";
  }
}

function remove_all_cookie()
{
  /* Cookie From Customer PO */
  delete_cookie('filter_po[ref_warehouse_id]');
  delete_cookie('filter_po[ref_customer_id]');
  delete_cookie('filter_po[ref_vendor_id]');
  delete_cookie('filter_po[startdate]');
  delete_cookie('filter_po[enddate]');
  delete_cookie('filter_po[filter_date]');
  delete_cookie('filter_po[sum_all]');
  delete_cookie('filter_po[sum_not_paid]');
  delete_cookie('filter_po[sum_paid]');
  delete_cookie('dtb_entries_length');

  /* Cookie From Language */
  foreach (get_cookie('list_language') as $key => $language) {
    delete_cookie('list_language[' . $key . '][client_key]');
    delete_cookie('list_language[' . $key . '][sm_lp_name]');
    delete_cookie('list_language[' . $key . '][sm_lp_name_short]');
    delete_cookie('list_language[' . $key . '][sm_lp_flag]');
  }
}

/**
 * Get system price from current system currency
 * 
 * @return float
 */

// function get_system_price($from_currency, $amount)
// {
//   // intialize currency data
//   $to_currency        = getWebSetting('setting_web_currency_id');
//   $version_currency   = getWebSetting('setting_web_currency_version');

//   // initialize rates version
//   $rates_version      = getWebSetting('setting_web_currency_rates_version');

//   if ($from_currency !== $to_currency) {
//     // get rates data
//     $json               = file_get_contents('assets/currencies/rates/' . $rates_version . '/' . $from_currency . '.json');
//     $rates_data         = json_decode($json, true);

//     $rates_to_currency  = $rates_data[strtolower($to_currency)]['rate'];
//   } else {
//     $rates_to_currency  = 1;
//   }

//   // calculation
//   $total_amount = $amount * $rates_to_currency;

//   // payload data
//   $data = [
//     'rate'          => $rates_to_currency,
//     'total_amount'  => $total_amount
//   ];

//   return $data;
// }

/**
 * paramsBuilder
 * 
 * to make get param into string
 * 
 * @param array $get 
 * 
 * @return string
 */
function paramsBuilder($params){
  $paramString = '';
      
  $i =0;
  foreach($params as $key => $value){
    $i++;

    if($key !== 'url'){
      if($i == 1){
        $paramString .= '?' . $key . '=' . $value;
      } else {
        $paramString .= '&' . $key . '=' . $value;
      }
    }
  }

  return $paramString;
}

/**
 * responseChecker
 * 
 * to checking the response from api i2b
 * 
 * @param array $response
 * 
 * @return boolean
 */
function responseChecker($response){
  if($response !== null){
    if($response !== ''){
      return true;
    } else {
      return false;
    }
  } else {
    return false;
  }
}