<?php
  echo "it works";
  session_destroy();
  // 301 Moved Permanently
  echo '<script>window.location.replace("login")</script>';
  exit();