<!DOCTYPE html>
<html lang="en">
    
<?php require 'templates/head.php'; ?>

<body>
    <?php include 'templates/header.php'; ?>

    <section class="section-gray">
        <section class="page-title center-container">
            <b class="bg-text">About</b>
            <div>
                <h1>About Us</h1>
            </div>
        </section>

        <div class="about-us-photo center-container"><img src="img/bg_businesspeople.jpg" alt="Business people"></div>

        <?php include 'templates/about-us.php'; ?>
    </section>

    <section class="section-white">
        <?php include 'templates/team.php'; ?>
    </section>

    <?php include 'templates/testimonials.php'; ?>

    <?php include 'templates/clients.php'; ?>

    <?php include 'templates/scroll-up.php'; ?>

    <?php include 'templates/footer.php'; ?>

    <script src="scripts/js_script.js"></script>
</body>
</html>