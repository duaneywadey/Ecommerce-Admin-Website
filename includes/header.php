<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style> 
      .card-prods .read-more:hover{
          font-size: 14px;
      }

      .card-prods:hover{
          box-shadow: 8px 8px 8px blue;
          transform:scale(1.2);
      }

      .card-prods{
        height:280px;
        width:280px;
        transition:.3s;
      }
    </style>

    <title>Ecommerce</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>
  <body>
  	<?php include('navbar.php'); ?>