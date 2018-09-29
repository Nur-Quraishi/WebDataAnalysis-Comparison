<?php
include 'header.php';
include '../User/db_config.php';
?>


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Admin Data Table</h3>
        </div>
        <!-- /.card-header -->


        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">

                <tr>
                    <th colspan="2">Id </th>
                    <th colspan="2">Full Name</th>
                    <th colspan="2">Email</th>
                    <th colspan="2">Password</th>
                </tr>
                <?php
                $sql = "SELECT * FROM admin";
                $res = mysql_query($sql);
                while ($admin = mysql_fetch_array($res)) {
                    ?>
                    <tr>
                        <td colspan="2"><?php echo $admin['id']; ?></td>
                        <td colspan="2"><?php echo $admin['fname']; ?></td>
                        <td colspan="2"><?php echo $admin['email']; ?></td>
                        <td colspan="2"><?php echo $admin['password']; ?></td>
                    </tr>
                <?php } ?>





            </table>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->




    <!-- /.card-body -->
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>

<?php
include 'footer.php';
?>