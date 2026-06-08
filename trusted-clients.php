<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rajamundry Steels</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root{
      --dark:#020b13;
      --dark2:#061421;
      --gold:#c8923b;
      --gold2:#f4d28a;
      --white:#fff;
      --text:#d9e2ea;
    }

    *{box-sizing:border-box}
    body{
      margin:0;
      font-family:Arial, sans-serif;
      background:#fff;
      color:#111;
    }

    h1,h2,h3,h4{
      font-family:Georgia, serif;
      font-weight:700;
    }

    .btn-gold{
      background:linear-gradient(135deg,#f4d28a,#b97a24);
      color:#111;
      font-weight:700;
      border:0;
      padding:13px 24px;
      border-radius:3px;
      font-size:13px;
    }

    .btn-outline-gold{
      border:1px solid var(--gold);
      color:#fff;
      padding:13px 24px;
      border-radius:3px;
      font-weight:700;
      font-size:13px;
      background:transparent;
    }

    .section-dark{
      background:linear-gradient(135deg,#020b13,#071827);
      color:#fff;
    }

    .navbar{
      background:#020b13;
      border-bottom:1px solid rgba(255,255,255,.12);
      padding:18px 0;
    }

    .logo{
      display:flex;
      align-items:center;
      gap:12px;
      color:#fff;
      font-weight:800;
      font-size:24px;
      line-height:1;
    }

    .logo-box{
      width:52px;
      height:52px;
      border:2px solid var(--gold);
      display:grid;
      place-items:center;
      font-family:Georgia, serif;
      font-size:34px;
      color:var(--gold2);
      font-weight:900;
    }

    .logo small{
      display:block;
      font-size:9px;
      color:#cfd7df;
      margin-top:5px;
    }

    .nav-link{
      color:#fff!important;
      font-size:13px;
      font-weight:700;
      margin:0 12px;
    }

    .nav-link.active{
      color:var(--gold2)!important;
      border-bottom:2px solid var(--gold);
    }

    .hero{
      min-height:720px;
      background:
        linear-gradient(90deg,rgba(2,11,19,.98) 0%,rgba(2,11,19,.85) 42%,rgba(2,11,19,.35) 100%),
        url("https://images.unsplash.com/photo-1581093458791-9d15482442f6?q=80&w=1600&auto=format&fit=crop");
      background-size:cover;
      background-position:center;
      color:#fff;
      display:flex;
      align-items:center;
    }

    .hero h1{
      font-size:72px;
      line-height:.95;
      margin:20px 0;
    }

    .gold-text{color:var(--gold2)}
    .hero p{
      max-width:520px;
      color:#e5ecf2;
      font-size:17px;
      line-height:1.6;
    }

    .features{
      margin-top:60px;
      display:grid;
      grid-template-columns:repeat(4,1fr);
      gap:25px;
      max-width:720px;
    }

    .feature{
      display:flex;
      gap:12px;
      font-size:12px;
      font-weight:700;
      color:#fff;
    }

    .feature span{
      color:var(--gold2);
      font-size:28px;
    }

    .brands{
      background:#f8f8f8;
      padding:30px 0;
      border-bottom:1px solid #ddd;
    }

    .brand-box{
      font-size:30px;
      font-weight:900;
      text-align:center;
      color:#1b3d73;
    }

    .stats{
      background:#020b13;
      color:#fff;
      padding:35px 0;
    }

    .stat{
      border-right:1px solid rgba(255,255,255,.25);
      text-align:center;
    }

    .stat:last-child{border-right:0}
    .stat h2{font-size:42px;margin:0;color:#fff}
    .stat p{font-size:12px;font-weight:700;margin:0;color:#dce5ed}

    .about{
      padding:80px 0;
      background:linear-gradient(135deg,#071827,#020b13);
      color:#fff;
    }

    .about-img{
      min-height:360px;
      border:1px solid var(--gold);
      background:url("https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1000&auto=format&fit=crop");
      background-size:cover;
      background-position:center;
    }

    .about p{
      color:#d9e2ea;
      line-height:1.8;
    }

    .products{
      padding:70px 0;
      background:#fff;
    }

    .product-card{
      border:1px solid #ddd;
      background:#fff;
      height:100%;
      box-shadow:0 8px 25px rgba(0,0,0,.08);
    }

    .product-img{
      height:165px;
      background-size:cover;
      background-position:center;
    }

    .product-card h5{
      font-weight:800;
      font-size:15px;
      margin-top:15px;
    }

    .product-card p{
      font-size:13px;
      color:#555;
    }

    .product-card a{
      color:var(--gold);
      font-size:12px;
      font-weight:800;
      text-decoration:none;
    }

    .why{
      padding:70px 0;
      background:
        linear-gradient(90deg,rgba(2,11,19,.98),rgba(2,11,19,.75)),
        url("https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1600&auto=format&fit=crop");
      background-size:cover;
      color:#fff;
    }

    .choose-card{
      border:1px solid rgba(255,255,255,.25);
      padding:25px 15px;
      text-align:center;
      height:100%;
      background:rgba(255,255,255,.03);
    }

    .choose-card div{
      font-size:32px;
      color:var(--gold2);
    }

    .choose-card h6{
      font-size:13px;
      font-weight:800;
      margin:12px 0;
    }

    .choose-card p{
      color:#d6dee7;
      font-size:12px;
    }

    .infra{
      margin-top:60px;
    }

    .infra-num{
      color:var(--gold2);
      font-size:24px;
      font-weight:900;
    }

    .projects{
      padding:60px 0;
      background:#fff;
      text-align:center;
    }

    .project-img{
      height:110px;
      border-radius:5px;
      background-size:cover;
      background-position:center;
      box-shadow:0 8px 20px rgba(0,0,0,.15);
    }

    .cta{
      background:
        linear-gradient(90deg,rgba(2,11,19,.96),rgba(2,11,19,.75)),
        url("https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1600&auto=format&fit=crop");
      background-size:cover;
      color:#fff;
      padding:45px 0;
    }

    footer{
      background:#020b13;
      color:#fff;
      padding:45px 0 20px;
      font-size:13px;
    }

    footer h6{
      color:#fff;
      font-weight:800;
      margin-bottom:18px;
    }

    footer a{
      color:#cbd5df;
      display:block;
      text-decoration:none;
      margin-bottom:8px;
    }

    .footer-bottom{
      border-top:1px solid rgba(255,255,255,.12);
      margin-top:25px;
      padding-top:15px;
      color:#9aa7b2;
      font-size:12px;
    }

    @media(max-width:991px){
      .hero h1{font-size:48px}
      .features{grid-template-columns:repeat(2,1fr)}
      .stat{border-right:0;margin-bottom:25px}
    }

    @media(max-width:576px){
      .hero{min-height:auto;padding:80px 0}
      .hero h1{font-size:42px}
      .features{grid-template-columns:1fr}
      .brand-box{font-size:20px;margin:15px 0}
    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <div class="container">
    <a class="navbar-brand logo" href="#">
      <!-- <div class="logo-box">R</div> -->
      <div>
        <img src="./assets/img/logo.png" alt="logo">
        <!-- RAJAMUNDRY<br>STEELS
        <small>BUILT ON TRUST. ENGINEERED FOR TOMORROW.</small> -->
      </div>
    </a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li><a class="nav-link active" href="#">HOME</a></li>
        <li><a class="nav-link" href="#about">ABOUT US</a></li>
        <li><a class="nav-link" href="#products">PRODUCTS</a></li>
        <li><a class="nav-link" href="#">VENDORS</a></li>
        <li><a class="nav-link" href="#why">INFRASTRUCTURE</a></li>
        <li><a class="nav-link" href="#projects">PROJECTS</a></li>
        <li><a class="nav-link" href="#contact">CONTACT</a></li>
        <li><button class="btn-gold ms-lg-3">GET IN A QUOTE →</button></li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="container">
    <p class="gold-text fw-bold">PREMIUM STEEL SOLUTIONS</p>
    <h1>STRENGTH<br><span class="gold-text">BEYOND</span><br>STRUCTURES.</h1>
    <p>Rajamundry Steels is a leading steel supplier with direct vendor partnerships with JSW Steel, Tata Steel, Vizag Steel and BondX.</p>

    <div class="mt-4">
      <button class="btn-gold me-3">GET BEST PRICE →</button>
      <button class="btn-outline-gold">EXPLORE PRODUCTS</button>
    </div>

    <div class="features">
      <div class="feature"><span>◇</span>DIRECT VENDOR<br>NETWORK</div>
      <div class="feature"><span>✥</span>PREMIUM<br>QUALITY</div>
      <div class="feature"><span>▦</span>BULK SUPPLY<br>SPECIALISTS</div>
      <div class="feature"><span>▸</span>ON-TIME<br>DELIVERY</div>
    </div>
  </div>
</section>

<section class="brands">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <h5 class="fw-bold">TRUSTED BY INDUSTRY LEADERS</h5>
      </div>
      <div class="col-md-2 brand-box">JSW</div>
      <div class="col-md-2 brand-box">TATA</div>
      <div class="col-md-2 brand-box text-success">VIZAG</div>
      <div class="col-md-2 brand-box text-dark">BONDX</div>
    </div>
  </div>
</section>

<section class="stats">
  <div class="container">
    <div class="row">
      <div class="col-md-3 stat"><h2>25+</h2><p>YEARS OF<br>EXCELLENCE</p></div>
      <div class="col-md-3 stat"><h2>1000+</h2><p>HAPPY<br>CLIENTS</p></div>
      <div class="col-md-3 stat"><h2>5000+</h2><p>SUCCESSFUL<br>DELIVERIES</p></div>
      <div class="col-md-3 stat"><h2>4+</h2><p>DIRECT VENDOR<br>PARTNERS</p></div>
    </div>
  </div>
</section>

<section class="about" id="about">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="about-img"></div>
      </div>
      <div class="col-lg-6">
        <p class="gold-text fw-bold">ABOUT US</p>
        <h2>A LEGACY OF TRUST.<br>A FUTURE OF <span class="gold-text">STRENGTH.</span></h2>
        <p>With decades of experience, Rajamundry Steels has become a trusted partner for construction, industrial and commercial projects. We are committed to delivering premium quality steel with reliability, transparency and timely service.</p>
        <button class="btn-outline-gold">KNOW MORE ABOUT US →</button>
      </div>
    </div>
  </div>
</section>

<section class="products" id="products">
  <div class="container">
    <div class="text-center mb-5">
      <small>OUR SOLUTIONS</small>
      <h2>PREMIUM STEEL PRODUCTS</h2>
    </div>

    <div class="row g-4">
      <div class="col-md-4 col-lg-2">
        <div class="product-card">
          <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=600&auto=format&fit=crop')"></div>
          <div class="p-3"><h5>TMT BARS</h5><p>High strength TMT bars for stronger construction.</p><a href="#">ENQUIRE NOW →</a></div>
        </div>
      </div>

      <div class="col-md-4 col-lg-2">
        <div class="product-card">
          <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=600&auto=format&fit=crop')"></div>
          <div class="p-3"><h5>STRUCTURAL STEEL</h5><p>Wide range of structural steel for projects.</p><a href="#">ENQUIRE NOW →</a></div>
        </div>
      </div>

      <div class="col-md-4 col-lg-2">
        <div class="product-card">
          <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=600&auto=format&fit=crop')"></div>
          <div class="p-3"><h5>MS PIPES</h5><p>Durable MS pipes for industrial applications.</p><a href="#">ENQUIRE NOW →</a></div>
        </div>
      </div>

      <div class="col-md-4 col-lg-2">
        <div class="product-card">
          <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1518709268805-4e9042af2176?q=80&w=600&auto=format&fit=crop')"></div>
          <div class="p-3"><h5>STEEL SHEETS</h5><p>Premium quality steel sheets for various uses.</p><a href="#">ENQUIRE NOW →</a></div>
        </div>
      </div>

      <div class="col-md-4 col-lg-2">
        <div class="product-card">
          <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1581093458791-9d15482442f6?q=80&w=600&auto=format&fit=crop')"></div>
          <div class="p-3"><h5>ROOFING SHEETS</h5><p>Long lasting roofing sheets for industrial roofs.</p><a href="#">ENQUIRE NOW →</a></div>
        </div>
      </div>

      <div class="col-md-4 col-lg-2">
        <div class="product-card">
          <div class="product-img" style="background-image:url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=600&auto=format&fit=crop')"></div>
          <div class="p-3"><h5>INDUSTRIAL SUPPLY</h5><p>Bulk supply of steel products for large projects.</p><a href="#">ENQUIRE NOW →</a></div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <button class="btn-gold">VIEW ALL PRODUCTS →</button>
    </div>
  </div>
</section>

<section class="why" id="why">
  <div class="container">
    <div class="row g-4 align-items-start">
      <div class="col-lg-3">
        <h2>WHY CHOOSE<br>RAJAMUNDRY STEELS?</h2>
      </div>

      <div class="col-lg-9">
        <div class="row g-3">
          <div class="col-md-4 col-lg-2"><div class="choose-card"><div>🤝</div><h6>DIRECT VENDOR SUPPLY</h6><p>Direct supply from JSW, Tata, Vizag and BondX.</p></div></div>
          <div class="col-md-4 col-lg-2"><div class="choose-card"><div>🛡</div><h6>PREMIUM QUALITY</h6><p>Assured quality that meets global standards.</p></div></div>
          <div class="col-md-4 col-lg-2"><div class="choose-card"><div>📦</div><h6>BULK STOCK</h6><p>Large inventory to meet urgent bulk needs.</p></div></div>
          <div class="col-md-4 col-lg-2"><div class="choose-card"><div>🏷</div><h6>COMPETITIVE PRICE</h6><p>Best market prices with transparent deals.</p></div></div>
          <div class="col-md-4 col-lg-2"><div class="choose-card"><div>🚚</div><h6>FAST DISPATCH</h6><p>Timely delivery with strong logistics.</p></div></div>
          <div class="col-md-4 col-lg-2"><div class="choose-card"><div>🎧</div><h6>TRUSTED SUPPORT</h6><p>Dedicated support for all requirements.</p></div></div>
        </div>
      </div>
    </div>

    <div class="infra row mt-5 align-items-center">
      <div class="col-lg-4">
        <h2>BUILT FOR LARGE SCALE<br>STEEL SUPPLY</h2>
        <p class="text-light">Our strong infrastructure and vast stock capacity enable us to handle bulk orders and deliver across regions with efficiency.</p>
        <button class="btn-gold">EXPLORE INFRASTRUCTURE →</button>
      </div>

      <div class="col-lg-8">
        <div class="row text-center g-4">
          <div class="col-6 col-md-3"><div class="infra-num">100,000+</div><small>SQFT WAREHOUSE AREA</small></div>
          <div class="col-6 col-md-3"><div class="infra-num">50,000+</div><small>TONS STOCK CAPACITY</small></div>
          <div class="col-6 col-md-3"><div class="infra-num">200+</div><small>TONS DAILY DISPATCH</small></div>
          <div class="col-6 col-md-3"><div class="infra-num">PAN INDIA</div><small>SUPPLY NETWORK</small></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="projects" id="projects">
  <div class="container">
    <small>OUR PROJECTS</small>
    <h2>BUILT WITH TRUST. DELIVERED WITH PRIDE.</h2>

    <div class="row g-4 mt-4">
      <div class="col-md"><div class="project-img" style="background-image:url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=600&auto=format&fit=crop')"></div></div>
      <div class="col-md"><div class="project-img" style="background-image:url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=600&auto=format&fit=crop')"></div></div>
      <div class="col-md"><div class="project-img" style="background-image:url('https://images.unsplash.com/photo-1518005020951-eccb494ad742?q=80&w=600&auto=format&fit=crop')"></div></div>
      <div class="col-md"><div class="project-img" style="background-image:url('https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=600&auto=format&fit=crop')"></div></div>
      <div class="col-md"><div class="project-img" style="background-image:url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=600&auto=format&fit=crop')"></div></div>
    </div>

    <button class="btn-outline-dark mt-4">VIEW ALL PROJECTS →</button>
  </div>
</section>

<section class="cta">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <h2>LET’S BUILD<br>STRONGER<br><span class="gold-text">TOGETHER</span></h2>
      </div>
      <div class="col-lg-5">
        <p>Looking for reliable steel supply for your next project? We are here to provide the strength your project deserves.</p>
      </div>
      <div class="col-lg-3">
        <button class="btn-gold mb-2">REQUEST A QUOTE →</button>
      <a  href="https://wa.me/919652239999" target="_blank">  <button class="btn-outline-gold">CHAT ON WHATSAPP</button></a>
      </div>
    </div>
  </div>
</section>

<footer id="contact">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-3">
        <div class="logo mb-3">
          <!-- <div class="logo-box">R</div>
          <div>RAJAMUNDRY<br>STEELS</div> -->
          <img src="./assets/img/logo.png" alt="logo">
        </div>
        <p>Premium steel solutions for construction, industrial and commercial needs.</p>
      </div>

      <div class="col-md-2">
        <h6>QUICK LINKS</h6>
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Products</a>
        <a href="#">Vendors</a>
        <a href="#">Infrastructure</a>
        <a href="#">Contact</a>
      </div>

      <div class="col-md-2">
        <h6>PRODUCTS</h6>
        <a href="#">TMT Bars</a>
        <a href="#">Structural Steel</a>
        <a href="#">MS Pipes</a>
        <a href="#">Steel Sheets</a>
        <a href="#">Roofing Sheets</a>
      </div>

      <div class="col-md-2">
        <h6>VENDORS</h6>
        <a href="#">JSW Steel</a>
        <a href="#">Tata Steel</a>
        <a href="#">Vizag Steel</a>
        <a href="#">BondX</a>
      </div>

      <div class="col-md-3">
        <h6>CONTACT US</h6>
        <p>📞 +91 90534 55789</p>
        <p>✉ info@rajamundrysteels.com</p>
        <p>📍 Aditya Nagar, Rajamahendravaram, Andhra Pradesh 533107</p>
      </div>
    </div>

    <div class="footer-bottom text-center">
      Privacy Policy | Terms & Conditions
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function(e){
      const target = document.querySelector(this.getAttribute('href'));
      if(target){
        e.preventDefault();
        target.scrollIntoView({behavior:'smooth'});
      }
    });
  });
</script>

</body>
</html>