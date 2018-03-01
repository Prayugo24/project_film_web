<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

public function index(){
  $this->load->view('user_rs/nav_conten/header');
  $this->load->view('user_rs/body/home');
  $this->load->view('user_rs/nav_conten/footer');
}

public function series(){
  $this->load->view('user_rs/nav_conten/header');
  $this->load->view('user_rs/body/series');
  $this->load->view('user_rs/nav_conten/footer');
}

public function news(){
  $this->load->view('user_rs/nav_conten/header');
  $this->load->view('user_rs/body/news');
  $this->load->view('user_rs/nav_conten/footer');
}
public function A_Zlist(){
  $this->load->view('user_rs/nav_conten/header');
  $this->load->view('user_rs/body/A-Zlist');
  $this->load->view('user_rs/nav_conten/footer');
}
}
