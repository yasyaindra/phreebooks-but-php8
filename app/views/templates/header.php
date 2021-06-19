<?php 
ini_set('log_errors','1'); 
ini_set('display_errors', '1');
error_reporting(E_ALL & ~E_NOTICE);
// require_once('pages/main/pre_process.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="shortcut icon" type="image/ico" href="../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/themes/default/css/start/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/themes/default/css/start/jquery_datatables.css" />
    <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/themes/default/css/start/jquery-ui.css" />
    <script type="text/javascript">
    var pbBrowser       = (document.all) ? 'IE' : 'FF';
      var combo_image_on  = '';
      var combo_image_off = '';
    </script>
    <script type="text/javascript" src="../includes/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="../includes/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="../includes/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../includes/common.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    function langSelect() {
      var index = document.getElementById('lang').selectedIndex;
      var lang  = document.getElementById('lang').options[index].value;
      location.href = 'index.php?lang='+lang;
    }

    // -->
    </script>
        <title><?= $data['judul'];?></title>
      </head>
  <body>