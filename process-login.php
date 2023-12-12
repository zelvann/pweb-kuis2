<?php
require 'includes/header.php';
if (isset($_POST['masuk'])) {
  if (check($_POST)) {
    return header('Location: dashboard.php');
  } else {
    return header('Location: index.html');
  }
} else {
  die("Error");
}
?>