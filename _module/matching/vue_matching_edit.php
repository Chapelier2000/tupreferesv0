        <form method="post" action="<?=hlien("matching","save")?>">
		<input type="hidden" name="mat_id" id="mat_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='mat_utilisateur'>Utilisateur</label>
                            <input id='mat_utilisateur' name='mat_utilisateur' type='text' size='50' value='<?=mhe($mat_utilisateur)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='mat_contact'>Contact</label>
                            <input id='mat_contact' name='mat_contact' type='text' size='50' value='<?=mhe($mat_contact)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='mat_score'>Score</label>
                            <input id='mat_score' name='mat_score' type='text' size='50' value='<?=mhe($mat_score)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='mat_affinite'>Affinite</label>
                            <input id='mat_affinite' name='mat_affinite' type='text' size='50' value='<?=mhe($mat_affinite)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              