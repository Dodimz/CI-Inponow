<?php
class C_inponow extends CI_Controller {

public function __construct()
{
  parent::__construct();
    $this->load->model('M_inponow');
    $this->load->library('form_validation');
    date_default_timezone_set('Asia/Jakarta');
}

public function index()
{

  $data['judul'] = 'Inponow Home';

  $this->load->view('template/header', $data);
  $this->load->view('section/index', $data);
  $this->load->view('template/footer');

  //$this->load->database();
}
public function tambahdata()
  {
    $data['judul'] ='Form Tambah Data Siswa';

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('no_induk', 'No Induk', 'required');

    if ($this->form_validation->run() == FALSE ) {

    $this->load->view('template/header', $data);
    $this->load->view('section/tambahdata');
    $this->load->view('template/footer');
    // code...
  } else {
    // upload area
    // print_r($_FILES["userfile"]["name"]);
    // exit;
    $config['upload_path']        = './assets/upload_img/';
    $config['allowed_types']      = 'gif|jpg|png';
    $now = date('Y-m-d-H-i-s');
    $config['file_name']          = $now.'.png';

               $config['max_size']             = 0;
               // $config['max_width']            = 1024;
               // $config['max_height']           = 768;

               $this->load->library('upload', $config);
               $this->upload->initialize($config);
               //
               if ( ! $this->upload->do_upload('userfile'))
               {
                       $error = array('error' => $this->upload->display_errors());
                       print_r($error);
                       // $this->load->view('upload_form', $error);
               }
               else
               {
                       $data = array('upload_data' => $this->upload->data());
                       // $this->load->view('upload_success', $data);
               }
               // exit;
    $pet = $config['upload_path'].$config['file_name'];
    // print_r($pet);
    // exit;
    $data = [
      "nama" => $this->input->post('nama', true),
      "no_induk" => $this->input->post('no_induk', true),
      "jurusan" => $this->input->post('seksi', true),
      "path" => $pet
    ];
    $this->M_inponow->tambahData($data);
    $this->session->set_flashdata('flash', 'Ditambah');
    redirect('tampildata');
  }
  }

  public function tampildata()
{

  $data['judul'] = 'Daftar Employees';
  $data['siswa'] = $this->M_inponow->getData();

  $ww = $data['siswa'];

  $data['hai']= array();
  foreach ($ww as $w) {
    array_push($data['hai'], $w['nama']);
  }
  // echo "<pre>";
  // print_r($data['hai']);
  // die;
  if ($this->input->post('keyword')) {
  $data['siswa'] = $this->M_inponow->cariData();
}
  $this->load->view('template/header', $data);
  $this->load->view('section/data', $data);
  $this->load->view('template/footer');
}

public function hapusData($id)
{
  $this->M_inponow->hapusData($id);
  redirect('tampildata');
}


public function updateData($id)
{

      $data['judul'] ='Form Edit Data';

      $data['datanya'] = $this->M_inponow->getDataById($id);
      $data['seksi'] = ['Teknik Mesin', 'Teknik Komputer', 'Akutansi', 'Teknik Gambar Bangunan'];



      $this->form_validation->set_rules('no_induk', 'No Induk', 'required');
      $this->form_validation->set_rules('nama', 'Nama', 'required');

      if ($this->form_validation->run() == FALSE ) {

        $this->load->view('template/header', $data);
        $this->load->view('section/editdata', $data);
        $this->load->view('template/footer');
      // code...
    } else {

        if ($_FILES["userfile"]["name"] !== '') {
          // code...
          $config['upload_path']        = './assets/upload_img/';
          $config['allowed_types']      = 'gif|jpg|png';
          $now = date('Y-m-d-H-i-s');
          $config['file_name']          = $now.'.png';

                     $config['max_size']             = 0;
                     // $config['max_width']            = 1024;
                     // $config['max_height']           = 768;
                     $this->load->library('upload', $config);
                     // $this->upload->do_upload('userfile');
                     $this->upload->initialize($config);
                     //
                     if ( ! $this->upload->do_upload('userfile'))
                     {
                             $error = array('error' => $this->upload->display_errors());
                             print_r($error);
                     }else
                     {
                             $data = array('upload_data' => $this->upload->data());
                     }
                     // exit;
          $pet = $config['upload_path'].$config['file_name'];
          $data = [
            "nama" => $this->input->post('nama', true),
            "no_induk" => $this->input->post('no_induk', true),
            "jurusan" => $this->input->post('seksi', true),
            "path" => $pet
          ];

        $this->M_inponow->setUpdatedata($id, $data);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('tampildata');
      }else{
          $data = [
            "nama" => $this->input->post('nama', true),
            "no_induk" => $this->input->post('no_induk', true),
            "jurusan" => $this->input->post('seksi', true),
            "path" => $this->input->post('before_path', true)
          ];

        $this->M_inponow->setUpdatedata($id, $data);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('tampildata');
        }

    }
  }

  // public function updateajax()
  // {
  //     $id = $_POST['id'];
  //     $data = array(
  //       'nama' => $_POST['nama'],
  //       'no_induk' => $_POST['no_induk'],
  //       'jurusan' => $_POST['seksi'],
  //     );
  //
  //     $this->M_inponow->setUpdateajax($data, $id);
  //
  //     $notif = 'Success';
  //     echo json_encode($notif);
  // }

  public function delete()
  {
    $id = $_POST['id'];
    $this->M_inponow->hapusData($id);
    $notif = 'Copyright (c) 2018 Copyright Holder All Rights Reserved. iso lur';
    echo json_encode($notif);
  }

//3/8/2019
  public function movefile()
  {
    echo "aldi prtradana";
    $dir_src = 'assets/trial_img/history/';
    $dir_dest = 'assets/trial_img/';
    $filename = 'google.png';

    copy($dir_src.$filename, $dir_dest.$filename);
    $hasil = $dir_dest.$filename;
    echo "<br/>".$hasil;
    unlink('assets/trial_img/history/google.png');
  }



  public function getDataFromAjx()
  {
    $data = $this->input->post('input_ajx'); // bisa juga menggunkaan-> $_POST['input_ajx']
    $ini  = $this->M_inponow->getdataAjaxInponow($data);
    echo json_encode($ini);
  }


  public function pdf()
  {
      $data['get'] = $this->M_inponow->getData();
      $this->load->view('section/V_Pdf', $data);
  }





}
?>
