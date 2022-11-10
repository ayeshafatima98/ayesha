<?php
function error($msg) {
    $response=array("success"=>false,"message"=>$msg);
    return json_encode($response);
}
//partyaccount validation
$partyaccount=$_POST['partyaccount'];
$cpartyaccount=$_POST['cpartyaccount'];
if ($partyaccount=='') {
    die(error('Enter Party Account Number'));
}
if(strlen($partyaccount)<12)
{
    die(error('Minimum 12 digits'));
}
if(strlen($partyaccount)>22)
{
    die(error('Maximum 22 digits'));
}
if ($cpartyaccount=='') {
    die(error('Confirm Party Account Number'));
}

$message="Successful";
$response=array();
$response["success"]=true;
$response["message"]=$message;
echo json_encode($response);


?>