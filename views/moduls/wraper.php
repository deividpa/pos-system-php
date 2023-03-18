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
                        $_GET['path']=="view-sales" || 
                          $_GET['path']=="home") 
      {
        include "moduls/".$_GET['path'].".php";
      } else {
        include "moduls/404.php";
      }
    } else {
      include "moduls/home.php";
    }
    
  ?>
  <!-- END Content -->
  <!-- Footer -->
  <?php
    include "moduls/footer.php";
  ?>
  <!-- END Footer -->
</div>