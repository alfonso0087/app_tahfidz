       <!-- Control Sidebar -->
       <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
         <div class="p-3">
           <h5>Title</h5>
           <p>Sidebar content</p>
         </div>
       </aside>
       <!-- /.control-sidebar -->



       <!-- Main Footer -->
       <footer class="main-footer">
         <!-- To the right -->
         <div class="float-right d-none d-sm-inline">
           PP Taruna Al Qur'an Putera
         </div>
         <!-- Default to the left -->
         <strong>Copyright &copy; 2020 - <?= date('Y'); ?> <a href="https://github.com/alfonso0087/app_tahfidz">Pengabdian Masyarakat</a>.</strong>
       </footer>
       </div>
       <!-- ./wrapper -->

       <!-- REQUIRED SCRIPTS -->

       <!-- Bootstrap 4 -->
       <script src="<?= base_url('vendors/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
       <!-- overlayScrollbars -->
       <script src="<?= base_url('vendors/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
       <!-- SweetAlert2 -->
       <script src="<?= base_url('vendors/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
       <!-- Script pesan Sweetalert -->
       <script src="<?= base_url('assets'); ?>/js/myscript.js"></script>
       <!-- DataTables -->
       <script src="<?= base_url('vendors/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
       <script src="<?= base_url('vendors/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
       <script src="<?= base_url('vendors/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
       <script src="<?= base_url('vendors/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
       <!-- Select2 -->
       <script src="<?= base_url('vendors/'); ?>plugins/select2/js/select2.full.min.js"></script>
       <!-- Bootstrap4 Duallistbox -->
       <script src="<?= base_url('vendors/'); ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
       <!-- InputMask -->
       <script src="<?= base_url('vendors/'); ?>plugins/moment/moment.min.js"></script>
       <script src="<?= base_url('vendors/'); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
       <!-- date-range-picker -->
       <script src="<?= base_url('vendors/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
       <!-- bootstrap color picker -->
       <script src="<?= base_url('vendors/'); ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
       <!-- Tempusdominus Bootstrap 4 -->
       <script src="<?= base_url('vendors/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
       <!-- ChartJS -->
       <script src="<?= base_url('vendors/'); ?>plugins/chart.js/Chart.min.js"></script>
       <!-- AdminLTE App -->
       <script src="<?= base_url('vendors/'); ?>dist/js/adminlte.min.js"></script>
       <!-- AdminLTE for demo purposes -->
       <script src="<?= base_url('vendors/'); ?>dist/js/demo.js"></script>
       <script>
         $(function() {
           $('#example2').DataTable({
             "autoWidth": false,
             "responsive": true,
             "searching": false,
             "ordering": false,
           });

           //Date range picker
           $('#tglMulai').datetimepicker({
             format: 'YYYY-MM-DD'
           });
           $('#tglSelesai').datetimepicker({
             format: 'YYYY-MM-DD'
           });
           $('#edttglMulai').datetimepicker({
             format: 'YYYY-MM-DD'
           });
           $('#edttglSelesai').datetimepicker({
             format: 'YYYY-MM-DD'
           });

         });

         function previewImg() {
           const importfile = document.querySelector('#import');
           const importLabel = document.querySelector('.custom-file-label');

           importLabel.textContent = importfile.files[0].name;

         }
       </script>
       </body>

       </html>