<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
        <span class="brand-text font-weight-light">Clients manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
                <img src="../Views/Assets/vendor/AdminLTE-3.2.0/dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
            </div> -->
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <?php
                    $indexpath = "../index.php";
                    if (file_exists($indexpath)) {
                        $link = $indexpath;
                    } else {
                        $link = "index.php";
                    }

                    ?>
                    <a href="<?= $link ?>" class="nav-link <?= ($_SERVER['PHP_SELF'] == "/Project-file-rouge/code-source/Admin/Controller/index.php") ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Project-file-rouge/code-source/Admin/Controller/Department/index.php" class="nav-link <?= ($_SERVER['PHP_SELF'] == "/Project-file-rouge/code-source/Admin/Controller/Department/index.php") ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Department</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Projet-fil-rouge/code-source/Controllers/Admin/Users/" class="nav-link <?= ($_SERVER['PHP_SELF'] == "/Projet-fil-rouge/code-source/Controllers/Admin/Users/index.php") ? 'active' : ''; ?>">
                        <i class="nav-icon ion ion-person-add"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Projet-fil-rouge/code-source/Controllers/Admin/Inscription/" class="nav-link <?= ($_SERVER['PHP_SELF'] == "/Projet-fil-rouge/code-source/Controllers/Admin/Inscription/index.php") ? 'active' : ''; ?>">
                        <i class="nav-icon ion ion-stats-bars"></i>
                        <p>Members</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Projet-fil-rouge/code-source/Controllers/Admin/States/" class="nav-link <?= ($_SERVER['PHP_SELF'] == "/Projet-fil-rouge/code-source/Controllers/Admin/States/index.php") ? 'active' : ''; ?>">
                        <i class="nav-icon ion ion-pie-graph"></i>
                        <p>States</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- /.sidebar-menu -->
</aside>