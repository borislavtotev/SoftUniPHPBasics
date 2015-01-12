<form method="post">
	<label>Categories:</label><input type="text" name="categories" /><br>
	<label>Tags:</label><input type="text" name="tags" /><br>
	<label>Months:</label><input type="text" name="months" /><br>
	<input type="submit" value="Generate" />
</form>
<?php 
	if (isset($_POST['categories']) || isset($_POST['tags']) || isset($_POST['months'])) {
		if (!empty($_POST['categories'])) {
			createSidebar($_POST['categories'], 'Categories');
		}
		if (!empty($_POST['tags'])) {
			createSidebar($_POST['tags'],'Tags');
		}
		if (!empty($_POST['months'])) {
			createSidebar($_POST['months'],'Months');
		}

	}
	function createSidebar ($input, $name) {
		$list = split(", ", $input);
?>
	<aside>
		<h1><?= $name ?></h1>
		<ul type="circle">	
<?php 	foreach ($list as $item) { ?>
 			<li><?=htmlentities($item) ?></li>	
<?php	}  ?>
		</ul>	
	</aside>
<?php	
	} 
 ?>