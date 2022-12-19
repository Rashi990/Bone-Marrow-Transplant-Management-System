<?php 
require_once ("../../config/connection.php");
 
require_once('../../src/php/clinician_footer.php');

//write the query to get data from users table

$sql = "SELECT * FROM donor_hla_details";

//execute the query

$result = $connection->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor HLA Details</title>
	 
<link rel="stylesheet" href="../../public/css/clinician_view_donor_hla.css">
</head>
<body>
	<div class="container">
	<a href="clinician_donor_hla_index.php"> 
       
	               
	   <button class="create" name="create-btn" id="create-btn">
                            <span class="ct">+ Add HLA Details</span>
                      </button></a>

<table class="table">
	<thead>
		<div class="thd">
		<tr>
		<th>Donor ID</th>
		<th>HLA Antigen</th>
		<th>HLA Allele Family</th>
		<th>HLA 2nd Type</th>
		<th>HLA 3rd Type</th>
		<th>HLA 4th Type</th>
		<th>HLA 5th Type</th>
		
	</tr>
		</div>
	</thead>
	<tbody>	
	<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['donor_id']; ?></td>
					<td><?php echo $row['hla_antigen']; ?></td>
					<td><?php echo $row['hla_allele_family']; ?></td>
					<td><?php echo $row['hla_2nd_type']; ?></td>
					<td><?php echo $row['hla_3rd_type']; ?></td>
					<td><?php echo $row['hla_4th_type']; ?></td>
					<td><?php echo $row['hla_5th_type']; ?></td>
					<td><a  href="clinician_donor_hla_form.php?id=<?php echo $row['donor_id']; ?>"><button class="edt">Edit</button> </a></td>
					<td><a  href="delete.php?id=<?php echo $row['donor_id']; ?>"><button class="dl">Delete</button></a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        
		
	        	
	</tbody>
</table>
	</div>

</body>
</html>

