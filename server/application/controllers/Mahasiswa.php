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
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => FALSE,
        'message' => 'Data not found'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function index_post()
  {
    $data = [
      'nrp' => $this->post('nrp'),
      'nama' => $this->post('nama'),
      'email' => $this->post('email'),
      'jurusan' => $this->post('jurusan')
    ];

    if ($this->mahasiswa->createMhs($data) > 0) {
      $this->response([
        'status' => true,
        'message' => 'Success insert new data mahasiswa!'
      ], REST_Controller::HTTP_CREATED);
    } else {
      $this->response([
        'status' => false,
        'message' => 'Bad request!'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }
  }

  public function index_delete()
  {
    $id = $this->delete('id');

    if ($id == null) {
      $this->response([
        'status' => false,
        'message' => 'Id is required!'
      ], REST_Controller::HTTP_BAD_REQUEST);
    } else {
      if ($this->mahasiswa->deleteMhs($id) > 0) {
        $this->response([
          'status' => true,
          'message' => 'success deleted!'
        ], REST_Controller::HTTP_OK);
      } else {
        $this->response([
          'status' => false,
          'message' => 'Data not found!'
        ], REST_Controller::HTTP_NOT_FOUND);
      }
    }
  }
}
