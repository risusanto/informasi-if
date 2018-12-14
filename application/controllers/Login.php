<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Login extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data['role'] = $this->session->userdata('role');
    if (isset($this->data['role'])) {
      redirect('home');
      exit;
    }
    $this->load->model('User_m');
  }
  public function index()
  {
    if ($this->POST('login')) {
      $username = $this->POST('username');
      $password = $this->POST('password');
      if (!$this->User_m->login($username,$password)) {
        $this->flashmsg('Login gagal!','danger');
        redirect('home');
        exit;
      }
      redirect('home');
    }
    redirect('home');
  }
}
