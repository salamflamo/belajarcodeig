<?php

/**
 *
 */
class CommerModel extends CI_Model
{

  function __construct()
  {
    $this->load->database();
    $this->load->library('encrypt');
  }

  public function mendaftar()
  {

    $hashpass = $this->encrypt->encode($this->input->post('password'));
    $data = array(
      'email'     => $this->input->post('email'),
      'password'  => $hashpass,
      'nama'      => $this->input->post('nama'),
      'alamat'    => $this->input->post('alamat'),
    );
    $this->db->insert('commer',$data);
    return true;
  }
}
