<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rajamundry Steels - Contact Us</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    :root {
      --dark: #020b13;
      --dark2: #061522;
      --gold: #d6a348;
      --gold2: #f4c96d;
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
      background: linear-gradient(135deg, #fff, #c58b35, #111);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .logo-wrap span {
      color: var(--gold2);
    }

    .logo-sub {
      font-size: 8px;
      color: #fff;
      margin-top: 7px;
      letter-spacing: .4px;
    }

    .navbar-nav {
      gap: 12px;
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

    .contact-hero {
      min-height: 470px;
      background:
        linear-gradient(90deg, rgba(2, 11, 19, .98) 0%, rgba(2, 11, 19, .82) 45%, rgba(2, 11, 19, .18) 100%),
        url("https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1800&auto=format&fit=crop");
      background-size: cover;
      background-position: center;
      color: #fff;
      display: flex;
      align-items: center;
    }

    .hero-label {
      color: var(--gold2);
      font-size: 15px;
      font-weight: 800;
      margin-bottom: 18px;
    }

    .contact-hero h1 {
      font-family: 'Segoe UI', Arial, sans-serif;
      font-size: 54px;
      line-height: 1.1;
      font-weight: 900;
      letter-spacing: 1px;
    }

    .contact-hero h1 span {
      font-family: Georgia, 'Times New Roman', serif;
      color: var(--gold2);
      font-size: 55px;
    }

    .gold-line {
      width: 48px;
      height: 3px;
      background: var(--gold);
      margin: 20px 0;
    }

    .contact-hero p {
      max-width: 560px;
      color: #eef3f7;
      font-size: 17px;
      line-height: 1.8;
    }

    .hero-features {
      display: flex;
      gap: 34px;
      margin-top: 35px;
    }

    .feature-box {
      border-right: 1px solid rgba(255, 255, 255, .28);
      padding-right: 28px;
    }

    .feature-box:last-child {
      border-right: 0;
    }

    .feature-box i {
      color: var(--gold2);
      font-size: 34px;
      margin-bottom: 12px;
    }

    .feature-box h6 {
      color: #fff;
      font-size: 13px;
      line-height: 1.4;
      font-weight: 800;
    }

    /* CONTACT MAIN */

    .contact-main {
      display: grid;
      grid-template-columns: 37% 63%;
      min-height: 610px;
    }

    .form-side {
      background: linear-gradient(135deg, #020b13, #061522);
      color: #fff;
      padding: 55px 48px;
    }

    .form-side .small-title {
      color: var(--gold2);
      font-size: 14px;
      font-weight: 800;
      margin-bottom: 12px;
    }

    .form-side h2 {
      font-size: 33px;
      line-height: 1.2;
      margin-bottom: 20px;
    }

    .form-box input,
    .form-box select,
    .form-box textarea {
      width: 100%;
      background: rgba(255, 255, 255, .03);
      border: 1px solid rgba(255, 255, 255, .28);
      color: #fff;
      border-radius: 4px;
      height: 46px;
      padding: 0 18px;
      margin-bottom: 14px;
      outline: none;
      font-size: 14px;
    }

    .form-box textarea {
      height: 86px;
      padding-top: 14px;
      resize: none;
    }

    .form-box input::placeholder,
    .form-box textarea::placeholder {
      color: #c5ced8;
    }

    .form-box select {
      color: #c5ced8;
    }

    .info-side {
      background: #f7f7f7;
      padding: 55px 55px;
    }

    .info-title {
      color: #c88d32;
      font-size: 14px;
      font-weight: 800;
      margin-bottom: 10px;
    }

    .info-side h2 {
      font-size: 32px;
      margin-bottom: 28px;
    }

    .info-layout {
      display: grid;
      grid-template-columns: 1.45fr .95fr;
      gap: 36px;
    }

    .info-card {
      background: #fff;
      border: 1px solid #ddd;
      box-shadow: 0 8px 22px rgba(0, 0, 0, .06);
      padding: 20px;
      display: flex;
      gap: 22px;
      align-items: flex-start;
      border-radius: 6px;
      margin-bottom: 14px;
    }

    .info-icon {
      width: 58px;
      height: 58px;
      min-width: 58px;
      background: #020b13;
      color: var(--gold2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 26px;
    }

    .info-card h5 {
      font-size: 16px;
      font-weight: 800;
      margin-bottom: 5px;
    }

    .info-card p {
      font-size: 14px;
      margin: 0;
      line-height: 1.6;
    }

    .quote-side-card {
      background: linear-gradient(145deg, #061522, #020b13);
      color: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 16px 35px rgba(0, 0, 0, .25);
    }

    .quote-img {
      height: 210px;
      background: url("https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=900&auto=format&fit=crop");
      background-size: cover;
      background-position: center;
    }

    .quote-content {
      padding: 25px;
    }

    .quote-content h3 {
      color: var(--gold2);
      font-size: 25px;
      margin-bottom: 10px;
    }

    .quote-content p {
      color: #fff;
      font-size: 15px;
      line-height: 1.7;
    }

    .whatsapp-btn {
      display: inline-flex;
      gap: 10px;
      align-items: center;
      border: 1px solid var(--gold);
      color: #fff;
      padding: 12px 18px;
      border-radius: 4px;
      font-weight: 800;
      margin-top: 8px;
    }

    /* LOCATIONS */

    .locations {
      background: #fff;
      padding: 45px 38px 20px;
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
      font-size: 32px;
      margin: 8px 0 24px;
    }

    .location-wrap {
      display: grid;
      grid-template-columns: 25% 75%;
      gap: 8px;
      max-width: 1180px;
      margin: auto;
    }

    .location-list {
      background: #020b13;
      border-radius: 4px;
      overflow: hidden;
    }

    .loc-item {
      display: flex;
      align-items: center;
      gap: 15px;
      padding: 18px 22px;
      color: #fff;
      border-bottom: 1px solid rgba(255, 255, 255, .12);
    }

    .loc-item:last-child {
      border-bottom: 0;
    }

    .loc-item i {
      color: var(--gold2);
      font-size: 25px;
    }

    .loc-item h6 {
      font-size: 14px;
      font-weight: 800;
      margin: 0;
    }

    .loc-item p {
      margin: 3px 0 0;
      font-size: 12px;
      color: #cfd8e1;
    }

    .loc-item .arrow {
      margin-left: auto;
      color: var(--gold2);
    }

    .map-box {
      background:
        linear-gradient(rgba(2, 11, 19, .18), rgba(2, 11, 19, .18)),
        url("https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=1400&auto=format&fit=crop");
      background-size: cover;
      background-position: center;
      border-radius: 4px;
      min-height: 270px;
      position: relative;
      overflow: hidden;
    }

    .map-label {
      position: absolute;
      color: #fff;
      font-weight: 800;
      font-size: 14px;
    }

    .pin {
      position: absolute;
      color: var(--gold2);
      font-size: 34px;
      text-shadow: 0 0 20px rgba(214, 163, 72, .9);
    }

    .pin-main {
      font-size: 50px;
    }

    .hyd {
      left: 17%;
      top: 13%
    }

    .vizag {
      right: 23%;
      top: 22%
    }

    .vij {
      left: 45%;
      top: 54%
    }

    .raj {
      left: 55%;
      top: 57%
    }

    .label-hyd {
      left: 22%;
      top: 18%
    }

    .label-vizag {
      right: 18%;
      top: 28%
    }

    .label-vij {
      left: 38%;
      top: 60%
    }

    .label-raj {
      left: 61%;
      top: 63%
    }

    /* CTA */

    .cta-strip {
      background:
        linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .75)),
        url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=1600&auto=format&fit=crop");
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 35px 0;
    }

    .cta-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 30px;
    }

    .cta-left {
      display: flex;
      align-items: center;
      gap: 25px;
    }

    .cta-icon {
      width: 76px;
      height: 76px;
      border: 2px solid var(--gold);
      color: var(--gold2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 34px;
    }

    .cta-strip h3 {
      font-size: 27px;
      margin: 0;
    }

    .cta-strip h3 span {
      color: var(--gold2);
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
      .contact-main {
        grid-template-columns: 1fr;
      }

      .info-layout {
        grid-template-columns: 1fr;
      }

      .location-wrap {
        grid-template-columns: 1fr;
      }

      .cta-inner {
        flex-direction: column;
        align-items: flex-start;
      }

      .footer-col {
        border-left: 0;
        padding-left: 0;
      }

      .contact-hero {
        min-height: auto;
        padding: 80px 0;
      }

      .contact-hero h1 {
        font-size: 40px;
      }

      .contact-hero h1 span {
        font-size: 42px;
      }

      .hero-features {
        flex-wrap: wrap;
      }

      .feature-box {
        width: 45%;
        border-right: 0;
      }
    }

    @media(max-width:576px) {

      .form-side,
      .info-side {
        padding: 40px 24px;
      }

      .contact-hero h1 {
        font-size: 34px;
      }

      .contact-hero h1 span {
        font-size: 35px;
      }

      .hero-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
      }

      .feature-box {
        width: 100%;
        padding-right: 0;
      }

      .locations {
        padding: 40px 20px;
      }

      .map-box {
        min-height: 240px;
      }

      .cta-left {
        flex-direction: column;
        align-items: flex-start;
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
          <li><a class="nav-link active" href="index.php">HOME</a></li>
          <li><a class="nav-link" href="about.php">ABOUT US</a></li>
          <li><a class="nav-link" href="blogs.php">BLOGS</a></li>
          <li><a class="nav-link" href="Products.php">PRODUCTS</a></li>
          <li><a class="nav-link" href="Vendors.php">VENDORS</a></li>
          <li><a class="nav-link" href="yards.php">YARDS</a></li>

          <li><a class="nav-link" href="contact.php">CONTACT</a></li>
          <a href="get_a_qoute.php">
          <li><button href="get_a_qoute.php" class="btn-gold ms-lg-3"> GET IN A QUOTE → </button></li></a>
        </ul>
      </div>
    </div>
  </nav>

  <section class="contact-hero">
    <div class="container-fluid px-lg-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="hero-label">CONTACT US</div>
          <h1>
            LET’S BUILD <br>
            <span>STRONGER TOGETHER.</span>
          </h1>
          <div class="gold-line"></div>
          <p>
            Have a requirement or need expert guidance?<br>
            We’re here to help you with the best steel solutions,
            competitive pricing and reliable service.
          </p>

          <div class="hero-features">
            <div class="feature-box">
              <i class="fa-solid fa-headset"></i>
              <h6>QUICK<br>RESPONSE</h6>
            </div>
            <div class="feature-box">
              <i class="fa-solid fa-award"></i>
              <h6>EXPERT<br>SUPPORT</h6>
            </div>
            <div class="feature-box">
              <i class="fa-regular fa-handshake"></i>
              <h6>TRUSTED<br>SERVICE</h6>
            </div>
            <div class="feature-box">
              <i class="fa-regular fa-clock"></i>
              <h6>ON-TIME<br>DELIVERY</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-main" id="contact_us">
    <div class="form-side">
      <div class="small-title">SEND US A MESSAGE</div>
      <h2>We Will Get Back To You<br>As Soon As Possible!</h2>
      <div class="gold-line"></div>

      <form class="form-box" action="send_mail.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <input type="text" name="phone" placeholder="Phone Number" required>

        <select name="requirement" required>
          <option value="">Select Requirement</option>
          <option value="TMT Bars">TMT Bars</option>
          <option value="Structural Steel">Structural Steel</option>
          <option value="MS Pipes">MS Pipes</option>
          <option value="Steel Sheets">Steel Sheets</option>
          <option value="Angles">Angles, Channels & Beam</option>
        </select>

        <textarea name="message" placeholder="Your Message" required></textarea>

        <button type="submit" class="btn-gold mt-2">
          SUBMIT MESSAGE &nbsp; <i class="fa-solid fa-arrow-right"></i>
        </button>
      </form>
    </div>

    <div class="info-side">
      <div class="info-title">GET IN TOUCH</div>
      <h2>Contact Information</h2>

      <div class="info-layout">
        <div>
          <div class="info-card">
            <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
            <div>
              <h5>Head Office</h5>
              <p>Aditya Nagar, Rajamahendravaram, Andhra Pradesh 533107</p>
            </div>
          </div>

          <div class="info-card">
            <div class="info-icon"><i class="fa-solid fa-phone-volume"></i></div>
            <div>
              <h5>Phone</h5>
              <p>+91 96522 39999</p>
            </div>
          </div>

          <div class="info-card">
            <div class="info-icon"><i class="fa-regular fa-envelope"></i></div>
            <div>
              <h5>Email</h5>
              <p>info@rajamundrysteels.com</p>
            </div>
          </div>

          <div class="info-card">
            <div class="info-icon"><i class="fa-regular fa-clock"></i></div>
            <div>
              <h5>Business Hours</h5>
              <p>Monday - Saturday<br>9:00 AM - 8:00 PM<br><span style="color:#c88d32;">Sunday : 9:00 AM - 2:00 PM</span></p>
            </div>
          </div>
        </div>

        <div class="quote-side-card">
          <div class="quote-img"></div>
          <div class="quote-content">
            <h3>Need a Quick Quote?</h3>
            <p>Share your requirement and our team will provide the best price.</p>
            <a href=""><button class="btn-outline-gold">
                REQUEST A QUOTE &nbsp; <i class="fa-solid fa-arrow-right"></i>
              </button>
            </a>
            <h3 class="mt-4" style="font-size:22px;color:#fff;">Chat With Us<br>on WhatsApp</h3>
            <a class="whatsapp-btn" href="">
              <i class="fa-brands fa-whatsapp text-warning"></i>
              +91 96522 39999
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="locations">
    <div class="section-center">
      <small>OUR LOCATIONS</small>
      <h2>Our Yards Across Andhra Pradesh</h2>
    </div>

    <div class="location-wrap">
      <div class="location-list">
        <div class="loc-item">
          <i class="fa-solid fa-location-dot"></i>
          <div>
            <h6>Rajahmundry</h6>
            <p>Head Office & Main Yard</p>
          </div>
          <span class="arrow">›</span>
        </div>

        <div class="loc-item">
          <i class="fa-solid fa-location-dot"></i>
          <div>
            <h6>Vijayawada</h6>
            <p>Strategic Yard</p>
          </div>
          <span class="arrow">›</span>
        </div>

        <div class="loc-item">
          <i class="fa-solid fa-location-dot"></i>
          <div>
            <h6>Visakhapatnam</h6>
            <p>Supply Yard</p>
          </div>
          <span class="arrow">›</span>
        </div>

        <div class="loc-item">
          <i class="fa-solid fa-location-dot"></i>
          <div>
            <h6>Hyderabad</h6>
            <p>Supply Yard</p>
          </div>
          <span class="arrow">›</span>
        </div>
      </div>

      <div class="map-box">
        <i class="fa-solid fa-location-dot pin hyd"></i>
        <i class="fa-solid fa-location-dot pin vizag"></i>
        <i class="fa-solid fa-location-dot pin vij"></i>
        <i class="fa-solid fa-location-dot pin pin-main raj"></i>

        <div class="map-label label-hyd">Hyderabad</div>
        <div class="map-label label-vizag">Visakhapatnam</div>
        <div class="map-label label-vij">Vijayawada</div>
        <div class="map-label label-raj">Rajahmundry</div>
      </div>
    </div>
  </section>

  <section class="cta-strip">
    <div class="container-fluid px-lg-5">
      <div class="cta-inner">
        <div class="cta-left">
          <div class="cta-icon">
            <i class="fa-solid fa-phone-volume"></i>
          </div>
          <div>
            <h3>Have a Project in Mind?</h3>
            <h3><span>Let’s Discuss Your Steel Requirements.</span></h3>
          </div>
        </div>

        <a href="#contact_us"> <button class="btn-gold">
            CONTACT US TODAY &nbsp; <i class="fa-solid fa-arrow-right"></i>
          </button></a>
      </div>
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
            Building strength. Delivering trust.
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
          <a href="Products.php">Industrial Steel Supply</a>
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
          <p><i class="fa-solid fa-phone text-warning me-2"></i> +91 91234 56789</p>
          <p><i class="fa-solid fa-envelope text-warning me-2"></i> info@rajamundrysteels.com</p>
          <p><i class="fa-solid fa-location-dot text-warning me-2"></i> 12-15-3/1, Industrial Area,<br>Rajahmundry, Andhra Pradesh - 533101</p>
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

    document.querySelector(".form-box").addEventListener("submit", function(e) {
      e.preventDefault();
      alert("Thank you! Your message has been submitted.");
    });
  </script>

</body>

</html>