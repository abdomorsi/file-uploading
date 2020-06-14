
<?php
include ('connection.php');

if( isset($_POST['submit']) )
{
	$file = $_FILES['uploadFile'];
	$fileName = $_FILES['uploadFile']['name'];
	$tempFile = $_FILES['uploadFile']['tmp_name'];
	$phoneNumber = $_POST['tel'];

	$data = $conn->query("SELECT phone_num,proposal_path FROM Invent&Prevent WHERE phone_num='$phoneNumber'");
	if($data->num_rows == 1){
		$row = $data->fetch_assoc();
		
		if($row["proposal_path"]!=""){
			goToPage("../index.php","yours is already uploaded");
		}

		$directoryName = $phoneNumber;
		if(!is_dir($directoryName))
		{
			mkdir($directoryName);
		} 
		$filePath = "../".$directoryName."/".$fileName;
		$sqlOrder = "UPDATE Invent&Prevent SET proposal_path = '$filePath' WHERE phone_num = '$phoneNumber';";
		if( mysqli_query($conn,$sqlOrder) )
		{
			move_uploaded_file($tempFile,$filePath);
		}
	}else{
		goToPage("../index.php","this phone number is not registered");
	}
}
 
function goToPage($page , $errorMsg){
	echo "<script> alert(".$errorMsg.");  window.location.href='../".$page."';</script>"; 

}

?>