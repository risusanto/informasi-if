<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class User_m extends MY_Model
{
  function __construct()
  {
    parent::__construct();
    $this->data['table_name'] = 'user';
    $this->data['primary_key'] = 'username';
  }

  public function login($username,$password)
  {
    $user = $this->get_row(['username' => $username,'password' => md5($password)]);
    if (!isset($user)) {
      return FALSE;
    }
    $this->session->set_userdata(['username' => $user->username, 'role' => $user->role]);
    return TRUE
  }
}
