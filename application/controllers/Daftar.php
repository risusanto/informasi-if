<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Daftar extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $models = ['User_m','Mahasiswa_m','Dosen_m'];
    $this->load->model($models);
    $this->data['api'] = 'https://api.unsri.ac.id/';
    $this->load->library('curl');
  }

  public function index()
  {
    if ($this->POST('daftar')) {
      if ($this->POST('role') == 'dosen') {
        $data = json_decode($this->curl->simple_get($this->data['api'].'dosen0/'.$this->POST('data')));
        if($data->nip == $this->POST('data')){
          $data_user = [
            'username' => $data->nip,
            'password' => md5($data->nip),
            'role' => 'dosen'
          ];
          $data_kontak = [
            'username' => $data->nip,
            'nama' => $data->nama_lengkap
          ];
          $this->User_m->insert($data_user);
          $this->Dosen_m->insert($data_kontak);

          $userdata = ['username' => $data_user['username'],'role' => $data_user['role']];
          $this->session->set_userdata($userdata);
          $this->flashmsg('Pendaftaran berhasi!');
          redirect('home');
          exit;
          
        } else {
          $this->flashmsg('Pendaftaran gagal!','error');
          redirect('home');
          exit;
        }
      } else {
        $data = json_decode($this->curl->simple_get($this->data['api'].'mahasiswa0/'.$this->POST('data')));
        if($data->nim == $this->POST('data')){
          $data_user = [
            'username' => $data->nim,
            'password' => md5($data->nim),
            'role' => 'mahasiswa'
          ];
          $data_kontak = [
            'username' => $data->nim,
            'nama' => $data->nama,
            'angkatan' => substr($data->angkatan,0,4)
          ];
          $this->User_m->insert($data_user);
          $this->Mahasiswa_m->insert($data_kontak);

          $userdata = ['username' => $data_user['username'],'role' => $data_user['role']];
          $this->session->set_userdata($userdata);
          $this->flashmsg('Pendaftaran berhasi!');
          redirect('home');
          exit;

        } else {
          $this->flashmsg('Pendaftaran gagal!','error');
          redirect('home');
          exit;
        }
      }
    }
    redirect('home');
  }
}
