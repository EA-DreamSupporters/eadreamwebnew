<?php
include('config.php');
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['total'])){
	

    
        $address=$_POST['selectedaddress'];  
        $gtotal=$_POST['total']; 
        $_SESSION['address']=$address;
        $_SESSION['gtotal']=$gtotal;
      
        $name=$_POST['fname'];
       $orderno= mt_rand(100000000,999999999);
       $userid=$_SESSION['id'];
       $address=$_SESSION['address'];
       $totalamount=$_POST['total'];
       $txntype= "Online Payment";
       $phone=$_POST['txnnumber'];
       $block=$_POST['block'];
       $city=$_POST['city'];
       $state=$_POST['state'];
       $zip=$_POST['zip'];
       $notes=$_POST['notes'];
       $payment_id=$_POST['razorpay_payment_id'];
       $query=mysqli_query($con,"insert into online_order(orderno,name,phone,uid,addressId,amount,mode,transacton,block,city,state,zip,notes) values('$orderno','$name','$phone','$userid','$address','$gtotal','$txntype','$payment_id','$block','$city','$state','$zip','$notes')");
       if($query)
       {
       $sql="insert into ordersdetails (userId,productId,quantity) select userID,productId,productQty from cart where userID='$userid';";
       $sql.="update ordersdetails set orderNumber='$orderno' where userId='$userid' and orderNumber is null;";
       $sql.="delete from  cart where userID='$userid'";
       $result = mysqli_multi_query($con, $sql);
        } else{
      
       }   
       



$data = [ 
'payment_id' => $_POST['razorpay_payment_id'],
'amount' => $_POST['totalAmount'],
'product_id' => $_POST['product_id'],
];
// you can write your database insertation code here
// after successfully insert transaction in database, pass the response accordingly
$arr = array('msg' => 'Payment successfully credited', 'status' => true,'data' => $data);  
echo json_encode($arr);



}
?>