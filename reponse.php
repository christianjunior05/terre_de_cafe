<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">
    
<?php include_once 'includes/navbar.php'; ?>


<body class="single-courses_v">

    
<?php include_once 'includes/header.php'; ?>

    <div class="single-courses-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 sidebar-left">
                    <div class="single-curses-contert">
                        <div class="description-content">
                            <h2 class="text-success">Félicitations ! Votre demande a été envoyée avec succes</h2>

                            <p>
                                <button class="btn btn-lg btn-warning" onclick="history.back()"><i class="fas fa-arrow-left"></i> Retour</button>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area section -->
    <?php include_once 'includes/footer.php'; ?>
    <!-- jQuery -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/assets/bootstrap.min.js"></script>
    <!-- Sticky JS -->
    <script src="js/assets/jquery.sticky.js"></script>
    <!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
    <!-- Slick Slider-->
    <script src="js/assets/slick.min.js"></script>
    <!-- Main Menu -->
    <script src="js/assets/jquery.meanmenu.min.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
</body>

</html>