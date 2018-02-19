        <h2>matching</h2>
        <p><a class="btn btn-warning" href="<?=hlien("matching","edit","id",0)?>">Nouveau matching</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Id</th>
			<th>Utilisateur</th>
			<th>Contact</th>
			<th>Score</th>
			<th>Affinite</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach($result as $row) { ?>
		<tr>
			
			<td><?=mhe($row['mat_id'])?></td>
			<td><?=mhe($row['mat_utilisateur'])?></td>
			<td><?=mhe($row['mat_contact'])?></td>
			<td><?=mhe($row['mat_score'])?></td>
			<td><?=mhe($row['mat_affinite'])?></td><td><a class="btn btn-info" href="<?=hlien("matching","edit","id",$row["mat_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("matching","del","id",$row["mat_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>