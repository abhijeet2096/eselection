<meta http-equiv="refresh" content="2; url=http://eselection.000webhostapp.com/login.html" />
<?php
include "./settings.php";
$User_ID=$_GET['User_id'];
$email=$_GET['Email'];
 $query="UPDATE user SET Verified=1 WHERE User_ID='$User_ID' AND Email='$email'";	
if (!mysqli_query($conn,$query)) 
{
  die('Error in Activation:: ' . mysqli_error($conn));
}
echo "Your account is active now.";
?>
