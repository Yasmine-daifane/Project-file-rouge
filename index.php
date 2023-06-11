<?php


// 
// Afficher la liste des projets 
//

// if request isn't ajax:

?>
<!DOCTYPE html>
<html lang="en">
<?php
include './Views/Layout/head.php';
?>
<?php
include './Views/Assets/css/index.css';
?>

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
        include  './Views/Layout/sidebar.php' ;
        ?>
        <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
      <main>



      
      </main>
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