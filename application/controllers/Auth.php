<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Auth_M');
  }


  public function index()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required', [
      'required' => '%s harus diisi!!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'trim|required', [
      'required' => '%s harus diisi!!'
    ]);

    if ($this->form_validation->run() == TRUE) {
      // Jika validasinya success
      $this->aksi_login();
    }
    $data['title'] = "Halaman Login";
    $this->load->view('auth/login', $data);
  }

  private function aksi_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('login', ['username' => $username])->row_array();
    // var_dump($user);
    // die;
    // Jika user ada
    if ($user) {
      // cek password
      if (password_verify($password, $user['password'])) {
        // Jika password benar
        $session = [
          'username' => $user['username'],
          'level' => $user['level']
        ];
        $this->session->set_userdata($session);
        if ($user['level'] == "Admin") {
          // Arahkan ke halaman Admin
          redirect('admin');
        } elseif ($user['level'] == "Bagian Administrasi") {
          // Arahkan ke halaman Administrasi
          redirect('Administrasi');
        } elseif ($user['level'] == "Wali") {
          // Arahkan ke halaman Wali
          redirect('Wali/index');
        } else {
          // Arahkan ke halaman musyrif
          redirect('Halaman_Musyrif/index');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Pengguna tidak ditemukan!</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
    redirect('auth');
  }


  public function forgotpassword()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required', [
      'required' => '%s harus diisi!!'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Form Lupa Password'
      ];
      $this->load->view('auth/form-forgot-password', $data);
    } else {
      $username = $this->input->post('username');
      $user = $this->db->get_where('login', ['username' => $username])->row_array();

      if ($user) {
        // $data = $user['username'];
        $datausername = $user['username'];
        // var_dump($datausername);
        // die;
        $this->reset_password($datausername);
        // redirect('auth/reset_password');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ditemukan!</div>');
        redirect('auth/forgotpassword');
      }
    }
  }

  public function reset_password($datausername = NULL)
  {
    $this->form_validation->set_rules('password1', 'Password', 'trim|required', [
      'required' => '%s harus diisi!!'
    ]);
    $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password1]', [
      'matches' => 'Password tidak sama'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Form Reset Password',
        'datausername' => $datausername
      ];
      $this->load->view('auth/form-reset-password', $data);
    } else {
      $username = $this->input->post('username');
      $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
      $this->Auth_M->changespassword($password, $username);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil direset, silahkan login dengan password baru!</div>');
      redirect('auth');
    }
  }
}

/* End of file Auth.php */
