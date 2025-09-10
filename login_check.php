<?php



include_once("db.php");
///*************************************************************************************************************************************************************************************************	
	//admin form Submission
	if(isset($_POST['sub_adm']))
	{
		@extract($_POST);			//retriev ur information from form

		$asql=mysqli_query($con,"select  usn,psw  from adminlog where usn='$usn' and psw='$psw'") or die(mysqli_error());
		echo mysqli_num_rows($asql);
		session_start();
		if(mysqli_num_rows($asql)==1)
		{
			//echo $auname;
			$_SESSION['sub_adm']=$usn;
			header("location:admin/");		
		}
		else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Invalid Admin details.')
					window.location.href='http://localhost/LMS/Admin_login.php';
								</SCRIPT>");

			//$amsg="Login info is not Correct";
		}	
	}

///*************************************************************************************************************************************************************************************************

	
	if(isset($_POST['sub_userlog']))
	{
		@extract($_POST);			//retriev ur information from form

		$asql=mysqli_query($con,"select  *  from reg where studentUSN='$USN' and studentPSW='$password'") or die(mysqli_error());
		echo mysqli_num_rows($asql);
		session_start();
		if(mysqli_num_rows($asql)==1)
		{
			//echo $auname;
			$_SESSION['USN']=$USN;
			header("location:stud/");		
		}
		else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Invalid Admin details.')
					window.location.href='http://localhost/LMS/student_login.php';
								</SCRIPT>");

			//$amsg="Login info is not Correct";
		}	

	}
///*************************************************************************************************************************************************************************************************

///*************************************************************************************************************************************************************************************************	
	//admin form Submission
	if(isset($_POST['doc_log']))
	{
		@extract($_POST);			//retriev ur information from form
		
		echo $uname;
		echo $psw;
		$asql=mysqli_query($con,"select * from doctor where email='$uname' and did='$psw'") or die(mysqli_error());
		echo mysqli_num_rows($asql);
		session_start();
		if(mysqli_num_rows($asql)==1)
		{
			echo $uname;
			$_SESSION['doc_email']=$uname;
			header("location:doctor/");		
		}
		else
		{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					 window.alert('Invalid Admin details.')
					window.location.href='doctorlog.php';
								</SCRIPT>");

			//$amsg="Login info is not Correct";
		}	
	}

///*************************************************************************************************************************************************************************************************
	if(isset($_POST['regsave']))
	{
   @extract($_POST);



$files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');
if(in_array($filecheck, $fileextstored))
	{

    $filename1 = 'image/'.$filename;
    move_uploaded_file($filetemp, $filename1);
}
else
$filename='no.png';

 $ins=mysqli_query($con,"insert into user(pname,adate,fname,email,phone,psw,pic,note) values('$pname','$adate','$fname','$email','$phone','$psw','$filename','$note')")  or die(mysqli_query());
			if(!$ins)
			{
				
				
			}
			else
		{
				   echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Net Pet Succesfully inserted')
                window.location.href='userlog.php';
						</SCRIPT>");

		}
			  
	}
	///*************************************************************************************************************************************************************************************************

	
	?>





