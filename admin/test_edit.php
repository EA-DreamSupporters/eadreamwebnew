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
$query = mysqli_query($con, "SELECT * FROM test WHERE id='$id'"); 
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


$title=$_POST["title"];
$sprice=$_POST["sprice"];
$mrp=$_POST["mrp"];
$desc=$_POST["desc"];
$fea=$_POST["fea"];

if($file_name=="")
{
	$sql=mysqli_query($con, "UPDATE test SET title='$title',sprice='$sprice',mrp='$mrp',descri='$desc',fea='$fea' WHERE id='$id'");
          
				echo "<script> alert('Update Successfully')</script>";	
				echo "<script>  window.location.assign('test_view.php')</script>";

}else{
		$sql=mysqli_query($con, "UPDATE test SET title='$title',sprice='$sprice',mrp='$mrp',descri='$desc',fea='$fea',image='$file_name' WHERE id='$id'");
          
				echo "<script> alert('Update Successfully')</script>";	
				echo "<script>  window.location.assign('test_view.php')</script>";
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
                  <h4 class="card-title">Test Edit</h4>
                  <form class="form-sample" method="post" enctype="multipart/form-data">
                    <p class="card-description">
                   
                    </p>
           

				<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" required />
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Upload Image</label>
                          <div class="col-sm-9">
						  <img src="../images/<?php echo $row['image'] ?>" height="90px" width="100px">
                            <input type="file" class="form-control" name="image"  />
							<br>
							Note:* Image Size Must be 511 x 307 Pixels *
                          </div>
                        </div>
                      </div>
                      
                    </div>
					 <div class="row">                   
					<div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Selling Price (₹)</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" value="<?php echo $row['sprice']; ?>" name="sprice" required />
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">MRP</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" value="<?php echo $row['mrp']; ?>" name="mrp" required />
                          </div>
                        </div>
                      </div>
                    </div>
					

					<div class="row">
					<div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                           <textarea rows="10" cols="50" class="form-control" name="desc" > <?php echo $row['descri']; ?></textarea>  
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Features</label>
                          <div class="col-sm-9">
                           <textarea rows="10" cols="50" class="form-control"  name="fea" ><?php echo $row['fea']; ?></textarea>  
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