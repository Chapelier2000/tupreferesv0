        <form method="post" action="<?=hlien("question","save")?>">
		<input type="hidden" name="que_id" id="que_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='que_utilisateur'>Utilisateur</label>
                            <input id='que_utilisateur' name='que_utilisateur' type='text' size='50' value='<?=mhe($que_utilisateur)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              