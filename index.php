<?php




?>
<!DOCTYPE html>
<html lang="en">
<?php
include './Views/Layout/head.php';
?>
<style>
    <?php
    include './Views/Assets/css/index.css';
    ?>
</style>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <?php
        include './Views/Layout/preloader.php';
        ?>
        <!-- Navbar -->
        <?php
        include  './Views/Layout/navbar.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include  './Views/Layout/sidebar.php';
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
            <section class="content d-flex flex-column justify-content-center align-items-center ">
                <!-- Default box -->
                <div class="row w-100" style="gap: 20px;">
                    <div class="col-4 like-dislike-container">
                        <a href="#">
                            <div class="tool-box">
                                <hr class="elment">
                            </div>
                            <p class="text-content">Department</p>
                        </a>
                    </div>
                    <div class="col-4 like-dislike-container">
                        <div class="tool-box">
                            <hr class="elment">
                        </div>
                        <p class="text-content">Services</p>
                    </div>
                    <div class="col-4 like-dislike-container">
                        <div class="tool-box">
                            <hr class="elment">
                        </div>
                        <p class="text-content">Requests</p>
                    </div>
                    <div class="col-4 like-dislike-container">
                        <div class="tool-box">
                            <hr class="elment">
                        </div>
                        <p class="text-content">Costumers</p>
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
    include './Views/Layout/Links.php';
    ?>
</body>

</html>