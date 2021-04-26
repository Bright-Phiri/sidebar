<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Student record crud</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading text-white">ADMIN PANEL </div>
            <ul>
                <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Add Student</a></li>
                <li><a href="#"><i class="fa fa-list"></i> View Students</a></li>
                <li><a href="#"><i class="fa fa-file-pdf-o"></i> Reports</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Signout</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="page-content-header">
                <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars"></i></button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="container-fluid">
            </div>
            <div class="page-content-footer">
                <center>Copyright &copy; <?php echo date('Y') ?> Bright. All rights reserved.</center>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>