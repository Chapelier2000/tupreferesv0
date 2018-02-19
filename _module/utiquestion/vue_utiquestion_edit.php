        <form method="post" action="<?=hlien("utiquestion","save")?>">
		<input type="hidden" name="uti_id" id="uti_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='user'></label>
                            <input id='user' name='user' type='text' size='50' value='<?=mhe($user)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='question'>Tion</label>
                            <input id='question' name='question' type='text' size='50' value='<?=mhe($question)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='reponse'>Nse</label>
                            <input id='reponse' name='reponse' type='text' size='50' value='<?=mhe($reponse)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              