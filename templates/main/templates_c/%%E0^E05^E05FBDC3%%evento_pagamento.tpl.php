<?php /* Smarty version 2.6.26, created on 2015-09-13 01:43:48
         compiled from evento_pagamento.tpl */ ?>
        <div class="corner-content-1col-top"></div>
        <div class="content-1col-nobox">
          <h1>Pagamento</h1>
          <div class="contactform">
            <form method="post" action="index.php">
              <fieldset><legend>&nbsp;DATI CARTA DI CREDITO&nbsp;</legend>
                <p><label for="numero_carta" class="left">Numero:</label>
                   <input type="text" name="numero_carta" id="numero_carta" class="field" value="" tabindex="5" /></p>
                <p><label for="nome_titolare" class="left">Nome intestatario:</label>
                   <input type="text" name="nome_titolare" id="nome_titolare" class="field" value="" tabindex="6" /></p>
                <p><label for="cognome_titolare" class="left">Cognome intestatario:</label>
                   <input type="text" name="cognome_titolare" id="cognome_titolare" class="field" value="" tabindex="6" /></p>
                <p><label for="scadenza" class="left">Scadenza:</label>
                   <input type="text" name="scadenza" id="scadenza" class="field" value="" tabindex="7" /></p>
                <p><label for="ccv" class="left">CCV:</label>
                   <input type="text" name="ccv" id="ccv" class="field" value="" tabindex="8" /></p>
                <input type="hidden" name="controller" value="evento" />
				<input type="hidden" name="id_evento" value="<?php echo $this->_tpl_vars['dati']['id']; ?>
" />
                <p><input type="submit" name="task" id="button" value="Effettua il pagamento" tabindex="15" /></p>
              </fieldset>
           </form>
          </div>
        </div>
        <div class="corner-content-1col-bottom"></div>