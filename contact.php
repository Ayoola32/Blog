<?php include "includes/db.php";?>
<?php include "includes/header.php"; ?>

<style>
    html, body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
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
        margin-bottom: 13.4rem;
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
                        <li><a class="nav-link" href="index.php"><span>Home</span></a></li>
                        <li><a class="nav-link active" href="about.php"><span>About</span></a></li>
                        <li><a class="nav-link" href="contact.php"><span>Contact</span></a></li>
                    </ul>
                </div>
                <!-- / -->
            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>
    <!-- End Header -->

    <!-- Main Content -->
    <div class="content">
        <!-- About Me -->
        <section id="contactme" class="section after-left-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-3">
                        <div class="contct-form">
                            <div class="sm-title">
                                <h4 class="font-alt">Contact Me</h4>
                            </div>
                            <form action="" method="post" class="wpcf7" accept-charset="UTF-8">                          
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full name" name="fromName"  id="from-name" value="" required="">
                                            <label class="form-label">Name</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="fromEmail" value="" type="email" class="form-control" id="from-email" placeholder="Email address" required="">
                                            <label class="form-label">Email</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input value="" name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                            <label class="form-label">Subject</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" rows="4" class="form-control" placeholder="Type message" id="message" required=""></textarea>
                                            <label class="form-label">Message</label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-bar">
                                            <button class="px-btn px-btn-theme" type="submit">Send your message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto my-3">
                        <div class="contact-info">
                            <div class="sm-title">
                                <h4 class="font-alt">Get in touch</h4>
                            </div>
                            <!-- <div class="media">
                                <div class="icon">
                                    <i class="ti-map"></i>
                                </div>
                                <span class="media-body">123 Stree New York City , <br /> United States Of America <br /> NY 750065.</span>
                            </div> -->
                            <div class="media">
                                <div class="icon">
                                    <i class="uil uil-envelope"></i>
                                </div>
                                <span class="media-body"><a href="mailto:agboolatawakalit0@gmail.com@gmail.com" style="color:#0f0a0a;">agboolatawakalit0@gmail.com</a></span>
                            </div>
                            <div class="media">
                                <div class="icon">
                                    <i class="uil uil-phone"></i>
                                </div>
                                <span class="media-body">+44 0744 284 1735</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include "includes/footer.php" ?>
</body>
