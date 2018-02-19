        <form method="post" action="<?=hlien("affinite","save")?>">
		<input type="hidden" name="aff_id" id="aff_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='aff_type'>Type</label>
                            <input id='aff_type' name='aff_type' type='text' size='50' value='<?=mhe($aff_type)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              