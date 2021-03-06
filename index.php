<?php
include('controller.php');
$lib = new Library();
$data_stock = $lib->show();

if(isset($_GET['hapus_stock'])){
    $id = $_GET['hapus_stock'];
    $status = $lib->delete($id);
    if($status)
    {
        header('Loacation: table.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <style type="text/css">
    .navbar {
      margin-bottom: 30px;
    }

    .wrapp-1 {
      display: block;
      margin: 0 40px;
      width: auto;
    }

    .contain {
      margin-bottom: 40px;
      padding: 0;
    }

    .contain .btn {
      background-color: #f8f9fa;
      color: #313131;
      border: 1px solid #dee2e6;
    }

    .content {
      border-left: 1px solid #dee2e6;
      min-width: 331px !important;
      height: 500px;
    }

    .content .header {
      display: flex;
      border-bottom: 1px solid #dee2e6;
      padding-left: 10px;
      padding-top: 10px;
      margin-bottom: 20px;
    }

    .content .header .item-1 {
      margin: 0 2px;
      padding: 5px;
      text-align: center;
      border: 1px solid #dee2e6;
      border-bottom: 0;
      border-radius: 3px 3px 0 0;
    }
  </style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" data-toggle="collapse">
      <div class="sidebar-heading">Start Pinebee </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">History</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">
          <i class="fa fa-bars"></i>
        </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div class="wrapp-1">
        <div class="contain">
          <button class="btn btn-new" id="menu-toggle">
            + New
          </button>
        </div>
        <div class="content">
          <div class="header">
            <a href="#" class="col-md-1 item-1 list-group-item-action bg-light" id="forum">Forum</a>
            <a href="#" class="col-md-1 item-1 list-group-item-action bg-light" id="table">Table</a>
          </div>
          <div class="view">


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
  <script src="jquery/jquery.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    $(document).ready(function () {
      $('.col-md-1').click(function () {
        var view = $(this).attr('id');
        if (view == "forum") {
          $('.view').load('forum.php');
        } else if (view == "table") {
          $('.view').load('table.php');
        }
      });
      $('.btn-new').click(function(){
        var add = $(this).attr('id');
        if (add == "menu-toggle") {
          $('.contain').load('add_stock.php');
        }
      });
      $('.view').load('table.php');
    });
  </script>

</body>

</html>