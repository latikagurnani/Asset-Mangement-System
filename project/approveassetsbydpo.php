<?php
include_once('includes/bootstrap.php');
echo $request_id = $_GET['request_id'];
echo $quantity = $_GET['quantity'];

 $db=new Database();
                $conn=$db->getConnection();
                $user=new User($conn);
                $result=$user->approveRequestByDpo($request_id,$quantity);
//                $results_count=count($result);



//header("Location:http://localhost/AssetManagementSystem/project/HOD_index.php");
header("Location:http://localhost/AssetManagementSystem/project/DPO_index.php");


?>