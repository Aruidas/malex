<header id="header">
    <div class="center-container flex-container">
        <div class="logo"><a href="index.php"><img src="img/logo_malex.png" alt="Malex logo"></a></div>

        <nav class="desktop-nav">
            <ul class="flex-container">
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contacts.php">Contacts</a></li>
            </ul>
        </nav>

        <button id="search-button" class="search-button img-button" onclick="toggleSearch()"><i id="search-button-icon" class="fas fa-search"></i></button>
        <button id="hamburger" class="img-button" href="javascript:void(0);" onclick="toggleMenu()">
            <i id="hamburger-icon" class="fa fa-bars"></i>
        </button>

        <section id="header-overlay">
            <nav id="mobile-menu">
                <section class="flex-container">
                    <address>
                        <p>575 Crescent Avenue<br>PA 18951<br>United Kingdom</p>
                        <p><a href="tel:+43253312523">+432 533 12 523</a><br><a href="mailto:info@domain.com">info@domain.com</a></p>
                    </address>
                    <ul> 
                        <li><a href="services.php">Services</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li><a href="pricing.php">Pricing</a></li>
                        <li><a href="testimonials.php">Testimonials</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                    </ul>
                </section>
                <div class="overlay-footer flex-container">
                    <p>© <?= date('Y'); ?> Business Consulting Agency Figma Template By Adveits</p>
                    <div>
                        <button class="language-switch img-button">ru</button>
                        <button class="language-switch img-button">en</button>
                    </div>
                </div>
            </nav>
            <section id="search-overlay">
                <div class="center-container flex-container">
                    <input type="text" placeholder="Search">
                    <button class="img-button"><i class="fas fa-search"></i></button>
                </div>

                <div class="overlay-footer flex-container">
                    <p>© <?= date('Y'); ?> Business Consulting Agency Figma Template By Adveits</p>
                    <div>
                        <button class="language-switch img-button">ru</button>
                        <button class="language-switch img-button">en</button>
                    </div>
                </div>
            </section>
        </section>
    </div>
</header>