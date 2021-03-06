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

    <title>MOW | Edit Product</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="css/image-picker.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="js/image-picker.js"></script>


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
                <h1 class="h3 mb-4 text-gray-800">Edit Product</h1>
                    <?php
                    $product_id = $_GET['id'];
                    $cat_Name = $_GET['cat'];

                    $idQuery = "Select category_id from `category_product` where `product_id` = '$product_id'";
                    $idstmt = $dbh -> prepare($idQuery);
                    $idstmt -> execute();
                    $cat_id = $idstmt->fetchAll();

                    $catQuery = "select * from `category`";
                    $catStmt = $dbh -> prepare($catQuery);
                    $catStmt -> execute();


                    $query = "SELECT * from `product` where `product_id` = '$product_id'";
                    $stmt = $dbh -> prepare($query);
                    $stmt -> execute();
                    $row = $stmt -> fetchObject();

                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST['catId']))
                        echo "<script>alert('At lease one category must be selected')</script>";

                    if (empty($_POST['product_name']) || empty($_POST['purchase_price']) || empty($_POST['sale_price']) || empty($_POST['catId'])):  ?>

                        <form method = "post" enctype="multipart/form-data" onsubmit="return confirm('Do you really want to edit current product?')">
                            Product Id <br/>
                            <input type="text" name = "product_id" value = "<?= $row -> product_id; ?>" disabled/><br/>
                            Product Name <br/>
                            <input type="text" name = "product_name" value = "<?= $row -> product_name; ?>"/><br/>
                            Purchase Price <br/>
                            <input type="number" name = "purchase_price" value = "<?= $row -> purchase_price; ?>"/><br/>
                            Sale Price <br/>
                            <input type="number" name = "sale_price" value = "<?= $row -> sale_price; ?>"/><br/>
                            <br/>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Linked Categories</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <th>Category Id</th>
                                            <th>Category Name</th>
                                            <th>Select</th>
                                        </thead>
                                        <tbody>
                                            <?php  while($row = $catStmt -> fetchObject()): ?>
                                                <tr>
                                                    <td><?php echo $row -> category_id; ?></td>
                                                    <td><?php echo $row -> category_name; ?></td>
                                                    <td style="text-align: center"><input type="checkbox" name="catId[]" value="<?php echo $row->category_id; ?>" <?php foreach ($cat_id as $single){if (in_array($row->category_id,$single)){echo "checked";}else{echo "";}}?>/></td>
                                                </tr>
                                            <?php endwhile;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        Add Image: <input type="file" name ="file[]" multiple/><br>
                        <br>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Linked Images </h6>
                            </div>
                                <div class="card-body">

                        <?php
                            $imgSearchQuery = "select * from `product_image` where product_id = '$product_id'";
                            $imgStmt = $dbh -> prepare($imgSearchQuery);
                                if ($imgStmt -> execute() && $imgStmt ->rowCount() > 0):
                                    $files = glob("product_images/*.*");
                                    $start = "product_images/";
                                    ?>
                                    <a>Select Images for Deletion</a></br>
                                    <br>

                                        <div style="float: left" class="container">
                                            <select class="image-picker" name="imageName[]" multiple>
                                            <?php while ($row = $imgStmt->fetchObject()):
                                                $imageName = $row -> product_image_filename;?>
                                                   <option data-img-src="<?=$start.$imageName?>" data-img-alt="<?=$imageName?>" value ="<?=$imageName?>"></option>
                                            <?php endwhile;?>
                                            </select>
                                        </div>
                                    <script>
                                        $(".image-picker").imagepicker({
                                            hide_select : true,
                                            show_label: false,
                                            limit: undefined
                                        })
                                    </script>
                                                </div>
                                        </div>
                                <button type="button" style="float: right" class="btn btn-danger btn-icon-split" onclick="location.href='product.php?cat=<?php echo $cat_Name;?>'">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-ban"></i>
                                        </span>
                                    <span class="text">Cancel</span>
                                </button>

                                <button type="submit" style="float: right; margin-right: 1em;" class="btn btn-success btn-icon-split">
                                                                        <span class="icon  text-white-50">
                                                                                <i class="fas fa-save"></i>
                                                                            </span>
                                    <span class="text">Save Changes</span>
                                </button>
                        </form>
                        <br>
                        <br>
                        </div>
                    </div>
                        <?php else:?>
                                <a>No Images</a></br>
                                </div>
                            </div>
                                    <button type="button" style="float: right" class="btn btn-danger btn-icon-split" onclick="location.href='product.php?cat=<?php echo $cat_Name;?>'">
                                                                    <span class="icon  text-white-50">
                                                                        <i class="fas fa-ban"></i>
                                                                    </span>
                                        <span class="text">Cancel</span>
                                    </button>

                                    <button type="submit" style="float: right; margin-right: 1em;" class="btn btn-success btn-icon-split">
                                                                    <span class="icon  text-white-50">
                                                                            <i class="fas fa-save"></i>
                                                                        </span>
                                        <span class="text">Save Changes</span>
                                    </button>
                            </form>
                            <br>
                            <br>
                                </div>
                            </div>
                        <?php endif;?>

                    <?php else:

                        $newProdName = $_POST['product_name'];
                        $newPurchasePrice = $_POST['purchase_price'];
                        $newSalePrice = $_POST['sale_price'];

                        $editProdQuery = "update `product` set `product_name`=:newProdName, `purchase_price`=:newPurchasePrice, `sale_price`=:newSalePrice where `product_id`=:product_id;";
                        $pdoResult = $dbh-> prepare($editProdQuery);
                        $pdoResult-> execute(array(":newProdName"=>$newProdName,":newPurchasePrice"=>$newPurchasePrice,":newSalePrice"=>$newSalePrice,":product_id"=>$product_id));

                        $selectCatQuery = "Select category_id from `category_product` where product_id = '$product_id'";
                        $selStmt = $dbh -> prepare($selectCatQuery);
                        $selStmt -> execute();
                        $categoryData = $selStmt ->fetchAll();

                        $currentCategories=[];
                        foreach ($categoryData as $row){
                            array_push($currentCategories,$row['category_id']);
                        }
                        $newCategories = $_POST['catId'];

                        $catAdd = array_diff_assoc($newCategories,$currentCategories);
                        $catDel = array_diff_assoc($currentCategories,$newCategories);

                        foreach ($catDel as $catId2){
                            echo $catId2;
                            echo "<br>";
                            $deleteCatQuery = "DELETE from `category_product` where product_id = '$product_id' and category_id = '$catId2' ";
                            $delStmt = $dbh -> prepare($deleteCatQuery);
                            $delStmt -> execute();
                        }
                        foreach ($catAdd as $catId){
                            $nextId = $dbh->query("SHOW TABLE STATUS LIKE 'category_product'")->fetch(PDO::FETCH_ASSOC)['Auto_increment'];
                            $addCatQuery = "Insert into `category_product`(category_prod_id,category_id,product_id) VALUES ('$nextId','$catId','$product_id')";
                            $addStmt = $dbh -> prepare($addCatQuery);
                            $addStmt -> execute();
                        }

                        foreach($_FILES['file']['name'] as $key => $value) { // REMOVE EMPTY STRING ARRAYS
                            if (empty($value)) unset($_FILES['file']['name'][$key]);
                        }
                        $countFile = count($_FILES['file']['name']);
                        $totalsize =0 ;
                        $allowedExtensions = Array('image/jpeg','image/png','image/gif');

                        for ($i=0;$i<$countFile;$i++) {
                            if ($_FILES['file']['size'][$i] > 2000000){
                                echo "<script>alert('Unable to add Product Image: image file size exceeds 2MB!')</script>";
                                echo "<script type=\"text/javascript\">location.href = 'editProduct.php?id=$product_id&cat=$cat_Name';</script>";
                                die();
                            }

                            else{
                                $totalsize += $_FILES['file']['size'][$i];
                            }
                            if (!in_array($_FILES['file']['type'][$i],$allowedExtensions)){
                                echo "<script>alert('Unable to add Product Image: Invalid file uploaded')</script>";
                                echo "<script type=\"text/javascript\">location.href = 'editProduct.php?id=$product_id&cat=$cat_Name';</script>";
                                die();
                            }

                        }
                        if ($totalsize > 8000000){
                            echo "<script>alert('Unable to add Product Image: Total Image File size exceeds 8MB!')</script>";
                            echo "<script type=\"text/javascript\">location.href = 'editProduct.php?id=$product_id&cat=$cat_Name';</script>";
                            die();
                        }

                        $countFile = count($_FILES['file']['name']);
                        if ($countFile > 0){
                            for ($i=0;$i<$countFile;$i++) {
                                if ($_FILES['file']['error'][$i] == 0){
                                    $fileDest = "product_images/" . $_FILES['file']['name'][$i];
                                    if (!file_exists($fileDest) && move_uploaded_file($_FILES['file']['tmp_name'][$i], $fileDest)) {
                                        $fileName = $_FILES['file']['name'][$i];
                                        $prodImgId = $dbh->query("SHOW TABLE STATUS LIKE 'product_image'")->fetch(PDO::FETCH_ASSOC)['Auto_increment'];
                                        $addImageQuery = "INSERT INTO product_image(product_image_id,product_id,product_image_filename) VALUES ('$prodImgId','$product_id','$fileName')";
                                        $addStmt = $dbh->prepare($addImageQuery);
                                        if (!$addStmt->execute()) {
                                            $err = $addStmt->errorInfo();
                                            echo "<script>alert('Error adding product_image record to database - contact System Administrator Error is: $err[2]')</script>";
                                            echo "<script type=\"text/javascript\">location.href = 'editProduct.php?id=$product_id&cat=$cat_Name';</script>";

                                        };
                                    } else {
                                        echo "<script>alert('Error adding product image record to database - Cannot be stored in destination 1 or more duplicate Image Name(s)')</script>";
                                        echo "<script type=\"text/javascript\">location.href = 'editProduct.php?id=$product_id&cat=$cat_Name';</script>";

                                    }
                                }else{
                                    $phpFileUploadErrors = array(
                                        0 => 'No errors, file has been successfully uploaded',
                                        1 => 'File exceeds the upload_max_filesize directive in php.ini',
                                        2 => 'File exceeds the MAX_FILE_SIZE directive specified in the HTML',
                                        3 => 'File only partially uploaded',
                                        4 => 'No file uploaded',
                                        6 => 'Temp folder missing',
                                        7 => 'Failed to write to disk',
                                        8 => 'PHP extention stopped file upload',
                                    );
                                    $err = (isset($_FILES['file']['error'])) ? $phpFileUploadErrors[$_FILES['file']['error']] : "Unknown Error";
                                    echo "<script>alert('Error adding image record to database -- contact System Administrator Error is: $err')</script>";
                                    echo "<script type=\"text/javascript\">location.href = 'editProduct.php?id=$product_id&cat=$cat_Name';</script>";

                                }
                            }
                        }

                        if (!empty($_POST['imageName'])) {
                            foreach ($_POST['imageName'] as $image) {
                                $deleteQuery = "DELETE FROM `product_image` where `product_image_filename` = '$image'";
                                $dstmt = $dbh->prepare($deleteQuery);
                                if (!$dstmt->execute()) {
                                    $err = $dstmt->errorInfo();
                                    echo "<script>alert('Error deleting Image from product image database -- contact System Administrator Error is: $err[2]')</script>";
                                    echo "<script type=\"text/javascript\">location.href = 'editProduct.php?id=$product_id&cat=$cat_Name';</script>";
                                }
                            }
                        }

                        ?>
                         <script type="text/javascript">location.href ='product.php?cat=<?php echo $cat_Name;?>'</script>

                    <?php endif;?>

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
        </div>
    </div>

        <?php endif;?>


            <!-- /.container-fluid -->

        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container text-center my-auto">
                <button type="button" style="text-align: center" class="btn btn-lg btn-info " onclick="window.open('displayCode.php?section=product')">
                    <span class="text">Products</span>
                </button>
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
                <a class="btn btn-primary" href="login.html">Logout</a>
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

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
