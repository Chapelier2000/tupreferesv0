        <h2>utiquestion</h2>
        <p><a class="btn btn-warning" href="<?=hlien("utiquestion","edit","id",0)?>">Nouveau utiquestion</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th></th>
			<th>Tion</th>
			<th>Nse</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach($result as $row) { ?>
		<tr>
			
			<td><?=mhe($row['user'])?></td>
			<td><?=mhe($row['question'])?></td>
			<td><?=mhe($row['reponse'])?></td><td><a class="btn btn-info" href="<?=hlien("utiquestion","edit","id",$row["uti_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("utiquestion","del","id",$row["uti_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>