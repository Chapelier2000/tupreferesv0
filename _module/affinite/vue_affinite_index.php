        <h2>affinite</h2>
        <p><a class="btn btn-warning" href="<?=hlien("affinite","edit","id",0)?>">Nouveau affinite</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Id</th>
			<th>Type</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach($result as $row) { ?>
		<tr>
			
			<td><?=mhe($row['aff_id'])?></td>
			<td><?=mhe($row['aff_type'])?></td><td><a class="btn btn-info" href="<?=hlien("affinite","edit","id",$row["aff_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("affinite","del","id",$row["aff_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>