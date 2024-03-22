<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="./assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"><img style="width: 80px;height: 80px;margin-bottom: 40px;" src="./assets/admin/img/King Clothes-logos_white.png" alt=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">King Clothes</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Trang chủ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Utilities Collapse Menu -->



            <!-- Nav Item - Pages Collapse Menu -->


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <span>Đăng nhập</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Người dùng</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Chức vụ</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Danh mục</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Sản phẩm</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Khuyến mãi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Bài viết</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Bình luận</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Đánh giá</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Nội dung website</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <span>Liên hệ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </nav>







                <!-- MAIN CHÍNH (CẦN SỬA) -->
                <div class="container-fluid">
                    <h1>Đánh giá</h1>
                    <style>
                        table {
                            text-align: center;
                        }

                        table,
                        th,
                        td {
                            border: 1px solid black;
                        }
                        th,td{
                            width: 300px;
                        }
                        table {
                            border-collapse: collapse;
                        }
                    </style>
                    <table align="center">
                        <tr>
                            <th>ID đánh giá</th>
                            <th>Ngày đăng</th>
                            <th>Người đánh giá</th>
                            <th>Tên sản phẩm</th>
                            <th>Số sao đánh giá</th>
                            <th>Nội dung đánh giá</th>
                        </tr>
                        <?php
                        // var_dump($danhgia);
                        foreach ($danhgia as $item) : ?>
                            <tr>
                                <td><?php echo $item['id_danh_gia']; ?></td>
                                <td><?php echo $item['ngay_dang']; ?></td>
                                <td><?= $item['ten_nguoi_dung']  ?></td>
                                <td><?= $item['ten_san_pham'] ?></td>
                                <td><?php echo $item['sao_danh_gia']; ?></td>
                                <td><?php echo $item['noidung_danhgia']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; King Clothes 2024</span>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./assets/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./assets/admin/js/demo/chart-area-demo.js"></script>
    <script src="./assets/admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>