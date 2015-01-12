<?php
$name = 'Gosho';
$phone = '0882-321-423';
$age = 24;
$address = 'Hadji Dimitar';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Information Table</title>
		<style>
			table {
				border-collapse: collapse;
				border-style: double;
			}
			th, td {
				border: 1px solid black;
				padding: 5px;
			}
			table tbody tr td {
				text-align: right;
			}
			table tbody tr th {
				text-align: left;
				background-color: #ffa100;
			}
		</style>
	</head>
	<body>
		<table>
	<tbody>
		<tr>
			<th>Name</th><td><?= $name ?></td>
		</tr>
		<tr>
			<th>Phone Number</th><td><?= $phone ?></td>
		</tr>
		<tr>
			<th>Age</th><td><?= $age ?></td>
		</tr>
		<tr>
			<th>Address</th><td><?= $address ?></td>
		</tr>			
	</tbody>
</table>
	</body>
</html>
