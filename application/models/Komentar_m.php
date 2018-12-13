<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Komentar_m extends MY_Model
{
  function __construct()
  {
    parent::__construct();
    $this->data['table_name'] = 'komentar';
    $this->data['primary_key'] = 'id_komentar';
  }
}
