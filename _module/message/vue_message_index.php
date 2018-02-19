        <h2>message</h2>
        <p><a class="btn btn-warning" href="<?=hlien("message","edit","id",0)?>">Nouveau message</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Id</th>
			<th>Date</th>
			<th>Texte</th>
			<th>Emetteur</th>
			<th>Destinataire</th>
			<th>Lu</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach($result as $row) { ?>
		<tr>
			
			<td><?=mhe($row['mes_id'])?></td>
			<td><?=mhe($row['mes_date'])?></td>
			<td><?=mhe($row['mes_texte'])?></td>
			<td><?=mhe($row['mes_emetteur'])?></td>
			<td><?=mhe($row['mes_destinataire'])?></td>
			<td><?=mhe($row['mes_lu'])?></td><td><a class="btn btn-info" href="<?=hlien("message","edit","id",$row["mes_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("message","del","id",$row["mes_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>