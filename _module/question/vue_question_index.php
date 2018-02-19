        <h2>question</h2>
        <p><a class="btn btn-warning" href="<?=hlien("question","edit","id",0)?>">Nouveau question</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Id</th>
			<th>Utilisateur</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach($result as $row) { ?>
		<tr>
			
			<td><?=mhe($row['que_id'])?></td>
			<td><?=mhe($row['que_utilisateur'])?></td><td><a class="btn btn-info" href="<?=hlien("question","edit","id",$row["que_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("question","del","id",$row["que_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>