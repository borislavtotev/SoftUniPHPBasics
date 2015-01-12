<table>
	<thead>
		<tr>
			<th>Number</th>
			<th>Square</th>
		</tr>		
	</thead>
	<tbody>
<?php 
$sum = 0;
for ($i=0; $i <= 100; $i+=2) :
	$sum += sqrt($i);
?>
		<tr>
			<td><?= $i ?></td>
			<td><?= round(sqrt($i), 2)?></td>
		</tr>	
<?php 
endfor;
?>
	<tfoot>
		<tr>
			<td>Total:</td>
			<td><?= round($sum,2) ?></td>
		</tr>
	</tfoot>
	</tbody>
</table>