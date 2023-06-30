<!-- Header -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/cms/admin/includes/AdminHeader.php'); ?>

    <div id="wrapper">


        <!-- Navigation -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/cms/admin/includes/AdminNavigation.php');?>




        <!-- Page Heading -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Your Admin Dashboard
                            <?php echo $_SESSION['first_name'] . " " .  $_SESSION['last_name']; ?>
                        </h1>

                        <!-- Widgets -->
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/cms/admin/includes/AdminUserWidgets.php');?>

                        <hr>

                        <!-- Graphs -->
                        <?php include($_SERVER['DOCUMENT_ROOT'].'/cms/admin/includes/AdminUserGraphs.php');?>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->


<!-- Footer -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/cms/admin/includes/AdminFooter.php');?>
