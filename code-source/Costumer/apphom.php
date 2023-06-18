<style>
.like-dislike-container {
    --dark-grey: #353535;
    --middle-grey: #767676;
    --lightest-grey: linear-gradient(#fafafa, #ebebeb);
    --shadow: 0 5px 15px 0 #00000026;
    --shadow-active: 0 5px 5px 0 #00000026;
    --border-radius-main: 10px;
    --border-radius-icon: 50px;
    position: relative;
    display: flex;
    text-align: center;
    flex-direction: column;
    align-items: center;
    cursor: default;
    color: white;
    opacity: 0.9;
    padding: 1.5rem;
    font-weight: 600;
    background: linear-gradient(109.71deg,
            #0094db 0%,
            #22119d 15.62%,
            #5c05a1 43.77%,
            #dd12a8 100%);
    box-shadow: var(--shadow);
    -moz-box-shadow: var(--shadow);
    -webkit-box-shadow: var(--shadow);
}

.like-dislike-container .tool-box {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 2.5rem;
    height: 2.5rem;
    top: 0;
    right: 0;
    border-radius: var(--border-radius-main);
    -webkit-border-radius: var(--border-radius-main);
    -moz-border-radius: var(--border-radius-main);
    -ms-border-radius: var(--border-radius-main);
    -o-border-radius: var(--border-radius-main);
}

.like-dislike-container .elment {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 0.8rem;
    height: 0.8rem;
    color: transparent;
    font-size: 0;
    background-color: rgb(74, 218, 255);
    border: none;
    border-radius: var(--border-radius-main);
    -webkit-border-radius: var(--border-radius-main);
    -moz-border-radius: var(--border-radius-main);
    -ms-border-radius: var(--border-radius-main);
    -o-border-radius: var(--border-radius-main);
    cursor: default;
}

.like-dislike-container .text-content {
    margin-bottom: 1rem;
    font-size: 18px;
    line-height: 1.6;
    cursor: default;
}

.like-dislike-container a {
    all: unset;
}

.like-dislike-container a:hover {
    cursor: pointer;
}
</style>
<style>
.card {
    width: 200px;
    height: 150px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease-in-out;
}
.card:hover {
    transform: scale(0.95);
}
</style>

<?php
session_start();
$Id_costumer = $_SESSION['Id_costumer'];
include ("/xampp/htdocs/Project-file-rouge/connect.php");
include ("/xampp/htdocs/Project-file-rouge/code-source/Costumer/Entity/class.php");
?>
    

<!DOCTYPE html>
<html lang="en">
<?php
include_once("/xampp/htdocs/Project-file-rouge/code-source/Costumer/Views/Layout/root.php");
include_once(__ROOT__ . "/Views/Layout/head.php")
?>



<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
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
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            Welcome
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
    <!-- Default box -->
    <div class="row justify-content-center align-items-center" style="gap: 20px; margin: auto;">
        <?php
        $sql = "SELECT name FROM department";
        $result = $conn->query($sql);
        $departmentNames = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $departmentNames[] = $row['name'];
        }

        // Generate HTML code using the array
        $departmentsHtml = '<div class="col col-3 like-dislike-container" style="height: 150px;">' . implode('</div><div class="col col-3 like-dislike-container" style="height: 150px;">', $departmentNames) . '</div>';

        // Output the generated HTML code
        echo $departmentsHtml;
        ?>
    </div>
</section>


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