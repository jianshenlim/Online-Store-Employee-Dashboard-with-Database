<?php
session_start();
include ("connection.php");
/** @var PDO $dbh */
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MOW | Documentation</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-ring"></i>
              </div>
              <div class="sidebar-brand-text mx-3">Master of Wedding</div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="index.php">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">
          <div class="sidebar-heading">
              Client/Project Management
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clientPages" aria-expanded="true" aria-controls="clientPages">
                  <i class="fas fa-fw fa-user-circle"></i>
                  <span>Clients</span>
              </a>
              <div id="clientPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="client.php">Client List</a>
                      <a class="collapse-item" href="addClient.php">Add Client</a>
                      <a class="collapse-item" href="subscribedClients.php">Mail Clients</a>
                  </div>
              </div>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#projectPages" aria-expanded="true" aria-controls="projectPages">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Projects</span>
              </a>
              <div id="projectPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="project.php">View Projects</a>
                      <a class="collapse-item" href="addProject.php">Add Project</a>
                  </div>
              </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">


          <div class="sidebar-heading">
              Inventory Management
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-shopping-bag"></i>
                  <span>Products</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="product.php">Search Product</a>
                      <a class="collapse-item" href="addProduct.php">Add Product</a>
                      <a class="collapse-item" href="editMultiProd.php">Edit Multiple</a>
                  </div>
              </div>
          </li>

          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                  <i class="fas fa-fw fa-list-ol"></i>
                  <span>Categories</span>
              </a>
              <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="category.php">View Categories</a>
                      <a class="collapse-item" href="addCategory.php">Add Category</a>
                  </div>
              </div>
          </li>

          <li class="nav-item">

          <li class="nav-item">
              <a class="nav-link" href="image.php">
                  <i class="fas fa-fw fa-camera"></i>
                  <span>Product Images</span></a>
          </li>

          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">


          <div class="sidebar-heading">
              Utilities
          </div>

          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Personnel</span>
              </a>
              <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="viewUser.php">View Users</a>
                      <a class="collapse-item" href="addUser.php">Add Users</a>
                  </div>
              </div>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="documentation.php">
                  <i class="fas fa-fw fa-file"></i>
                  <span>Documentation</span></a>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider">
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>


      </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
              </button>



              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">


                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <?php if (isset($_SESSION['user_id'])):
                      $user_id = $_SESSION['user_id'];
                      $query = "select user_name from user where user_id = '$user_id'";
                      $stmt = $dbh-> prepare($query);
                      $stmt -> execute();
                      $row = $stmt -> fetchObject()
                      ?>
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome, <?php echo $row -> user_name?></span>
                              <img class="img-profile rounded-circle" src="https://www.flaticon.com/svg/static/icons/svg/17/17004.svg">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Logout
                              </a>
                          </div>
                      </li>
                  <?php else:?>
                      Not Logged In

                  <?php endif;?>
              </ul>

          </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php
            if (isset($_SESSION['user_id'])):?>
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Documentation</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Assignment Details</h6>
                    </div>
                    <div class="card-body">
                        Authors: <br>
                        Jian Lim (29994055) <br>
                        Jessica Nguyen (29684471)<br>
                        Date of Submission: 23/10/2020<br>
                        <br>
                        Credentials: <br>
                        Login Username: jack <br>
                        Login Password: jack <br>
                        <br>
                        MySql Database credentials<br>
                        <?php
                        $file = fopen("connection.php","r");
                        while(! feof($file))
                        {
                            $str = fgets($file);
                            if (preg_match_all('`"([^"]*)"`', $str, $m)) {
                                if (!empty($m)){
                                    echo $m[0][0];
                                    echo "<br>";
                                    if (isset($m[0][1])) {
                                        echo "Database Password: ".$m[0][1];
                                        echo "<br>";
                                    }
                                }
                            } else;
                        }
                        fclose($file);
                        ?>
                        <br>
                        <a href="schemaData.sql">Link to SQL Schema</a>
                        <br>
                        <br>
                            <?php
                            $dtbquery = "select table_name from information_schema.tables where TABLE_TYPE = 'BASE TABLE'";
                            $dtbstmt = $dbh -> prepare($dtbquery);
                            $dtbstmt -> execute();
                            while ($row = $dtbstmt -> fetchObject()) {
                                $tableName = $row->table_name;
                                $dataquery = "select * from $tableName";
                                $datastmt = $dbh->prepare($dataquery);
                                $datastmt->execute();
                                $tabledata = $datastmt ->fetchAll();

                                $entries = count($tabledata);

                                echo "<div class=\"card shadow mb-4\">";
                                echo "<div class=\"card-header py-3\">";
                                echo "<h4 style='text-align: center' class=\"m-0 font-weight-bold text-primary\">$tableName ($entries records)</h4>";

                                echo "</div>";
                                echo "<div class=\"card-body\">";
                                echo "<div class=\"table-responsive\">";
                                echo "<table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">";

                                $colquery = "select column_name from information_schema.columns where table_name = '$tableName'";
                                $colstmt = $dbh->prepare($colquery);
                                $colstmt->execute();
                                echo "<tr>";
                                $columns = [];
                                while ($colrow = $colstmt->fetchObject()) {
                                    echo "<td>$colrow->column_name</td>";
                                    array_push($columns,$colrow->column_name);
                                }
                                echo "</tr>";

                                foreach ($tabledata as $data){
                                    echo "<tr>";
                                    foreach ($columns as $col){
                                        echo "<td>$data[$col]</td>";

                                    }
                                    echo "</tr>";


                                }
                                echo "</table>";
                                echo "<br>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                        ?>
                        <br>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Work Allocation</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <th>Jian Lim</th>
                                        <th>Jessica Nguyen</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>All Product Pages </td>
                                                <td>All Client Pages</td>
                                            </tr>
                                            <tr>
                                                <td>Multi product Edit </td>
                                                <td>All Project Pages</td>
                                            </tr>
                                            <tr>
                                                <td>All category pages </td>
                                                <td>Generate Client PDF</td>
                                            </tr>
                                            <tr>
                                                <td>All User pages </td>
                                                <td>All Email Client Pages</td>
                                            </tr>
                                            <tr>
                                                <td>Login Page and User password checking</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Product Images</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Display Code page and links</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Documentation Page and submission text</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Session Checking for all pages</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Setup bootstrap and did html/css for assignment</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Created tables/schema for database</td>
                                                <td></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


        <?php else:?>
            <div style="height: 400px;width: 700px; margin: auto;vertical-align: middle" class="row" >
                <div class="col-lg-6 m-lg-auto card shadow mb-4">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Log In to Access System</h1>
                        </div>
                        <div class="text-center">
                            <a href="login.php" class="btn btn-sm btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-sign-in-alt"></i>
                                        </span>
                                <span class="text">Log In</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>FIT2014 Assignment 2</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
