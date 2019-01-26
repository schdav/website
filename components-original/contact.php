<section id="contact" class="section is-medium">
  <div class="container">
    <h2 class="title is-1">Kontakt</h2>
    <div class="content is-size-4">
      <form id="contact-form" novalidate>
        <div class="field">
          <label for="form-name" class="label">Name *</label>
          <div class="control">
            <input id="form-name" name="name" class="input" type="text" data-validation="required"
              data-validation-error-msg="Name ist ungültig.">
          </div>
        </div>
        <div class="field">
          <label for="form-email" class="label">E-Mail-Adresse *</label>
          <div class="control">
            <input id="form-email" name="email" class="input" type="email" data-validation="email"
              data-validation-error-msg="E-Mail-Adresse ist ungültig.">
          </div>
        </div>
        <div class="field">
          <label for="form-message" class="label">Nachricht</label>
          <div class="control">
            <textarea id="form-message" name="message" class="textarea"></textarea>
          </div>
        </div>
        <div class="field is-grouped">
          <div class="control">
            <input type="submit" value="Senden" class="button is-primary">
          </div>
          <div class="control">
            <input type="reset" value="Löschen" class="button">
          </div>
        </div>
        <div class="is-size-6 has-text-weight-bold">
          * Pflichtfeld
        </div>
      </form>
    </div>
  </div>
</section>
