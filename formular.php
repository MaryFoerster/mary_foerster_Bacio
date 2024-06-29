<section id="kontaktformular">
    <div class="container custom-radius bg-red mt-5 mb-5">
        <form method="post" action="formular_danke.php" class="needs-validation" novalidate>
            <div class="row p-2 pl-5 pr-5">
                <div class="col-lg-12 pb-3 pt-4">
                   <h2 class="text-white">Schreib uns eine Nachricht</h2>
                </div>
                <div class="col-lg-6">
                    <div class="form-custom">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationServer01" name="vorname" placeholder="Vorname" required>
                            <label for="validationServer01">Vorname*</label>
                            <div class="invalid-feedback">
                                Achtung! Feld ist leer.
                            </div>
                        </div>
                    </div>
                    <div class="form-custom">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="validationServer02" name="nachname" placeholder="Nachname" required>
                            <label for="validationServer02">Nachname*</label>
                            <div class="invalid-feedback">
                                Achtung! Feld ist leer.
                            </div>
                        </div>
                    </div>
                    <div class="form-custom">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="validationServerEmail" name="email" placeholder="E-Mail-Adresse" required>
                            <label for="validationServerEmail">E-Mail*</label>
                            <div class="invalid-feedback">
                                Achtung! Bitte gib eine gültige E-Mail-Adresse ein.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-custom">
                        <div class="form-floating">
                            <textarea class="form-control" id="validationServerMessage" name="nachricht" placeholder="Nachricht" style="height: 145px;" required></textarea>
                            <label for="validationServerMessage">Nachricht*</label>
                            <div class="invalid-feedback">
                                Achtung! Bitte schreibe eine Nachricht.
                            </div>
                        </div>
                    </div>
                    <div class="form-custom pt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="dsgvo-check" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                                <a href="datenschutz.php" class="datenschutz"><p class="text-white">Ich akzeptiere die Datenschutzbestimmungen. DSGVO*</p></a> 
                            </label>
                            <div class="invalid-feedback">
                                Achtung! Der DSGVO muss zugestimmt werden.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="form-custom d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary">Senden</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
  var floatingInputs = document.querySelectorAll('.form-floating input, .form-floating select, .form-floating textarea');
  
  floatingInputs.forEach(function (input) {
    input.addEventListener('input', function () {
      if (this.value) {
        this.parentNode.classList.add('filled');
      } else {
        this.parentNode.classList.remove('filled');
      }
      if (!input.checkValidity()) {
        input.classList.add('is-invalid');
      } else {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
      }
    });
  });
  var form = document.querySelector('.needs-validation');
  form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
  }, false);
</script>
