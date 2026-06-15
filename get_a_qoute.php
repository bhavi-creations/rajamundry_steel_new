<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajamundry Steels - Get A Quote</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --dark: #020b13;
            --dark2: #061522;
            --gold: #d6a348;
            --gold2: #f4c96d;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fff;
            color: #111
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
            line-height: 1
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
            padding: 12px 8px !important
        }

        .btn-gold {
            background: linear-gradient(135deg, #f5d989, #c48a34);
            color: #111;
            border: 0;
            padding: 15px 30px;
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

        .quote-hero {
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .97), rgba(2, 11, 19, .84)),
                url("./assets/img/bg_1.png");
            /* url("https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1800&auto=format&fit=crop"); */
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 70px 40px 45px;
        }

        .hero-title small {
            color: var(--gold2);
            font-weight: 800;
            font-size: 16px
        }

        .hero-title h1 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 58px;
            font-weight: 900;
            line-height: 1.12;
            margin: 18px 0;
        }

        .hero-title h1 span {
            font-family: Georgia, serif;
            color: var(--gold2)
        }

        .hero-title p {
            font-size: 17px;
            line-height: 1.8;
            max-width: 520px;
            color: #edf2f6
        }

        .hero-icons {
            display: flex;
            gap: 45px;
            margin-top: 55px
        }

        .hero-icon {
            border-right: 1px solid rgba(255, 255, 255, .25);
            padding-right: 35px
        }

        .hero-icon:last-child {
            border-right: 0
        }

        .hero-icon i {
            font-size: 42px;
            color: var(--gold2);
            margin-bottom: 14px
        }

        .hero-icon h6 {
            font-size: 13px;
            font-weight: 800;
            line-height: 1.4
        }

        .quote-card {
            background: rgba(3, 15, 26, .88);
            border: 1px solid var(--gold);
            border-radius: 12px;
            padding: 40px 45px;
        }

        .quote-card h2 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 30px;
            font-weight: 900;
        }

        .gold-line {
            width: 42px;
            height: 2px;
            background: var(--gold);
            margin: 16px 0
        }

        .quote-card p {
            color: #e2e9ef;
            line-height: 1.7
        }

        .form-label {
            font-size: 13px;
            font-weight: 800;
            color: #fff
        }

        .form-label span {
            color: #ff5c5c
        }

        .form-control,
        .form-select {
            background: rgba(255, 255, 255, .03);
            border: 1px solid rgba(255, 255, 255, .28);
            color: #ffffff;
            height: 44px;
            font-size: 13px;
        }

        .form-control::placeholder {
            color: #b9c4cf
        }

        .form-select {
            color: #000000
        }

        textarea.form-control {
            height: 85px
        }

        .secure {
            font-size: 12px;
            color: #c9d2dc;
            text-align: center;
            margin-top: 15px
        }

        .benefits {
            border: 1px solid rgba(214, 163, 72, .75);
            border-radius: 10px;
            margin-top: 35px;
            padding: 28px 35px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .benefit {
            display: flex;
            gap: 18px;
            align-items: center;
            border-right: 1px solid rgba(255, 255, 255, .2);
            padding-right: 25px;
        }

        .benefit:last-child {
            border-right: 0
        }

        .benefit i {
            font-size: 40px;
            color: var(--gold2)
        }

        .benefit h6 {
            font-weight: 900;
            font-size: 15px
        }

        .benefit p {
            margin: 0;
            color: #d7e0e7;
            font-size: 14px
        }

        .process {
            padding: 60px 35px 50px;
            text-align: center;
            background: #fff
        }

        .process small {
            color: #c88d32;
            font-weight: 800
        }

        .process h2 {
            font-size: 34px;
            margin: 8px 0
        }

        .r-line {
            color: #c88d32;
            margin-bottom: 35px
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            max-width: 1100px;
            margin: auto;
        }

        .step-icon {
            width: 86px;
            height: 86px;
            background: #020b13;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold2);
            font-size: 36px;
            margin: auto;
            position: relative;
        }

        .step-num {
            position: absolute;
            bottom: -16px;
            background: var(--gold2);
            color: #111;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 900;
        }

        .step h5 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 16px;
            font-weight: 900;
            margin-top: 38px
        }

        .step p {
            font-size: 14px;
            line-height: 1.7
        }

        .cta-box {
            margin: 10px 40px 20px;
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .96), rgba(2, 11, 19, .75)),
                url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=1600&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            color: #fff;
            border-radius: 10px;
            padding: 40px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cta-left {
            display: flex;
            align-items: center;
            gap: 35px
        }

        .shield {
            width: 110px;
            height: 110px;
            border: 2px solid var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold2);
            font-size: 55px;
            border-radius: 18px;
        }

        .cta-box h3 {
            font-size: 30px
        }

        .cta-box h3 span {
            color: var(--gold2)
        }

        .cta-actions {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 230px
        }

        .footer {
            background: #020b13;
            color: #fff;
            padding: 38px 0 12px;
        }

        .footer p {
            color: #cbd5df;
            font-size: 13px;
            line-height: 1.7
        }

        .footer h6 {
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 18px
        }

        .footer a {
            color: #cbd5df;
            display: block;
            font-size: 13px;
            margin-bottom: 7px
        }

        .footer-col {
            border-left: 1px solid rgba(255, 255, 255, .15);
            padding-left: 35px
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

        @media(max-width:991px) {
            .hero-title h1 {
                font-size: 42px
            }

            .hero-icons,
            .benefits,
            .steps {
                grid-template-columns: 1fr 1fr;
                display: grid
            }

            .quote-card {
                margin-top: 40px
            }

            .cta-box,
            .cta-left {
                flex-direction: column;
                align-items: flex-start
            }

            .footer-col {
                border-left: 0;
                padding-left: 0
            }
        }

        @media(max-width:576px) {
            .quote-hero {
                padding: 50px 22px
            }

            .hero-title h1 {
                font-size: 34px
            }

            .hero-icons,
            .benefits,
            .steps {
                grid-template-columns: 1fr
            }

            .benefit {
                border-right: 0
            }

            .quote-card {
                padding: 28px 20px
            }

            .cta-box {
                margin: 10px 20px;
                padding: 30px 25px
            }
        }




/* new stylings  */
.process{
    padding:80px 20px;
    text-align:center;
    background:#f8f9fa;
}

.process small{
    color:#c9a227;
    font-weight:600;
    letter-spacing:2px;
}

.process h2{
    font-size:42px;
    font-weight:700;
    margin:15px 0;
}

.steps{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
    margin-top:60px;
}

.step{
    background:#fff;
    padding:35px 25px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    transition:.4s ease;
    position:relative;
    height:100%;
}

.step:hover{
    transform:translateY(-10px);
}

.step-icon{
    width:90px;
    height:90px;
    margin:0 auto 25px;
    border-radius:50%;
    background:#0f172a;
    color:#c9a227;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:32px;
    position:relative;
}

.step-num{
    position:absolute;
    right:-8px;
    top:-8px;
    width:32px;
    height:32px;
    border-radius:50%;
    background:#c9a227;
    color:#fff;
    font-size:14px;
    font-weight:700;
    display:flex;
    align-items:center;
    justify-content:center;
}

.step h5{
    font-size:18px;
    font-weight:700;
    margin-bottom:15px;
}

.step p{
    color:#666;
    line-height:1.7;
    margin:0;
}

@media(max-width:991px){
    .steps{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:576px){
    .steps{
        grid-template-columns:1fr;
    }

    .process h2{
        font-size:30px;
    }
}

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-lg-5">
            <a href="#" class="navbar-brand logo-wrap">
                <!-- <div class="logo-mark">R</div>
                <div>RAJAMUNDRY<br><span>STEELS</span>
                    <div class="logo-sub">BUILDING STRENGTH. DELIVERING TRUST.</div>
                </div> -->
                <img src="./assets/img/logo.png" alt="logo">
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li><a class="nav-link active" href="index.php">HOME</a></li>
                    <li><a class="nav-link" href="about.php">ABOUT US</a></li>
                    <li><a class="nav-link" href="blogs.php">BLOGS</a></li>
                    <li><a class="nav-link" href="Products.php">PRODUCTS</a></li>
                    <li><a class="nav-link" href="Vendors.php">VENDORS</a></li>
                    <li><a class="nav-link" href="yards.php">YARDS</a></li>

                    <li><a class="nav-link" href="contact.php">CONTACT</a></li>
                    <a href="get_a_qoute.php">
                        <li><button href="get_a_qoute.php" class="btn-gold ms-lg-3"> GET IN A QUOTE → </button></li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <section class="quote-hero">
        <div class="container-fluid">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 hero-title">
                    <small>GET A QUOTE</small>
                    <h1>STRONG PROJECTS<br><span>START WITH THE<br>RIGHT MATERIAL.</span></h1>
                    <p>Share your requirements with us and our team will provide the best steel solutions with competitive prices and on-time delivery.</p>

                    <div class="hero-icons">
                        <div class="hero-icon"><i class="fa-solid fa-award"></i>
                            <h6>BEST PRICES<br>GUARANTEED</h6>
                        </div>
                        <div class="hero-icon"><i class="fa-solid fa-shield-halved"></i>
                            <h6>PREMIUM<br>QUALITY</h6>
                        </div>
                        <div class="hero-icon"><i class="fa-solid fa-truck"></i>
                            <h6>ON-TIME<br>DELIVERY</h6>
                        </div>
                        <div class="hero-icon"><i class="fa-solid fa-headset"></i>
                            <h6>EXPERT<br>SUPPORT</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="quote-card">
                        <h2>REQUEST A QUOTE</h2>
                        <div class="gold-line"></div>
                        <p>Fill in your requirements and we will get back to you with the best quote.</p>

                        <form  action="send_quote.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name <span>*</span></label>
                                    <input class="form-control" placeholder="Enter your full name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number <span>*</span></label>
                                    <input class="form-control" placeholder="Enter your phone number">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Address <span>*</span></label>
                                    <input class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Company / Organization</label>
                                    <input class="form-control" placeholder="Enter company name">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Project Location <span>*</span></label>
                                    <select class="form-select">
                                        <option>Select project location</option>
                                        <option>Rajahmundry</option>
                                        <option>Gannavaram</option>
                                        <option>Gajuwaka</option>
                                        <!-- <option>Hyderabad</option> -->
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Product Required <span>*</span></label>
                                    <select class="form-select">
                                        <option>Select product</option>
                                        <option>TMT Bars</option>
                                        <option>Structural Steel</option>
                                        <option>MS Pipes</option>
                                        <option>Steel Sheets</option>
                                        <option>Binding Wire & Accessories</option>

                                        </option>Angles, Channels & Beam</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Quantity <span>*</span></label>
                                    <input class="form-control" placeholder="Enter quantity">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">&nbsp;</label>
                                    <select class="form-select">
                                        <option>MT</option>
                                        <option>KG</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Requirement Details</label>
                                    <textarea class="form-control" placeholder="Please provide more details about your requirement"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn-gold w-100">SUBMIT REQUEST <i class="fa-solid fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="secure"><i class="fa-solid fa-lock text-warning"></i> Your information is secure and will not be shared.</div>
                    </div>
                </div>
            </div>

            <div class="benefits">
                <div class="benefit"><i class="fa-regular fa-clock"></i>
                    <div>
                        <h6>QUICK RESPONSE</h6>
                        <p>We respond within<br>2 working hours</p>
                    </div>
                </div>
                <div class="benefit"><i class="fa-solid fa-shield-halved"></i>
                    <div>
                        <h6>COMPETITIVE PRICING</h6>
                        <p>Best market rates<br>guaranteed</p>
                    </div>
                </div>
                <div class="benefit"><i class="fa-solid fa-award"></i>
                    <div>
                        <h6>100% TRANSPARENCY</h6>
                        <p>Clear pricing with<br>no hidden charges</p>
                    </div>
                </div>
                <div class="benefit"><i class="fa-solid fa-truck"></i>
                    <div>
                        <h6>RELIABLE DELIVERY</h6>
                        <p>On-time delivery<br>every time</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process">
    <small>OUR PROCESS</small>
    <h2>Simple. Efficient. Reliable.</h2>
    <div class="r-line">──── R ────</div>

    <div class="steps">

        <div class="step">
            <div class="step-icon">
                <i class="fa-regular fa-clipboard"></i>
                <div class="step-num">01</div>
            </div>
            <h5>SHARE YOUR REQUIREMENT</h5>
            <p>Tell us about your steel requirements, project details, and quantity needs through our enquiry form.</p>
        </div>

        <div class="step">
            <div class="step-icon">
                <i class="fa-solid fa-headset"></i>
                <div class="step-num">02</div>
            </div>
            <h5>EXPERT CONSULTATION</h5>
            <p>Our team reviews your requirements and recommends the most suitable steel products for your project.</p>
        </div>

        <div class="step">
            <div class="step-icon">
                <i class="fa-regular fa-file-lines"></i>
                <div class="step-num">03</div>
            </div>
            <h5>CUSTOMIZED QUOTATION</h5>
            <p>Receive a competitive quotation with product specifications, pricing, and delivery schedules.</p>
        </div>

        <div class="step">
            <div class="step-icon">
                <i class="fa-regular fa-handshake"></i>
                <div class="step-num">04</div>
            </div>
            <h5>SUPPLY & DELIVERY</h5>
            <p>Upon confirmation, we ensure quality-assured steel supply and timely delivery to your project location.</p>
        </div>

    </div>
</section>

    <section class="cta-box">
        <div class="cta-left">
            <div class="shield"><i class="fa-solid fa-shield-halved"></i></div>
            <div>
                <h3>Let’s Build Something<br><span>STRONG TOGETHER.</span></h3>
                <p>We are ready to supply the strength<br>your project deserves.</p>
            </div>
        </div>

        <div class="cta-actions">
            <button class="btn-gold"><i class="fa-solid fa-phone me-2"></i> CALL US NOW <i class="fa-solid fa-arrow-right ms-2"></i></button>
            <a href="https://wa.me/919652239999" target="_blank"> <button class="btn-outline-gold"><i class="fa-brands fa-whatsapp text-warning me-2"></i> CHAT ON WHATSAPP</button></a>
        </div>
    </section>

    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="logo-wrap mb-3">
                        <!-- <div class="logo-mark">R</div>
                        <div>RAJAMUNDRY<br><span>STEELS</span></div> -->
                        <img src="./assets/img/logo.png" alt="logo">
                    </div>
                    <p>Premium steel solutions for construction, industrial and commercial needs.</p>
                    <div class="socials">
                        <a href=" https://www.facebook.com/RajahmundrySteels/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/rajahmundrysteels/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@RajahmundrySteels-1" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1 footer-col">
                    <h6>QUICK LINKS</h6>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="products.php">Products</a>
                    <a href="vendors.php">Vendors</a>
                    <a href="blogs.php">Blogs</a>
                    <a href="yards.php">Yards</a>
                    <a href="contact.php">Contact</a>
                </div>

                <div class="col-lg-2 footer-col">
                    <h6>PRODUCTS</h6>
                    <a href="Products.php">TMT Bars</a>
                    <a href="Products.php">Structural Steel</a>
                    <a href="Products.php">MS Pipes</a>
                    <a href="Products.php">Steel Sheets</a>
                    <a href="Products.php">Roofing Sheets</a>
                </div>

                <div class="col-lg-2 footer-col">
                    <h6>VENDORS</h6>
                    <a href="Vendors.php">JSW Steel</a>
                    <a href="Vendors.php">Tata Steel</a>
                    <a href="Vendors.php">Vizag Steel</a>
                    <a href="Vendors.php">BondX</a>
                </div>

                <div class="col-lg-2 footer-col">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelector("form").addEventListener("submit", function(e) {
            e.preventDefault();
            alert("Thank you! Your quote request has been submitted.");
        });
    </script>

</body>

</html>