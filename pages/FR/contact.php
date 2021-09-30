<div class="container">
    <form>
      <div class="row">
        <h1 class="title">CONTACT</h1>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="NomInput">Nom</label>
          <input class="u-full-width" type="text" placeholder="Nom" id="NomInput">
        </div>
        <div class="six columns">
          <label for="PrenomInput">Prénom</label>
          <input class="u-full-width" type="text" placeholder="Prénom" id="PrenomInput">
        </div>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="EmailInput">Email</label>
          <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="EmailInput">
        </div>
        <div class="six columns">
          <label for="RecipientInput">Raison de contact</label>
          <select class="u-full-width" id="RecipientInput">
            <option value="Option 1">Question</option>
            <option value="Option 2">Demande d'informations</option>
            <option value="Option 3">Prise de rendez-vous</option>
          </select>
        </div>
      </div>
      <label for="Message">Message</label>
      <textarea class="u-full-width" placeholder="Votre message" id="Message"></textarea>
      <label class="send-yourself-copy">
        <input type="checkbox">
        <span class="label-body">Envoyer une copie à vous-même</span>
      </label>
      <input class="button-second" type="submit" value="Envoyer">
    </form>
</div>