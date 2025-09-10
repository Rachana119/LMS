<?php
		include_once("head.php");
?>


    <main>
        <h1>Registered Students</h1>
        <table id="students-table">
            <thead>
                <tr>
                    <th>SI Number</th>
                    <th>Student Name</th>
                    <th>USN</th>
                    <th>Email</th>
                    <th>Book id</th>
                </tr>
            </thead>
            <tbody>
 <?php
  $array = $con->query("select * from reg  order by id desc");
 
 $i=0;
	    if(mysqli_num_rows($array)!=0)
		{
        while ($row = $array->fetch_assoc()) 
        {   
          $i=$i+1;   ?>
     
          <tr align="center">
            <td><?php echo $i; ?></td>
		
            <td align="left"><?php echo $row['studentName']; ?></td>
            
            <td align="left"><?php echo $row['studentUSN']; ?></td>
			<td align="left"><?php echo $row['studentEmail']; ?></td>
			<td align="left"><?php echo $row['bookid']; ?></td>
			<td align="left">&nbsp;</td>
         </tr>
		<?php } 
		}
		else
		echo "<center><font size='3' color='#ff0000'>No Data Found....</font></center>";?>
			</tbody>
        </table>
    </main>











    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const students = [
               
                // Add more student records as needed
            ];
    
            const tableBody = document.querySelector('#students-table tbody');

students.forEach((student, index) => {
    const row = document.createElement('tr');

    const rowNumberCell = document.createElement('td');
    rowNumberCell.textContent = index + 1;
    row.appendChild(rowNumberCell);

    const nameCell = document.createElement('td');
    nameCell.textContent = student.name;
    row.appendChild(nameCell);

    const usnCell = document.createElement('td');
    usnCell.textContent = student.usn;
    row.appendChild(usnCell);

    const emailCell = document.createElement('td');
    emailCell.textContent = student.email;
    row.appendChild(emailCell);

    const flagCell = document.createElement('td');
    flagCell.textContent = student.flag;
    row.appendChild(flagCell);

    tableBody.appendChild(row);
});
        });
    </script>







</body>
</html>
