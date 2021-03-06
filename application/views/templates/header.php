<?php 
  function esc_url($url) {
      $escape = htmlspecialchars($url);
      return $escape;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= html_escape($title) ?></title> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" sizes="57x57" href="<?= esc_url(base_url('assets/')) ?>img/favicon-incorps.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= esc_url(base_url('assets/')) ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= esc_url(base_url('assets/')) ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= esc_url(base_url('assets/')) ?>css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

  <link rel="stylesheet" type="text/css" href="<?= esc_url(base_url('assets/')) ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= esc_url(base_url('assets/')) ?>css/responsive-style.css">
  <style>
    .text-kecil{
      font-size: 14px;
    }
  </style>
</head>
<body>
