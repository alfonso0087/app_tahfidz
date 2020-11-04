  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #172a3a;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background-color: #172a3a;">
      <img src="<?= base_url('assets/'); ?>img/logo pp.jpeg" alt="AdminLTE Logo" class="brand-image img-circle ">
      <span class="brand-text font-weight-bold" style="color: white;">Tahfidz App</span>
    </a>

    <!-- Sidebar -->
    <!-- atur warna backgound sidebar -->
    <!-- <div class="sidebar bg-navy"> -->
    <div class="sidebar" style="color: white;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-2 mb-2 text-center">
        <div class="info text-center">
          <a href="#" style="color: white; font-size: 18px;"><?= $user['NamaLengkap']; ?></a> <br>
          <a href="#" style="color: white; font-size: 18px;"><?= $user['NamaKelas']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent nav-flat flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <!-- Dashboard -->
          <?php
          $url = $this->uri->segment(1);
          $url2 = $this->uri->segment(2);
          ?>
          <!-- Pengesahan -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('Wali/index'); ?>" class="nav-link <?= $url2 == "index" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-home" style="color: white;"></i>
              <p style="color: white;">
                Dashboard Wali
              </p>
            </a>
          </li>
          <!-- Raport -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('Wali/Setoran'); ?>" class="nav-link <?= $url == "Wali" && $url2 == "Setoran" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-address-card" style="color: white;"></i>
              <p style="color: white;">
                Setoran Santri
              </p>
            </a>
          </li>

          <!-- Raport -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('Wali/Raport'); ?>" class="nav-link <?= $url2 == "Raport" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-file-archive" style="color: white;"></i>
              <p style="color: white;">
                Hasil Ujian (Rapor Santri)
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>