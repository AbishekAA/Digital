<?php
	$servername = "localhost";
	$username = "root";
	$password = "A6(kF)u0muVyNo@A";
	$databasename = "hrms";
	// CREATE CONNECTION
	$conn = mysqli_connect($servername,	$username, $password, $databasename);
// GET CONNECTION ERRORS
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$output='';
	$sql = "SELECT * FROM employees WHERE masterid LIKE '%".$_POST["search"]."%' OR name LIKE '%".$_POST["search"]."%' OR address LIKE '%".$_POST["search"]."%' OR location LIKE '%".$_POST["search"]."%' or department LIKE
			'%".$_POST["search"]."%' OR fnpf LIKE '%".$_POST["search"]."%' OR tin LIKE '%".$_POST["search"]."%'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) 
	{
		$output = "<thead>
						<tr>
							<th>Master ID</th>
							<th>Name</th>
							<th>Address</th>
							<th>Division</th>
							<th>Department</th>
							<th>Fnpf Number</th>
							<th>Tin Number</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>";
						// OUTPUT DATA OF EACH ROW
		while($row = mysqli_fetch_assoc($result)) 
		{
			$output .="
						<tr>
							<td>" . $row["masterid"] . "</td>
							<td>" . $row["name"] . "</td>
							<td>" . $row["address"] . "</td>
							<td>" . $row["location"] . "</td>
							<td>" . $row["department"] . "</td>
							<td>" . $row["fnpf"] . "</td>
							<td>" . $row["tin"] . "</td>
							<td>
								<a class='btn btn-primary btn-sm' href='select.php?masterid=".$row["masterid"]."'>Profile</a>
						</tr>
					";
		}
			$output .="</tbody>";
			echo $output;
	}
	else 
	{
		echo "<h3>No Records Found</h3>";
	}	
	$conn->close(); 
?>
