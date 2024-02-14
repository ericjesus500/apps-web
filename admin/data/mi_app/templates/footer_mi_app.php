<!-- Bootstrap 4 -->
<script src="/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<!-- <script src="/assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.min.js"></script> -->
<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Jquery -->
<!-- <script src="../src/jquery371.min.js"></script> -->
<script src="/assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/assets/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- SweetAlert 2 -->
<!-- <script src="/assets/AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.min.js"></script> -->
<script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<!-- PARA tecnologia.js -->
<script>
$(document).ready(function() {
  $('#add_tecnos').DataTable();
});

$(function() {
  $("add_tecnos").DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});
</script>
</body>

</html>