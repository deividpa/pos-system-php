<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!--  Heeader  -->
  <?php
    include "moduls/header.php";
  ?>
  <!--  END Header -->
  <!-- Left Aside -->
  <?php
    include "moduls/asideleft.php";
  ?>
  <!-- END Left Aside -->
  <!-- Content -->
  <?php
    
    if(isset($_GET['path'])) {
      if($_GET['path']=="main" ||
          $_GET['path']=="users" ||
            $_GET['path']=="categories" ||
              $_GET['path']=="products" ||
                $_GET['path']=="clients" ||
                  $_GET['path']=="sales" ||
                    $_GET['path']=="create-sales" ||
                      $_GET['path']=="manage-sales" ||
                        $_GET['path']=="view-sales") {
        include "moduls/".$_GET['path'].".php";
      }
    } else {
      //include "moduls/404.php";
    }
  ?>
  <!-- END Content -->
  <!-- Footer -->
  <?php
    include "moduls/footer.php";
  ?>
  <!-- END Footer -->
</div>


<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/plugins/jquery/jquery.min.js"></script>
<script src="./"></script>
<!-- Bootstrap 4 -->
<script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes 
<script src="views/dist/js/demo.js"></script>-->
<!-- Template JS -->
<script src="js/template.js"></script>
</body>
</html>
