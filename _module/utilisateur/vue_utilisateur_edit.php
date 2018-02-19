        <form method="post" action="<?=hlien("utilisateur","save")?>">
		<input type="hidden" name="uti_id" id="uti_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='uti_login'>Login</label>
                            <input id='uti_login' name='uti_login' type='text' size='50' value='<?=mhe($uti_login)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='uti_mdp'>Mdp</label>
                            <input id='uti_mdp' name='uti_mdp' type='text' size='50' value='<?=mhe($uti_mdp)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='uit_mail'>Mail</label>
                            <input id='uit_mail' name='uit_mail' type='text' size='50' value='<?=mhe($uit_mail)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='uti_credit'>Credit</label>
                            <input id='uti_credit' name='uti_credit' type='text' size='50' value='<?=mhe($uti_credit)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              