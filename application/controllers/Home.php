<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Inisiasi controller Home
	 *
	 * @author	Ari Susanto
	 */
	public function __construct()
	{
		parent::__construct();

		$models = ['Informasi_m'];
		$this->load->model($models);

		$this->data['per_page'] = 4;
	}

	/**
	 * Default method pada controller Home, menampilkan laman informasi
	 *
	 * @author	Ari Susanto
	 */
	public function index()
	{
		$cond['order_by'] = 'id_info DESC';
		$cond['limit'] = $this->data['per_page'];
		$this->data['posts'] = $this->Informasi_m->getRows($cond);

		$this->data['content'] = 'home/newsfeed';
		$this->data['title'] = 'Newsfeed - '.$this->title;
		$this->template($this->data);
	}

	public function loadMoreData()
	{
		// Get last post ID
		$lastID = $this->input->get('id_info');

		// Get post rows num
		$cond['where'] = array('id_info <'=>$lastID);
		$cond['returnType'] = 'count';
		$this->data['postNum'] = $this->Informasi_m->getRows($cond);

		// Get posts data from the database
		$cond['returnType'] = '';
		$cond['order_by'] = "id_info DESC";
		$cond['limit'] = $this->data['per_page'];
		$this->data['posts'] = $this->Informasi_m->getRows($cond);
		$this->data['postLimit'] = $this->data['per_page'];

		// Pass data to view
    $this->load->view('home/load-more-data', $this->data, false);
	}
}
