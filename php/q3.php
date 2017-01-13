<html>
<body>


<?php
session_start();






	function SignUp()
	{
	
include "./settings.php";
$name=$_POST['name'];
$email=$_POST['email_r'];
$password=md5($_POST['password_r']);
$query = mysqli_query($conn,"SELECT *  FROM `user` where Email = '$email'");

if(mysqli_num_rows($query)==0){
$query = mysqli_query($conn,"SELECT * FROM user") or die('Invalid query: '. mysqli_error($conn));
while($row = mysqli_fetch_array($query))
{
	$id = $row['User_id'];
        echo $id;
}
$id = $id + 1;
mysqli_query($conn,"INSERT INTO user VALUES('$id','$name','$email','$password',0,0)");
$message="Dear Candidate,\n\n Click on below link to confirm your registration: \n\n http://eselection.000webhostapp.com/php/activate.php?User_id=".$id."&Email=".$email."\n\n\nRegards \nIIT Mandi, Near Bus Stand
Mandi - 175 001, Himachal Pradesh
India";
mail($email,"Activation Link",$message,"From: support@eselection.com\n");
}
else
{
echo "user_exist";
}

//$_SESSION['login_id'] = $id;

//echo $_SESSION['new_id'];
//echo mysql_error($con);

//header("location: ../login.html"); 
    //echo $row = mysqli_fetch_array($query)  

}

function SignIn()
{
	
	include "./settings.php";
	 $email=$_POST['email_l'];
	$password=md5($_POST['password_l']);
	$query = mysqli_query($conn,"SELECT *  FROM `user` where Email = '$email'");
 	$row = mysqli_fetch_array($query) or die("not_registered");
	 $row["Password"];
	if(!empty($row))
	{
        //echo $row["password"];

		if($row["Password"]==$password&&$row['Verified']==1)
		{

			$_SESSION['login_id'] = $row["User_id"];
			$_SESSION['user_name'] = $row["Name"];
			$_SESSION['admin'] = $row["Admin"];

			echo "logined";
			//header("location: ../index.php"); 
			die();
		}
		else if($row["Password"]==$password&&$row['Verified']!=1)
		{
			echo "please_verify";
			//header("location: ../login.html"); 
			die();
		}


	}
	else
	{
		echo "not_registered";
		//header("location: ../login.html"); 
		die();
	}
}



function Upload()
{
	echo $title = $_POST['title'];
	echo "Inupload";
    //session_start();
	$mem_id = $_SESSION['new_id'];

	$imagename=$_FILES['myimage']['name']; 
	if($title == "")
	{
		$title = $imagename;
		if(strlen($title)>25)
		{
		 $title = substr($title,0,25);
		}
	}

//Insert the image name and image content in image_table
//!empty($imagename);
	if (1)
	{
		echo "abhijeet";
		$imgtype=$_FILES["myimage"]["type"];
        //echo $ext= GetImageExtension($imgtype);
		echo $ext = ".jpeg";
		$imagename=date("d-m-Y")."-".time().$ext;
		echo $target_path = "/Pixlr/photo/images/".$imagename;

		if(move_uploaded_file($_FILES['myimage']['tmp_name'],'/var/www/html/Pixlr/photo/images/'.$imagename)) {

			echo "abhijeet";
			$con=mysqli_connect('localhost','root','Jigyasha') or die();
			$db=mysqli_select_db($con,'pixlr') or die();

			$date = date('Y-m-d H:i:s');

			$sql = "SELECT * FROM image";
			$rdata = mysqli_query($con,$sql);
			while($res=mysqli_fetch_array($rdata))
			{
				$id = $res['img_id'];
				echo $id;
			}
			$id = $id+1;
    //echo $id;
			$query=mysqli_query($con,"INSERT INTO image VALUES ('$id','$title','wq','$date',12,'$mem_id',12,'".$target_path."')");
        //echo $imagename;
        
    //mysql_query($query) or die();  //"error in $query == ----> ".mysql_error()

		}else{

			exit("Error While uploading image on the server");
		} 

	}
	if(isset($_POST['category']))
	{
		echo "good";
		echo $c = $_POST['category'];
		echo "good";

		$con=mysqli_connect('localhost','root','Jigyasha') or die();
		$db=mysqli_select_db($con,'pixlr') or die();
		$query=mysqli_query($con,"INSERT INTO r_category VALUES ('$id','$c')");

	}
header("Location: profile.php?new_id_view=$mem_id");

//header("location: display.php");
}

function Upload_Blob_profile(){
	$id = $_SESSION['new_id'];
    //echo "dadfds".$id;

	$con=mysqli_connect('localhost','root','Jigyasha') or die("Failed to connect to SQL DB: ");
	$db=mysqli_select_db($con,'pixlr') or die("Failed to connect to SQL DB: ");

	$imagename=$_FILES['myimage']['name']; 
	echo $imagename;

//Get the content of the image and then add slashes to it 
	$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
	$new_id = $id;
	$update_image="UPDATE member SET profile_image ='$imagetmp' WHERE mem_id ='$id'" ;
	mysqli_query($con,$update_image);

	header("location: profile.php?new_id_view=$id");
}
function Upload_Blob_cover(){
	$id = $_SESSION['new_id'];
    //echo "dadfds".$id;

	$con=mysqli_connect('localhost','root','Jigyasha') or die("Failed to connect to SQL DB: ");
	$db=mysqli_select_db($con,'pixlr') or die("Failed to connect to SQL DB: ");

	$imagename=$_FILES['myimage']['name']; 
	echo $imagename;

//Get the content of the image and then add slashes to it 
	$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
	$new_id = $id;
	$update_image="UPDATE member SET cover_image ='$imagetmp' WHERE mem_id ='$id'" ;
	mysqli_query($con,$update_image);

	header("location: profile.php?new_id_view=$id");
}

function change_password()
{
	echo $id = $_SESSION['new_id'];
    //echo "dadfds".$id;
	echo $newpassword=$_POST['password'];

	$con=mysqli_connect('localhost','root','Jigyasha') or die("Failed to connect to SQL DB: ");
	$db=mysqli_select_db($con,'pixlr') or die("Failed to connect to SQL DB: ");

    //$imagename=$_FILES['myimage']['name']; 
    //echo $imagename;

//Get the content of the image and then add slashes to it 
//$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
//$new_id = $id;
	$update_password="UPDATE member SET password  ='$newpassword' WHERE mem_id ='$id'" ;
	mysqli_query($con,$update_password); 
	header("location: profile.php?new_id_view=$id");
}
function put_comment()
{
	echo $id = $_SESSION['new_id'];
	echo $person_id = $_GET['person_id'];
	$redirect=$_GET['redirect'];
	echo ' ';
	//$img_id = $_SESSION['img_id'];
	echo $img_id=$_GET['image_id_test'];;
	echo ' ';
	echo $comments = $_POST['my_comment'];
	echo ' ';
	$com_id;
	$con=mysqli_connect('localhost','root','Jigyasha') or die("Failed to connect to SQL DB: ");
	$db=mysqli_select_db($con,'pixlr') or die("Failed to connect to SQL DB: ");
			$sql = "SELECT * FROM r_comment";
			$rdata = mysqli_query($con,$sql);
			while($res=mysqli_fetch_array($rdata))
			{
				$com_id = $res['comment_id'];
				
			}
			$com_id = $com_id+1;
			echo $com_id;
			mysqli_query($con,"INSERT INTO r_comment VALUES('$id','$img_id','$comments','$com_id')");
			if($redirect==1)
       {
       	header("location: home.php");
       }
   		else if($redirect==2)
   		{
   			header("location: home.php");
   		}
	else if($person_id==$id)           
           header("location: profile.php?new_id_view=$id");
       else
       	header("location: profile.php?new_id_view=$person_id");

}
function delete_comment()
{
	echo $id = $_SESSION['new_id'];
	echo 'hello';
	//$img_id = $_SESSION['img_id'];
	//echo $img_id=$_GET['img_id'];;
	echo ' ';
	echo $comment_id = $_GET['comment_id'];
	echo ' ';
	$com_id;
	$con=mysqli_connect('localhost','root','Jigyasha') or die("Failed to connect to SQL DB: ");
	$db=mysqli_select_db($con,'pixlr') or die("Failed to connect to SQL DB: ");
			$sql = "SELECT *  FROM r_comment WHERE comment_id='$comment_id'";
			$rdata=mysqli_query($con,$sql);
			$res=mysqli_fetch_array($rdata);

			if($res['mem_id']==$id)
			{
			$sql = "DELETE  FROM r_comment WHERE comment_id='$comment_id'";
			mysqli_query($con,$sql);
			}

	header("location: profile.php?new_id_view=$id");

}

function like()
{
 $con=mysqli_connect('localhost','root','Jigyasha') or die();
                            $db=mysqli_select_db($con,'pixlr') or die();

     echo $redirect=$_GET['redirect'];
     echo "||";
	echo $img_id = $_GET['image_id_like'];

	echo "||";
	echo $person_id = $_GET['person_id'];
	$id = $_SESSION['new_id'];
	/*echo $img_id;
	echo "img  then  mem";
	echo $id;
	echo "like_id-->";*/
                            $query = mysqli_query($con,"SELECT *  FROM `r_like` where img_id = '$img_id' AND mem_id = '$id'");
                            $row = mysqli_fetch_array($query) ;
                            $like_id;
                            if($row)
                            {

                            $like_id = $row['like_id'];
                            $sql = "DELETE FROM r_like WHERE like_id = '$like_id'";

                            	if (!mysqli_query($con, $sql)){
    							echo "Error deleting record: " . mysqli_error($con);
								}
                              //$path = "/pixlr/images/2000px-Love_Heart_SVG.png";  
                            }
                            else
                            {
                            			$sql = "SELECT * FROM r_like ORDER BY like_id ASC";
										$rdata = mysqli_query($con,$sql);
										while($res=mysqli_fetch_array($rdata))
							{
							$like_id = $res['like_id'];
							echo "||";
							echo "||";
							echo $like_id;
							echo "||";
				
							}
							$like_id = $like_id+1;
							
							echo $like_id;
                              $query = mysqli_query($con,"INSERT INTO `r_like` VALUES('$id','$img_id','$like_id')");
                              //$path = "/pixlr/images/2000px-Love_Heart_SVGcopy.png";
                            }
              
}


function delete_image()
{
 $con=mysqli_connect('localhost','root','Jigyasha') or die();
                            $db=mysqli_select_db($con,'pixlr') or die();


	$img_id = $_GET['img_id_image_delete'];
	echo $id = $_SESSION['new_id'];
	/*echo $img_id;
	echo "img  then  mem";
	echo $id;
	echo "like_id-->";*/
                            $query = mysqli_query($con,"SELECT *  FROM `image` where img_id = '$img_id'");
                            $row = mysqli_fetch_array($query) ;
                            echo $row['mem_id'];
                            if($row['mem_id']==$id)
                            {

                           
                            $sql = "DELETE FROM image WHERE img_id = '$img_id'";

                            	if (!mysqli_query($con, $sql)){
    							echo "Error deleting record: " . mysqli_error($con);
								}
                              //$path = "/pixlr/images/2000px-Love_Heart_SVG.png";  
                            }
                            else
                            {
                            	echo'Permision Denied';
                            }

           header("location: profile.php?new_id_view=$id");
}
function follow()
{
	echo $redirect=$_GET['redirect'];
	echo $follower_id = $_SESSION['new_id'];
	echo " ";
	echo $following_id = $_GET['following_id'];

	$con=mysqli_connect('localhost','root','Jigyasha') or die();
	$db=mysqli_select_db($con,'pixlr') or die();

	$query = mysqli_query($con,"SELECT *  FROM `r_follow` where follower = '$follower_id' AND following = '$following_id'");
	echo $row = mysqli_fetch_array($query) ;
	$follow_id;
	if($row)
	{
		echo "in first ";
		echo $follow_id = $row['follow_id'];
		$sql = "DELETE FROM r_follow WHERE follow_id = '$follow_id'";

		if (!mysqli_query($con, $sql)){
			echo "Error deleting record: " . mysqli_error($con);
		}
                              //$path = "/pixlr/images/2000px-Love_Heart_SVG.png";  
	}
	else
	{
		$sql = "SELECT * FROM r_follow ORDER BY follow_id ASC";
		$rdata = mysqli_query($con,$sql);
		while($res=mysqli_fetch_array($rdata))
		{
			echo $follow_id = $res['follow_id'];

		}
		$follow_id = $follow_id+1;
		echo $follow_id;
		$query = mysqli_query($con,"INSERT INTO `r_follow` VALUES('$follower_id','$following_id','$follow_id')");
                              //$path = "/pixlr/images/2000px-Love_Heart_SVGcopy.png";
	}

	//header("location: profile.php");
	  if($redirect==1)
       {
       	header("location: home.php");
       }
   		else if($redirect==2)
   		{
   			header("location: home.php");
   		}
		else if($person_id==$id)   
                 {        
           header("location: profile.php?new_id_view=$following_id");
       }
       else
       {
       		header("location: profile.php?new_id_view=$follower_id");
       }
}

//echo $_GET['action'];
if($_GET['action']=="signup")
{
		
	SignUp();
}
if($_GET['action']=="signin")
{
	
	SignIn();
}
//echo "hello down";

if(isset($_POST['submit_image']))
{
	echo "in upload buton ";
	Upload();
}

if(isset($_POST['submit_image_profile']))
{
	echo "in upload buton ";
	Upload_Blob_profile();
}
if(isset($_POST['submit_image_cover']))
{
	echo "in upload buton ";
	Upload_Blob_cover();
}
if(isset($_POST['submit_new_password']))
{
	echo "in password";
	change_password();
}
if(isset($_POST['post_comment']))
{
	echo "in password";
	put_comment();
}
if(isset($_POST['delete_comment']))
{
	echo "in delete comment";
	delete_comment();
}
if(isset($_GET['image_id_like']))
{
	echo "congo";
	//echo $_GET['image_id_like	'];
	like();
}
if(isset($_POST['delete_image']))
{
	echo "delete_image";
	//echo $_GET['image_id'];
	delete_image();
}
if(isset($_GET['following_id']))
{
	echo "in follow";
	follow();
}
?>
</body>
</html>