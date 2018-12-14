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
    $this->data['username'] = $this->session->userdata('username');
		$this->data['role'] = $this->session->userdata('role');
    if (!isset($this->data['role'])) {
      $this->flashmsg('Autentikasi gagal!','warning');
      redirect('home');
      exit;
    }
    $auth = ['admin','dosen'];
    if (!in_array($this->data['role'],$auth)) {
      $this->flashmsg('Access denied','danger');
      redirect('home');
      exit;
    }
    $models = ['Informasi_m','Download_m','Admin_m','Dosen_m'];
    $this->load->model($models);

		if ($this->data['role'] == 'dosen') {
			$this->data['profil'] = $this->Dosen_m->get_row(['username' => $this->data['username']]);
		}
		if ($this->data['role'] == 'admin') {
			$this->data['profil'] = $this->Admin_m->get_row(['username' => $this->data['username']]);
		}
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
    if ($this->POST('delete')) {
      $files = $this->Download_m->get(['id_info' => $this->POST('ID')]);
      foreach ($files as $file) {
        $this->delete_file($file->id_download);
      }
      $this->Informasi_m->delete($this->POST('ID'));
      $this->flashmsg('Data dihapus!');
      exit;
    }
    $this->data['posts'] = $this->Informasi_m->get();

    if ($this->data['role'] == 'dosen') {
      $this->data['posts'] = $this->Informasi_m->get(['username' => $this->data['username']]);
    }

    $this->data['content'] = 'admin/informasi';
    $this->data['title'] = 'Informasi';
    $this->data['message'] = 'Pengelolaan informasi admin';
    $this->template($this->data,'admin');
  }

  public function tambah_informasi()
  {
    if ($this->POST('simpan')) {
      $data_info = [
        'isi' => $this->POST('data'),
        'username' => $this->data['username']
      ];
      $this->Informasi_m->insert($data_info);

      if (count($_FILES['attachment']['tmp_name']) > 0) {
        $this->upload_files($this->db->insert_id(),'attachment');
      }
      $this->flashmsg('Data disimpan');
      redirect('admin/informasi');
      exit;
    }
    $this->data['content'] = 'admin/add-informasi';
    $this->data['title'] = 'Tambah Informasi';
    $this->data['message'] = 'Tambah informasi untuk ditampilkan di newsfeed';
    $this->template($this->data,'admin');
  }

  private function upload_files($id_info, $tag_name)
	{
    $file_dir  = 'assets'.DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR;
    foreach ($_FILES[$tag_name]['name'] as $key => $value) {

      $file_name   = rand().'-'.$_FILES[$tag_name]['name'][$key];
      $file_tmp    = $_FILES[$tag_name]['tmp_name'][$key];

      /* location file save */
      $file_target = $file_dir . DIRECTORY_SEPARATOR . $file_name; /* DIRECTORY_SEPARATOR = / or \ */
      if (move_uploaded_file($file_tmp, $file_target)) {
        $data_file = [
          'file' => $file_name,
          'id_info' => $id_info
        ];
        $this->Download_m->insert($data_file);
      }
    }
	}

  public function delete_file($id)
  {
    $file = $this->Download_m->get_row(['id_download' => $id]);
    if (isset($file)) {
      $file_name = $file->file;
      $this->Download_m->delete($id);
      $upload_path = realpath(APPPATH . '../assets/content/uploads/'.$file_name);
      @unlink($upload_path);
    }
  }

  public function edit_informasi()
  {
    $id = $this->input->get('id');
    $this->data['data'] = $this->Informasi_m->get_row(['id_info' => $id]);
    $this->data['files'] = $this->Download_m->get(['id_info' => $id]);

    if (!isset($id) || !isset($this->data['data'])) {
      redirect('admin/informasi');
      exit;
    }

    if ($this->POST('delete')) {
      $this->delete_file($this->POST('ID'));
      exit;
    }

    if ($this->POST('upload')) {
      $this->upload_files($id,'attachment');
      $this->flashmsg('Attachment ditambahkan!');
      redirect('admin/edit-informasi?id='.$id);
      exit;
    }

    if ($this->POST('simpan')) {
      $data_info = [
        'isi' => $this->POST('data')
      ];
      $this->Informasi_m->update($id,$data_info);
      $this->flashmsg('Data disimpan!');
      redirect('admin/informasi');
      exit;
    }

    $this->data['content'] = 'admin/edit-informasi';
    $this->data['title'] = 'Edit Informasi';
    $this->data['message'] = 'Edit informasi untuk ditampilkan di newsfeed';
    $this->template($this->data,'admin');
  }

  public function upload_tinymce()
  {
    // Images upload path
    $imageFolder = "assets/content/";

    reset($_FILES);
    $temp = current($_FILES);
    if(is_uploaded_file($temp['tmp_name'])){

        // Sanitize input
        if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])){
            header("HTTP/1.1 400 Invalid file name.");
            return;
        }

        // Verify extension
        if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))){
            header("HTTP/1.1 400 Invalid extension.");
            return;
        }

        // Accept upload if there was no origin, or if it is an accepted origin
        $filetowrite = $imageFolder . $temp['name'];
        move_uploaded_file($temp['tmp_name'], $filetowrite);

        // Respond to the successful upload with JSON.
        echo json_encode(array('location' => $filetowrite));
    } else {
        // Notify editor that the upload failed
        header("HTTP/1.1 500 Server Error");
    }
  }

  public function pin_post()
  {
    $id = $this->POST('ID');
    $this->Informasi_m->update($id,['pinned' => 1]);
  }

  public function unpin_post()
  {
    $id = $this->POST('ID');
    $this->Informasi_m->update($id,['pinned' => 0]);
  }


}
