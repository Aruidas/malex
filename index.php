<?php require __DIR__ . '/src/app.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php require 'templates/head.php'; ?>

<body>
    <?php include 'templates/header.php'; ?>

    <main>
        <img class="banner-bg1" src="img/bg_banner_1.jpg" alt="Banner background">
        <img class="banner-bg2" src="img/bg_banner_2.jpg" alt="Banner background">
        <div class="center-container">
            <div class="intro">
                <h1>Business <br>Consulting Agency</h1>
                <p>We are a digital business consulting agency that helps companies increase better incomes and help with branding for faster business growing.</p>
                <a href="services.php">Learn More</a>
            </div>
        </div>

        <div class="center-container flex-container banner-buttons">
            <a href="#plans" class="scroll-down img-button">↓</a>
            <button class="language-switch img-button">en</button>
        </div>
    </main>

    <section class="section-gray">
        <section class="services center-container flex-container">
            <div class="service">
                <div><i class="fas fa-chess-knight"></i></div>
                <h4>Strategic Planning</h4>
                <p>Strategic planning is the process of documenting and establishing a direction of your business</p>
                <div class="flex-container read-more">
                    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a><b>Read more</b>
                </div>
            </div>
            <div class="service">
                <div><i class="fas fa-user-tie"></i></div>
                <h4>Consulting & Marketing</h4>
                <p>A marketing consultant is an advisor who works with companies to create and implement marketing strategies.</p>
                <div class="flex-container read-more">
                    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a><b>Read more</b>
                </div>
            </div>
            <div class="service">
                <div><i class="fas fa-chart-pie"></i></div>
                <h4>Financial</h4>
                <p>Financial services is a broad range of more specific activities such as banking, investing, and insurance.</p>
                <div class="flex-container read-more">
                    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a><b>Read more</b>
                </div>
            </div>
        </section>
    
        <?php include 'templates/about-us.php'; ?>
    
        <div class="about-us-photo center-container"><img src="img/bg_businesspeople.jpg" alt="Business people"></div>
    </section>

    <section class="section-white">
        <?php include 'templates/how-it-works.php'; ?>

        <?php include 'templates/team.php'; ?>
    </section>

    <?php include 'templates/plans.php'; ?>


    <section>
        <?php include 'templates/clients.php'; ?>

        <div class="video center-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SDno1HI0pAE?playlist=SDno1HI0pAE&loop=1&mute=1"></iframe>
        </div>
    </section>

    <?php include 'templates/testimonials.php'; ?>

    <section class="section-gray">
        <section class="new-articles center-container">
            <b class="bg-text">News</b>
            <b class="section-title">New articles</b>
            <h2>Check Our Latest Blog Posts</h2>
            <section class="articles flex-container">
                <div>
                    <img src="img/article_1.jpg" alt="Article #1">
                    <h5>5 Amazing and Easy Tips for Sustainable Business Success</h5>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducims…</p>
                    <div class="flex-container read-more">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a><b>Read more</b>
                    </div>
                </div>
                <div>
                    <img src="img/article_2.jpg" alt="Article #2">
                    <h5>Assessing the Maturity of Your Data Management in Industry</h5>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducims…</p>
                    <div class="flex-container read-more">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a><b>Read more</b>
                    </div>
                </div>
                <div>
                    <img src="img/article_3.jpg" alt="Article #3">
                    <h5>How to Build Your Sustainable Business Strategy</h5>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducims…</p>
                    <div class="flex-container read-more">
                        <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a><b>Read more</b>
                    </div>
                </div>
            </section>
            <div class="flex-container"><a href="#">View All Posts</a></div>
        </section>
    </section>

    <?php include 'templates/contacts.php'; ?>

    <?php include 'templates/scroll-up.php'; ?>

    <?php include 'templates/footer.php'; ?>

    <script src="scripts/js_script.js"></script>
</body>
</html>