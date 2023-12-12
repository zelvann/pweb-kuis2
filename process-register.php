<?php
require 'includes/header.php';
if (isset($_POST['daftar'])) {
  if (insert($_POST)) {
    return header('Location: index.html');
  } else {
    return header('Location: register.html');
  }
} else {
  die("Error");
}
?>