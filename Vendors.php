<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rajamundry Steels - Vendors</title>

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
      border-bottom: 1px solid rgba(255, 255, 255, .12)
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

    .nav-link.active {
      color: var(--gold2) !important;
      border-bottom: 2px solid var(--gold)
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
    .vendor-hero {
      min-height: 410px;
      background:
        linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .78), rgba(2, 11, 19, .18)),
        url("./assets/img/bg_1.png");
      /* url("https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1800&auto=format&fit=crop"); */

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
      margin-bottom: 15px
    }

    .vendor-hero h1 {
      font-size: 58px;
      line-height: 1.05;
      margin-bottom: 22px
    }

    .vendor-hero h1 span {
      color: var(--gold2)
    }

    .vendor-hero p {
      font-size: 17px;
      line-height: 1.8;
      max-width: 570px;
      color: #eef3f7
    }

    .gold-line {
      width: 52px;
      height: 3px;
      background: var(--gold);
      margin: 20px 0
    }

    .hero-features {
      display: flex;
      gap: 28px;
      margin-top: 30px
    }

    .hero-feature {
      display: flex;
      gap: 13px;
      align-items: center;
      border-right: 1px solid rgba(255, 255, 255, .28);
      padding-right: 28px
    }

    .hero-feature:last-child {
      border-right: 0
    }

    .hero-feature i {
      color: var(--gold2);
      font-size: 32px
    }

    .hero-feature h6 {
      font-size: 13px;
      line-height: 1.4;
      font-weight: 800;
      margin: 0
    }

    /* VENDORS */
    .vendors-section {
      padding: 45px 50px 25px;
      background: #fff
    }

    .section-center {
      text-align: center
    }

    .section-center small {
      color: #c88d32;
      font-size: 14px;
      font-weight: 800
    }

    .section-center h2 {
      font-size: 32px;
      margin: 8px 0 32px
    }

    .vendor-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 26px
    }

    .vendor-card {
      border: 1px solid #d7dce1;
      border-radius: 7px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 10px 24px rgba(0, 0, 0, .08);
    }

    .vendor-img {
      height: 175px;
      background-size: cover;
      background-position: center;
      position: relative
    }

    .vendor-logo {
      position: absolute;
      left: 50%;
      bottom: -38px;
      transform: translateX(-50%);
      background: #fff;
      width: 150px;
      height: 75px;
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 8px 18px rgba(0, 0, 0, .12);
      font-weight: 900;
      font-size: 28px;
      color: #1b61a9;
    }

    .vendor-logo.tata {
      color: #1d8bd1
    }

    .vendor-logo.vizag {
      color: #258b43;
      font-size: 25px
    }

    .vendor-logo.bondx {
      color: #0b1830
    }

    .vendor-content {
      padding: 55px 22px 25px
    }

    .vendor-content h3 {
      font-family: 'Segoe UI', Arial, sans-serif;
      font-size: 20px;
      font-weight: 900;
      margin-bottom: 12px
    }

    .vendor-content p {
      font-size: 14px;
      line-height: 1.7;
      color: #333b45
    }

    .vendor-list {
      margin-top: 18px
    }

    .vendor-list div {
      font-size: 13px;
      margin-bottom: 9px
    }

    .vendor-list i {
      color: #c88d32;
      margin-right: 8px
    }

    .know {
      font-size: 13px;
      font-weight: 900;
      color: #c88d32;
      margin-top: 20px;
      display: inline-block
    }

    /* STATS */
    .vendor-stats {
      margin: 25px 55px;
      background: linear-gradient(135deg, #061522, #020b13);
      color: #fff;
      border-radius: 10px;
      padding: 28px 35px;
      display: grid;
      grid-template-columns: repeat(5, 1fr);
    }

    .v-stat {
      display: flex;
      gap: 18px;
      align-items: center;
      border-right: 1px solid rgba(255, 255, 255, .2);
      padding: 0 20px
    }

    .v-stat:last-child {
      border-right: 0
    }

    .v-stat i {
      color: var(--gold2);
      font-size: 40px
    }

    .v-stat h3 {
      font-family: 'Segoe UI', Arial, sans-serif;
      color: var(--gold2);
      font-size: 27px;
      font-weight: 900;
      margin: 0
    }

    .v-stat p {
      font-size: 13px;
      font-weight: 800;
      margin: 0;
      line-height: 1.3
    }

    /* NETWORK */
    .vendor-network {
      padding: 20px 55px 30px;
      background: #fff
    }

    .network-layout {
      display: grid;
      grid-template-columns: 1.15fr 1.45fr .85fr;
      gap: 28px;
      align-items: stretch
    }

    .network-text small {
      color: #c88d32;
      font-weight: 800;
      font-size: 13px
    }

    .network-text h2 {
      font-size: 31px;
      line-height: 1.15;
      margin: 12px 0
    }

    .network-text p {
      font-size: 14px;
      line-height: 1.8;
      color: #333b45
    }

    .network-list div {
      font-size: 14px;
      margin-bottom: 12px
    }

    .network-list i {
      color: #c88d32;
      margin-right: 10px
    }

    .handshake-img {
      min-height: 310px;
      border-radius: 7px;
      background: url("./assets/img/gallrey_3.png");
      background-size: cover;
      background-position: center;
    }

    .dark-stats {
      background:
        linear-gradient(145deg, rgba(2, 11, 19, .93), rgba(2, 11, 19, .9)),
        url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=800&auto=format&fit=crop");
      background-size: cover;
      background-position: center;
      color: #fff;
      border-radius: 7px;
      padding: 28px;
    }

    .dark-stat {
      display: flex;
      gap: 18px;
      border-bottom: 1px solid rgba(214, 163, 72, .45);
      padding: 15px 0
    }

    .dark-stat:last-child {
      border-bottom: 0
    }

    .dark-stat i {
      color: var(--gold2);
      font-size: 28px
    }

    .dark-stat h3 {
      font-family: 'Segoe UI', Arial, sans-serif;
      color: var(--gold2);
      font-size: 28px;
      font-weight: 900;
      margin: 0
    }

    .dark-stat p {
      margin: 0;
      font-size: 14px
    }

    /* CTA */
    .cta-strip {
      background:
        linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .75)),
        url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=1600&auto=format&fit=crop");
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 35px 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 25px;
    }

    .cta-left {
      display: flex;
      align-items: center;
      gap: 28px
    }

    .cta-icon {
      width: 76px;
      height: 76px;
      border: 2px solid var(--gold);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold2);
      font-size: 34px;
    }

    .cta-strip h3 {
      font-size: 27px;
      margin: 0
    }

    .cta-strip p {
      margin: 5px 0 0;
      color: #dce4ec
    }

    /* FOOTER */
    .footer {
      background: #020b13;
      color: #fff;
      padding: 38px 0 12px
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

    @media(max-width:991px) {
      .vendor-hero {
        min-height: auto;
        padding: 80px 0
      }

      .vendor-hero h1 {
        font-size: 42px
      }

      .hero-features {
        flex-wrap: wrap
      }

      .hero-feature {
        width: 45%;
        border-right: 0
      }

      .vendor-grid {
        grid-template-columns: repeat(2, 1fr)
      }

      .vendor-stats {
        grid-template-columns: repeat(2, 1fr);
        margin: 25px
      }

      .v-stat {
        border-right: 0;
        border-bottom: 1px solid rgba(255, 255, 255, .15);
        padding: 20px
      }

      .network-layout {
        grid-template-columns: 1fr
      }

      .cta-strip,
      .cta-left {
        flex-direction: column;
        align-items: flex-start
      }

      .footer-col {
        border-left: 0;
        padding-left: 10px;
      }
    }

    @media(max-width:576px) {
      .vendor-hero h1 {
        font-size: 34px
      }

      .hero-features,
      .vendor-grid,
      .vendor-stats {
        grid-template-columns: 1fr;
        display: grid
      }

      .hero-feature {
        width: 100%
      }

      .vendors-section,
      .vendor-network {
        padding: 40px 20px
      }

      .cta-strip {
        padding: 35px 25px
      }

         .section-center h2 {
      font-size: 25px !important;
     
    }
    }


    .vendor-img {
      position: relative;
      /* height: 280px;  */
      background-size: contain !important;
      background-position: center center !important;
      background-repeat: no-repeat !important;
      background-color: #fff;
      border-radius: 15px 15px 0 0;
    }

    /* mobile device styling new  */
    @media (max-width:576px) {

      .hero-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
       
      }

      .hero-feature {
        width: 100%;
        text-align: center;
         border: 2px solid grey;
         padding: 6px;
      }




         .vendor-stats{
        display:grid;
        grid-template-columns: repeat(2, 1fr);
        gap:15px;
    }

    .v-stat{
        width:100%;
        text-align:center;
        flex-direction:column;
        justify-content:center;
        padding:15px 10px;
    }

    .v-stat i{
        margin-bottom:10px;
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
          <!-- RAJAMUNDRY<br><span>STEELS</span>
          <div class="logo-sub">BUILDING STRENGTH. DELIVERING TRUST.</div> -->
        </div>
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
            <li><button class="btn-gold ms-lg-3"> GET IN A QUOTE → </button></li>
          </a>
        </ul>
      </div>
    </div>
  </nav>

  <section class="vendor-hero">
    <div class="container-fluid px-lg-5">
      <div class="col-lg-6">
        <div class="hero-label">OUR VENDORS</div>
        <h1>Partnering With<br><span>Industry Leaders.</span></h1>
        <p>We source our steel from the most trusted and reputed manufacturers in India, ensuring superior quality, consistency and reliability in every supply.</p>
        <div class="gold-line"></div>

        <div class="hero-features">
          <div class="hero-feature"><i class="fa-solid fa-shield-halved"></i>
            <h6>100% Genuine<br>Products</h6>
          </div>
          <div class="hero-feature"><i class="fa-regular fa-handshake"></i>
            <h6>Direct Vendor<br>Partnership</h6>
          </div>
          <div class="hero-feature"><i class="fa-solid fa-award"></i>
            <h6>Consistent<br>Quality</h6>
          </div>
          <div class="hero-feature"><i class="fa-solid fa-truck"></i>
            <h6>Reliable & Timely<br>Supply</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="vendors-section">
    <div class="section-center">
      <small>OUR TRUSTED VENDOR PARTNERS</small>
      <h2>We Partner With Trusted Steel Brands To Deliver Quality You Can Rely On.</h2>
    </div>

    <div class="vendor-grid row">

      <div class="vendor-card">
        <div class="vendor-img" style="background-image:url('./assets/img/1.png')">
          <div class="vendor-logo">JSW</div>
        </div>
        <div class="vendor-content">
          <h3>JSW STEEL</h3>
          <p>One of India’s leading steel brands, known for advanced technology, premium quality, and reliable steel solutions.</p>
          <div class="vendor-list">
            <div><i class="fa-regular fa-circle-check"></i> Premium steel products</div>
            <div><i class="fa-regular fa-circle-check"></i> Modern manufacturing standards</div>
            <div><i class="fa-regular fa-circle-check"></i> Trusted across industries</div>
          </div>
        </div>
      </div>

      <div class="vendor-card">
        <div class="vendor-img" style="background-image:url('./assets/img/2.png')">
          <div class="vendor-logo tata">TATA</div>
        </div>
        <div class="vendor-content">
          <h3>TATA STEEL</h3>
          <p>A globally respected steel manufacturer delivering strength, durability, and consistent quality for every project.</p>
          <div class="vendor-list">
            <div><i class="fa-regular fa-circle-check"></i> High-strength steel</div>
            <div><i class="fa-regular fa-circle-check"></i> Global quality standards</div>
            <div><i class="fa-regular fa-circle-check"></i> Reliable performance</div>
          </div>
        </div>
      </div>

      <div class="vendor-card">
        <div class="vendor-img" style="background-image:url('./assets/img/3.png')">
          <div class="vendor-logo vizag">VIZAG</div>
        </div>
        <div class="vendor-content">
          <h3>VIZAG STEEL</h3>
          <p>A trusted name in Indian steel, recognized for quality products that support construction and infrastructure growth.</p>
          <div class="vendor-list">
            <div><i class="fa-regular fa-circle-check"></i> Trusted Indian steel brand</div>
            <div><i class="fa-regular fa-circle-check"></i> Strong product reliability</div>
            <div><i class="fa-regular fa-circle-check"></i> Ideal for infrastructure needs</div>
          </div>
        </div>
      </div>

      <div class="vendor-card">
        <div class="vendor-img" style="background-image:url('./assets/img/4.png')">
          <div class="vendor-logo bondx">BONDX</div>
        </div>
        <div class="vendor-content">
          <h3>BONDX STEEL</h3>
          <p>Modern steel solutions designed to meet the evolving needs of construction, fabrication, and industrial projects.</p>
          <div class="vendor-list">
            <div><i class="fa-regular fa-circle-check"></i> Advanced steel solutions</div>
            <div><i class="fa-regular fa-circle-check"></i> Consistent material quality</div>
            <div><i class="fa-regular fa-circle-check"></i> Built for modern projects</div>
          </div>
        </div>
      </div>

      <div class="vendor-card">
        <div class="vendor-img" style="background-image:url('./assets/img/5.png')">
          <div class="vendor-logo bondx">BEEKAY</div>
        </div>
        <div class="vendor-content">
          <h3>BEEKAY STEEL</h3>
          <p>Reliable steel products engineered for strength, performance, and long-term value across diverse industries.</p>
          <div class="vendor-list">
            <div><i class="fa-regular fa-circle-check"></i> Quality steel manufacturing</div>
            <div><i class="fa-regular fa-circle-check"></i> Durable product range</div>
            <div><i class="fa-regular fa-circle-check"></i> Industrial-grade performance</div>
          </div>
        </div>
      </div>

      <div class="vendor-card">
        <div class="vendor-img" style="background-image:url('./assets/img/6.png')">
          <div class="vendor-logo bondx">SIMHADRI</div>
        </div>
        <div class="vendor-content">
          <h3>SIMHADRI STEEL</h3>
          <p>Dependable steel solutions crafted to support construction, engineering, and infrastructure development.</p>
          <div class="vendor-list">
            <div><i class="fa-regular fa-circle-check"></i> Durable steel products</div>
            <div><i class="fa-regular fa-circle-check"></i> Consistent supply support</div>
            <div><i class="fa-regular fa-circle-check"></i> Strength for future projects</div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="vendor-stats">
    <div class="v-stat"><i class="fa-solid fa-cubes"></i>
      <div>
        <h3>4+</h3>
        <p>DIRECT VENDOR<br>PARTNERS</p>
      </div>
    </div>
    <div class="v-stat"><i class="fa-solid fa-shield-halved"></i>
      <div>
        <h3>100%</h3>
        <p>AUTHENTIC &<br>QUALITY ASSURED</p>
      </div>
    </div>
    <div class="v-stat"><i class="fa-solid fa-award"></i>
      <div>
        <h3>5000+</h3>
        <p>SUCCESSFUL<br>DELIVERIES</p>
      </div>
    </div>
    <div class="v-stat"><i class="fa-solid fa-truck"></i>
      <div>
        <p>ON TIME<br>EVERY TIME</p>
      </div>
    </div>
    <div class="v-stat"><i class="fa-solid fa-users"></i>
      <div>
        <h3>1000+</h3>
        <p>SATISFIED<br>CLIENTS</p>
      </div>
    </div>
  </section>

  <section class="vendor-network">
    <div class="network-layout">

      <div class="network-text">
        <small>TRUSTED PARTNERSHIPS. RELIABLE SUPPLY.</small>

        <h2>Strong Vendor Network.<br>Reliable Steel Solutions.</h2>

        <div class="gold-line"></div>

        <p>
          Our partnerships with leading steel manufacturers help us deliver premium-quality products, dependable supply, and exceptional value for every project.
        </p>

        <div class="network-list">
          <div><i class="fa-regular fa-circle-check"></i> Leading steel brands</div>
          <div><i class="fa-regular fa-circle-check"></i> Assured product quality</div>
          <div><i class="fa-regular fa-circle-check"></i> Consistent availability</div>
          <div><i class="fa-regular fa-circle-check"></i> Timely delivery support</div>
        </div>
      </div>

      <div class="handshake-img"></div>

      <div class="dark-stats">

        <div class="dark-stat">
          <i class="fa-solid fa-cubes"></i>
          <div>
            <h3>60+</h3>
            <p>Years Of Excellence</p>
          </div>
        </div>

        <div class="dark-stat">
          <i class="fa-regular fa-handshake"></i>
          <div>
            <h3>6+</h3>
            <p>Vendor Partners</p>
          </div>
        </div>

        <div class="dark-stat">
          <i class="fa-solid fa-truck"></i>
          <div>
            <h3>5000+</h3>
            <p>Deliveries Completed</p>
          </div>
        </div>

        <div class="dark-stat">
          <i class="fa-solid fa-users"></i>
          <div>
            <h3>1000+</h3>
            <p>Satisfied Clients</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section class="cta-strip">
    <div class="cta-left">
      <div class="cta-icon"><i class="fa-solid fa-phone-volume"></i></div>
      <div>
        <h3>Need Premium Quality Steel<br>From Trusted Brands?</h3>
        <p>We are here to supply the best, for projects that stand the test of time.</p>
      </div>
    </div>
    <a href="get_a_qoute.php"> <button class="btn-gold">REQUEST A QUOTE <i class="fa-solid fa-arrow-right ms-2"></i></button></a>
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
          <p>Premium steel solutions for construction, industrial and commercial needs. Building structures. Strengthening relationships.</p>
          <div class="socials">
            <a href=" https://www.facebook.com/RajahmundrySteels/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/rajahmundrysteels/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/@RajahmundrySteels-1" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 offset-lg-1 footer-col">
          <h6>QUICK LINKS</h6>
          <a href="index.php">Home</a>
          <a href="about.php">About Us</a>
          <a href="products.php">Products</a>
          <a href="vendors.php">Vendors</a>
          <a href="blogs.php">Blogs</a>
          <a href="yards.php">Yards</a>
          <a href="contact.php">Contact</a>
        </div>

        <div class="col-lg-2 col-6 footer-col">
          <h6>PRODUCTS</h6>
          <a href="Products.php">TMT Bars</a>
          <a href="Products.php">Structural Steel</a>
          <a href="Products.php">MS Pipes</a>
          <a href="Products.php">Steel Sheets</a>
          <a href="Products.php">Roofing Sheets</a>
        </div>

        <div class="col-lg-2 col-4 footer-col">
          <h6>VENDORS</h6>
          <a href="Vendors.php">JSW Steel</a>
          <a href="Vendors.php">Tata Steel</a>
          <a href="Vendors.php">Vizag Steel</a>
          <a href="Vendors.php">BondX</a>
        </div>

        <div class="col-lg-2 col-8 footer-col">
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
      backTop.style.display = window.scrollY > 300 ? "flex" : "none"
    });
    backTop.style.display = "none";
  </script>

</body>

</html>