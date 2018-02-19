        <form method="post" action="<?=hlien("item","save")?>">
		<input type="hidden" name="ite_id" id="ite_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='ite_question'>Question</label>
                            <input id='ite_question' name='ite_question' type='text' size='50' value='<?=mhe($ite_question)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='ite_libelle'>Libelle</label>
                            <input id='ite_libelle' name='ite_libelle' type='text' size='50' value='<?=mhe($ite_libelle)?>'  class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              