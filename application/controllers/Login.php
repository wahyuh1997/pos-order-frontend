<?php

class Login extends MY_Controller
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
    $this->load->view('login-view');
  }

  public function not_found()
  {
    $this->load->view('errors/html/error_404');
  }

  /**
   * Process
   */
  public function process()
  {
    $post = $this->input->post(null, true);
    $response = $this->lib_curl->curl_request($this->pos_service_v1 . 'login', 'POST', $post);
    // trace($response);
    if ($response['status'] == true) {
      /* Set Session */
      $_SESSION['pos_order'] = [
        'id' => $response['data']['detail_user']['id'],
        'name' => $response['data']['detail_user']['name'],
        'username' => $response['data']['detail_user']['username'],
        'role' => $response['data']['detail_user']['role'],
        'token' => $response['data']['access_token'],
      ];

      $this->session->set_flashdata('notice', $response['message']);
      redirect('');
    } else {
      $this->session->set_flashdata('notice', $response['message']);
      redirect('login');
    }
  }

  public function logout()
  {
    session_destroy();
    redirect('login');
  }
}
