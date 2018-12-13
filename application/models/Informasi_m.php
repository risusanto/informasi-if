<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Informasi_m extends MY_Model
{
  function __construct()
  {
    parent::__construct();
    $this->data['table_name'] = 'informasi';
    $this->data['primary_key'] = 'id_info';
  }
}
