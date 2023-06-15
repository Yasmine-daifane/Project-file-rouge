<!DOCTYPE html>
<html lang="en">
<?php
include_once("/xampp/htdocs/Project-file-rouge/code-source/Admin/Views/Layout/root.php");
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
        // include_once(__ROOT__ . '/Views/Layout/sidebar.php');
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
            <div id="result" class="p-3">
                <?php include_once(__ROOT__ . "/Views/Requests/index.data.php") ?>
            </div>
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