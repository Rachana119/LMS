<?php
	include_once("head.php");
	
	//***************************************************************************************************
if(isset($_POST['bsave']))
	{

   @extract($_POST);

   $files = $_FILES['file'];
$filename = $files['name'];
$filrerror = $files['error'];
$filetemp = $files['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png' , 'jpg' , 'jpeg');
    $pic = '../book/'.$filename;
    move_uploaded_file($filetemp, $pic);

 $ins=mysqli_query($con,"INSERT INTO `books`(`bid`, `bname`, `cbook`, `aname`, `ename`, `count`, `pic`) VALUES ( '$bid', '$bname', '$cbook', '$aname', '$ename',$count,'$pic')")  or die(mysqli_query());
			if(!$ins)
		{
		}
			else
		{
				
				   echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$bname book  Succesfully updated')
					window.location.href='http://localhost/LMS/admin/book_details.php';
					</SCRIPT>");

		}
	
			  
	}
	
	
	//***********************************************************************************************************************************************************************
	
	
	
	
	
	?>
    <style>

   body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #f0f0f0;
    }

    header {
        width: 100%;
        background-color: #333;
        color: white;
        padding: 20px 0;
        text-align: center;
    }


    main {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 20px;
    }

    .form-container {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    .form-container h2 {
        margin-bottom: 20px;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container textarea,
    .form-container input[type="file"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
  .  select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-container textarea {
        resize: vertical;
    }

    .form-container button {
        width: 100%;
        padding: 10px;
        border: none;
        background-color: #333;
        color: white;
        cursor: pointer;
        border-radius: 4px;
    }

    .form-container button:hover {
        background-color: #555;
    }

    .book-count {
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 1.2rem;
    }

    </style>
    <main>
        <div class="form-container">
            
            <h2>Library Book Update Details</h2>
            <form enctype="multipart/form-data" method="post" action=" " >
			
<label for="book-id">Book Catagaries:</label>

<select name="cbook"  style='width: 100%;  padding: 10px; border: none;'  required>
	<option value="OS" selected>Operating System
	<option value="ML">Machin Learning
<option value="WP">Web Programming
</select>
<br><br>

                <label for="book-id">Book ID:</label>
                <input type="text"  name="bid" required>

                <label for="book-name">Book Name:</label>
                <input type="text"  name="bname" required>

                <label for="author-name">Author Name:</label>
                <input type="text" id="author-name" name="aname" required>

                <label for="edition">Edition:</label>
                <input type="text" id="edition" name="ename" required>

                <label for="Number of books available">Number of books available :</label>
                <input type="text"  name="count" required>

                <label for="photo">Book Photo:</label>
                <input type="file"  name="file" >   <!-- accept="image/*" -->

                <center><input type="submit" name="bsave"></input></center>
            </form>
        </div>
    </main>
</body>
</html>
