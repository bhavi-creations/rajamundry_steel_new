<?php
// 1. Database Connection
include './db.connection/db_connection.php';

// Identifier capture
$blog_input = isset($_GET['id']) ? $_GET['id'] : '';

if (empty($blog_input)) {
    echo "<h1 style='color:gold; text-align:center; margin-top:50px;'>Invalid Blog Request</h1>";
    exit;
}

// 2. Fetch Blog Data
$stmt = $conn->prepare("
    SELECT 
        id, title, slug, main_content, full_content, 
        title_image, main_image, video, 
        telugu_title, telugu_main_content, telugu_full_content,
        section1_image, service, hashtags, keypoints
    FROM blogs 
    WHERE id = ? OR slug = ?
");

$stmt->bind_param("ss", $blog_input, $blog_input);
$stmt->execute();
$result = $stmt->get_result();
$blog = $result->fetch_assoc();

if (!$blog) {
    echo "<h1 style='color:gold; text-align:center; margin-top:50px;'>Blog Not Found!</h1>";
    exit;
}

// Data mapping with Fallback Logic
$blog_id = $blog['id'];
$title = $blog['title'];
$main_content = $blog['main_content'];
$full_content = $blog['full_content'];
$main_image = $blog['main_image'];
$video = $blog['video'];
$telugu_title = !empty($blog['telugu_title']) ? $blog['telugu_title'] : $title;
$telugu_main_content = !empty($blog['telugu_main_content']) ? $blog['telugu_main_content'] : $main_content;
$telugu_full_content = !empty($blog['telugu_full_content']) ? $blog['telugu_full_content'] : $full_content;
$service = !empty($blog['service']) ? $blog['service'] : 'STEEL INDUSTRY';

$stmt->close();

// 3. Fetch Likes/Dislikes
$likes_count = 0;
$dislikes_count = 0;
$count_stmt = $conn->prepare("SELECT reaction, COUNT(*) as total FROM blog_reactions WHERE blog_id = ? GROUP BY reaction");
$count_stmt->bind_param("i", $blog_id);
$count_stmt->execute();
$res = $count_stmt->get_result();
while ($row = $res->fetch_assoc()) {
    if ($row['reaction'] == 'like') $likes_count = $row['total'];
    if ($row['reaction'] == 'dislike') $dislikes_count = $row['total'];
}
$count_stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= strip_tags($title) ?> - Rajamundry Steels</title>

    <!-- Swiper and Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
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

        .nav-link {
            color: #fff !important;
            margin: 0 13px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .5px;
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

        /* BLOG SECTION SPECIFIC STYLES */
        .full_blogs_section_main {
            padding: 40px 0;
            background-color: white;
        }

        .full_blogs_section_breadcrumb {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .full_blogs_section_breadcrumb b {
            color: #333;
        }

        .full_blogs_section_badge {
            background-color: var(--gold);
            color: black;
            font-weight: bold;
            padding: 6px 16px;
            border-radius: 4px;
            font-size: 12px;
            display: inline-block;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .full_blogs_section_title {
            font-weight: 800;
            color: #111;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .full_blogs_section_meta {
            display: flex;
            gap: 20px;
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .full_blogs_section_feature_img,
        .full_blogs_section_feature_video {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 35px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .full_blogs_section_article {
            color: #444;
            line-height: 1.8;
            font-size: 17px;
        }

        .full_blogs_section_article h2 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #222;
            margin-bottom: 20px;
            line-height: 1.4;
        }

        .full_blogs_section_article h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #111;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        /* Voting styling */
        .vote-section {
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 20px 0;
            margin: 40px 0;
        }

        /* Language Toggle styling */
        .lang-btn.active {
            background: var(--gold) !important;
            color: black !important;
            border: 2px solid var(--gold) !important;
            font-weight: bold;
        }

        /* Sidebar & Box Components */
        .full_blogs_section_sidebar_box {
            background: #f8f9fa;
            border: 1px solid #eee;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 30px;
        }

        .full_blogs_section_sidebar_box h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #111;
            position: relative;
            padding-bottom: 8px;
        }

        .full_blogs_section_sidebar_box h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--gold);
        }

        .full_blogs_section_author {
            display: flex;
            gap: 15px;
            align-items: center;
            margin-bottom: 15px;
        }

        .full_blogs_section_author img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .full_blogs_section_author h5 {
            margin: 0;
            font-weight: 600;
            font-size: 16px;
        }

        .full_blogs_section_social_round a {
            display: inline-flex;
            width: 35px;
            height: 35px;
            background: #eee;
            color: #333;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .full_blogs_section_social_round a:hover {
            background: var(--gold);
            color: black;
        }

        /* Swiper Carousel Overwrites */
        .fullblogs_section_1 {
            background-color: #f8f9fa !important;
            padding: 50px 0;
        }

        .custom-card {
            background: white;
            border: 1px solid #eef0f2;
            border-radius: 12px;
            transition: 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
        }

        .custom-card:hover {
            border-color: var(--gold);
            transform: translateY(-3px);
        }

        .custom-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .blog-card-text {
            color: #222;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            margin-top: 15px;
            line-height: 1.4;
        }

        .blog-card-text:hover {
            color: #051aff;
        }

        .swiper-slide {
            height: auto !important;
            padding-bottom: 30px;
        }

        .blogs_color {
            color: #111 !important;
            font-weight: 700;
        }

        /* CTA Box */
        .full_blogs_section_cta {
            background: linear-gradient(135deg, #020b13, #061522);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
        }

        .full_blogs_section_cta img {
            width: 100%;
            border-radius: 12px;
            object-fit: cover;
        }

        .full_blogs_section_btn_blue {
            background: linear-gradient(135deg, #f5d989, #c48a34);
            color: black;
            border: none;
            padding: 12px 25px;
            font-weight: bold;
            border-radius: 6px;
            transition: 0.3s;
        }

        .full_blogs_section_btn_blue:hover {
            background: #e6b800;
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
            z-index: 1000;
        }


        @media (min-width: 992px) {
            .sticky-sidebar {
                position: sticky;
                top: 90px;
                /* Navbar block avvakunda gap kosam */
                z-index: 10;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR SECTION -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-lg-5">
            <a href="index.php" class="navbar-brand logo-wrap">
                <!-- <div class="logo-mark">R</div> -->
                <div>
                    <img src="./assets/img/logo.png" alt="logo">
                    <!-- RAJAMUNDRY<br>
                    <span>STEELS</span> -->
                </div>
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li><a class="nav-link" href="index.php">HOME</a></li>
                    <li><a class="nav-link" href="about.php">ABOUT US</a></li>
                    <li><a class="nav-link active" href="blogs.php">BLOGS</a></li>
                    <li><a class="nav-link" href="Products.php">PRODUCTS</a></li>
                    <li><a class="nav-link" href="Vendors.php">VENDORS</a></li>
                    <li><a class="nav-link" href="yards.php">YARDS</a></li>
                    <li><a class="nav-link" href="contact.php">CONTACT</a></li>
                    <li><a href="get_a_qoute.php" class="text-decoration-none"><button class="btn-gold ms-lg-3"> GET IN A QUOTE → </button></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN BODY CONTENT -->
    <main>
        <section class="full_blogs_section_main">
            <div class="container">
                <div class="d-flex justify-content-center mb-4">
                    <button id="english-btn" class="lang-btn active btn btn-outline-dark">English</button>
                    <button id="telugu-btn" class="lang-btn ms-3 btn btn-outline-dark">తెలుగు</button>
                </div>

                <div class="full_blogs_section_breadcrumb">
                    <i class="bi bi-house-door me-2"></i> Home
                    <i class="bi bi-chevron-right mx-2"></i> Blog
                    <i class="bi bi-chevron-right mx-2"></i>
                    <b id="crumb-en"><?= htmlspecialchars($title) ?></b>
                    <b id="crumb-te" style="display:none;"><?= htmlspecialchars($telugu_title) ?></b>
                </div>

                <div class="row g-5">
                    <div class="col-lg-8">
                        <span class="full_blogs_section_badge"><?= htmlspecialchars($service) ?></span>

                        <h1 class="full_blogs_section_title">
                            <span id="title-en"><?= $title ?></span>
                            <span id="title-te" style="display:none;"><?= $telugu_title ?></span>
                        </h1>

                        <div class="full_blogs_section_meta">
                            <span><i class="bi bi-calendar3"></i> May 10, 2024</span>
                            <span><i class="bi bi-person"></i> Editor</span>
                            <span><i class="bi bi-clock"></i> 5 min read</span>
                        </div>

                        <?php if (!empty($video)): ?>
                            <video controls class="full_blogs_section_feature_video shadow">
                                <source src="./admin/uploads/videos/<?= $video ?>" type="video/mp4">
                            </video>
                        <?php else: ?>
                            <img class="full_blogs_section_feature_img" src="<?= !empty($main_image) ? "./admin/uploads/photos/" . $main_image : "https://images.unsplash.com/photo-1606811971618-4486d14f3f99?auto=format&fit=crop&w=1100&q=80" ?>" alt="<?= htmlspecialchars($title) ?>">
                        <?php endif; ?>

                        <article class="full_blogs_section_article">
                            <div class="main-content mb-4">
                                <div id="main-en"><?= $main_content ?></div>
                                <div id="main-te" style="display:none;"><?= $telugu_main_content ?></div>
                            </div>

                            <div class="full-content">
                                <div id="full-en"><?= $full_content ?></div>
                                <div id="full-te" style="display:none;"><?= $telugu_full_content ?></div>
                            </div>
                        </article>

                        <div class="d-flex justify-content-center vote-section">
                            <button id="like-btn" class="btn btn-outline-success me-3">👍 Like (<span id="like-count"><?= $likes_count ?></span>)</button>
                            <button id="dislike-btn" class="btn btn-outline-danger">👎 Dislike (<span id="dislike-count"><?= $dislikes_count ?></span>)</button>
                        </div>

                        <div class="full_blogs_section_cta">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=400&q=80" alt="Steel Dealership">
                                </div>
                                <div class="col-md-8">
                                    <div class="full_blogs_section_cta_content">
                                        <h3>Looking for Premium Steel Solutions?</h3>
                                        <p>Get the best quality TMT bars and structural steel components tailored for your dream projects.</p>
                                        <a href="get_a_qoute.php">
                                            <button class="full_blogs_section_btn_blue">
                                                <i class="bi bi-telephone-outbound me-2"></i> GET A QUOTE NOW
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="full_blogs_section_sidebar_box">
                            <h3>About the Company</h3>
                            <div class="full_blogs_section_author">
                                <div class="logo-mark" style="width:50px; height:45px; font-size:28px;">R</div>
                                <div>
                                    <h5>Rajahmundry Steels</h5>
                                    <small>Trusted Steel Solutions</small><br>
                                </div>
                            </div>
                            <p>Premium steel solutions for construction, industrial, and commercial needs. Building structures, strengthening relationships.</p>
                            <div class="full_blogs_section_social_round">
                                <a href=" https://www.facebook.com/RajahmundrySteels/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/rajahmundrysteels/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@RajahmundrySteels-1" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>
                        </div>

                        <div class="full_blogs_section_sidebar_box full_blogs_section_share_box">
                            <h3>Share This Article</h3>
                            <div class="full_blogs_section_social_round">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="fullblogs_section_1">
            <div class="container">
                <h1 class="d-flex justify-content-center py-5 blogs_color">LATEST BLOGS</h1>
                <div class="swiper blog-swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $latest_sql = "SELECT id, title, main_image, slug FROM blogs ORDER BY created_at DESC LIMIT 10";
                        $latest_res = $conn->query($latest_sql);
                        if ($latest_res && $latest_res->num_rows > 0) {
                            while ($row = $latest_res->fetch_assoc()) {
                                $sidebar_img = !empty($row['main_image']) ? "./admin/uploads/photos/{$row['main_image']}" : "default.png";
                                $sidebar_title = strlen($row['title']) > 50 ? substr(strip_tags($row['title']), 0, 50) . '...' : strip_tags($row['title']);
                                $blog_url = "fullblog.php?id=" . (!empty($row['slug']) ? $row['slug'] : $row['id']);
                                echo "
                                <div class='swiper-slide'>
                                    <div class='custom-card p-3 text-center'>
                                        <img src='{$sidebar_img}' alt='Blog Image'>
                                        <a href='{$blog_url}' class='blog-card-text d-block'>{$sidebar_title}</a>
                                    </div>
                                </div>";
                            }
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER SECTION -->
    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row g-4">
                <div class="col-lg-3">
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
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-1">
                    <h6>QUICK LINKS</h6>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="products.php">Products</a>
                    <a href="vendors.php">Vendors</a>
                    <a href="blogs.php">Blogs</a>
                    <a href="yards.php">Yards</a>
                    <a href="contact.php">Contact</a>
                </div>

                <div class="col-lg-2">
                    <h6>PRODUCTS</h6>
                    <a href="Products.php">TMT Bars</a>
                    <a href="Products.php">Structural Steel</a>
                    <a href="Products.php">MS Pipes</a>
                    <a href="Products.php">Steel Sheets</a>
                    <a href="Products.php">Roofing Sheets</a>
                </div>

                <div class="col-lg-2">
                    <h6>VENDORS</h6>
                    <a href="Vendors.php">JSW Steel</a>
                    <a href="Vendors.php">Tata Steel</a>
                    <a href="Vendors.php">Vizag Steel</a>
                    <a href="Vendors.php">BondX</a>
                </div>

                <div class="col-lg-2">
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

    <!-- BACK TO TOP BUTTON -->
    <div class="back-top" onclick="window.scrollTo({top:0,behavior:'smooth'})">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <!-- Scripts Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Language Toggle Logic Engine
        const enBtn = document.getElementById("english-btn");
        const teBtn = document.getElementById("telugu-btn");

        function switchLang(lang) {
            const isEn = (lang === 'en');

            // Toggle Display Visibility
            document.getElementById("title-en").style.display = isEn ? "inline" : "none";
            document.getElementById("main-en").style.display = isEn ? "block" : "none";
            document.getElementById("full-en").style.display = isEn ? "block" : "none";
            document.getElementById("crumb-en").style.display = isEn ? "inline" : "none";

            document.getElementById("title-te").style.display = isEn ? "none" : "inline";
            document.getElementById("main-te").style.display = isEn ? "none" : "block";
            document.getElementById("full-te").style.display = isEn ? "none" : "block";
            document.getElementById("crumb-te").style.display = isEn ? "inline" : "none";

            enBtn.classList.toggle('active', isEn);
            teBtn.classList.toggle('active', !isEn);
        }

        enBtn.onclick = () => switchLang('en');
        teBtn.onclick = () => switchLang('te');

        // Client Side Voting Processing Engine
        const blogId = <?= json_encode($blog_id) ?>;
        const likeBtn = document.getElementById("like-btn");
        const dislikeBtn = document.getElementById("dislike-btn");

        if (localStorage.getItem("voted_" + blogId)) {
            likeBtn.disabled = dislikeBtn.disabled = true;
        }

        async function castVote(type) {
            const res = await fetch("update_vote.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `blog_id=${blogId}&vote_type=${type}`
            });
            const data = await res.json();
            if (data.success) {
                document.getElementById("like-count").innerText = data.new_likes;
                document.getElementById("dislike-count").innerText = data.new_dislikes;
                localStorage.setItem("voted_" + blogId, true);
                likeBtn.disabled = dislikeBtn.disabled = true;
            }
        }

        likeBtn.onclick = () => castVote('like');
        dislikeBtn.onclick = () => castVote('dislike');

        // Initialize Swiper Loop
        new Swiper(".blog-swiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });

        // Back to top behavior
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
<?php $conn->close(); ?>