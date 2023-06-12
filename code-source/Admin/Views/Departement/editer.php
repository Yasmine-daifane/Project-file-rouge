<!DOCTYPE html>
<html lang="en">
<?php

include_once(__ROOT__ . "/Views/Layout/head.php")
?>
<style>
    <?php
    include_once(__ROOT__ . '/Views/Assets/css/index.css');
    ?>
</style>



<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <?php
        // include_once(__ROOT__ . '/Views/Layout/preloader.php');
        ?>
        <!-- Navbar -->
        <?php
        include_once(__ROOT__ . '/Views/Layout/navbar.php');
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include_once(__ROOT__ . '/Views/Layout/sidebar.php');
        ?>
        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            Welcome admin
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <form method="post">
                    <div class="row">
                        <div class="col">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Department
                                        <?= $department->GetName() ?>
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" required="required" class="form-control" id="Id_department" name="Id_department" value=<?php echo $department->GetID() ?>>
                                    <div class="form-group">
                                        <label for="inputName"> Name</label>
                                        <input name="nom" value=<?= $department->GetName() ?> type="text" id="inputName" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription"> Description</label>
                                        <textarea name="description" id="inputDescription" class="form-control" rows="4"><?php echo   $department->GetDescription() ?></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a href="index.php" class="btn btn-secondary">Cancel</a>
                            <input type="submit" name="Edit" value="Update Departement" class="btn btn-success float-right">
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <!-- /.content-wrapper -->




        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- ./wrapper -->
    <!-- links script -->
    <?php
    include_once(__ROOT__ . '/Views/Layout/Links.php');
    ?>
</body>

</html>