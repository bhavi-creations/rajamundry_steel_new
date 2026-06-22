<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajamundry Steels - Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --dark: #020b13;
            --dark2: #061522;
            --gold: #d6a348;
            --gold2: #f4c96d;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fff;
            color: #101820
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: Georgia, 'Times New Roman', serif;
            font-weight: 700
        }

        a {
            text-decoration: none
        }

        .navbar {
            background: #020b13;
            padding: 18px 0;
            border-bottom: 1px solid rgba(255, 255, 255, .12);
        }

        .logo-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            font-weight: 800;
            font-size: 24px;
            line-height: 1;
        }

        .logo-mark {
            width: 58px;
            height: 52px;
            border: 2px solid var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Georgia, serif;
            font-size: 38px;
            font-weight: 900;
            background: linear-gradient(135deg, #fff, #c58b35, #111);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo-wrap span {
            color: var(--gold2)
        }

        .logo-sub {
            font-size: 8px;
            color: #fff;
            margin-top: 7px;
            letter-spacing: .4px
        }

        .navbar-nav {
            gap: 12px
        }

        .nav-link {
            color: #fff !important;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .4px;
            padding: 12px 8px !important;
        }

        .nav-link.active {
            color: var(--gold2) !important;
            border-bottom: 2px solid var(--gold);
        }

        .btn-gold {
            background: linear-gradient(135deg, #f5d989, #c48a34);
            color: #111;
            border: 0;
            padding: 15px 15px;
            border-radius: 4px;
            font-weight: 800;
            font-size: 13px;
        }

        .btn-outline-gold {
            border: 1px solid var(--gold);
            color: #fff;
            background: transparent;
            padding: 13px 28px;
            border-radius: 4px;
            font-weight: 800;
            font-size: 13px;
        }

        /* HERO */

        .products-hero {
            min-height: 410px;
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .82), rgba(2, 11, 19, .18)),
                url("./assets/img/bg_1.png");
            /* url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=1800&auto=format&fit=crop"); */
            background-size: cover;
            background-position: center;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .hero-label {
            color: var(--gold2);
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .products-hero h1 {
            font-size: 52px;
            line-height: 1.12;
            margin-bottom: 18px;
        }

        .products-hero h1 span {
            color: var(--gold2);
        }

        .gold-line {
            width: 52px;
            height: 3px;
            background: var(--gold);
            margin: 18px 0;
        }

        .products-hero p {
            font-size: 17px;
            line-height: 1.8;
            max-width: 570px;
            color: #eef3f7;
        }

        .hero-features {
            display: flex;
            gap: 35px;
            margin-top: 32px;
        }

        .hero-feature {
            display: flex;
            align-items: center;
            gap: 13px;
            border-right: 1px solid rgba(255, 255, 255, .24);
            padding-right: 30px;
        }

        .hero-feature:last-child {
            border-right: 0;
        }

        .hero-feature i {
            color: var(--gold2);
            font-size: 34px;
        }

        .hero-feature h6 {
            font-size: 12px;
            font-weight: 900;
            line-height: 1.35;
            margin: 0;
        }

        /* PRODUCTS */

        .products-section {
            background: #fff;
            padding: 45px 55px 22px;
        }

        .section-center {
            text-align: center;
        }

        .section-center small {
            color: #c88d32;
            font-size: 14px;
            font-weight: 800;
        }

        .section-center h2 {
            font-size: 34px;
            margin: 8px 0 32px;
        }

        .r-divider {
            color: #c88d32;
            margin-top: -20px;
            margin-bottom: 28px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 26px;
        }

        .product-card {
            background: #fff;
            border: 1px solid #d7dce1;
            border-radius: 7px;
            overflow: hidden;
            box-shadow: 0 10px 24px rgba(0, 0, 0, .08);
            position: relative;
        }

        .product-img {
            height: 210px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .product-icon {
            position: absolute;
            left: 24px;
            bottom: -32px;
            width: 72px;
            height: 72px;
            border: 1px solid var(--gold);
            border-radius: 12px;
            background: #020b13;
            color: var(--gold2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        .product-content {
            padding: 48px 26px 24px;
        }

        .product-content h3 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 22px;
            font-weight: 900;
            margin-bottom: 10px;
        }

        .product-content p {
            font-size: 14px;
            line-height: 1.7;
            color: #333b45;
        }

        .product-list {
            margin-top: 18px;
        }

        .product-list div {
            font-size: 13px;
            margin-bottom: 9px;
        }

        .product-list i {
            color: #c88d32;
            margin-right: 8px;
        }

        .enquire-btn {
            border: 1px solid var(--gold);
            background: #fff;
            color: #111;
            padding: 10px 18px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 900;
            margin-top: 12px;
        }

        /* COMMITMENT */

        .commitment {
            background: linear-gradient(135deg, #061522, #020b13);
            color: #fff;
            padding: 38px 55px;
        }

        .commitment-layout {
            display: grid;
            grid-template-columns: 1.05fr 1.05fr 1.25fr;
            gap: 35px;
            align-items: center;
        }

        .commit-img {
            min-height: 200px;
            border-radius: 7px;
            background: url("./assets/img/gallrey_3.png");
            background-size: cover;
            background-position: center;
        }

        .commitment small {
            color: var(--gold2);
            font-weight: 800;
        }

        .commitment h2 {
            font-size: 31px;
            line-height: 1.15;
            margin: 12px 0;
        }

        .commitment p {
            color: #e2e9ef;
            font-size: 14px;
            line-height: 1.8;
        }

        .commit-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .commit-stat {
            border: 1px solid rgba(255, 255, 255, .14);
            border-radius: 7px;
            padding: 22px;
            display: flex;
            align-items: center;
            gap: 18px;
            background: rgba(255, 255, 255, .03);
        }

        .commit-stat i {
            color: var(--gold2);
            font-size: 32px;
        }

        .commit-stat h3 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 28px;
            font-weight: 900;
            margin: 0;
        }

        .commit-stat p {
            margin: 0;
            font-size: 12px;
            line-height: 1.3;
        }

        /* CTA */

        .cta-strip {
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .76)),
                url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=1600&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 30px 55px;
            display: grid;
            grid-template-columns: 1.2fr .65fr 1fr;
            align-items: center;
            gap: 35px;
        }

        .cta-strip h2 {
            font-size: 30px;
            line-height: 1.15;
            margin: 0;
        }

        .cta-strip h2 span {
            color: var(--gold2);
        }

        .cta-strip p {
            color: #e2e9ef;
            margin: 0;
            font-size: 14px;
        }

        .cta-actions {
            display: flex;
            gap: 18px;
            justify-content: flex-end;
        }

        /* FOOTER */

        .footer {
            background: #020b13;
            color: #fff;
            padding: 38px 0 12px;
        }

        .footer p {
            color: #cbd5df;
            font-size: 13px;
            line-height: 1.7;
        }

        .footer h6 {
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .footer a {
            color: #cbd5df;
            display: block;
            font-size: 13px;
            margin-bottom: 7px;
        }

        .footer a.active-link {
            color: var(--gold2);
        }

        .footer-col {
            border-left: 1px solid rgba(255, 255, 255, .15);
            padding-left: 35px;
        }

        .socials a {
            display: inline-flex;
            width: 34px;
            height: 34px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--gold);
            border-radius: 50%;
            color: var(--gold2);
            margin-right: 9px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .14);
            padding-top: 12px;
            margin-top: 24px;
            font-size: 12px;
            color: #b6c0c8;
        }

        .back-top {
            position: fixed;
            right: 22px;
            bottom: 22px;
            width: 42px;
            height: 42px;
            border: 1px solid var(--gold);
            color: var(--gold2);
            background: #020b13;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            cursor: pointer;
            z-index: 99;
        }

        /* RESPONSIVE */

        @media(max-width:991px) {
            .products-hero {
                min-height: auto;
                padding: 80px 0;
            }

            .products-hero h1 {
                font-size: 40px;
            }

            .hero-features {
                flex-wrap: wrap;
            }

            .hero-feature {
                width: 45%;
                border-right: 0;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .commitment-layout {
                grid-template-columns: 1fr;
            }

            .cta-strip {
                grid-template-columns: 1fr;
            }

            .cta-actions {
                justify-content: flex-start;
            }

            .footer-col {
                border-left: 0;
                padding-left: 20px;
            }
        }

        @media(max-width:576px) {

            .products-section,
            .commitment {
                padding: 40px 22px;
            }

            .products-hero h1 {
                font-size: 34px;
            }

            .hero-features,
            .product-grid,
            .commit-stats {
                grid-template-columns: 1fr;
                display: grid;
            }

            .hero-feature {
                width: 100%;
            }

            .cta-strip {
                padding: 35px 22px;
            }

            .cta-actions {
                flex-direction: column;
            }

            .btn-gold,
            .btn-outline-gold {
                width: 100%;
            }
        }

        /* mobile device responsive   */
        @media (max-width:576px) {

            .hero-features {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .hero-feature {
                width: 100%;
                text-align: center;
            }
        }



        @media (max-width:576px) {

            .commit-stats {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .commit-stat {
                width: 100%;
                text-align: center;
                flex-direction: column;
                padding: 15px 10px;
            }

            .commit-stat i {
                margin-bottom: 8px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-lg-5">
            <a href="#" class="navbar-brand logo-wrap">
                <!-- <div class="logo-mark">R</div> -->
                <div>
                    <img src="./assets/img/logo.png" alt="logo">
                    <!-- RAJAMUNDRY<br>
                    <span>STEELS</span>
                    <div class="logo-sub">BUILDING STRENGTH. DELIVERING TRUST.</div> -->
                </div>
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li><a class="nav-link active" href="index.php">HOME</a></li>
                    <li><a class="nav-link d-none d-lg-block d-xl-none" href="about.php">ABOUT </a></li>
                    <li><a class="nav-link d-block d-lg-none d-xl-block" href="about.php">ABOUT US</a></li>
                    <li><a class="nav-link" href="blogs.php">BLOGS</a></li>
                    <li><a class="nav-link" href="Products.php">PRODUCTS</a></li>
                    <li><a class="nav-link" href="Vendors.php">VENDORS</a></li>
                    <li><a class="nav-link" href="yards.php">YARDS</a></li>

                    <li><a class="nav-link" href="contact.php">CONTACT</a></li>
                    <a href="get_a_qoute.php">
                        <li><button class="btn-gold ms-lg-3"> GET IN A QUOTE → </button></li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <section class="products-hero">
        <div class="container-fluid px-lg-5">
            <div class="col-lg-6">
                <div class="hero-label">OUR PRODUCTS</div>
                <h1>
                    Quality Steel.<br>
                    <span>Built For Every Project.</span>
                </h1>
                <div class="gold-line"></div>
                <p>
                    With over 60 years of industry expertise, we supply a comprehensive range of premium steel products designed to meet the demands of construction, infrastructure, engineering, and industrial applications. Sourced from India's most trusted manufacturers, our products deliver exceptional strength, durability, and long-term performance.
                </p>

                <div class="hero-features pb-5">
                    <div class="hero-feature">
                        <i class="fa-solid fa-award"></i>
                        <h6>PREMIUM<br>QUALITY</h6>
                    </div>

                    <div class="hero-feature">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h6>TRUSTED<br>BRANDS</h6>
                    </div>

                    <div class="hero-feature">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <h6>WIDE PRODUCT<br>RANGE</h6>
                    </div>

                    <div class="hero-feature">
                        <i class="fa-solid fa-truck"></i>
                        <h6>FAST & RELIABLE<br>DELIVERY</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="products-section">
        <div class="section-center">
            <small>OUR STEEL PRODUCTS</small>
            <h2>Built To Build The Nation</h2>
            <div class="r-divider">──── R ────</div>
        </div>

        <div class="product-grid">
            <div class="product-card">
                <div class="product-img" style="background-image:url('./assets/img/TMT.png')">
                    <div class="product-icon"><i class="fa-solid fa-grip-lines"></i></div>
                </div>
                <div class="product-content">
                    <h3>TMT BARS</h3>
                    <p>High strength TMT bars for stronger & safer construction. Available in various grades.</p>
                    <div class="product-list">
                        <div><i class="fa-regular fa-circle-check"></i> High Tensile Strength</div>
                        <div><i class="fa-regular fa-circle-check"></i> Earthquake Resistant</div>
                        <div><i class="fa-regular fa-circle-check"></i> Corrosion Resistant</div>
                    </div>
                    <!-- <button class="enquire-btn">ENQUIRE NOW <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button> -->
                </div>
            </div>

            <div class="product-card">
                <div class="product-img" style="background-image:url('./assets/img/Structural\ Steel\ -\ Copy.png')">
                    <div class="product-icon"><i class="fa-solid fa-i-cursor"></i></div>
                </div>
                <div class="product-content">
                    <h3>STRUCTURAL STEEL</h3>
                    <p>Wide range of structural steel for buildings, bridges and industrial structures.</p>
                    <div class="product-list">
                        <div><i class="fa-regular fa-circle-check"></i> IS Standard Certified</div>
                        <div><i class="fa-regular fa-circle-check"></i> High Load Bearing Capacity</div>
                        <div><i class="fa-regular fa-circle-check"></i> Precision Manufactured</div>
                    </div>
                    <!-- <button class="enquire-btn">ENQUIRE NOW <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button> -->
                </div>
            </div>

            <div class="product-card">
                <div class="product-img" style="background-image:url('./assets/img/mild_steel_ms_products.png')">
                    <div class="product-icon"><i class="fa-solid fa-circle-nodes"></i></div>
                </div>
                <div class="product-content">
                    <h3>MS PIPES</h3>
                    <p>Durable MS pipes for structural and industrial applications. Available in all sizes.</p>
                    <div class="product-list">
                        <div><i class="fa-regular fa-circle-check"></i> Seamless & Welded Pipes</div>
                        <div><i class="fa-regular fa-circle-check"></i> High Durability</div>
                        <div><i class="fa-regular fa-circle-check"></i> Precision & Strength</div>
                    </div>
                    <!-- <button class="enquire-btn">ENQUIRE NOW <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button> -->
                </div>
            </div>

            <div class="product-card">
                <div class="product-img" style="background-image:url('./assets/img/steel_plates.png')">
                    <div class="product-icon"><i class="fa-regular fa-square"></i></div>
                </div>
                <div class="product-content">
                    <h3>STEEL SHEETS</h3>
                    <p>Premium quality steel sheets for various industrial and commercial applications.</p>
                    <div class="product-list">
                        <div><i class="fa-regular fa-circle-check"></i> CR Sheets / HR Sheets</div>
                        <div><i class="fa-regular fa-circle-check"></i> GI Sheets / GP Sheets</div>
                        <div><i class="fa-regular fa-circle-check"></i> Custom Sizes Available</div>
                    </div>
                    <!-- <button class="enquire-btn">ENQUIRE NOW <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button> -->
                </div>
            </div>

            <div class="product-card">
                <div class="product-img" style="background-image:url('./assets/img/Binding Wire.png')">
                    <div class="product-icon"><i class="fa-solid fa-layer-group"></i></div>
                </div>
                <div class="product-content">
                    <h3>Binding Wire & Accessories</h3>
                    <p>Long lasting roofing solutions for industrial sheds, warehouses and commercial roofs.</p>
                    <div class="product-list">
                        <div><i class="fa-regular fa-circle-check"></i> PPGI / PPGL Sheets</div>
                        <div><i class="fa-regular fa-circle-check"></i> High Corrosion Resistance</div>
                        <div><i class="fa-regular fa-circle-check"></i> Multiple Profiles & Colors</div>
                    </div>
                    <!-- <button class="enquire-btn">ENQUIRE NOW <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button> -->
                </div>
            </div>

            <div class="product-card">
                <div class="product-img" style="background-image:url('./assets/img/angles_channels.png')">
                    <div class="product-icon"><i class="fa-solid fa-ring"></i></div>
                </div>
                <div class="product-content">
                    <h3>Angles, Channels & Beam</h3>
                    <p>Bulk supply of industrial steel for large scale projects and fabrication units.</p>
                    <div class="product-list">
                        <div><i class="fa-regular fa-circle-check"></i> Bulk & Customized Orders</div>
                        <div><i class="fa-regular fa-circle-check"></i> Timely Delivery</div>
                        <div><i class="fa-regular fa-circle-check"></i> Complete Steel Solutions</div>
                    </div>
                    <!-- <button class="enquire-btn">ENQUIRE NOW <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button> -->
                </div>
            </div>
        </div>
    </section>

    <section class="commitment">
        <div class="commitment-layout">
            <div class="commit-img"></div>

            <div>
                <small>OUR COMMITMENT</small>
                <h2>Delivering Strength.<br>Building Trust.<br>Creating Value.</h2>
                <div class="gold-line"></div>
                <p>
                    For over six decades, we have remained committed to supplying premium-quality steel products backed by reliability, integrity, and exceptional customer service. Our focus is to support every project with the right materials, timely delivery, and uncompromising quality standards.
                </p>
            </div>

            <div class="commit-stats">
                <div class="commit-stat">
                    <i class="fa-solid fa-award"></i>
                    <div>
                        <h3>5000+</h3>
                        <p>Successful Deliveries</p>
                    </div>
                </div>

                <div class="commit-stat">
                    <i class="fa-solid fa-users"></i>
                    <div>
                        <h3>1000+</h3>
                        <p>Satisfied Clients</p>
                    </div>
                </div>

                <div class="commit-stat">
                    <i class="fa-solid fa-shield-halved"></i>
                    <div>
                        <h3>60+</h3>
                        <p>Years of Excellence</p>
                    </div>
                </div>

                <div class="commit-stat">
                    <i class="fa-solid fa-handshake"></i>
                    <div>
                        <h3>6+</h3>
                        <p>Trusted Brand Partners</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-strip">
        <h2>
            Looking for a specific steel product<br>
            for <span>your next project?</span>
        </h2>

        <p>
            We are here to provide the<br>
            best steel solutions for you.
        </p>

        <div class="cta-actions">
            <a href="get_a_qoute.php"> <button class="btn-gold">REQUEST A QUOTE <i class="fa-solid fa-arrow-right ms-2"></i></button></a>
            <a href="https://wa.me/919652239999" target="_blank"> <button class="btn-outline-gold">
                    <i class="fa-brands fa-whatsapp text-warning me-2"></i> CHAT ON WHATSAPP
                </button></a>
        </div>
    </section>

    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="logo-wrap mb-3">
                        <!-- <div class="logo-mark">R</div> -->
                        <img src="./assets/img/logo.png" alt="logo">
                        <div>
                            <!-- RAJAMUNDRY<br>
                            <span>STEELS</span> -->
                        </div>
                    </div>
                    <p>
                        Premium steel solutions for construction, industrial and commercial needs.
                        Building structures. Strengthening relationships.
                    </p>
                    <div class="socials">
                        <a href=" https://www.facebook.com/RajahmundrySteels/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/rajahmundrysteels/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@RajahmundrySteels-1" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 offset-lg-1 footer-col">
                    <h6>QUICK LINKS</h6>
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#" class="active-link">Products</a>
                    <a href="#">Vendors</a>
                    <a href="#">Infrastructure</a>
                    <a href="#">Projects</a>
                    <a href="#">Contact</a>
                </div>

                <div class="col-lg-2 col-6 footer-col">
                    <h6>PRODUCTS</h6>
                    <a href="#">TMT Bars</a>
                    <a href="#">Structural Steel</a>
                    <a href="#">MS Pipes</a>
                    <a href="#">Steel Sheets</a>
                    <a href="#">Roofing Sheets</a>
                    <a href="#">Industrial Steel Supply</a>
                </div>

                <div class="col-lg-2 col-6 footer-col  d-none">
                    <h6>VENDORS</h6>
                    <a href="#">JSW Steel</a>
                    <a href="#">Tata Steel</a>
                    <a href="#">Vizag Steel</a>
                    <a href="#">BondX Steel</a>
                </div>

                <div class="col-lg-4 col-md-6 footer-col">
                    <h6>CONTACT US</h6>
                    <p><i class="fa-solid fa-phone text-warning me-2"></i> +91 96522 39999</p>
                    <p><i class="fa-solid fa-envelope text-warning me-2"></i> info@rajamundrysteels.com</p>
                    <p><i class="fa-solid fa-location-dot text-warning me-2"></i> Aditya Nagar, Rajamahendravaram, Andhra Pradesh 533107</p>
                </div>
            </div>

            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between">
                <div>© 2026 Rajamundry Steels. All Rights Reserved.</div>
                <div>Privacy Policy &nbsp; | &nbsp; Terms & Conditions</div>
            </div>
        </div>
    </footer>

    <div class="back-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const backTop = document.querySelector(".back-top");

        window.addEventListener("scroll", () => {
            backTop.style.display = window.scrollY > 300 ? "flex" : "none";
        });

        backTop.style.display = "none";
    </script>

</body>

</html>