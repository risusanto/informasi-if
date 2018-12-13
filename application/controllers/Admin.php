<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Admin extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $models = ['Informasi_m'];
    $this->load->model($models);
    $this->data['username'] = 'Admin';
  }

  public function index()
  {
    $this->data['content'] = 'admin/dashboard';
    $this->data['title'] = 'Admin Dashboard';
    $this->data['message'] = 'Dashboard admin';
    $this->template($this->data,'admin');
  }

  public function informasi()
  {
    $this->data['posts'] = $this->Informasi_m->get();

    $this->data['content'] = 'admin/informasi';
    $this->data['title'] = 'Informasi';
    $this->data['message'] = 'Pengelolaan informasi admin';
    $this->template($this->data,'admin');
  }


}
