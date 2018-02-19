        <h2>utilisateur</h2>
        <p><a class="btn btn-warning" href="<?=hlien("utilisateur","edit","id",0)?>">Nouveau utilisateur</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Id</th>
			<th>Login</th>
			<th>Mdp</th>
			<th>Mail</th>
			<th>Credit</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach($result as $row) { ?>
		<tr>
			
			<td><?=mhe($row['uti_id'])?></td>
			<td><?=mhe($row['uti_login'])?></td>
			<td><?=mhe($row['uti_mdp'])?></td>
			<td><?=mhe($row['uit_mail'])?></td>
			<td><?=mhe($row['uti_credit'])?></td><td><a class="btn btn-info" href="<?=hlien("utilisateur","edit","id",$row["uti_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("utilisateur","del","id",$row["uti_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>