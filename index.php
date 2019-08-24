<?php include 'inc/header.php'; ?>

<?php 
  spl_autoload_register(function($class_name){   
    include "classes/".$class_name.".php";   
  });
?>

<section>
<?php 
      $user = new Product();     
      if (isset($_POST['create'])) { 
        $barcode = 'SKU-'.uniqid($_POST['barcode']); 
        $name = $_POST['name'];      
        $price  = $_POST['price'];    
        $size  = $_POST['size'];    
        $height  = $_POST['height'];    
        $width  = $_POST['width'];    
        $length  = $_POST['length'];    
        $weight  = $_POST['weight'];    
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

        if($user->insert()){
          echo "Data Inserted Successfully.."; 
        }
      }
?>

<!-- DELETE DATA -->
<?php 
    if(isset($_GET['action']) && $_GET['action']=='delete') {
      $id = (int)$_GET['id'];
      if ($user->delete($id)) {
        echo "Data Deleted Successfully.."; 
      }
    }
?>

  <table class="tblone">
    <tr>
        <th>barcode</th>  
        <th>Name</th>     
        <th>price</th>    
        <th>size</th>     
        <th>height</th>   
        <th>width</th>    
        <th>length</th>   
        <th>weight</th>   
        <th>image</th>    
    </tr>
    <?php
        $i = 0; 
        foreach ($user->readAll() as $key => $value){
        $i++;
    ?>
    <tr>
        <td><?php echo $value['barcode'];?></td>  
        <td><?php echo $value['name'];?></td>  
        <td><?php echo $value['price'];?></td>  
        <td><?php echo $value['size'];?></td>  
        <td><?php echo $value['height'];?></td>  
        <td><?php echo $value['width'];?></td>  
        <td><?php echo $value['length'];?></td>  
        <td><?php echo $value['weight'];?></td>  
        <td><?php echo $value['image'];?></td>  
        <td>
         <?php echo "<a href='index.php?action=delete&id=".$value['id']."'>Delete</a>";?>
        </td>
    </tr>
      <?php } ?>
  </table>

<?php include 'inc/footer.php'; ?>