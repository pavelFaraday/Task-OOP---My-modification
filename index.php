<?php include 'inc/header.php'; 

  spl_autoload_register(function($class_name){   
    include "classes/".$class_name.".php";   
  });
      $user = new Product();     
      if (isset($_POST['create'])) { 
        $barcode = 'SKU-'.uniqid($_POST['barcode']); 
        $name = $_POST['name'];      
        $price  = $_POST['price'];
        // For fixing undefined index error
        $size = '';  
        $height = ''; 
        $width = '';
        $length = '';
        $weight = '';
      // For fixing undefined index error
      if(isset($_GET["size" && "height" && "width" && "length" && "weight"])) {
        $size  = $_POST['size'];
        $height  = $_POST['height'];
        $width  = $_POST['width'];
        $length  = $_POST['length'];
        $weight  = $_POST['weight'];
      }
        $image  = $_POST['image']; 

        $user->setBarcode($barcode);    
        $user->setName($name);    
        $user->setPrice($price);    
        $user->setSize($size);    
        $user->setHeight($height);    
        $user->setWidth($width);    
        $user->setLength($length);    
        $user->setWeight($weight);    
        $user->setImage($image); 
      }

    // DELETE DATA
    if(isset($_POST['delete'])) {
      $id = $_POST['id'];
      if ($user->delete($id)) {
        echo "Data Deleted Successfully.."; 
      }
    }
?>

<div class="container">
  <!-- Table Product -->

  <?php if($user->insert()) : ?>
      <div class="alert alert-success" role="alert">
        <strong>Created</strong>
      </div>
  <?php endif ?>
  <?php if (isset($_GET['status']) && $_GET['status'] == "fail_create") : ?>
      <div class="alert alert-danger" role="alert">
        <strong>Fail Create</strong>
      </div>
  <?php endif ?>



<div class="card-body">
  <div class="row">
    <div class="col-md-12">
      <h5 class="card-title float-left">All Products</h5>
      <a href="create.php" class="btn btn-success float-right mb-3"> Add New</a>
      
    </div>
  </div>

<form method="POST">
<div class="row">
   <?php if ($user->readAll() > 0) : ?>
    <?php foreach ($user->readAll() as $value) : ?>
    <div class="col-md-3 ajax-del"> <!--Delete div with AJAX--> 
      <div class="card border-secondary mb-4">
          <a href="#"><img src="<?= $value['image'] ?>" alt="<?= $value['name']?>" class="card-img-top img-fluid"></a>
          <div class="card-body bg-light text-center">
            <input type="checkbox"  class="float-left" id="<?php echo $value['id']?>" name="id[]"></<input>
            <p class="card-text mt-3"><?=$value['barcode'] ?></p>
            <h5 class="card-title text-danger font-weight-bold"><?= $value['name']?></h5>
            <p class="card-text">$<?= number_format($value['price'], 2)?></p>
            <p class="card-text"><?=$value['weight']?></p>
            <p class="card-text"><?=$value['size']?></p>
            <p class="card-text mb-4"><?=$value['height']?> <?=$value['width'] ?><?=$value['length']?></p>
          </div>
        </div>
      </div>
   <?php endforeach ?>
   <?php endif ?>
  </div>
  <input type="submit" class="btn btn-danger float-right mr-3" id="delete" name="delete" onclick="return confirm('Are you sure?')"></input>
</form>

</div>
</div>
<!-- End Product -->
<br>
<?php include 'inc/footer.php'; ?>