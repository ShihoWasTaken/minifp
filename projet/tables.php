<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css">
 
		<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable( {
				    language: {
				        processing:     "Traitement en cours...",
				        search:         "Rechercher&nbsp;:",
				        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
				        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
				        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
				        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
				        infoPostFix:    "",
				        loadingRecords: "Chargement en cours...",
				        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
				        emptyTable:     "Aucune donnée disponible dans le tableau",
				        paginate: {
				            first:      "Premier",
				            previous:   "Pr&eacute;c&eacute;dent",
				            next:       "Suivant",
				            last:       "Dernier"
				        },
				        aria: {
				            sortAscending:  ": activer pour trier la colonne par ordre croissant",
				            sortDescending: ": activer pour trier la colonne par ordre décroissant"
				        }
				    }
				} );
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