<div class="testt">

<form action="index.php?page=contact" method="post">
  <fieldset>
    <legend>Michou le fou</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?=$nom ?>" />
  </div>
  <div>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?=$prenom ?>" />
  </div>
  <div>
    <label for="mail">e-mail :</label>
    <input type="email" name="mail" id="mail" value="<?=$mail ?>" />
  </div>
    <div>
      <label for="tel">Téléphone :</label>
      <input type="text" name="tel" id="tel" value="<?=$tel ?>" />
    </div>
  <div>
    <label for="msg">Message :</label>
    <textarea name="msg" id="msg"><?=$msg ?></textarea>
  </div>
  <div>
    <input type="submit" value="Valider" />
  </div>
  </fieldset>
  <input type="hidden" name="frmContact" />
</form>

</div>
