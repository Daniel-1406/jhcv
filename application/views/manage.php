<!DOCTYPE html>
<style type='text/css'>

    td{word-wrap:anywhere}
</style>
<html lang="en">
    <?php $this->load->view("load/header_main") ?>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <?php $this->load->view("load/header") ?>
            <!-- /.navbar -->
            <!-- Content Wrapper. Contains page content -->

            <!-- Main Sidebar Container -->
            <?php $this->load->view("load/sidelinks") ?>

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Management Area</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">General Form</li>
                                </ol>
                            </div> 
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content"> 
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Details of Contents present</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="width:100%;">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <?php echo $rtnhead ?>
                                    </thead>
                                    <tbody>
                                        <?php echo $rtnbody ?>
                                    </tbody>
                                    <tfoot>
                                        <?php echo $rtnhead ?>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php $this->load->view("load/footer") ?>


        </div>
        <!-- ./wrapper -->

    </body>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</html>