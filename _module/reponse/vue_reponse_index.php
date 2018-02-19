        <h2>reponse</h2>
        <p><a class="btn btn-warning" href="<?=hlien("reponse","edit","id",0)?>">Nouveau reponse</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Id</th>
			<th>Contenu</th>
			<th>Utilisateur</th>
			<th>Question</th>
			<th>Item</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach($result as $row) { ?>
		<tr>
			
			<td><?=mhe($row['rep_id'])?></td>
			<td><?=mhe($row['rep_contenu'])?></td>
			<td><?=mhe($row['rep_utilisateur'])?></td>
			<td><?=mhe($row['rep_question'])?></td>
			<td><?=mhe($row['rep_item'])?></td><td><a class="btn btn-info" href="<?=hlien("reponse","edit","id",$row["rep_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("reponse","del","id",$row["rep_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>