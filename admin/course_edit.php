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
$query = mysqli_query($con, "SELECT * FROM course WHERE id='$id'"); 
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


$title=$_POST["ctitle"];
$ins=$_POST["ins"];
$cdura=$_POST["cdura"];
$sprice=$_POST["csprice"];
$mrp=$_POST["cmrp"];
$desc=$_POST["cdesc"];
$fea=$_POST["cfea"];
$cate=$_POST["cate"];

if($file_name=="")
{
	$sql=mysqli_query($con, "UPDATE course SET ctitle='$title',ccate='$cate',csprice='$sprice',mrp='$mrp',cdesc='$desc',cfea='$fea',cdura='$cdura',ins='$ins' WHERE id='$id'");
          
				echo "<script> alert('Update Successfully')</script>";	
				echo "<script>  window.location.assign('course_view.php')</script>";

}else{
		$sql=mysqli_query($con, "UPDATE course SET ctitle='$title',csprice='$sprice',ccate='$cate',mrp='$mrp',cdesc='$desc',cfea='$fea',cdura='$cdura',ins='$ins',image='$file_name' WHERE id='$id'");
          
				echo "<script> alert('Update Successfully')</script>";	
				echo "<script>  window.location.assign('course_view.php')</script>";
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
                  <h4 class="card-title">Edit Course</h4>
                  <form class="form-sample" method="post" enctype="multipart/form-data">
                    <p class="card-description">
                   
                    </p>
           

				<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Course Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $row['ctitle']; ?>" name="ctitle" required />
                          </div>
                        </div>
                      </div>
					    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Publisher Category</label>
                          <div class="col-sm-9">
                            <select type="text" class="form-control" name="cate" required />
							<option value="" selected>Select Category</option>
						  <option value="institute"<?php  if($row['ccate']=='institute'){ echo "selected"; }?>>Institute</option>
							<option value="educators"<?php  if($row['ccate']=='educators'){ echo "selected"; }?>>Educators</option>
							</select>
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Institute Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $row['ins']; ?>" name="ins" required />
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Course Duration</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $row['cdura']; ?>" name="cdura" required />
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Upload Image</label>
                          <div class="col-sm-9">
						  <img height="140px" width="200px" src="../images/<?php echo $row['image']; ?>" /><br><br>
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
                            <input type="number" class="form-control" value="<?php echo $row['csprice']; ?>" name="csprice" required />
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">MRP</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" value="<?php echo $row['mrp']; ?>" name="cmrp" required />
                          </div>
                        </div>
                      </div>
                    </div>
					

					<div class="row">
					<div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                           <textarea rows="10" cols="50" class="form-control" name="cdesc" ><?php echo $row['cdesc']; ?></textarea>  
                          </div>
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Features</label>
                          <div class="col-sm-9">
                           <textarea rows="10" cols="50" class="form-control" name="cfea" ><?php echo $row['cfea']; ?></textarea>  
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