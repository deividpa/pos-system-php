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
  <link rel="stylesheet" href="views/dist/css/adminlte.css">
</head>
<body class="hold-transition sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<?php
  // When the user is loggin on 
  if(isset($_SESSION['startSession']) && ($_SESSION['startSession'] === "ok")) {
    include("moduls/wraper.php");
  } else {
    include("moduls/login.php");
  }
?>
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
