<?php
	require 'includes/SPDO.php';

	$select = SPDO::getInstance()->query('SELECT * FROM `insert`');
	foreach(range(0, $select->columnCount() - 1) as $column_index)
	{
		$meta[$column_index] = $select->getColumnMeta($column_index);
		$columnName[] = $meta[$column_index]["name"];
	}
	foreach($meta as $column)
	{
		echo "\t<br> Nom = " . $column["name"] . "<br> Type =" . $column["native_type"] . "</br>";
	}
	exit();
	$data   = $select->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css">
 
		<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-2 col-md-2">
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Menu 1</a></li>
						<li><a href="#">Menu 2</a></li>
						<li><a href="#">Menu 3</a></li>
					</ul>
				</div>
				<div class="col-xs-10 col-md-10">
					<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				            <?php
				            	foreach($columnName as $column)
				            	{
				            		echo "\t<th>" . $column . "</th>";
				            	}
				            ?>
				            </tr>
				        </thead>
				        <tfoot>
				            <?php
				            	foreach($columnName as $column)
				            	{
				            		echo "\t<th>" . $column . "</th>";
				            	}
				            ?>
				        </tfoot>
				        <tbody>
				        <?php
			        		foreach($data as $row)
							{
								echo "<tr>\n";
								foreach($columnName as $column)
								{
									if($row[$column] == NULL)
										$row[$column] = "NULL";
									echo "\t<td>" . $row[$column] . "</td>";
								}
								echo "</tr>\n";
							}
			          	?>
				        </tbody>
				    </table>
				</div>
			</div>
		</div>
	</body>
</html>