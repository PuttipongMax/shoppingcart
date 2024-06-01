<?php
 session_start();
 include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>List Product</title>

 <link href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo $base_url; ?>/assets/fontawesome/css/fontawesome.min.css" rel="stylesheet">
 <link href="<?php echo $base_url; ?>/assets/fontawesome/css/brands.min.css" rel="stylesheet">
 <link href="<?php echo $base_url; ?>/assets/fontawesome/css/solid.min.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">
 <?php include 'include/menu.php'; ?>
 <div class="container" style="margin-top: 30px;">
  <h4>Home - Manage Product</h4>
  <div>
   <form action="<?php echo $base_url; ?>/product-form.php" 
    method="post" enctype-"multipart/form-data" 
   >
    <div class="row g-3 mb-3">

     <div class="col-sm-6">
      <label class="form-label">Product Name</label>
      <input type="text" name="product_name" class="form-control" value="" />
     </div>

     <div class="col-sm-6">
      <label class="form-label">Price</label>
      <input type="text" name="price" class="form-control" value="" />
     </div>

     <div class="col-sm-6">
      <label for="formFile" class="form-label">Image</label>
      <input type="file" name="product_name" class="form-control" 
       value="" accept="image/png, image/jpg, image/jpeg" />
     </div>

     <div class="col-sm-12">
      <label class="form-label">Detail</label>
      <textarea name="detail" class="form-control" rows="3"></textarea>
     </div>
    </div>
    
    <button class="btn btn-primary" type="submit">
     <i class="fa-regular fa-floppy-disk me-1"></i>
     Create
    </button>
    <hr class="my-4">
   </form>
  </div>
 </div>

 <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>