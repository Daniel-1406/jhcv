<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view("load/header_main") ?>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <?php $this->load->view("load/header") ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php $this->load->view("load/sidelinks") ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Students Information</h1>
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
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6"> 
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title-danger">Students Information Update</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <?php
                                    print form_open("student/updatestudents");
                                    echo '<div class="bg-danger" style="text-align:center;"><b>' . validation_errors() . '</b></div>';
                                    if (isset($pass_err))
                                        echo '<div class="bg-danger" style="text-align:center;"><b>' . $pass_err . '</b></div>';
                                    ?>
                                    <div class="card-body">
                                        <div class="form-group">  
                                            <label for="exampleInputEmail1">Surname</label>
                                            <?php print form_input("surname", set_value("surname", $surname), 'class="form-control" id="exampleInputEmail1" placeholder="Enter surname"') ?>
                                            <!--<input type="text" >-->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <?php print form_input("firstname", set_value("firstname", $firstname), 'class="form-control" id="exampleInputEmail1" placeholder="Enter firstname"') ?>
                                            <!--<input type="text" >-->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <?php print form_input("username", set_value("username", $username), 'class="form-control" id="exampleInputEmail1" placeholder="Enter username"') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label>
                                            <?php print form_password("pass", set_value("pass", ''), 'class="form-control" id="exampleInputEmail1" placeholder="Enter password"') ?>
                                            <!--<input type="text" >-->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Confirm Password</label>
                                            <?php print form_password("confirm_pass", set_value("confirm_pass"), 'class="form-control" id="exampleInputEmail1" placeholder="Confirm password"') ?>
                                            <!--<input type="text" >-->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Gender</label>
                                            <?php print form_dropdown("gender", array("select" => "-select gender-", "Male" => "Male", "Female" => "Female"), set_value('gender', $gender), 'class="custom-select rounded-0" id="exampleSelectRounded0"') ?>
<!--                                            <select name="gender" class="custom-select rounded-0" id="exampleSelectRounded0">
                                                <option>Male</option>
                                                <option>Female</option> 
                                            </select>-->
                                        </div>
                                        <?php print form_hidden("studentid", set_value("studentid", $studentid), 'class="form-control" id="exampleInputEmail1"') ?>
                                    </div>

                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <?php print form_submit("Submit", "Update", 'class="btn btn-primary"') ?>

                                    </div>
                                    <?php print form_close(); ?>
                                </div>
                            </div>
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
</html>