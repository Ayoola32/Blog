<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>

<style>
    html, body {
        height: 100%;
        margin: 0;
        overflow: hidden;
    }

    .main-header {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 111;
        width: 100%;
        background: #fff; /* Ensuring fixed header background is white */
        box-shadow: rgba(0, 0, 0, 0.25) 0px 7px 20px -22px;
    }

    .main-header .navbar-brand {
        color: #251234;
    }

    .main-header .navbar-nav > li {
        border-right: 1px solid rgba(15, 10, 10, 0.1);
        padding: 0 20px;
    }

    .main-header .navbar-nav > li:first-child {
        border-left: 1px solid rgba(15, 10, 10, 0.1);
    }

    .main-header .navbar-nav > li > a {
        padding: 0 10px;
        line-height: 70px;
        color: #251234;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 0.05rem;
    }

    .main-header .navbar-nav > li > a.active {
        color: #251234;
    }

    .section {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .about-section {
        padding-top: 100px; 
        padding-bottom: 30px; 
        background-color: #f4f4f4;
        height: calc(100% - 70px);  
        margin-bottom: 10px
    }

    .about-section .container {
        position: relative;
        z-index: 1;
    }

    .about-section .img-box {
        text-align: center;
        box-shadow: inset rgba(37, 18, 76, 0.36) 15px 15px 70px 10px;
        background: #fff;
        padding: 10px;
    }

    .about-section .img-display {
        width: 100%;
        height: auto;
        border-radius: 5px; /* Optional: Adds rounded corners */
    }

    .about-section .typo-box {
        padding-left: 40px;
        text-align: center;
    }

    @media (max-width: 991px) {
        .about-section .typo-box {
            padding-top: 15px;
            padding-left: 0;
        }
    }

    .about-section .typo-box h3 {
        font-size: 40px;
        font-weight: 700;
        color: #251234;
    }

    @media (max-width: 767px) {
        .about-section .typo-box h3 {
            font-size: 30px;
        }
    }

    .about-section .typo-box h5 {
        font-size: 18px;
        font-weight: 600;
        color: #251234;
        margin-bottom: 15px;
    }

    .about-section .typo-box p {
        font-weight: normal;
        font-size: 17px;
    }

    @media (max-width: 767px) {
        .about-section .typo-box p {
            font-size: 17px;
        }
    }

    .about-section .btn-bar {
        margin-top: 10px;
    }

    .px-btn {
        padding: 0 25px;
        border-radius: 20px 0px;
        line-height: 46px;
        position: relative;
        display: inline-block;
        background: none;
        border: none;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none !important;
        position: relative;
        z-index: 1;
        overflow: hidden;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    }
    .px-btn.px-btn-theme {
        background: #251234;
        color: #fff;
        border: 2px solid #251234;
    }
    .px-btn.px-btn-theme-alt {
        background: #fff;
        color: #251234;
        border: 2px solid #251234;
    }
    .px-btn.px-btn-theme:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: auto;
        top: 0;
        width: 0px;
        -moz-transition: ease all 0.35s;
        -o-transition: ease all 0.35s;
        -webkit-transition: ease all 0.35s;
        transition: ease all 0.35s;
        background: #251234;
        z-index: -1;
    }
    .px-btn.px-btn-theme-alt:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: auto;
        top: 0;
        width: 0px;
        -moz-transition: ease all 0.35s;
        -o-transition: ease all 0.35s;
        -webkit-transition: ease all 0.35s;
        transition: ease all 0.35s;
        background: #251234;
        z-index: -1;
    }
    .px-btn.px-btn-theme:hover {
        color: #fff;
    }
    .px-btn.px-btn-theme-alt:hover {
        color: #fff;
    }
    .px-btn.px-btn-theme-:hover:after {
        width: 100%;
        left: auto;
        right: 0;
    }
    .px-btn.px-btn-theme-alt:hover:after {
        width: 100%;
        left: auto;
        right: 0;
    }
    .px-btn.px-btn-white {
        background: #fff;
        border-color: #fff;
        color: #251234;
    }
    .px-btn.px-btn-white:hover {
        background: transparent;
        color: #fff;
    }
</style>

<body>
    <!-- Header -->
    <header class="main-header">
        <nav class="navbar header-nav header-white navbar-expand-lg">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="index.php">Research Blog<span></span></a>
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- / -->
                <!-- Top Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse-toggle">
                    <ul class="navbar-nav ml-auto">
                        <li><a class="nav-link" href="1index.php"><span>Home</span></a></li>
                        <li><a class="nav-link active" href="about.php"><span>About</span></a></li>
                        <li><a class="nav-link" href="contact.php"><span>Contact</span></a></li>
                    </ul>
                </div>
                <!-- / -->
            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>
    <!-- End Header -->

    <!-- About Me -->
    <section id="about" class="section about-section after-left-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 my-3">
                    <div class="img-box">
                        <img class="img-display" src="images/55.webp" title="" alt="">
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="typo-box">
                        <h3>Tawakalit O. Agboola</h3>
                        <h5>Data Scientist | Research Analyst Writer | Mentor</h5>
                        <p> I'm a creative and analytical Data scienttist with a strong sense of teamwork. I also enjoy producing content to share my knowledge with other Scientist and Researcher. </p>
                        <p> My extensive experience over the years, which is still growing, has produced several valuable Analysis. Use the buttons below if you'd like to contact me or learn more about me. </p>
                        <div class="row">
                            <div class="btn-bar col-6">
                                <a class="px-btn px-btn-theme" href="">
                                    Contact Me
                                </a>
                            </div>
                            <div class="btn-bar col-6">
                                <a class="px-btn px-btn-theme-alt" href="/assets/" target="_blank">
                                    My Resumé
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php" ?>
</body>
