<?php
 session_start();
 include 'config.php';
?>
<DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <title>Result Order</title>

 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
 <link href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo $base_url; ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
 <link href="<?php echo $base_url; ?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
 <link href="<?php echo $base_url; ?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">
 <?php include 'include/menu.php' ?>
 <div class="container" style="margin-top: 30px;">
  <?php if(!empty($_SESSION['message'])): ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <?php echo $_SESSION['message']; ?>
   <button type="button" class="btn-close" aria-label="Close"
    data-bs-dismiss="alert"
   >
    
   </button>
  </div>
  <?php unset($_SESSION['message']); ?>
  <?php endif; ?>
 </div>

 <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>
</body>
</html>
