<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Admin_m extends MY_Model
{
  function __construct()
  {
    parent::__construct();
    $this->data['table_name'] = 'admin';
    $this->data['primary_key'] = 'username';
  }
}
