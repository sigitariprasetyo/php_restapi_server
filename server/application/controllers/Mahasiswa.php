<?php

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Mahasiswa extends REST_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model', 'mahasiswa');
  }

  public function index_get()
  {
    $id = $this->get('id');
    $mahasiswa = $this->mahasiswa->getMahasiswa($id);

    if ($mahasiswa) {
      $this->response([
        'status' => true,
        'data' => $mahasiswa
      ], REST_Controller::HTTP_NOT_FOUND);
    } else {
      $this->response([
        'status' => FALSE,
        'message' => 'Data not found'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }
}
