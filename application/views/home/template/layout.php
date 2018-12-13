<?php
$this->load->view('home/template/header',['title' => $title]);
$this->load->view('home/template/sidebar');
$this->load->view('home/template/navbar');
$this->load->view($content);
$this->load->view('home/template/footer');
