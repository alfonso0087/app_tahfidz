<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <div class="content mt-2">
    <div class="container-fluid">
      <div class="row">

        <!-- /.col-md-6 -->
        <div class="col-sm">
          <div class="card">
            <div class="card-header" style="background-color: #74b3ce;">
              <h4 class="m-0" style="color: white;"><?= $title; ?></h4>
            </div>
            <div class="card-body">
              <h6 class="card-title">Special title treatment</h6>

              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ratione ea tempora possimus reprehenderit nam beatae expedita adipisci et rem in, esse distinctio nobis vel rerum quae mollitia voluptatibus optio!.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm">
          <div class="card">
            <div class="card-header" style="background-color: #74b3ce;">
              <h4 class="m-0" style="color: white;"><?= $title; ?></h4>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
          </div>

        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->