<?php
include("header3.php");
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
    $actionby=$_SESSION['admin'];
    $canceledBy='Admin';

 if($status=='Cancelled'):
 $query="insert into ordertrackhistory(orderId,status,remark,actionBy,canceledBy) values('$oid','$status','$remark','$actionby',' $canceledBy');";
   
   $query.="update orders set orderStatus='$status' where id='$oid'";
else:
  $query="insert into ordertrackhistory(orderId,status,remark,actionBy) values('$oid','$status','$remark','$actionby');";
   $query.="update orders set orderStatus='$status' where id='$oid'";
endif;    
$result = mysqli_multi_query($con, $query);
    if ($result) {
    
    echo '<script>alert("Action has been updated successfully")</script>';
    echo "<script>window.location.href ='report_book.php'</script>";
  }
  else
    {
     echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}




?>    

<?php
$query ="SELECT a.*,b.*,c.* FROM course AS a, students AS b, course_subscription AS c WHERE a.id=c.cid AND b.sid=c.uid AND c.id='$oid'";  
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
                  <h4 class="card-title">Course Details</h4>
               
           

 <div class="row">
                                    <div class="col-md-6">
                                <table class="table table-bordered" border='1' width="100%">
                            
                                        <tr>
                                            <th colspan="2" style="text-align:center;">Course Details</th>
                                        </tr>
                                        <tr>
                                            <th>Course.</th>
                                            <td><?php echo htmlentities($row['ctitle']);?></td>
                                            </tr>
                                            <tr>
                                            <th>Course Amount</th>
                                            <td> ₹<?php echo htmlentities($row['csprice']);?></td>
                                            </tr>
                                            <tr>
                                            <th>purchase Date</th>
                                            <td><?php echo htmlentities($row['intime']);?></td>
                                        </tr>
                                        <tr>
                                            <th>course Status</th>
                                              <td>
									<?php if($row["status"] == -1){ ?>
									<span class="badge badge-danger">Rejected</span>
									<?php }elseif($row["status"] == 1){ ?>
									<span class="badge badge-success">Accepted</span>
									<?php }else{ ?>
									<span style="color:red;">Not Processed Yet</span>
									<?php } ?></td>
                                           </tr>
 <tr>
                                            <th>Remarks</th>
                                            <td><?php if($row['remark']==''){ ?><span style="color:red;">Not Processed Yet</span><?php } else { echo $row['remark'];} ?></td>
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
<!-- Products / Item Details --->
 			  					
					

                </div>
              </div>
            </div>
         
          </div>
        </div>
        <!-- content-wrapper ends -->


<?php
include("footerd.php");
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
<form method="post" name="takeaction">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update the Order Status</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
<p><select name="ostatus" class="form-control" required>
    <option value="">Select</option>
    <?php if($ostatus==''): ?>
        <option value="Cancelled">Rejected</option>
    <option value="Packed">Accepted</option>
    <option value="In Transit">In Transit</option>
    <option value="Delivered">Delivered</option>
    <?php elseif($ostatus=='Packed'):?>
    <option value="In Transit">In Transit</option>
    <option value="Delivered">Delivered</option>
    <?php elseif($ostatus=='In Transit'):?>
    <option value="Delivered">Delivered</option>
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