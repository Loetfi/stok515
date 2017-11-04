<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

  public function index()
  {
    $template = 'transaction/daftartransaksi';
    $data['title'] = 'Daftar Transaksi';
    template($template, $data);   
  }

  public function detail()
  {
    $template = 'transaction/detailtransaksi';
    $data['title'] = 'Detail Transaksi';
    template($template, $data);   
  }

}

/* End of file Transaction.php */
/* Location: ./application/modules/transaction/controllers/Transaction.php */
