<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajamundry Steels - Yards</title>
<link rel="icon" type="image/png" href="./assets/style.css">
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

        /* HERO */

        .yards-hero {
            min-height: 530px;
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .78), rgba(2, 11, 19, .25)),
                url("https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1800&auto=format&fit=crop");
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
            margin-bottom: 18px;
        }

        .yards-hero h1 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 54px;
            line-height: 1.12;
            font-weight: 900;
            letter-spacing: .5px;
        }

        .yards-hero h1 span {
            color: var(--gold2);
        }

        .yards-hero p {
            max-width: 580px;
            color: #eef3f7;
            font-size: 17px;
            line-height: 1.8;
            margin-top: 22px;
        }

        .gold-line {
            width: 50px;
            height: 3px;
            background: var(--gold);
            margin: 24px 0 0;
        }

        .hero-features {
            display: flex;
            gap: 32px;
            margin-top: 35px;
        }

        .hero-feature {
            display: flex;
            gap: 13px;
            align-items: center;
            border-right: 1px solid rgba(255, 255, 255, .25);
            padding-right: 28px;
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

        .hero-stats {
            margin-top: -90px;
            position: relative;
            z-index: 3;
            padding: 0 50px 20px;
        }

        .stats-box {
            background: rgba(2, 11, 19, .88);
            border: 1px solid rgba(214, 163, 72, .7);
            border-radius: 8px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 22px;
            padding: 28px 45px;
            color: #fff;
            border-right: 1px solid rgba(255, 255, 255, .18);
        }

        .stat-item:last-child {
            border-right: 0;
        }

        .stat-item i {
            color: var(--gold2);
            font-size: 43px;
        }

        .stat-item h3 {
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--gold2);
            font-size: 28px;
            font-weight: 900;
            margin: 0;
        }

        .stat-item p {
            margin: 0;
            font-size: 13px;
            font-weight: 800;
        }

        /* BRANCHES */

        .branches {
            background: #fff;
            padding: 50px 40px 30px;
        }

        .section-center {
            text-align: center;
        }

        .section-center small {
            color: #c88d32;
            font-weight: 800;
            font-size: 14px;
        }

        .section-center h2 {
            font-size: 34px;
            margin: 8px 0 35px;
        }

        .yard-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .yard-card {
            border: 1px solid #d7dce1;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .08);
            background: #fff;
        }

        .yard-img {
            height: 220px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .yard-num {
            position: absolute;
            left: 18px;
            bottom: 18px;
            border: 1px solid var(--gold);
            color: var(--gold2);
            background: #020b13;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            border-radius: 4px;
        }

        .yard-title {
            background: #020b13;
            color: #fff;
            padding: 18px 22px;
        }

        .yard-title h3 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 19px;
            font-weight: 900;
            margin: 0;
        }

        .yard-title span {
            color: var(--gold2);
            font-size: 15px;
            font-weight: 800;
        }

        .yard-info {
            padding: 25px 22px;
        }

        .yard-line {
            display: flex;
            gap: 14px;
            margin-bottom: 16px;
            font-size: 13px;
            line-height: 1.6;
        }

        .yard-line i {
            color: #c88d32;
            font-size: 18px;
            margin-top: 2px;
        }

        .yard-card button {
            border: 1px solid var(--gold);
            background: #fff;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 900;
            margin-top: 8px;
        }

        /* NETWORK */

        .network {
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .88)),
                url("https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=1800&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 55px 50px;
        }

        .network-layout {
            display: grid;
            grid-template-columns: 1fr 1.6fr 1fr;
            gap: 45px;
            align-items: center;
        }

        .network small {
            color: var(--gold2);
            font-weight: 800;
        }

        .network h2 {
            font-size: 34px;
            line-height: 1.15;
            margin: 12px 0;
        }

        .network p {
            color: #e0e8ef;
            font-size: 15px;
            line-height: 1.8;
        }

        .india-map {
            min-height: 330px;
            position: relative;
            background:
                radial-gradient(circle, rgba(214, 163, 72, .45) 0%, rgba(2, 11, 19, .15) 30%, rgba(2, 11, 19, .0) 60%);
        }

        .pin {
            position: absolute;
            color: var(--gold2);
            font-size: 33px;
            text-shadow: 0 0 20px rgba(214, 163, 72, .9);
        }

        .pin-label {
            position: absolute;
            color: #fff;
            font-weight: 800;
            font-size: 13px;
        }

        .p1 {
            left: 42%;
            top: 18%
        }

        .p2 {
            left: 52%;
            top: 34%
        }

        .p3 {
            left: 68%;
            top: 39%
        }

        .p4 {
            left: 50%;
            top: 58%
        }

        .p5 {
            left: 36%;
            top: 67%
        }

        .l1 {
            left: 34%;
            top: 8%
        }

        .l2 {
            left: 55%;
            top: 29%
        }

        .l3 {
            left: 72%;
            top: 39%
        }

        .l4 {
            left: 55%;
            top: 63%
        }

        .l5 {
            left: 40%;
            top: 76%
        }

        .network-card {
            border: 1px solid rgba(214, 163, 72, .65);
            border-radius: 8px;
            padding: 30px;
            background: rgba(2, 11, 19, .65);
        }

        .net-item {
            display: flex;
            gap: 18px;
            margin-bottom: 28px;
        }

        .net-item:last-child {
            margin-bottom: 0;
        }

        .net-item i {
            color: var(--gold2);
            font-size: 32px;
        }

        .net-item h5 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 16px;
            font-weight: 900;
            margin-bottom: 5px;
        }

        .net-item p {
            margin: 0;
            font-size: 14px;
            line-height: 1.5;
        }

        /* CTA */

        .cta-strip {
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .75)),
                url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=1600&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 32px 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
        }

        .cta-strip h2 {
            font-size: 32px;
            line-height: 1.15;
            margin: 0;
        }

        .cta-strip h2 span {
            color: var(--gold2);
        }

        .cta-buttons {
            display: flex;
            gap: 25px;
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
            .yards-hero {
                min-height: auto;
                padding: 80px 0 130px;
            }

            .yards-hero h1 {
                font-size: 42px;
            }

            .hero-features {
                flex-wrap: wrap;
            }

            .hero-feature {
                width: 45%;
                border-right: 0;
            }

            .hero-stats {
                margin-top: -80px;
                padding: 0 22px 20px;
            }

            .stats-box {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat-item {
                border-right: 0;
                border-bottom: 1px solid rgba(255, 255, 255, .15);
            }

            .yard-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .network-layout {
                grid-template-columns: 1fr;
            }

            .cta-strip {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-col {
                border-left: 0;
                padding-left: 0;
            }
        }

        @media(max-width:576px) {
            .yards-hero h1 {
                font-size: 34px;
            }

            .hero-features,
            .stats-box,
            .yard-grid {
                grid-template-columns: 1fr;
                display: grid;
            }

            .hero-feature {
                width: 100%;
            }

            .branches {
                padding: 40px 20px;
            }

            .network {
                padding: 45px 22px;
            }

            .cta-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn-gold,
            .btn-outline-gold {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-lg-5">
            <a href="#" class="navbar-brand logo-wrap">
                <div class="logo-mark">R</div>
                <div>
                    RAJAMUNDRY<br>
                    <span>STEELS</span>
                    <div class="logo-sub">BUILDING STRENGTH. DELIVERING TRUST.</div>
                </div>
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li><a class="nav-link" href="#">HOME</a></li>
                    <li><a class="nav-link" href="#">ABOUT US</a></li>
                    <li><a class="nav-link" href="#">PRODUCTS</a></li>
                    <li><a class="nav-link" href="#">VENDORS</a></li>
                    <li><a class="nav-link active" href="#">YARDS</a></li>
                    <li><a class="nav-link" href="#">INFRASTRUCTURE</a></li>
                    <li><a class="nav-link" href="#">PROJECTS</a></li>
                    <li><a class="nav-link" href="#">CONTACT</a></li>
                    <li>
                        <button class="btn-gold ms-lg-4">
                            GET A QUOTE <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="yards-hero">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-label">OUR YARDS</div>
                    <h1>
                        STRATEGIC LOCATIONS.<br>
                        <span>STRONGER</span> CONNECT.
                    </h1>
                    <p>
                        Our yards are strategically located to ensure better availability,
                        faster delivery and stronger support for every project.
                    </p>
                    <div class="gold-line"></div>

                    <div class="hero-features">
                        <div class="hero-feature">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <h6>STRATEGIC<br>LOCATIONS</h6>
                        </div>
                        <div class="hero-feature">
                            <i class="fa-solid fa-warehouse"></i>
                            <h6>LARGE STOCK &<br>READY AVAILABILITY</h6>
                        </div>
                        <div class="hero-feature">
                            <i class="fa-solid fa-truck"></i>
                            <h6>FASTER DELIVERY<br>ACROSS REGIONS</h6>
                        </div>
                        <div class="hero-feature">
                            <i class="fa-solid fa-headset"></i>
                            <h6>LOCAL SUPPORT,<br>STRONG SERVICE</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-stats">
        <div class="stats-box">
            <div class="stat-item">
                <i class="fa-regular fa-building"></i>
                <div>
                    <h3>4+</h3>
                    <p>YARDS / BRANCHES</p>
                </div>
            </div>

            <div class="stat-item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <h3>100+</h3>
                    <p>CITIES SERVED</p>
                </div>
            </div>

            <div class="stat-item">
                <i class="fa-solid fa-cubes"></i>
                <div>
                    <h3>5000+</h3>
                    <p>TONS STOCK CAPACITY</p>
                </div>
            </div>

            <div class="stat-item">
                <i class="fa-solid fa-users"></i>
                <div>
                    <h3>1000+</h3>
                    <p>HAPPY CLIENTS</p>
                </div>
            </div>
        </div>
    </section>

    <section class="branches">
        <div class="section-center">
            <small>OUR BRANCHES & YARDS</small>
            <h2>Always Near. Always Ready.</h2>
        </div>

        <div class="yard-grid">
            <div class="yard-card">
                <div class="yard-img" style="background-image:url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=800&auto=format&fit=crop')">
                    <div class="yard-num">01</div>
                </div>
                <div class="yard-title">
                    <h3>HEAD OFFICE & MAIN YARD</h3>
                    <span>RAJAHMUNDRY</span>
                </div>
                <div class="yard-info">
                    <div class="yard-line"><i class="fa-solid fa-location-dot"></i><span>Door No: 12-15-3/1, Industrial Area,<br>Rajahmundry, Andhra Pradesh - 533101</span></div>
                    <div class="yard-line"><i class="fa-solid fa-phone"></i><span>+91 91234 56789</span></div>
                    <div class="yard-line"><i class="fa-regular fa-clock"></i><span>Mon - Sat : 8:00 AM - 7:00 PM</span></div>
                    <button>VIEW LOCATION <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button>
                </div>
            </div>

            <div class="yard-card">
                <div class="yard-img" style="background-image:url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=800&auto=format&fit=crop')">
                    <div class="yard-num">02</div>
                </div>
                <div class="yard-title">
                    <h3>VIJAYAWADA YARD</h3>
                    <span>VIJAYAWADA</span>
                </div>
                <div class="yard-info">
                    <div class="yard-line"><i class="fa-solid fa-location-dot"></i><span>Plot No: 48, Auto Nagar,<br>Vijayawada, Andhra Pradesh - 520007</span></div>
                    <div class="yard-line"><i class="fa-solid fa-phone"></i><span>+91 91234 56789</span></div>
                    <div class="yard-line"><i class="fa-regular fa-clock"></i><span>Mon - Sat : 8:00 AM - 7:00 PM</span></div>
                    <button>VIEW LOCATION <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button>
                </div>
            </div>

            <div class="yard-card">
                <div class="yard-img" style="background-image:url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=800&auto=format&fit=crop')">
                    <div class="yard-num">03</div>
                </div>
                <div class="yard-title">
                    <h3>VISAKHAPATNAM YARD</h3>
                    <span>VISAKHAPATNAM</span>
                </div>
                <div class="yard-info">
                    <div class="yard-line"><i class="fa-solid fa-location-dot"></i><span>Door No: 9-3-25/2, Gajuwaka,<br>Visakhapatnam, Andhra Pradesh - 530026</span></div>
                    <div class="yard-line"><i class="fa-solid fa-phone"></i><span>+91 91234 56789</span></div>
                    <div class="yard-line"><i class="fa-regular fa-clock"></i><span>Mon - Sat : 8:00 AM - 7:00 PM</span></div>
                    <button>VIEW LOCATION <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button>
                </div>
            </div>

            <div class="yard-card">
                <div class="yard-img" style="background-image:url('https://images.unsplash.com/photo-1581093458791-9d15482442f6?q=80&w=800&auto=format&fit=crop')">
                    <div class="yard-num">04</div>
                </div>
                <div class="yard-title">
                    <h3>HYDERABAD YARD</h3>
                    <span>HYDERABAD</span>
                </div>
                <div class="yard-info">
                    <div class="yard-line"><i class="fa-solid fa-location-dot"></i><span>Plot No: 112, IDA Kukatpally,<br>Hyderabad, Telangana - 500072</span></div>
                    <div class="yard-line"><i class="fa-solid fa-phone"></i><span>+91 91234 56789</span></div>
                    <div class="yard-line"><i class="fa-regular fa-clock"></i><span>Mon - Sat : 8:00 AM - 7:00 PM</span></div>
                    <button>VIEW LOCATION <i class="fa-solid fa-arrow-right ms-2 text-warning"></i></button>
                </div>
            </div>
        </div>
    </section>

    <section class="network">
        <div class="network-layout">
            <div>
                <small>OUR NETWORK</small>
                <h2>Expanding To Serve<br>You Better.</h2>
                <div class="gold-line"></div>
                <p>
                    We are continuously expanding our network to reach more cities and deliver premium steel solutions faster than ever.
                </p>
                <button class="btn-gold mt-3">
                    BECOME A PARTNER <i class="fa-solid fa-arrow-right ms-2"></i>
                </button>
            </div>

            <div class="india-map">
                <i class="fa-solid fa-location-dot pin p1"></i>
                <i class="fa-solid fa-location-dot pin p2"></i>
                <i class="fa-solid fa-location-dot pin p3"></i>
                <i class="fa-solid fa-location-dot pin p4"></i>
                <i class="fa-solid fa-location-dot pin p5"></i>

                <div class="pin-label l1">HYDERABAD</div>
                <div class="pin-label l2">VISAMINORA</div>
                <div class="pin-label l3">VISAKHAPATANAM</div>
                <div class="pin-label l4">RAJAMUNDRA</div>
                <div class="pin-label l5">KIJAAWADA</div>
            </div>

            <div class="network-card">
                <div class="net-item">
                    <i class="fa-solid fa-globe"></i>
                    <div>
                        <h5>WIDE COVERAGE</h5>
                        <p>Serving multiple states and hundreds of cities.</p>
                    </div>
                </div>

                <div class="net-item">
                    <i class="fa-solid fa-truck"></i>
                    <div>
                        <h5>STRONG LOGISTICS</h5>
                        <p>Our logistics network ensures on-time delivery every time.</p>
                    </div>
                </div>

                <div class="net-item">
                    <i class="fa-regular fa-handshake"></i>
                    <div>
                        <h5>CUSTOMER FIRST</h5>
                        <p>Local support teams to assist you at every step.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-strip">
        <h2>
            No Matter Where You Are,<br>
            <span>We Are Closer Than You Think.</span>
        </h2>

        <div class="cta-buttons">
            <button class="btn-gold">REQUEST A QUOTE <i class="fa-solid fa-arrow-right ms-2"></i></button>
            <button class="btn-outline-gold">CONTACT US <i class="fa-solid fa-arrow-right ms-2"></i></button>
        </div>
    </section>

    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="logo-wrap mb-3">
                        <div class="logo-mark">R</div>
                        <div>
                            RAJAMUNDRY<br>
                            <span>STEELS</span>
                        </div>
                    </div>
                    <p>
                        Premium steel solutions for construction, industrial and commercial needs.
                        Building structures. Strengthening relationships.
                    </p>
                    <div class="socials">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1 footer-col">
                    <h6>QUICK LINKS</h6>
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Products</a>
                    <a href="#">Vendors</a>
                    <a href="#" class="active-link">Yards</a>
                    <a href="#">Infrastructure</a>
                    <a href="#">Projects</a>
                    <a href="#">Contact</a>
                </div>

                <div class="col-lg-2 footer-col">
                    <h6>PRODUCTS</h6>
                    <a href="#">TMT Bars</a>
                    <a href="#">Structural Steel</a>
                    <a href="#">MS Pipes</a>
                    <a href="#">Steel Sheets</a>
                    <a href="#">Roofing Sheets</a>
                    <a href="#">Industrial Steel Supply</a>
                </div>

                <div class="col-lg-2 footer-col">
                    <h6>VENDORS</h6>
                    <a href="#">JSW Steel</a>
                    <a href="#">Tata Steel</a>
                    <a href="#">Vizag Steel</a>
                    <a href="#">BondX Steel</a>
                </div>

                <div class="col-lg-2 footer-col">
                    <h6>CONTACT US</h6>
                    <p><i class="fa-solid fa-phone text-warning me-2"></i> +91 91234 56789</p>
                    <p><i class="fa-solid fa-envelope text-warning me-2"></i> info@rajamundrysteels.com</p>
                    <p><i class="fa-solid fa-location-dot text-warning me-2"></i> Rajahmundry, Andhra Pradesh,<br>India - 533101</p>
                </div>
            </div>

            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between">
                <div>© 2024 Rajamundry Steels. All Rights Reserved.</div>
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

        window.addEventListener("scroll", function() {
            if (window.scrollY > 300) {
                backTop.style.display = "flex";
            } else {
                backTop.style.display = "none";
            }
        });

        backTop.style.display = "none";
    </script>

</body>

</html>