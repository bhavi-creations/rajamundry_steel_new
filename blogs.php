<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajamundry Steels - Blogs</title>

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

        .blog-hero {
            min-height: 410px;
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .82), rgba(2, 11, 19, .25)),
                url("https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=1800&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .hero-label {
            color: var(--gold2);
            font-size: 17px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .blog-hero h1 {
            font-size: 60px;
            line-height: 1.08;
            margin-bottom: 20px;
        }

        .blog-hero h1 span {
            color: var(--gold2);
        }

        .gold-line {
            width: 52px;
            height: 3px;
            background: var(--gold);
            margin: 18px 0;
        }

        .blog-hero p {
            color: #edf2f6;
            font-size: 17px;
            line-height: 1.8;
            max-width: 620px;
        }

        /* BLOG BODY */

        .blog-body {
            padding: 32px 42px 20px;
            background: #fff;
        }

        .filter-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 28px;
        }

        .filter-buttons {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .filter-btn {
            border: 1px solid #d8dde2;
            background: #fff;
            color: #101820;
            padding: 14px 24px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 800;
        }

        .filter-btn.active {
            background: #020b13;
            color: var(--gold2);
        }

        .search-box {
            width: 300px;
            position: relative;
        }

        .search-box input {
            width: 100%;
            height: 46px;
            border: 1px solid #d8dde2;
            border-radius: 4px;
            padding: 0 42px 0 18px;
            outline: none;
            font-size: 14px;
        }

        .search-box i {
            position: absolute;
            right: 15px;
            top: 15px;
            color: #111;
        }

        /* CARDS */

        .main-layout {
            display: grid;
            grid-template-columns: 2.2fr .85fr;
            gap: 38px;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .blog-card {
            background: #fff;
            border: 1px solid #d7dce1;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 8px 22px rgba(0, 0, 0, .08);
        }

        .blog-img {
            height: 175px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .blog-tag {
            position: absolute;
            left: 20px;
            bottom: 0;
            transform: translateY(50%);
            background: #020b13;
            color: var(--gold2);
            font-size: 11px;
            font-weight: 900;
            padding: 8px 12px;
            border-radius: 3px;
        }

        .blog-content {
            padding: 30px 22px 18px;
        }

        .blog-content h3 {
            font-size: 24px;
            line-height: 1.15;
            margin-bottom: 14px;
        }

        .blog-content p {
            font-size: 14px;
            line-height: 1.7;
            color: #333b45;
        }

        .blog-meta {
            border-top: 1px solid #dde1e5;
            padding-top: 16px;
            margin-top: 22px;
            display: flex;
            justify-content: space-between;
            color: #5d6670;
            font-size: 13px;
        }

        .blog-meta i {
            color: var(--gold);
        }

        .small-blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin-top: 22px;
        }

        .small-blog-grid .blog-img {
            height: 165px;
        }

        .small-blog-grid .blog-content h3 {
            font-size: 19px;
        }

        .pagination-wrap {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin: 30px 0;
        }

        .page-btn {
            width: 40px;
            height: 40px;
            border: 1px solid #d7dce1;
            background: #fff;
            border-radius: 4px;
            font-weight: 700;
        }

        .page-btn.active {
            background: #020b13;
            color: var(--gold2);
        }

        /* SIDEBAR */

        .sidebar-card {
            background: linear-gradient(145deg, #061522, #020b13);
            color: #fff;
            border-radius: 8px;
            padding: 30px;
            margin-bottom: 18px;
        }

        .sidebar-card h3 {
            font-size: 25px;
            margin-bottom: 18px;
        }

        .sidebar-line {
            height: 1px;
            background: rgba(214, 163, 72, .6);
            margin-bottom: 18px;
        }

        .popular-post {
            display: grid;
            grid-template-columns: 28px 78px 1fr;
            gap: 12px;
            margin-bottom: 18px;
            align-items: start;
        }

        .post-num {
            color: var(--gold2);
            font-weight: 900;
            font-size: 18px;
        }

        .post-img {
            width: 78px;
            height: 66px;
            border-radius: 5px;
            background-size: cover;
            background-position: center;
        }

        .popular-post h5 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.35;
            margin-bottom: 5px;
        }

        .popular-post p {
            font-size: 12px;
            color: #bfcad4;
            margin: 0;
        }

        .newsletter h4 {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 18px;
            font-weight: 800;
        }

        .newsletter-icon {
            font-size: 35px;
            color: var(--gold2);
            margin-bottom: 14px;
        }

        .newsletter p {
            color: #dce4ec;
            font-size: 14px;
            line-height: 1.7;
        }

        .newsletter input {
            width: 100%;
            height: 46px;
            border: 1px solid rgba(255, 255, 255, .28);
            background: rgba(255, 255, 255, .04);
            color: #fff;
            padding: 0 14px;
            border-radius: 4px;
            margin-bottom: 14px;
        }

        .newsletter small {
            display: block;
            text-align: center;
            color: #c5ced8;
            margin-top: 12px;
        }

        /* CTA */

        .cta-strip {
            margin: 20px 0 0;
            background:
                linear-gradient(90deg, rgba(2, 11, 19, .98), rgba(2, 11, 19, .72)),
                url("https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=1600&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            color: #fff;
            border-radius: 6px;
            padding: 35px 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cta-left {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .cta-icon {
            width: 78px;
            height: 78px;
            border: 2px solid var(--gold);
            border-radius: 50%;
            color: var(--gold2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
        }

        .cta-strip h3 {
            font-size: 28px;
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
            margin-top: 18px;
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
            .blog-hero h1 {
                font-size: 42px
            }

            .filter-row {
                flex-direction: column;
                align-items: flex-start
            }

            .main-layout {
                grid-template-columns: 1fr
            }

            .small-blog-grid {
                grid-template-columns: 1fr 1fr
            }

            .search-box {
                width: 100%
            }

            .cta-strip {
                flex-direction: column;
                align-items: flex-start;
                gap: 25px
            }

            .footer-col {
                border-left: 0;
                padding-left: 0
            }
        }

        @media(max-width:576px) {
            .blog-body {
                padding: 28px 20px
            }

            .blog-grid,
            .small-blog-grid {
                grid-template-columns: 1fr
            }

            .blog-hero {
                min-height: auto;
                padding: 75px 0
            }

            .blog-hero h1 {
                font-size: 35px
            }

            .cta-strip {
                padding: 30px 25px
            }

            .cta-left {
                flex-direction: column;
                align-items: flex-start
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
                    <a></a>
                    <li><button href="get_a_qoute.php" class="btn-gold ms-lg-3"> GET IN A QUOTE → </button></li></a>
                </ul>
            </div>
        </div>
    </nav>

    <section class="blog-hero">
        <div class="container-fluid px-lg-5">
            <div class="hero-label">BLOGS & INSIGHTS</div>
            <h1>
                Insights That Build<br>
                <span>Stronger Foundations</span>
            </h1>
            <div class="gold-line"></div>
            <p>
                Stay updated with the latest trends, expert insights and
                industry knowledge from the world of steel.
            </p>
        </div>
    </section>

    <section class="blog-body">
        <div class="filter-row">
            <div class="filter-buttons">
                <button class="filter-btn active">ALL ARTICLES</button>
                <button class="filter-btn">INDUSTRY INSIGHTS</button>
                <button class="filter-btn">STEEL KNOWLEDGE</button>
                <button class="filter-btn">MARKET TRENDS</button>
                <button class="filter-btn">COMPANY NEWS</button>
            </div>

            <div class="search-box">
                <input type="text" placeholder="Search blogs...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>

        <div class="main-layout">
            <div>
                <div class="blog-grid">
                    <div class="blog-card">
                        <div class="blog-img" style="background-image:url('https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=900&auto=format&fit=crop')">
                            <div class="blog-tag">INDUSTRY INSIGHTS</div>
                        </div>
                        <div class="blog-content">
                            <h3>The Future of Steel Industry in India: Growth, Opportunities & Beyond</h3>
                            <p>India’s steel industry is on a robust growth path. Discover key trends, opportunities and what the future holds.</p>
                            <div class="blog-meta">
                                <span>May 12, 2024 &nbsp; • &nbsp; 5 min read</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="blog-img" style="background-image:url('https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=900&auto=format&fit=crop')">
                            <div class="blog-tag">STEEL KNOWLEDGE</div>
                        </div>
                        <div class="blog-content">
                            <h3>TMT Bars: The Backbone of Strong and Safe Construction</h3>
                            <p>Learn about the grades, strength and quality factors that make TMT bars essential for modern constructions.</p>
                            <div class="blog-meta">
                                <span>Apr 28, 2024 &nbsp; • &nbsp; 4 min read</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="small-blog-grid">
                    <div class="blog-card">
                        <div class="blog-img" style="background-image:url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=700&auto=format&fit=crop')">
                            <div class="blog-tag">MARKET TRENDS</div>
                        </div>
                        <div class="blog-content">
                            <h3>Steel Market Update: Prices, Demand & Outlook</h3>
                            <p>An overview of the current steel market scenario, price trends and what industry experts are predicting.</p>
                            <div class="blog-meta">
                                <span>May 15, 2024 &nbsp; • &nbsp; 5 min read</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="blog-img" style="background-image:url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=700&auto=format&fit=crop')">
                            <div class="blog-tag">STEEL KNOWLEDGE</div>
                        </div>
                        <div class="blog-content">
                            <h3>Structural Steel vs MS Steel: Key Differences Explained</h3>
                            <p>Confused between structural steel and mild steel? Here’s a detailed comparison to help you choose the right material.</p>
                            <div class="blog-meta">
                                <span>Apr 02, 2024 &nbsp; • &nbsp; 5 min read</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="blog-img" style="background-image:url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=700&auto=format&fit=crop')">
                            <div class="blog-tag">COMPANY NEWS</div>
                        </div>
                        <div class="blog-content">
                            <h3>Sustainability in Steel: Our Commitment to a Greener Tomorrow</h3>
                            <p>How Rajamundry Steels is contributing towards a sustainable future through responsible sourcing and eco-friendly practices.</p>
                            <div class="blog-meta">
                                <span>Mar 20, 2024 &nbsp; • &nbsp; 4 min read</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-wrap">
                    <button class="page-btn active">1</button>
                    <button class="page-btn">2</button>
                    <button class="page-btn">3</button>
                    <button class="page-btn">...</button>
                    <button class="page-btn">8</button>
                    <button class="page-btn" style="width:80px;">Next <i class="fa-solid fa-arrow-right text-warning ms-2"></i></button>
                </div>
            </div>

            <aside>
                <div class="sidebar-card">
                    <h3>Popular Posts</h3>
                    <div class="sidebar-line"></div>

                    <div class="popular-post">
                        <div class="post-num">1</div>
                        <div class="post-img" style="background-image:url('https://images.unsplash.com/photo-1605152276897-4f618f831968?q=80&w=300&auto=format&fit=crop')"></div>
                        <div>
                            <h5>TMT Bars: The Backbone of Strong and Safe Construction</h5>
                            <p>Apr 28, 2024</p>
                        </div>
                    </div>

                    <div class="popular-post">
                        <div class="post-num">2</div>
                        <div class="post-img" style="background-image:url('https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=300&auto=format&fit=crop')"></div>
                        <div>
                            <h5>Steel Market Update: Prices, Demand & Outlook</h5>
                            <p>Apr 15, 2024</p>
                        </div>
                    </div>

                    <div class="popular-post">
                        <div class="post-num">3</div>
                        <div class="post-img" style="background-image:url('https://images.unsplash.com/photo-1565793298595-6a879b1d9492?q=80&w=300&auto=format&fit=crop')"></div>
                        <div>
                            <h5>How to Choose the Right Steel for Your Project</h5>
                            <p>Mar 05, 2024</p>
                        </div>
                    </div>

                    <div class="popular-post">
                        <div class="post-num">4</div>
                        <div class="post-img" style="background-image:url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=300&auto=format&fit=crop')"></div>
                        <div>
                            <h5>Understanding Steel Grades: Fe 500, Fe 550 and More</h5>
                            <p>Feb 18, 2024</p>
                        </div>
                    </div>

                    <div class="popular-post">
                        <div class="post-num">5</div>
                        <div class="post-img" style="background-image:url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=300&auto=format&fit=crop')"></div>
                        <div>
                            <h5>Innovations Driving the Steel Industry Forward</h5>
                            <p>Jan 30, 2024</p>
                        </div>
                    </div>
                </div>

                <div class="sidebar-card newsletter">
                    <div class="newsletter-icon"><i class="fa-regular fa-envelope"></i></div>
                    <h4>Subscribe to Our Newsletter</h4>
                    <p>Get the latest industry insights, company updates and trends straight to your inbox.</p>
                    <input type="email" placeholder="Enter your email address">
                    <button class="btn-gold w-100">SUBSCRIBE <i class="fa-solid fa-arrow-right ms-2"></i></button>
                    <small>We respect your privacy.</small>
                </div>
            </aside>
        </div>

        <section class="cta-strip">
            <div class="cta-left">
                <div class="cta-icon">
                    <i class="fa-regular fa-file-lines"></i>
                </div>
                <div>
                    <h3>Have a Project in Mind?</h3>
                    <h3><span>Get the Best Steel Solution Today.</span></h3>
                </div>
            </div>

            <a href="get_a_qoute.php"> <button class="btn-gold">
                    GET A QUOTE <i class="fa-solid fa-arrow-right ms-2"></i>
                </button></a>
        </section>
    </section>

    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">
                <div class="col-lg-3">
                    <div class="logo-wrap mb-3">
                        <div class="logo-mark">R</div>
                        <div>RAJAMUNDRY<br><span>STEELS</span></div>
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
                    <a href="#">Home</a>
                    <a href="#">About Us</a>
                    <a href="#">Products</a>
                    <a href="#">Vendors</a>
                    <a href="#">Yards</a>
                    <a href="#">Trusted Clients</a>
                    <a href="#">Blogs</a>
                    <a href="#">Contact Us</a>
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
                    <h6>YARDS</h6>
                    <a href="#">Rajahmundry</a>
                    <a href="#">Vijayawada</a>
                    <a href="#">Visakhapatnam</a>
                    <a href="#">Hyderabad</a>
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

        document.querySelectorAll(".filter-btn").forEach(btn => {
            btn.addEventListener("click", function() {
                document.querySelectorAll(".filter-btn").forEach(b => b.classList.remove("active"));
                this.classList.add("active");
            });
        });
    </script>

</body>

</html>