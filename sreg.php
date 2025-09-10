<?php

include_once("db.php");


if(isset($_POST['rsave']))
	{
		print("<h2>sfnaskflksdfsdkflsdklfsdf</h2>");
   @extract($_POST);

 $ins=mysqli_query($con,"INSERT INTO  reg(`studentUSN`, `studentName`, `studentEmail`, `studentPSW`) VALUES ( '$studentUSN', '$studentName', '$studentEmail', '$studentPSW')")  or die(mysqli_query());


			if(!$ins)
			{
				 echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Stud Reg  Details un sucessfully... ')
					window.location.href='Student_login.html';
					</SCRIPT>");
							
			}
			else
		{
				   echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$studentName Succesfully Registered ')
					window.location.href='http://localhost/LMS/Student_login.html';
					</SCRIPT>");
		}
	}
			  
	
?>

http://localhost/LMS/sreg.php?studentName=ads&studentEmail=aas%40gmail.com&studentUSN=mc123123&studentPSW=1234&studentCONF=1234&rsave=Register