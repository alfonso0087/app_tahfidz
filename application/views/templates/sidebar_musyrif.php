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
          <a href="#" style="color: white; font-size: 18px;"><?= $user['NamaMusyrif']; ?></a> <br>
          <a href="#" style="color: white; font-size: 18px;"><?= $user['Email']; ?></a>
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
          <!-- Dashboard Musyrif -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('Halaman_Musyrif/index'); ?>" class="nav-link <?= $url2 == "index" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-home" style="color: white;"></i>
              <p style="color: white;">
                Dashboard Musyrif
              </p>
            </a>
          </li>
          <!-- Setoran -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('Halaman_Musyrif/setoran_oleh_Musyrif'); ?>" class="nav-link <?= $url2 == "setoran_oleh_Musyrif" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-address-card" style="color: white;"></i>
              <p style="color: white;">
                Setoran
              </p>
            </a>
          </li>
          <!-- Rekap Setoran -->
          <li class="nav-item mt-2">
            <a href="<?= base_url('Halaman_Musyrif/rekap_setoran_oleh_Musyrif'); ?>" class="nav-link <?= $url2 == "rekap_setoran_oleh_Musyrif" ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-fw fa-book" style="color: white;"></i>
              <p style="color: white;">
                Rekap Setoran
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>