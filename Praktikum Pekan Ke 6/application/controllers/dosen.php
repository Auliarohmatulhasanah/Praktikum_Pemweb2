<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dosen extends CI_Controller {
 public function index()
 {

 $this->load->model('dosen_model','dsn');
 $this->dsn->id=23;
 $this->dsn->nidn='0325594';
 $this->dsn->nama='Sirojul Munir';
 $this->dsn->gender='L';
 $this->dsn->pendidikan='S2 Pemrograman Web';
 $list_dsn = [$this->dsn];
 $data['list_dsn']=$list_dsn;
 
//  $this->load->view('header');
 $this->load->view('dosen/index',$data);
//  $this->load->view('footer');
 }
}
?>