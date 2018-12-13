<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Dosen_m extends MY_Model
{
  function __construct()
  {
    parent::__construct();
    $this->data['table_name'] = 'dosen';
    $this->data['primary_key'] = 'username';
  }
}
