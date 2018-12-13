<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Download_m extends MY_Model
{
  function __construct()
  {
    parent::__construct();
    $this->data['table_name'] = 'download';
    $this->data['primary_key'] = 'id_download';
  }
}
