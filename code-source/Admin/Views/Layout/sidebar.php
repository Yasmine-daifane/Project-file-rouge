<style>
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active {
        color: #fff;
        background-color: rgb(188, 84, 195);
    }


    .sidebar-dark-primary .nav-treeview>.nav-item>.nav-link.active {
        color: #fff;
        background-color: rgb(188, 84, 195);
    }

    .sidebar-dark-primary .nav-pills .nav-item .nav-link:not(.active):hover {
        color: #fff;
        background-color: rgb(33, 116, 202);
    }

    .sidebar-dark-primary .nav-treeview>.nav-item>.nav-link:not(.active):hover {
        color: #fff;
        background-color: rgb(33, 116, 202);
    }

    hr {
        margin: 0;
        border: white solid 1px;
    }
</style>
<?php

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-light text-centre">InnovIT Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          
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
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Department
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <?php
                        foreach ($getDepartment as $Department) {
                           
                        ?>
                            <li class="nav-item">
                                <a href="/Project-file-rouge/code-source/Admin/Controller/Service/index.php?Id_department=<?= $Department['Id_department'] ?>" class="nav-link <?= ($_SERVER['QUERY_STRING'] == "Id_department=" . $Department['Id_department']) ? 'active' : ''; ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p><?= $Department['name'] ?></p>
</a>
                            </li>
                        <?php
                        }
                        ?>
                     
                        <hr>
                        <li class="nav-item">
                            <a href="/Project-file-rouge/code-source/Admin/Controller/Department/index.php" class="nav-link <?= ($_SERVER['PHP_SELF'] == "/Project-file-rouge/code-source/Admin/Controller/Department/index.php") ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>

                                <p>All Department</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/Project-file-rouge/code-source/Admin/Controller/Costomers/" class="nav-link <?= ($_SERVER['PHP_SELF'] == "/Project-file-rouge/code-source/Admin/Controller/Costomers/index.php") ? 'active' : ''; ?>">
                        <i class="nav-icon ion ion-person-add"></i>
                        <p>Costumers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Project-file-rouge/code-source/Admin/Controller/Requests/" class="nav-link <?= ($_SERVER['PHP_SELF'] == "/Project-file-rouge/code-source/Admin/Controller/Requests/index.php") ? 'active' : ''; ?>">
                        <i class="nav-icon ion ion-stats-bars"></i>
                        <p>Requests</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar-menu -->
</aside>
<script>
    let nav = document.querySelector('.nav-treeview');
    console.log(nav);

    var lis = nav.querySelectorAll('li a');
    console.log(lis);

    for (let i = 0; i < lis.length; i++) {
        if (lis[i].classList.contains('active')) {
            nav.classList.add('active')
            nav.style.display = "block";
            break; 
        }
    }

 
</script>