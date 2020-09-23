  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #172a3a;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color: #172a3a;">
      <img src="<?= base_url('assets/'); ?>img/logo pp.jpeg" alt="AdminLTE Logo" class="brand-image img-circle ">
      <span class="brand-text font-weight-bold" style="color: white;">Tahfidz App</span>
    </a>

    <!-- Sidebar -->
    <!-- atur warna backgound sidebar -->
    <!-- <div class="sidebar bg-navy"> -->
    <div class="sidebar" style="color: white;">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent nav-flat flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- Dashboard -->
          <?php
          $url = $this->uri->segment(1);
          $subUrl = $this->uri->segment(2);
          ?>
          <?php if ($user['level'] == 'Bagian Administrasi') : ?>
            <li class="nav-item mt-2">
              <a href="<?= base_url('administrasi'); ?>" class="nav-link <?= $url == "administrasi" ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-fw fa-home" style="color: white;"></i>
                <p style="color: white;">
                  Dashboard Administrasi
                </p>
              </a>
            </li>
          <?php else : ?>
            <li class="nav-item mt-2">
              <a href="<?= base_url('admin'); ?>" class="nav-link <?= $url == "admin" ? 'active' : ''; ?>">
                <i class="nav-icon fas fa-fw fa-home" style="color: white;"></i>
                <p style="color: white;">
                  Dashboard
                </p>
              </a>
            </li>
          <?php endif; ?>
          <!-- Santri -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('santri'); ?>" class="nav-link <?= $url == "santri" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-users" style="color: white;"></i>
              <p style="color: white;">
                Santri
              </p>
            </a>
          </li>
          <!-- Musyrif -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('musyrif'); ?>" class="nav-link <?= $url == "musyrif" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-chalkboard-teacher" style="color: white;"></i>
              <p style="color: white;">
                Musyrif
              </p>
            </a>
          </li>
          <!-- Kelas -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('kelas'); ?>" class="nav-link <?= $url == "kelas" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-school" style="color: white;"></i>
              <p style="color: white;">
                Kelas
              </p>
            </a>
          </li>
          <!-- Target Tahfidz -->
          <li class="nav-item mt-2 has-treeview <?= $url == "tahfidz" ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?= $url == "tahfidz" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-address-book" style="color: white;"></i>
              <p style="color: white;">
                Target Tahfidz
                <i class="right fas fa-angle-left" style="color: white;"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Semester -->
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('tahfidz/semester'); ?>" class="nav-link <?= $subUrl == "semester" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar nav-icon" style="color: white;"></i>
                  <p style="color: white;">Semester</p>
                </a>
              </li>
              <!-- Periode -->
              <li class="nav-item">
                <a href="<?= base_url('tahfidz/periode'); ?>" class="nav-link <?= $subUrl == "periode" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar-plus nav-icon" style="color: white;"></i>
                  <p style="color: white;">Periode</p>
                </a>
              </li>
              <!-- Ajaran -->
              <li class="nav-item">
                <a href="<?= base_url('tahfidz/ajaran'); ?>" class="nav-link <?= $subUrl == "ajaran" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar-check nav-icon" style="color: white;"></i>
                  <p style="color: white;">Ajaran</p>
                </a>
              </li>
              <!-- Target -->
              <li class="nav-item">
                <a href="<?= base_url('tahfidz/target'); ?>" class="nav-link <?= $subUrl == "target" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-check-circle nav-icon" style="color: white;"></i>
                  <p style="color: white;">Target</p>
                </a>
              </li>
              <!-- Detail Target -->
              <li class="nav-item">
                <a href="<?= base_url('tahfidz/detail_target'); ?>" class="nav-link <?= $subUrl == "detail_target" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-info-circle nav-icon" style="color: white;"></i>
                  <p style="color: white;">Detail Target</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Halaqoh -->
          <li class="nav-item mt-2 has-treeview <?= $url == "halaqoh" ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link <?= $url == "halaqoh" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-file-archive" style="color: white;"></i>
              <p style="color: white;">
                Halaqoh
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Kelompok -->
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('halaqoh/kelompok'); ?>" class="nav-link <?= $subUrl == "kelompok" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-user-circle nav-icon"></i>
                  <p style="color: white;">Kelompok</p>
                </a>
              </li>
              <!-- Waktu Halaqoh -->
              <li class="nav-item">
                <a href="<?= base_url('halaqoh/jadwal'); ?>" class="nav-link <?= $subUrl == "jadwal" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar-minus nav-icon"></i>
                  <p style="color: white;">Waktu Halaqoh</p>
                </a>
              </li>
              <!-- Detail Kelompok -->
              <li class="nav-item">
                <a href="<?= base_url('halaqoh/detail_kelompok'); ?>" class="nav-link <?= $subUrl == "detail_kelompok" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-user nav-icon"></i>
                  <p style="color: white;">Detail Kelompok</p>
                </a>
              </li>
              <!-- Setoran -->
              <li class="nav-item">
                <a href="<?= base_url('halaqoh/setoran'); ?>" class="nav-link <?= $subUrl == "setoran" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-address-card nav-icon"></i>
                  <p style="color: white;">Setoran</p>
                </a>
              </li>
              <!-- Rekap Setoran -->
              <li class="nav-item">
                <a href="<?= base_url('halaqoh/rekap_setoran'); ?>" class="nav-link <?= $subUrl == "rekap_setoran" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-book nav-icon"></i>
                  <p style="color: white;">Rekap Setoran</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Ketentuan Nilai -->
          <li class="nav-item mt-2 has-treeview <?= $url == "nilai" ? 'menu-open' : ''; ?>"">
            <a href=" #" class="nav-link <?= $url == "nilai" ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-tasks" style="color: white;"></i>
            <p style="color: white;">
              Ketentuan Nilai
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <!--  Predikat Nilai -->
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('nilai/predikat_nilai'); ?>" class="nav-link <?= $subUrl == "predikat_nilai" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar-times nav-icon"></i>
                  <p style="color: white;"> Predikat Nilai</p>
                </a>
              </li>
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('nilai/predikat_hasil1'); ?>" class="nav-link <?= $subUrl == "predikat_hasil1" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar-times nav-icon"></i>
                  <p style="color: white;"> Predikat Hasil I</p>
                </a>
              </li>
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('nilai/predikat_hasil2'); ?>" class="nav-link <?= $subUrl == "predikat_hasil2" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar-times nav-icon"></i>
                  <p style="color: white;"> Predikat Hasil II</p>
                </a>
              </li>
              <li class="nav-item n av-child-indent">
                <a href="<?= base_url('nilai/predikat_hasil3'); ?>" class="nav-link <?= $subUrl == "predikat_hasil3" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar-times nav-icon"></i>
                  <p style="color: white;"> Predikat Hasil III</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Ujian Bulanan -->
          <li class="nav-item mt-2 has-treeview <?= $url == "ujian" ? 'menu-open' : ''; ?>"">
            <a href=" #" class="nav-link <?= $url == "ujian" ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-tasks" style="color: white;"></i>
            <p style="color: white;">
              Ujian Bulanan
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Periode Ujian -->
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('ujian/periode_ujian'); ?>" class="nav-link <?= $subUrl == "periode_ujian" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-calendar-times nav-icon"></i>
                  <p style="color: white;">Periode Ujian</p>
                </a>
              </li>
              <!-- Jenis Ujian -->
              <li class="nav-item">
                <a href="<?= base_url('ujian/jenis_ujian'); ?>" class="nav-link <?= $subUrl == "jenis_ujian" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-list nav-icon"></i>
                  <p style="color: white;">Jenis Ujian</p>
                </a>
              </li>
              <!-- Target Ujian -->
              <li class="nav-item">
                <a href="<?= base_url('ujian/target_ujian'); ?>" class="nav-link <?= $subUrl == "target_ujian" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-list-alt nav-icon"></i>
                  <p style="color: white;">Target Ujian</p>
                </a>
              </li>
              <!-- Rekap Ujian -->
              <li class="nav-item">
                <a href="<?= base_url('ujian/rekap_ujian'); ?>" class="nav-link <?= $subUrl == "rekap_ujian" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-table nav-icon"></i>
                  <p style="color: white;">Rekap Ujian</p>
                </a>
              </li>
              <!-- Hasil Ujian -->
              <li class="nav-item">
                <a href="<?= base_url('ujian/hasil'); ?>" class="nav-link <?= $subUrl == "hasil" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-columns nav-icon"></i>
                  <p style="color: white;">Hasil Ujian</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Pelanggaran -->
          <li class="nav-item mt-2 has-treeview <?= $url == "pelanggaran" ? 'menu-open' : ''; ?>"">
            <a href=" #" class="nav-link <?= $url == "pelanggaran" ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-clipboard" style="color: white;"></i>
            <p style="color: white;">
              Pelanggaran
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Jenis Pelanggaran -->
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('pelanggaran/jenis_pelanggaran'); ?>" class="nav-link <?= $subUrl == "jenis_pelanggaran" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-paragraph nav-icon"></i>
                  <p style="color: white;">Jenis Pelanggaran</p>
                </a>
              </li>
              <!-- Catatan Pelanggaran -->
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('pelanggaran/catatan_pelanggaran'); ?>" class="nav-link <?= $subUrl == "catatan_pelanggaran" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-file-alt nav-icon"></i>
                  <p style="color: white;">Catatan Pelanggaran</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Catatan Santri -->
          <li class="nav-item mt-2 has-treeview <?= $url == "catatan" ? 'menu-open' : ''; ?>"">
            <a href=" #" class="nav-link <?= $url == "catatan" ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-file" style="color: white;"></i>
            <p style="color: white;">
              Catatan Santri
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Jenis Pelanggaran -->
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('catatan/jenis_catatan'); ?>" class="nav-link <?= $subUrl == "jenis_catatan" ? 'active bg-primary' : ''; ?>">
                  <i class="far fa-fw fa-file-alt nav-icon"></i>
                  <p style="color: white;">Jenis Catatan</p>
                </a>
              </li>
              <!-- Catatan Pelanggaran -->
              <li class="nav-item nav-child-indent">
                <a href="<?= base_url('catatan/catatan_santri'); ?>" class="nav-link <?= $subUrl == "catatan_santri" ? 'active bg-primary' : ''; ?>">
                  <i class="fas fa-fw fa-file nav-icon"></i>
                  <p style="color: white;">Catatan Santri</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Raport -->
          <li class="nav-item mt-2">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-fw fa-th" style="color: white;"></i>
              <p style="color: white;">
                Raport

              </p>
            </a>
          </li>
          <?php if ($user['level'] == 'Admin') : ?>
            <!-- Pengaturan -->
            <li class="nav-item mt-2">
              <a href="<?= base_url('pengaturan'); ?>" class="nav-link  <?= $url == "pengaturan" ? 'active' : ''; ?>"">
              <i class=" nav-icon fas fa-fw fa-cog" style="color: white;"></i>
                <p style="color: white;">
                  Pengaturan
                </p>
              </a>
            </li>
          <?php endif; ?>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>