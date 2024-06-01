<?php
 session_start();
 include 'config.php';

 // product all
 $query = mysqli_query($conn, "SELECT * FROM products");
 $rows = mysqli_num_rows($query);

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
  <?php if(!empty($_SESSION['message'])): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <?php echo $_SESSION['message']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']) ?>
  <?php endif; ?>
  <h4>Home - Manage Product</h4>
  <div>
   <form action="<?php echo $base_url; ?>/product-form.php" 
    method="post" enctype="multipart/form-data" 
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
      <input type="file" name="profile_image" class="form-control" 
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

  <div class="row">
    <div class="col-12">
      <table class="table table-bordered border-info" >
        <thead>
          <tr>
            <th style="width: 100px;">Image</th>
            <th>Product Name</th>
            <th style="width: 200px;">Price</th>
            <th style="width: 200px;">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if($rows > 0): ?>
            <?php while($product = mysqli_fetch_assoc($query)): ?>
              <tr>
                <td>
                  <?php if(!empty($product['profile_image'])): ?>
                    <img 
                      src="<?php echo $base_url; ?>/upload_image/<?php echo $product['profile_image']; ?>"
                      width="100" height="100" alt="Product Image" 
                    />
                  <?php else: ?>
                    <i class="fa-solid fa-image" alt="Product Image"
                      style="font-size: 100px;"></i>
                  <?php endif; ?>
                  </td>
                  <td>
                    <?php echo $product['product_name']; ?>
                    <div>
                      <small class="text-muted">
                        <?php echo nl2br($product['detail']); ?>
                      </small>
                    </div>
                  </td>
                  <td>
                    <?php echo number_format($product['price'], 2); ?>
                  </td>
                  <td>
                    <a role="button" href="<?php echo $base_url ?>/index.php?id=<?php echo $product['id']; ?>" class="btn btn-outline-dark">
                      <i class="fa-solid fa-pen-to-square me-1"></i>Edit
                    </a>
                    <a onclick="return confirm('Are your sure you want to delete');"
                      role="button" href="<?php echo $base_url ?>/product-delete.php?id=<?php echo $product['id']; ?>" class="btn btn-outline-danger">
                      <i class="fa-solid fa-trash-can me-1"></i>Delete
                    </a>
                  </td>
              </tr>  
               <?php endwhile; ?>   
            <?php else: ?>
            <tr>
              <td colspan="4" >
                <h4 class="text-center text-danger">ไม่มีรายการสินค้า</h4>
              </td>
            </tr> 
          <?php endif; ?>
        </tbody>    
      </table>
    </div>
  </div>

 <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>