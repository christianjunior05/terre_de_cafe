<!doctype html>
<html lang="fr">
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>

  <body>

    <!-- body_wrap - start -->
    <div class="body_wrap">

      <!-- backtotop - start -->
      <div class="backtotop">
        <a href="#" class="scroll">
          <i class="fa-solid fa-arrow-up"></i>
        </a>
      </div>
      <!-- backtotop - end -->
      <!-- preloader - start -->
      <div id="preloader"></div>

      <main>

<section class="contact_section sec_ptb_120 bg_default_gray" id="contact">
  <div class="container">
    <div class="contact_form bg_white wow fadeInUp" data-wow-delay=".1s">
      <div class="main_contact_info_wrap">
        <!-- Vos informations de contact -->
      </div>
      <form action="#">
        <div class="row">
          <div class="col-lg-6">
            <div class="form_item">
              <input type="text" name="nom" placeholder="Votre nom">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form_item">
              <input type="email" name="email" placeholder="Votre Mail:">
            </div>
          </div>
        
        </div>
        <div class="form_item">
          <input type="text" name="subject" placeholder="Nom de l'etablissement ou de l'entreprise ">
        </div>
        <div class="form_item">
          <input type="text" name="subject" placeholder="Votre fonction ">
        </div>
        <div class="form_item">
          <input type="text" name="subject" placeholder="Votre besoin ">
        </div>
        
        <fieldset class="mb-3">
          <legend>Votre secteur d'activité</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Bureaux & entreprises" id="sector_bureaux">
            <label class="form-check-label" for="sector_bureaux">
              Bureaux & entreprises
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Hôtel camping & gite" id="sector_hotel">
            <label class="form-check-label" for="sector_hotel">
              Hôtel, camping & gite
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Etablissement de santé" id="sector_sante">
            <label class="form-check-label" for="sector_sante">
              Etablissement de santé
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Café & restaurant" id="sector_cafe">
            <label class="form-check-label" for="sector_cafe">
              Café & restaurant
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Ecole & université" id="sector_ecole">
            <label class="form-check-label" for="sector_ecole">
              Ecole & université
            </label>
          </div>
        </fieldset>
        <fieldset class="mb-3">
          <legend>Consommation de café</legend>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Bureaux & entreprises" id="sector_bureaux">
            <label class="form-check-label" for="sector_bureaux">
              moins de 50 tasses/jour
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Hôtel camping & gite" id="sector_hotel">
            <label class="form-check-label" for="sector_hotel">
              50-100 tasses par jour
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Etablissement de santé" id="sector_sante">
            <label class="form-check-label" for="sector_sante">
            100 -200 tasses par jour
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="__field_29029" value="Café & restaurant" id="sector_cafe">
            <label class="form-check-label" for="sector_cafe">
            Plus de 200 tasses par jour 
            </label>
          </div>
        </fieldset>


        <div class="form_item">
          <textarea name="message" placeholder="Votre message :"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn_primary text-uppercase">Envoyer </button>
        </div>
      </form>
    </div>
  </div>
</section>


        
      <?php include_once 'includes/footer.php'; ?>
      <!-- footer_section - end
      ================================================== -->

    </div>
    <!-- body_wrap - end -->

    <!-- fraimwork - jquery include -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- animation - jquery include -->
    <script src="assets/js/wow.min.js"></script>

    <!-- carousel - jquery include -->
    <script src="assets/js/slick.min.js"></script>

    <!-- popup - jquery include -->
    <script src="assets/js/magnific-popup.min.js"></script>

    <!-- isotope filter - jquery include -->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!-- google map - jquery include -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
    <script src="assets/js/gmaps.min.js"></script>

    <!-- jquery-ui - jquery include -->
    <script src="assets/js/jquery-ui.js"></script>

    <!-- off canvas sidebar - jquery include -->
    <script src="assets/js/mCustomScrollbar.js"></script>

    <!-- custom - jquery include -->
    <script src="assets/js/main.js"></script>

  </body>
</html>