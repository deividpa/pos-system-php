<div class="wrapper">
  <!--  Heeader  -->
  <?php
    include "header.php";
  ?>
  <!--  END Header -->
  <!-- Left Aside -->
  <?php
    include "asideleft.php";
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
        include $_GET['path'].".php";
      } else {
        include "404.php";
      }
    } else {
      include "home.php";
    }
    
  ?>
  <!-- END Content -->
  <!-- Footer -->
  <?php
    include "footer.php";
  ?>
  <!-- END Footer -->
</div>