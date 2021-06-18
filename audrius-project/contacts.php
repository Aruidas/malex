<?php require __DIR__ . '/src/app.php'; ?>

<!DOCTYPE html>
<html lang="en">
    
<?php require 'templates/head.php'; ?>

<body>
    <?php include 'templates/header.php'; ?>

    <section class="section-gray">
        <section class="page-title center-container">
            <b class="bg-text">Contacts</b>
            <div>
                <h1>Contacts</h1>
            </div>
        </section>
    </section>

    <?php include 'templates/contacts.php'; ?>

    <?php include 'templates/scroll-up.php'; ?>

    <?php include 'templates/footer.php'; ?>

    <script src="scripts/js_script.js"></script>
</body>
</html>