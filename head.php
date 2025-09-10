<?php 

	session_start();

	if(!isset($_SESSION['sub_adm']))
	{
		header("location:../home.html");
	}
	else
	{
		$sub_adm=$_SESSION['sub_adm'];
	}
	
	include_once("../db.php");
	?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./styles.css">
    <title>Library Management System</title>
    <style>
    
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('bg4.jpg'); /* Replace with your image path */
            background-size: cover;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            width: 100%;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

		.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  margin: 0px;
  float: right;
  width: 100%;
  padding: 0px;
  background: #141114;
  /*background: #008489;*/
  height: 35px;
  color: white;
  text-align: center;
}


    main {
        padding: 20px;
    }
    
  
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    table, th, td {
        border: 1px solid #ddd;
    }
    
    th, td {
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #f2f2f2;
    }



	 </style>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
        <nav>

		  <ul>
                <li><a href="http://localhost/LMS/admin/index.php">Home</a></li>
				 <li><a href="http://localhost/LMS/admin/students_list.php">Student Details</a></li>
                <li><a href="http://localhost/LMS/admin/book_update.php">Book Update</a></li>
				<li><a href="http://localhost/LMS/admin/book_details.php">Book Details</a></li>
                <li><a href="http://localhost/LMS/admin/issue_return.php">Book Returned</a></li>
				<li><a href="http://localhost/LMS/admin/issue_req.php">Book Request</a></li>
				  <li><a href="http://localhost/LMS/admin/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>


    
<!--footer -->
	<div class="footer" > 
	
		<p >� 2024  All Rights Reserved |Design by MCE ,Hassan -573201  <font size="2" color=""></font></p>
	 </div> 
<!--/footer -->



</body>
</html>

