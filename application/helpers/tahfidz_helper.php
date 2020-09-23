<?php
function cek_login()
{
  $ci = get_instance();
  if (!$ci->session->userdata('username')) {
    $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Login!, silahkan login terlebih dahulu</div>');
    redirect('auth');
  }
}

// var_dump dari ary
function check($data)
{
  // exit(print("<pre>" . print_r($array_data, true) . "</pre>"));
  var_dump($data);
  die;
}

// Hitung Prosentase pada menu rekap setoran
function prosentase($jml_setoran, $jml_tugas)
{
  return round(($jml_setoran / $jml_tugas) * 100);
}
