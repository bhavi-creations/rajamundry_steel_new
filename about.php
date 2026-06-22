<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rajamundry Steels - About Us</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    :root {
      --dark: #020b13;
      --dark2: #061522;
      --gold: #d6a348;
      --gold2: #f3cc73;
      --white: #ffffff;
      --text: #dce4ec;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      color: #101820;
      background: #fff;
    }

    h1,
    h2,
    h3,
    h4 {
      font-family: Georgia, 'Times New Roman', serif;
      font-weight: 700;
    }

    a {
      text-decoration: none;
    }

    /* NAVBAR */

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
      color: var(--gold2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: Georgia, serif;
      font-size: 38px;
      font-weight: 900;
    }

    .logo-wrap span {
      color: var(--gold2);
    }

    @media (max-width:992px) {
      .nav-link {
        color: #fff !important;
        margin: 0 13px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .5px;
      }
    }

    @media (min-width:1200px) {
      .nav-link {
        color: #fff !important;
        margin: 0 13px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .5px;
      }
    }

    .nav-link.active {
      color: var(--gold2) !important;
      border-bottom: 2px solid var(--gold);
    }

    .btn-gold {
      background: linear-gradient(135deg, #f5d989, #c48a34);
      color: #111;
      border: 0;
      padding: 14px 30px;
      border-radius: 4px;
      font-weight: 700;
      font-size: 13px;
    }

    @media (min-width:992px) and (max-width:1200px) {
      .btn-gold {

        padding: 6px 13px;

        font-size: 13px;

      }

      .nav-link {
        color: #ffffff !important;
        margin: 0 3px !important;
        font-size: 13px !important;


        font-weight: 700;
        letter-spacing: .5px;

      }
    }

    .btn-outline-gold {
      border: 1px solid var(--gold);
      color: #fff;
      background: transparent;
      padding: 14px 30px;
      border-radius: 4px;
      font-weight: 700;
      font-size: 13px;
    }

    /* HERO */

    .about-hero {
      min-height: 610px;
      background:
        linear-gradient(90deg, rgba(2, 11, 19, .98) 0%, rgba(2, 11, 19, .8) 42%, rgba(2, 11, 19, .25) 100%),
        url("./assets/img/bg_1.png");
      /* url("https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1800&auto=format&fit=crop"); */
      /* CHANGE THIS IMAGE: hero industrial background with R logo */
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      color: #fff;
    }

    .about-hero .tag {
      color: var(--gold2);
      font-weight: 700;
      margin-bottom: 18px;
    }

    .about-hero h1 {
      font-family: 'Segoe UI', Arial, sans-serif;
      font-size: 55px;
      font-weight: 800;
      line-height: 1.12;
      letter-spacing: 1px;
    }

    .about-hero h1 span {
      font-family: Georgia, serif;
      color: var(--gold2);
      font-size: 64px;
    }

    .hero-line {
      width: 52px;
      height: 3px;
      background: var(--gold2);
      margin: 22px 0;
    }

    .about-hero p {
      max-width: 470px;
      color: #e4ebf1;
      font-size: 16px;
      line-height: 1.8;
    }

    .hero-buttons {
      display: flex;
      gap: 25px;
      margin-top: 30px;
    }

    /* WHO WE ARE */

    .who-section {
      background: #f8f8f8;
    }

    .who-img {
      min-height: 455px;
      background: url("./assets/img/about_sideimg.png");
      /* CHANGE THIS IMAGE: Rajamundry Steels building */
      background-size: cover;
      background-position: center;
      margin-top: 10px;
    }

    .who-content {
      padding: 62px 50px;
    }

    .section-tag {
      color: #c88d32;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: .5px;
    }

    .who-content h2 {
      font-size: 36px;
      line-height: 1.08;
      margin: 12px 0 22px;
    }

    .who-content h2 span {
      color: #c88d32;
    }

    .who-content p {
      font-size: 14px;
      line-height: 1.8;
      color: #252c34;
      max-width: 620px;
    }

    .stat-row {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-top: 35px;
    }

    .mini-stat {
      text-align: center;
      border-right: 1px solid #d6d6d6;
    }

    .mini-stat:last-child {
      border-right: 0;
    }

    .mini-stat i {
      color: #c88d32;
      font-size: 30px;
      margin-bottom: 10px;
    }

    .mini-stat h3 {
      font-family: 'Segoe UI', Arial, sans-serif;
      font-size: 28px;
      font-weight: 800;
      margin: 0;
    }

    .mini-stat small {
      font-size: 11px;
      font-weight: 700;
    }

    .quote-card {
      background: linear-gradient(145deg, #061522, #020b13);
      color: #fff;
      padding: 45px 35px;
      border-radius: 10px;
      box-shadow: 0 18px 35px rgba(0, 0, 0, .25);
      min-height: 350px;
    }

    .quote-card .quote {
      color: var(--gold2);
      font-size: 42px;
    }

    .quote-card p {
      color: #fff;
      font-size: 18px;
      line-height: 1.7;
    }

    .quote-card .sign {
      font-family: cursive;
      color: #fff;
      font-size: 22px;
      margin-top: 25px;
    }

    .quote-card small {
      color: var(--gold2);
      font-weight: 700;
    }

    /* JOURNEY */

    .journey {
      background:
        linear-gradient(90deg, rgba(2, 11, 19, .97), rgba(2, 11, 19, .88)),
        url("https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?q=80&w=1600&auto=format&fit=crop");
      /* CHANGE THIS IMAGE: dark road / steel background */
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 65px 0;
    }

    .journey h2 {
      font-size: 32px;
      line-height: 1.2;
    }

    .timeline {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 20px;
      position: relative;
    }

    .time-item {

      text-align: center;
      border: 2px solid white;
      padding: 20px;
      position: relative;

    }

    .circle {
      width: 76px;
      height: 76px;
      margin: auto;
      border: 1px solid var(--gold);
      border-radius: 50%;
      color: var(--gold2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 30px;
    }

    .time-item h4 {
      color: var(--gold2);
      font-family: 'Segoe UI', Arial, sans-serif;
      font-size: 19px;
      font-weight: 800;
      margin-top: 16px;
    }

    .time-item h6 {
      font-size: 12px;
      font-weight: 800;
    }

    .time-item p {
      color: #d7e0e7;
      font-size: 12px;
      line-height: 1.6;
    }

    /* VALUES */

    .values {
      background: #fff;
      padding: 65px 0;
    }

    .values-title h2 {
      font-size: 32px;
      line-height: 1.1;
    }

    .value-card {
      border: 1px solid #d6d6d6;
      border-radius: 8px;
      padding: 28px 18px;
      height: 100%;
      text-align: center;
      transition: .3s;
    }

    .value-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, .1);
    }

    .value-card i {
      font-size: 38px;
      color: #c88d32;
      margin-bottom: 20px;
    }

    .value-card h6 {
      font-weight: 800;
      font-size: 13px;
    }

    .value-card p {
      font-size: 12px;
      color: #333;
      line-height: 1.7;
    }

    /* CTA */

    .cta {
      background:
        linear-gradient(90deg, rgba(2, 11, 19, .96), rgba(2, 11, 19, .78)),
        url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=1600&auto=format&fit=crop");
      /* CHANGE THIS IMAGE: steel rods footer CTA */
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 48px 0;
    }

    .cta h2 {
      font-size: 32px;
    }

    .cta h2 span {
      color: var(--gold2);
    }

    /* FOOTER */

    .footer {
      background: #020b13;
      color: #fff;
      padding: 45px 0 15px;
    }

    .footer p {
      color: #cbd5df;
      font-size: 13px;
      line-height: 1.7;
    }

    .footer h6 {
      font-size: 14px;
      font-weight: 800;
      margin-bottom: 20px;
    }

    .footer a {
      color: #cbd5df;
      display: block;
      font-size: 13px;
      margin-bottom: 8px;
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
      padding-top: 14px;
      margin-top: 30px;
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
    }

    /* RESPONSIVE */

    @media(max-width:991px) {
      .about-hero h1 {
        font-size: 40px;
      }

      .about-hero h1 span {
        font-size: 48px;
      }

      .hero-buttons {
        flex-direction: column;
        max-width: 280px;
      }

      .stat-row {
        grid-template-columns: repeat(2, 1fr);
      }

      .timeline {
        grid-template-columns: repeat(2, 1fr);
      }

      .quote-card {
        margin-top: 30px;
      }
    }

    @media(max-width:576px) {
      .about-hero {
        min-height: auto;
        padding: 80px 0;
      }

      .about-hero h1 {
        font-size: 34px;
      }

      .about-hero h1 span {
        font-size: 40px;
      }

      .who-content {
        padding: 45px 10px;
      }

      .stat-row {
        grid-template-columns: repeat(2, 1fr);
      }

      .mini-stat {
        border-right: 0;
        border-bottom: 1px solid #ddd;
        padding-bottom: 15px;
      }

      .timeline {
        grid-template-columns: 1fr;
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
          <!-- RAJAMUNDRY<br>
          <span>STEELS</span> -->
          <img src="./assets/img/logo.png" alt="logo">
        </div>
      </a>

      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainMenu">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <!-- <li><a href="inde" class="nav-link">HOME</a></li>
          <li><a href="#" class="nav-link active">ABOUT US</a></li>
          <li><a href="#" class="nav-link">PRODUCTS</a></li>
          <li><a href="#" class="nav-link">VENDORS</a></li>
          <li><a href="#" class="nav-link">INFRASTRUCTURE</a></li>
          <li><a href="#" class="nav-link">PROJECTS</a></li>
          <li><a href="#" class="nav-link">CONTACT</a></li>
          <li><button class="btn-gold ms-lg-4">GET A QUOTE &nbsp; <i class="fa-solid fa-arrow-right"></i></button></li> -->



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

  <section class="about-hero">
    <div class="container-fluid px-lg-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="tag">ABOUT US</div>
          <h1>
            A LEGACY OF<br>
            <span>STRENGTH.</span><br>
            A FUTURE OF <span>TRUST.</span>
          </h1>
          <div class="hero-line"></div>
          <p>
            <!-- Rajamundry Steels has been a trusted name in the steel industry,
            delivering quality, reliability and unmatched service for over two decades. -->

            Founded with a vision to provide top-grade steel products, Rajahmundry Steels has grown into a premier steel trading company and a preferred supplier for contractors, builders, industrial giants, and infrastructure developers.
          </p>
          <div class="hero-buttons">
            <a href="Products.php"> <button class="btn-gold">Products &nbsp; <i class="fa-solid fa-arrow-right"></i></button></a>
            <a href="contact.php"> <button class="btn-outline-gold">Contact <i class="fa-solid fa-arrow-right"></i></button></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="who-section">
    <div class="container-fluid">
      <div class="row g-0 align-items-stretch">
        <div class="col-lg-3 d-none d-lg-block">
          <div class="who-img"></div>
        </div>

        <div class="col-lg-6">
          <div class="who-content">
            <div class="section-tag">WHO WE ARE</div>
            <h2>Building Strength.<br>Creating Trust.<br>Delivering <span>Excellence.</span></h2>
            <p>
              With over 60 years of excellence in the steel industry, Rajamundry Steels has established itself as a trusted name for premium-quality steel products and reliable supply solutions.
            </p>
            <p>
              Built on integrity, quality, and customer commitment, we proudly serve contractors, builders, industries, and infrastructure developers with durable steel solutions that support stronger structures and long-lasting growth.
            </p>

            <div class="stat-row">
              <div class="mini-stat">
                <i class="fa-solid fa-award"></i>
                <h3>60+</h3>
                <small>YEARS OF<br>EXCELLENCE</small>
              </div>
              <div class="mini-stat">
                <i class="fa-solid fa-users"></i>
                <h3>1000+</h3>
                <small>SATISFIED<br>CLIENTS</small>
              </div>
              <div class="mini-stat">
                <i class="fa-solid fa-truck"></i>
                <h3>5000+</h3>
                <small>SUCCESSFUL<br>DELIVERIES</small>
              </div>
              <div class="mini-stat">
                <i class="fa-solid fa-industry"></i>
                <h3>4+</h3>
                <small>TRUSTED STEEL<br>BRAND PARTNERS</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-block d-lg-none">
          <div class="who-img"></div>
        </div>

        <div class="col-lg-3 d-flex align-items-center justify-content-center p-4">
          <div class="quote-card">
            <div class="quote">“</div>
            <p>
              Our mission is to deliver premium-quality steel products with trust, timely supply, and a strong commitment to excellence in every project.
            </p>
            <div class="hero-line"></div>
            <div class="sign">Swamy</div>
            <small>FOUNDER</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="journey">
    <div class="container-fluid px-lg-5">
      <div class="row align-items-center">
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div class="section-tag">OUR JOURNEY</div>
          <h2>From Humble Beginnings<br>To Industry Leadership</h2>
        </div>

        <div class="col-lg-9">
          <div class="timeline">
            <div class="time-item">
              <div class="circle"><i class="fa-regular fa-building"></i></div>
              <h4>1963</h4>
              <h6>THE BEGINNING</h6>
              <p>Started as a local steel trading firm with a big vision, rooted in strong core values.</p>
            </div>

            <div class="time-item">
              <div class="circle"><i class="fa-solid fa-arrow-trend-up"></i></div>
              <h4>1983</h4>
              <h6>STEADY GROWTH</h6>
              <p>Expanded our product portfolio and established a strong market presence.</p>
            </div>

            <div class="time-item">
              <div class="circle"><i class="fa-regular fa-handshake"></i></div>
              <h4>2003</h4>
              <h6>STRONG PARTNERSHIPS</h6>
              <p>Became direct authorized vendors and distributors for India’s leading steel manufacturers.</p>
            </div>

            <div class="time-item">
              <div class="circle"><i class="fa-solid fa-warehouse"></i></div>
              <h4>2020</h4>
              <h6>EXPANDING INFRASTRUCTURE</h6>
              <p>Invested in large-scale warehousing and advanced logistics to handle bulk commercial demands seamlessly.</p>
            </div>

            <div class="time-item">
              <div class="circle"><i class="fa-solid fa-trophy"></i></div>
              <h4>2026+</h4>
              <h6>LEADING THE FUTURE</h6>
              <p>Continuing our rich legacy by adopting modern supply chain solutions, driven by trust, quality, and excellence.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="journey">
    <div class="container-fluid px-lg-5">
      <div class="row align-items-center">
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div class="section-tag">OUR JOURNEY</div>
          <h2>Six Decades Of Excellence<br>In The Steel Industry</h2>
        </div>

        <div class="col-lg-9">
          <div class="timeline">

            <div class="time-item">
              <div class="circle"><i class="fa-regular fa-building"></i></div>
              <h4>1963</h4>
              <h6>THE FOUNDATION</h6>
              <p>Established with a vision to supply quality steel products and build lasting customer relationships through trust and reliability.</p>
            </div>

            <div class="time-item">
              <div class="circle"><i class="fa-solid fa-arrow-trend-up"></i></div>
              <h4>1985</h4>
              <h6>EXPANDING HORIZONS</h6>
              <p>Strengthened our presence across the region by expanding product offerings and serving growing construction and industrial sectors.</p>
            </div>

            <div class="time-item">
              <div class="circle"><i class="fa-regular fa-handshake"></i></div>
              <h4>2000</h4>
              <h6>TRUSTED PARTNERSHIPS</h6>
              <p>Built strong alliances with leading steel manufacturers, becoming a preferred supplier for contractors, builders, and industries.</p>
            </div>

            <div class="time-item">
              <div class="circle"><i class="fa-solid fa-warehouse"></i></div>
              <h4>2015</h4>
              <h6>MODERN INFRASTRUCTURE</h6>
              <p>Enhanced warehousing capabilities and logistics operations to ensure faster deliveries and efficient inventory management.</p>
            </div>

            <div class="time-item">
              <div class="circle"><i class="fa-solid fa-trophy"></i></div>
              <h4>2026+</h4>
              <h6>BUILDING THE FUTURE</h6>
              <p>Continuing our 60+ year legacy by delivering premium steel solutions, embracing innovation, and contributing to stronger infrastructure for generations to come.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>






  <!--<section class="values">
    <div class="container-fluid px-lg-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-3 values-title">
          <div class="section-tag">OUR VALUES</div>
          <h2>The Principles That<br>Define Us</h2>
          <div class="hero-line"></div>
        </div>

        <div class="col-lg-9">
          <div class="row g-3">
            <div class="col-md-4 col-lg-2">
              <div class="value-card">
                <i class="fa-solid fa-shield-halved"></i>
                <h6>PREMIUM QUALITY :</h6>
                <p> We source and deliver only the highest-grade steel and TMT products that meet strict industrial standards.</p>
              </div>
            </div>

            <div class="col-md-4 col-lg-3">
              <div class="value-card">
                <i class="fa-regular fa-handshake"></i>
                <h6>UNCOMPROMISING INTEGRITY :</h6>
                <p> Honest business practices and 100% transparent dealings form the foundation of our company.</p>
              </div>
            </div>

            <div class="col-md-4 col-lg-2">
              <div class="value-card">
                <i class="fa-regular fa-user"></i>
                <h6>CUSTOMER -CENTRIC FOCUS :</h6>
                <p> Your project timelines are important to us. Our customers’ success and satisfaction are our top priorities.</p>
              </div>
            </div>

            <div class="col-md-4 col-lg-2">
              <div class="value-card">
                <i class="fa-solid fa-gear"></i>
                <h6>ABSOLUTE RELIABILITY :</h6>
                <p> Count on Rajahmundry Steels for consistent material quality and on-time site delivery, every single time.</p>
              </div>
            </div>

            <div class="col-md-4 col-lg-2">
              <div class="value-card">
                <i class="fa-solid fa-users"></i>
                <h6>EXPERT TEAMWORK :</h6>
                <p> Our skilled team works closely with clients to understand and fulfill bulk requirements efficiently.</p>
              </div>
            </div>

             <div class="col-md-4 col-lg-2">
              <div class="value-card">
                <i class="fa-solid fa-seedling"></i>
                <h6>SUSTAINABILITY :</h6>
                <p> We are committed to responsible, sustainable growth and eco-friendly practices in the steel supply chain.</p>
              </div>
            </div> 
          </div>
        </div>

      </div>
    </div>
  </section>-->


  <section class="values">
    <div class="container-fluid px-lg-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-3 values-title">
          <div class="section-tag">OUR VALUES</div>
          <h2>The Principles That<br>Define Us</h2>
          <div class="hero-line"></div>
        </div>

        <div class="col-lg-9">
          <div class="row g-3">
            <div class="col-md-4 col-lg-2 col-6">
              <div class="value-card">
                <i class="fa-solid fa-shield-halved"></i>
                <h6>PREMIUM QUALITY</h6>
                <p>We deliver high-grade steel products that meet strong standards of strength, durability and performance.</p>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 col-6">
              <div class="value-card">
                <i class="fa-regular fa-handshake"></i>
                <h6>BUSINESS INTEGRITY</h6>
                <p>Our relationships are built on honest dealings, transparent pricing and ethical business practices.</p>
              </div>
            </div>

            <div class="col-md-4 col-lg-2 col-6">
              <div class="value-card">
                <i class="fa-regular fa-user"></i>
                <h6>CUSTOMER COMMITMENT</h6>
                <p>We understand every project requirement and provide dependable steel solutions with dedicated support.</p>
              </div>
            </div>

            <div class="col-md-4 col-lg-2 col-6">
              <div class="value-card">
                <i class="fa-solid fa-truck-fast"></i>
                <h6>ON-TIME DELIVERY</h6>
                <p>With strong supply and logistics support, we ensure timely delivery for construction and industrial needs.</p>
              </div>
            </div>

            <div class="col-md-4 col-lg-3 col-12">
              <div class="value-card">
                <i class="fa-solid fa-users-gear"></i>
                <h6>INDUSTRY EXPERTISE</h6>
                <p>Backed by 60+ years of experience, our team helps clients choose the right steel for every project.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>




  <section class="cta">
    <div class="container-fluid px-lg-5">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h2>Let’s Build A <span>Stronger Tomorrow</span>, Together.</h2>
          <p>Partner with Rajamundry Steels for premium quality steel and exceptional service.</p>
        </div>
        <div class="col-lg-5 text-lg-end">
          <a href="get_a_qoute.php"> <button class="btn-gold me-lg-3 mb-2">REQUEST A QUOTE &nbsp; <i class="fa-solid fa-arrow-right"></i></button></a>
          <a href="contact.php"> <button class="btn-outline-gold mb-2">CONTACT US</button></a>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container-fluid px-lg-5">
      <div class="row g-4">
        <div class="col-lg-3 col-6">
          <div class="logo-wrap mb-3">
            <!-- <div class="logo-mark">R</div> -->
            <div>
              <img src="./assets/img/logo.png" alt="logo">
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

        <div class="col-lg-2 col-6 offset-lg-1">
          <h6>QUICK LINKS</h6>
          <a href="index.php">Home</a>
          <a href="about.php">About Us</a>
          <a href="products.php">Products</a>
          <a href="vendors.php">Vendors</a>
          <a href="blogs.php">Blogs</a>
          <a href="yards.php">Yards</a>
          <a href="contact.php">Contact</a>
        </div>

        <div class="col-lg-2 col-6">
          <h6>PRODUCTS</h6>
          <a href="Products.php">TMT Bars</a>
          <a href="Products.php">Structural Steel</a>
          <a href="Products.php">MS Pipes</a>
          <a href="Products.php">Steel Sheets</a>
          <a href="Products.php">Roofing Sheets</a>
        </div>

        <div class="col-lg-2 col-4 d-none">
          <h6>VENDORS</h6>
          <a href="Vendors.php">JSW Steel</a>
          <a href="Vendors.php">Tata Steel</a>
          <a href="Vendors.php">Vizag Steel</a>
          <a href="Vendors.php">BondX</a>
        </div>

        <div class="col-lg-4 col-6">
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
    window.addEventListener("scroll", function() {
      const btn = document.querySelector(".back-top");
      if (window.scrollY > 300) {
        btn.style.display = "flex";
      } else {
        btn.style.display = "none";
      }
    });

    document.querySelector(".back-top").style.display = "none";
  </script>

</body>

</html>