<?php include("inc/header.php") ?>


<div class="container">

       <!-- Create Form --> 
       <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <strong> Add New Product</strong>
            </div>

            <div class="card-body">  
               <form action="index.php" method="post">

               <div class="form-row">
                  <div class="form-group col-md-4">
                     <input type="hidden" name="barcode"/>
                     <input type="text" class="form-control" name="name" id="name" placeholder='Product Name..' required>
                  </div>
                  <div class="form-group col-md-4">
                     <input type="number" class="form-control" name="price" id="price" placeholder="Price" required>
                  </div>
               </div>
 
<!-- ------------------------------------------------------------------ -->

      <div class="input-group  mb-4">
         <select onchange="fetch_select(this.value);" class="custom-select" name="inputGroupSelect01" id="inputGroupSelect01" required>
            <option selected>Choose Product</option>   <!---error-->
            <option value="Please, provide DVD Memory Size in MB format. Example: 120MB">DVD-disc</option>
            <option value="Please, provide Book weight in KG format. Example: 5 KG">Book</option>
            <option value="Please, provide furniture dimensions in HxWxL format. Example: 120x100x70 CM">Furniture</option>
         </select>

         <div class="bg-danger text-white rounded border col-md-7 ml-3">
            <div id="print-ajax" class="text-center font-weight-bolder"> Please, choose product! </div>
         </div>
      </div>

<!-- ------------------------------------------------------------------ -->

      <div class="form-row">
         <div class="form-group col-md-4">
            <input type="text" class="form-control" name="size" id="size" placeholder="size (MB)">
         </div>
         <div class="form-group col-md-4">
            <input type="text" class="form-control" name="weight"  id="weight" placeholder="Weight (kg)">          
         </div>
        <div class="form-column col-md-4">
         <div class="form-group col-md-12">
            <input type="text" class="form-control" name="height"  id="height" placeholder="height (cm)">
         </div>
         <div class="form-group col-md-12">
            <input type="text" class="form-control" name="width" id="width" placeholder="width (cm)">
         </div>
         <div class="form-group col-md-12">
            <input type="text" class="form-control" name="length" id="length" placeholder="length (cm)">
         </div>
        </div>
      </div>

      <div class="form-row">
         <div class="form-group col-md-4">
            <input type="text" class="form-control" name="image" placeholder="Image URL">
         </div>
         <div class="bg-secondary col-md-3">
            <div class="text-center text-light"> Recommended Image size (PX): 500x300 </div>
         </div>
      </div>
      <button type="submit" name="create" class="btn btn-success">Save</button>
      </form>

   </div>
  </div>
  <!-- End create form -->
  <br>
</div> <!-- END container -->

<?php include("inc/footer.php") ?>




