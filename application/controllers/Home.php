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
		$this->data['username'] = $this->session->userdata('username');
		$this->data['role'] = $this->session->userdata('role');
		if(!isset($this->data['role'])){
			$this->data['username'] = 'guest';
			$this->data['role'] = 'guest';
		}
		$models = ['Informasi_m','Download_m','Komentar_m','Mahasiswa_m','Dosen_m','Admin_m','User_m'];
		$this->load->model($models);
		if ($this->data['role'] == 'mahasiswa') {
			$this->data['profil'] = $this->Mahasiswa_m->get_row(['username' => $this->data['username']]);
		}
		if ($this->data['role'] == 'dosen') {
			$this->data['profil'] = $this->Dosen_m->get_row(['username' => $this->data['username']]);
		}
		if ($this->data['role'] == 'admin') {
			$this->data['profil'] = $this->Admin_m->get_row(['username' => $this->data['username']]);
		}

		$this->data['per_page'] = 4;
	}

	/**
	 * Default method pada controller Home, menampilkan laman informasi
	 *
	 * @author	Ari Susanto
	 */
	public function index()
	{
		// Get post rows num
		$this->data['postNum'] = count($this->Informasi_m->get());
		$this->data['postLimit'] = $this->data['per_page'];

		$cond['order_by'] = 'id_info DESC';
		$cond['limit'] = $this->data['per_page'];
		$this->data['posts'] = $this->Informasi_m->getRows($cond);

		$this->data['pinned'] = $this->Informasi_m->get(['pinned' => 1]);

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

	public function post_detail()
	{
		$id = $this->input->get('id');
		$this->data['post'] = $this->Informasi_m->get_row(['id_info' => $id]);
		if (!isset($id) || !isset($this->data['post'])) {
			redirect('home');
			exit;
		}
		if ($this->POST('komentar')) {
			$data = [
				'isi_komentar' => $this->POST('data'),
				'id_info' => $id,
				'username' => $this->data['username']
			];
			$this->Komentar_m->insert($data);
			redirect('home/post-detail?id='.$id);
			exit;
		}
		$this->data['comments'] = $this->Komentar_m->get(['id_info' => $id]);

		$this->data['content'] = 'home/info-detail';
		$this->data['title'] = 'Detail Informasi - '.$this->title;
		$this->template($this->data);
	}

	public function hapus_komentar()
	{
		if ($this->POST('delete')) {
			$allowed = ['mahasiswa','dosen','admin'];
			if (in_array($this->data['role'],$allowed)) {
				$id = $this->POST('ID');
				$this->Komentar_m->delete($id);
			}
		}
	}

	public function ganti_pw()
	{
		if ($this->POST('gantipw')) {
			if ($this->POST('password_baru') != $this->POST('konfirmasi')) {
				$this->flashmsg('password baru dan konfirmasi harus sama','danger');
				redirect('home');
				exit;
			}
			$check = $this->User_m->get_row(['username' => $this->data['username'], 'password' => md5($this->POST('password'))]);
			if (!isset($check)) {
				$this->flashmsg('Password lama salah','danger');
				redirect('home');
				exit;
			};
			$this->User_m->update($this->data['username'],['password' => md5($this->POST('password_baru'))]);
		}
		$this->flashmsg('Password diganti');
		redirect('home');
	}
}
