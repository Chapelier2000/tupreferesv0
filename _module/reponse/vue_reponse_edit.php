        <form method="post" action="<?=hlien("reponse","save")?>">
		<input type="hidden" name="rep_id" id="rep_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='rep_contenu'>Contenu</label>
                            <input id='rep_contenu' name='rep_contenu' type='text' size='50' value='<?=mhe($rep_contenu)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='rep_utilisateur'>Utilisateur</label>
                            <input id='rep_utilisateur' name='rep_utilisateur' type='text' size='50' value='<?=mhe($rep_utilisateur)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='rep_question'>Question</label>
                            <input id='rep_question' name='rep_question' type='text' size='50' value='<?=mhe($rep_question)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='rep_item'>Item</label>
                            <input id='rep_item' name='rep_item' type='text' size='50' value='<?=mhe($rep_item)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              