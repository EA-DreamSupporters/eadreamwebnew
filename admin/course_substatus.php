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
.table td img {
    width: 40px;
    height: 50px;
    border-radius: 0;
}
.action {
    margin-top: 20px;
}
</style>


<?php
error_reporting(E_ERROR | E_PARSE);
$oid=$_GET["id"];
if(isset($_POST['takeaction']))
{

    $status=$_POST['ostatus'];
    $remark=$_POST['remark'];

   $query="update course_subscription set status='$status',remark='$remark' where id='$oid'";
    $result = mysqli_multi_query($con, $query);
    if ($result) {
    
    echo '<script>alert("Action has been updated successfully")</script>';
    echo "<script>window.location.href ='course_status.php'</script>";
  }
  else
    {
     echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}




?>    

<?php
$query ="SELECT a.*,b.*,c.* FROM course AS a, students AS b, course_subscription AS c WHERE a.id=c.cid AND b.sid=c.uid AND c.id='$oid'";  
						  
//$query ="SELECT a.*,b.* FROM orders AS a, students AS b WHERE a.userId=b.sid AND a.id='$oid'";  
$result = mysqli_query($con, $query); 						  
$row = mysqli_fetch_array($result);				  
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Subscription Details</h4>
               
           

 <div class="row">
                                    <div class="col-md-6">
                                <table class="table table-bordered" border='1' width="100%">
                            
                                        <tr>
                                            <th colspan="2" style="text-align:center;">Subscription Details</th>
                                        </tr>
                                        <tr>
                                            <th>Course Name</th>
                                            <td><?php echo htmlentities($row['ctitle']);?></td>
                                            </tr>
											<tr>
                                            <th>Course Category</th>
                                            <td><?php echo htmlentities($row['ccate']);?></td>
                                            </tr>
											<tr>
                                            <th>Institute Name</th>
                                            <td><?php echo htmlentities($row['ins']);?></td>
                                            </tr>
											<tr>
                                            <th>Course Duration</th>
                                            <td><?php echo htmlentities($row['cdura']);?></td>
                                            </tr>
                                            <tr>
                                            <th>Course Price</th>
                                            <td> <?php echo htmlentities($row['csprice']);?></td>
                                            </tr>
                                            <tr>
                                            <th>Purchase Date</th>
                                            <td><?php echo htmlentities($row['intime']);?></td>
                                        </tr>
										
                                        <tr>
                                            <th>Subscription Status</th>
                                               <td><?php $ostatus=$row['status'];
                                               if($ostatus=='0'):
                                                echo "Not Processed Yet";
                                            elseif($ostatus=='1'):
                                                echo "Accepted";
												else:
												echo "Rejected";
                                            endif;

                                           ?></td>
                                           </tr>                  

                               
                                       
                                    </tbody>
                                </table>
								</div>
<!--Cutomer /Users Details --->
 <div class="col-md-6">
        <table class="table table-bordered" border="1" width="100%">
                                        <tr>
                                            <th colspan="2" style="text-align:center;">User Details</th>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            </tr>
                                            <tr>
                                            <th>Email ID </th>
                                            <td> <?php echo htmlentities($row['email']);?></td>
                                            </tr>
                                            <tr>
                                            <th>Phone No</th>
                                            <td><?php echo htmlentities($row['phone']);?></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                               <td><?php echo htmlentities($row['address']);?>
                                               </td>
                                           </tr>                 

                                    
                                       
                                    </tbody>
                                </table></div>
	</div>				
				

<?php if($ostatus=='0'): ?>
<div align="center" class="action"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Take Action</button>
</div>
<?php endif;?>
                </div>
              </div>
            </div>
         
          </div>
        </div>
        <!-- content-wrapper ends -->


<?php
include("footer.php");
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
<form method="post" name="takeaction">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update the Subscription Status</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<p><select name="ostatus" class="form-control" required>
    <option value="">Select</option>
    <?php if($ostatus=='0'): ?>
        <option value="-1">Rejected</option>
    <option value="1">Accepted</option>
        <?php endif;?>
</select></p>
<p>
<textarea class="form-control" required name="remark" placeholder="Remark"></textarea></p>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit" name="takeaction">Save changes</button></div>
        </div>
    </form>
    </div>
</div>
</div>

        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
               <script>
function CallPrint(strid) {
var prtContent = document.getElementById("print");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
}

</script>