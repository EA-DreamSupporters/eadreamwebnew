<?php  
include("header.php");  
?>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
<script>
function show_confirm() {
    return confirm("Are you sure you want to remove this?");
}
</script> 
<style>
.table td img {
    width: initial;
    height: initial;
	border-radius:5px;
} 
h4.card-title {
    margin-bottom: 0!important;
}
#banner{
	width:400px;
	height:200px;
}
</style>  

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Landing Page Manager</h4>
			  
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
									
									
									<th>S.No</th>
                                    <th>Position</th>
                                    
									<th>Landing Page Image</th>		
									<th>Delete</th> 				
									

                               </tr>  
                          </thead>  
                          <?php 
						  $x=1;
						  $query ="SELECT * FROM landing";  
						  $result = mysqli_query($con, $query); 						  
                          while($row = mysqli_fetch_array($result))  
                          {  
						  ?>							   
                               <tr>  
									
									<td><?php echo $x; ?></td>
									<td><?php if($row["Position"]=='bb'){ echo "Big Banner";}elseif($row['Position']=='1b'){ echo"1st Banner";} elseif($row['Position']=='2b'){ echo "2nd Banner";}elseif($row['Position']=='3b'){ echo "3rd Banner";} else { echo "More Banner";}?></td>
									
									<td><?php if ($row['Type'] === 'image') { ?>
                                                <img src="uploads/<?php echo $row['Banner']; ?>" id="banner">
                                            <?php } elseif ($row['Type'] === 'video') { ?>
                                                <video controls>
                                                    <source src="uploads/<?php echo $row['Banner']; ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            <?php } ?></td>
									<td><a href="delete_landing.php?id=<?php echo $row['LP_ID']; ?>" class="" onclick='return show_confirm();'><img src='images/delete.png' id='delete'></a></td>
									
								
                               </tr> 
						  <?php							        
                          $x++;
                          }   
                          ?>  
                     </table>  
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> 
<?php
include("footer.php");
?>
