<?php
include("header.php");
?>
<style>
select.form-control {
    color: black;
}
textarea.form-control {
    height: 4rem;
}
.img{
	
    display: inherit;

}
</style>


<?php
error_reporting(E_ERROR | E_PARSE);
$id=$_GET["id"];
$query = mysqli_query($con, "SELECT * FROM books WHERE book_id='$id'"); 
$row=mysqli_fetch_array($query);

if(isset($_POST['submit'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }


$category=$_POST["category"];
$subcategory=$_POST["subcategory"];
$book=$_POST["book"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$author=$_POST["author"];
$desc=$_POST["desc"];

if($file_name=="")
{
	$sql=mysqli_query($con, "UPDATE books SET cat_id='$category',subcat_id='$subcategory',book='$book',price='$price',totquantity='$quantity',author='$author',description='$desc' WHERE book_id='$id'");
          
				echo "<script> alert('Update Successfully')</script>";	
				echo "<script>  window.location.assign('book_view.php')</script>";

}else{
		$sql=mysqli_query($con, "UPDATE books SET cat_id='$category',subcat_id='$subcategory',book='$book',price='$price',totquantity='$quantity',author='$author',image='$file_name',description='$desc' WHERE book_id='$id'");
          
				echo "<script> alert('Update Successfully')</script>";	
				echo "<script>  window.location.assign('book_view.php')</script>";
}
   }




?>    


      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Book</h4>
                  <form class="form-sample" method="post" enctype="multipart/form-data">
                    <p class="card-description">
                   
                    </p>
           

                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
						  <select name="category" class="form-control" id="category-dropdown">
						  <option value="">Select Category</option>
							  <?php
							  $result1 = mysqli_query($con,"SELECT * FROM category");
							  while($row1 = mysqli_fetch_array($result1))
							  {
							  ?>
							  <option value="<?php echo $row1['category_id']; ?>" <?php if($row1['category_id']==$row['cat_id']){ echo 'selected';} ?>><?php echo $row1['category']; ?></option>
							  <?php
							  }
							  ?>
							 
							  </select>
                          </div>
                        </div>
                      </div>
					   </div>
					    <div class="row">
					                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">SubCategory</label>
                          <div class="col-sm-9">
						  <select name="subcategory" class="form-control" id="sub-category-dropdown">
								<?php
								$result2 = mysqli_query($con,"SELECT * FROM subcategory");
								while($row2 = mysqli_fetch_array($result2)) {
								?>
								<option value="<?php echo $row2["subcategory_id"];?>" <?php if($row2['subcategory_id']==$row['subcat_id']){ echo 'selected';} ?>><?php echo $row2["subcategory"];?></option>
								<?php
								}
								?>
							 
							  </select>
                          </div>
                        </div>
                      </div>
                    </div>
					
				<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Book Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="book" value="<?php echo $row['book']; ?>" required />
                          </div>
                        </div>
                      </div>
					
                      
                    </div>
					 <div class="row">                   
					<div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Price (₹)</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>" required />
                          </div>
                        </div>
                      </div>
					
                      
                    </div>
					
<div class="row">                   
					
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Quantity</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="quantity" value="<?php echo $row['totquantity']; ?>" required />
                          </div>
                        </div>
                      </div>
                      
                    </div>
					<div class="row">
					<div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Author</label>
                          <div class="col-sm-9">
						  <input type="text" class="form-control" name="author" value="<?php echo $row['author']; ?>" />
                  
                          </div>
                        </div>
                      </div>
					
	 </div>

<div class="row">
				
					<div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                           <textarea rows="10" cols="80" class="form-control" name="desc" ><?php echo $row['description']; ?></textarea>  
                          </div>
                        </div>
                      </div>
	 </div>
				<div class="row">
                      
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Upload Image</label>
                          <div class="col-sm-7">
						  <img height="100px" width="95px" src="../images/<?php echo $row['image']; ?>" /><br><br>
                            <input type="file" class="form-control" name="image"  />
							<br>
                         Note:* Image Size Must be 443 x 621 Pixels *
                          </div>
                        </div>
                      </div>
                      
                    </div>
					<div class="row">
					<div class="col-md-6">
                        <div class="mt-3">
						<button type="submit" class="btn btn-primary btn-icon-text" name ="submit">
                          <i class="ti-save btn-icon-prepend"></i>
                          Update
                        </button>
							</div>
                        </div>
                      </div>
					 
					
                  </form>
				  					
					
					

                </div>
              </div>
            </div>
         
          </div>
        </div>
        <!-- content-wrapper ends -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var category_id = this.value;
var category_id = this.value;
$.ajax({
url: "fetch-subcategory.php",
type: "POST",
data: {
category_id: category_id
},
cache: false,
success: function(result){
$("#sub-category-dropdown").html(result);
}
});
});
});
</script>
<?php
include("footer.php");
?>