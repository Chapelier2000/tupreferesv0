        <h2>item</h2>
        <p><a class="btn btn-warning" href="<?=hlien("item","edit","id",0)?>">Nouveau item</a></p>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Id</th>
			<th>Question</th>
			<th>Libelle</th><th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach($result as $row) { ?>
		<tr>
			
			<td><?=mhe($row['ite_id'])?></td>
			<td><?=mhe($row['ite_question'])?></td>
			<td><?=mhe($row['ite_libelle'])?></td><td><a class="btn btn-info" href="<?=hlien("item","edit","id",$row["ite_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("item","del","id",$row["ite_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>