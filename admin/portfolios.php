<?php include "hub/top.php"; ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

       <?php include "hub/sidebar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "hub/nav.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                  <!-- <h1 class="display-1">All Users</h1> -->

                <?php 

                if (isset($_GET['page'])) {
                $page  = $_GET['page'];
                  
                }else{
                  $page  = '';
                }
                // echo "<h1>" .$page. "</h1>";

                switch ($page ) {
                  case 'addProfile':
                    include "hub/addProfile.php";
                    break;
                  case 'editProfile':
                    include "hub/editProfile.php";
                    break;

                case 'deleteProfile':
                    include "hub/deleteProfile.php";
                    break;
           
                  default:
                    include "hub/allProfiles.php";
                    break;
                }
                
                ?>





                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    

    <?php include "hub/bottom.php"; ?>