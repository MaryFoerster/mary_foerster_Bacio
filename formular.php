
<section id="kontaktformular">
    <div class="container custom-radius bg-red mt-5 mb-5">
        <form method="post" action="formular_danke.php">
            <div class="row p-4">
                <div class="col-lg-12 pb-3 pt-3">
                   <h2 class="text-white">Schreib Uns</h2>
                </div>
                <div class="col-lg-6">
                    <div class="form-custom">
                        <label class="form-label" for="name"><p class="text-white">Name*</p></label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-custom">
                        <label class="form-label" for="email"><p class="text-white">E-mail*</p></label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="nachricht"><p class="text-white">Nachricht*</p></label>
                        <textarea class="form-control" id="nachricht" name="nachricht" rows="4"></textarea>
                        <div class="form-custom pt-2">
                            <input type="checkbox" class="form-check-input" id="dsgvo-check" name="dsgvo-check" required />
                            <label class="form-check-label text-red" for="dsgvo-check"><p class="text-white">Ich akzeptiere die Nutzungsbedingungen*</p></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-lg-12">
                    <div class="form-custom d-flex justify-content-end">
                        <img class="img-kontakt" src="img/mozzarella.png" alt="">
                        <button type="submit" name="submit" class="btn-form">Senden</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
