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
  }

  public function logout()
  {
    session_destroy();
    redirect('login');
  }
}
