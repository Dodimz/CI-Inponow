<?php

class M_inponow extends CI_model
{
  public function __construct()
  {
    parent::__construct();
      $this->load->database();
  }

  public function tambahData($data)
  {
    $this->db->insert('tabel_inponow', $data);
  }

  public function getData()
  {
    return $this->db->get('tabel_inponow')->result_array();
  }

  public function getDataById($id)
  {
    return $this->db->get_where('tabel_inponow', ['id' => $id])->row_array();
  }

  public function setUpdatedata($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('tabel_inponow', $data);
  }

  public function cariData()
  {
    $keyword =$this->input->post('keyword', true);

    $this->db->like('nama', $keyword);
    $this->db->or_like('no_induk', $keyword);

    return $this->db->get('tabel_inponow')->result_array();

  }

  public function hapusData($id)
  {
    $this->db->delete('tabel_inponow', ['id' => $id]);
  }

  public function setupdateajax($data, $id)
  {
    $nama = $data['nama'];
    $seksi = $data['jurusan'];
    $ind = $data['no_induk'];

    $sql = "UPDATE tabel_inponow SET nama = '$nama', jurusan = '$seksi', no_induk = '$ind' WHERE id='$id' ";
    // echo "<pre>";
    // print_r($sql);
    // exit;
    $this->db->query($sql);
  }

  public function getdataAjaxInponow($data)
  {
    $queryaku = "SELECT nama, jurusan FROM tabel_inponow WHERE nama LIKE '$data%' OR jurusan LIKE '$data%'";
    $query = $this->db->query($queryaku);
    return $query->result_array();
  }

}

 ?>
