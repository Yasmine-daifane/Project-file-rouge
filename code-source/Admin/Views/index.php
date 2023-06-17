<!DOCTYPE html>
<html lang="en">
<?php
include_once("/xampp2/htdocs/Project-file-rouge/code-source/Admin/Views/Layout/root.php");
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
        include_once(__ROOT__ . '/Views/Layout/preloader.php');
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
                <!-- Default box -->
                <div class="row justify-content-center align-items-center" style="gap: 20px;margin: auto;">
                    <div class="col-lg-2 col-6 like-dislike-container">
                        <a href="./Department/">
                            <div class="tool-box">
                                <hr class="elment">
                            </div>
                            <p><?= $DepartmentNumber ?></p>
                            <p class="text-content">Department</p>
                        </a>
                    </div>
                    <div class="col-lg-2  col-6 like-dislike-container">
                        <a href="#">
                            <div class="tool-box">
                                <hr class="elment">
                            </div>
                            <p><?= $ServicesNumber ?></p>
                            <p class="text-content">Services</p>
                        </a>
                    </div>
                    <div class="col-lg-2  col-6 like-dislike-container">
                        <a href="#">
                            <div class="tool-box">
                                <hr class="elment">
                            </div>
                            <p><?= $RatesRequests ?></p>
                            <p class="text-content">Requests</p>
                        </a>
                    </div>
                    <div class="col-lg-2  col-6 like-dislike-container">
                        <a href="#">
                            <div class="tool-box">
                                <hr class="elment">
                            </div>
                            <p><?= $CostumerNumber ?></p>
                            <p class="text-content">Costumers</p>
                        </a>
                    </div>

                </div>
        </div>
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