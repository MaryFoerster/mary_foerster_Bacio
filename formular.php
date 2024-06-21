<section id="kontaktformular">
    <div class="container custom-radius bg-red mt-5 mb-5">
        <form method="post" action="formular_danke.php">
            <div class="row p-4">
                <div class="col-lg-12 pb-3 pt-3">
                   <h2 class="text-white">Schreib Uns</h2>
                </div>
                <div class="col-lg-6">
                    <div class="form-custom">
                        <label class="form-label" for="vorname"><p class="text-white">Vorname*</p></label>
                        <input type="text" id="vorname" name="vorname" class="form-control" required>
                    </div>
                    <div class="form-custom">
                        <label class="form-label" for="nachname"><p class="text-white">Nachname*</p></label>
                        <input type="text" id="nachname" name="nachname" class="form-control" required>
                    </div>
                    <div class="form-custom mt-5">
                        <label class="form-label" for="email"><p class="text-white">E-mail*</p></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="nachricht"><p class="text-white">Nachricht*</p></label>
                        <textarea class="form-control" id="nachricht" name="nachricht" required rows="4"></textarea>
                        <div class="form-custom pt-2  mt-3">
                            <input type="checkbox" class="form-check-input" id="dsgvo-check" name="dsgvo-check" required />
                            <label class="form-check-label text-red" for="dsgvo-check"><a class="text-white" href="datenschutz.php">Ich akzeptiere die DSGVO*</a></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-lg-12">
                    <div class="form-custom d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn-form">Senden</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
