<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog KNOXSS</title>
  <!-- IMPORT -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Mukta">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kanit">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../assets/css/style-dashboard.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
  />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link
    rel="stylesheet"
    href="https://www.w3schools.com/lib/w3-theme-black.css"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
  />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- IMPORT -->

  
</head>
<body class="blog">
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm navbar-light bg-transparent">
    <div class="container-fluid logo-nav crop-nav">
      <a href="../dashboard" class="navbar-brand">
        <img
          src="https://knoxss.me/wp-content/uploads/2021/04/knoxss-glitch.gif"
          alt=""
        />
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse col-sm-3 position-nav" id="navbarCollapse">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a
              class="nav-link"
              href="../dashboard"
              >Homepage</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="../blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->
  
  <!-- articles -->
  <h1 class="header-art" data-aos="fade-down">XSS (Cross-Site Scripting)</h1>
  <section class="articles isi-blog">
     <div class="article">
      <div class="left " data-aos="zoom-in-right">
        <img src="https://wallpapercave.com/wp/wp9347283.jpg" alt="">
      </div>
      <div class="right" data-aos="zoom-in-left">
        <p class="date">KirstenS, 12, 2019</p>
        <h1 class="judul-art">What is XSS?</h1>
        <p class="description">Cross-Site Scripting (XSS) attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites. XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user.....</p> <a href="https://owasp.org/www-community/attacks/xss/">
        <h6 class="readmore">Read More....</a>
      </div>
    </div> 
    
    <div class="article">
        <div class="left" data-aos="zoom-in-right">
          <img src="https://cdn.discordapp.com/attachments/907623259510571009/977440429802917928/unknown.png" alt="">
        </div>
        <div class="right" data-aos="zoom-in-left">
          <p class="date">Secumantra, 24, 2021</p>
          <h1 class="judul-art">OWASP Top Ten: Cross-Site Scripting (XSS)</h1>
          <p class="description">Welcome to Secumantra! In this post, we’re going to talk about the number seven vulnerability from OWASP Top Ten which is Cross-Site Scripting (XSS). Cross-site scripting is one of the most common security vulnerability in web applications today......</p> <a href="OWASP Top Ten: Cross-Site Scripting (XSS)">
          <h6 class="readmore">Read More....</a>
        </div>
      </div>

    <div class="article">
      <div class="left" data-aos="zoom-in-right">
        <img src="https://lever-client-logos.s3.us-west-2.amazonaws.com/b825e77f-3c0d-40c5-87b7-4c78a00938f5-1616429061461.png" alt="">
      </div>
      <div class="right" data-aos="zoom-in-left">
        <p class="date">Naz Markuta, 15, 2020</p>
        <h1 class="judul-art">A XSS bug on Spotify's Podcasters</h1>
        <p class="description">When a user submits a new podcast RSS feed for verification, the description tag inside it is not properly escaped. This results in JavaScript being executed on the page which could allow attackers to hijack users' session cookies and/or take over accounts.....</p> <a href="https://markuta.com/xss-on-spotify-podcasters/">
        <h6 class="readmore">Read More....</a>
      </div>
    </div>
  </section>
  <!-- articles -->
  
  
  <!--Footer-->
  <footer class="w3-container w3-padding bg-foot" id="myFooter">
    <div class="w3-center" data-aos="zoom-in-down">
      <h1 class="w3-xlarge w3-animate-bottom crop-head-foot"><br><img
        src="https://knoxss.me/wp-content/uploads/2021/04/knoxss-glitch.gif"
        class="rounded mx-auto d-block"
        height="25%"
        width="25%"
        alt=""
      /></h1><br>
      <div class="font-foot">A C C U R A C Y<span style="letter-spacing: 19px; color: rgb(21, 21, 21);">t</span> I S<span style="letter-spacing: 19px; color: rgb(21, 21, 21)">t</span>E V R Y T H I N G .</div>
        </a>
      </div>
      <br>
    </div> 
    <div class="row row-foot">
      <div class="col-lg-5 col-xs-12 font-foot-head" data-aos="zoom-in-up">
        <h2>KNOXSS</h2>
        <p class="pr-4 text-white-50">KNOXSS IS AN ONLINE XSS (CROSS-SITE SCRIPTING) TOOL WITH DEMONSTRATION OF VULNERABILITY ANY WEBSITES. </p>
        <p><a href="https://facebook.com"><i class="fa fa-facebook-square mr-2"></i></a><a href="https://twitter.com/Rhymeus_"><i class="fa fa-twitter-square"></i></a></p>
      </div>
      <div class="col-lg-3 col-xs-12 font-foot-isi" data-aos="zoom-in-up">
          <ul>
            <br><a class="nav-link active text-light"
                href="https://knoxss.me/?page_id=1987"
                >FAQ & CONTACT</a>
            <a class="nav-link active text-light"
                href="https://knoxss.me/?page_id=164"
                >TERMS OF SERVICE</a>
            <a class="nav-link active text-light"
                href="https://knoxss.me/?page_id=162"
                >PRIVACY POLICY</a>
          </ul>
      </div>
      <div class="col-lg-4 col-xs-12 font-foot-akhir" data-aos="zoom-in-up">
        <h4 class="mt-lg-0 mt-sm-4">Location</h4>
        <p>Telaga Murni, Cikarang Barat, Bekasi, Indonesia</p>
        <p class="mb-0"><i class="fa fa-phone mr-3"></i>+62 812-9435-8571</p>
        <p><i class="fa fa-envelope-o mr-3"></i>rhymebounty@gmail.com</p>
      </div>
    </div>  
  </footer>
  <!--Footer-->

  <!-- Copyright -->
  <div class="bg-cr">
    <div class="text-center font-cr">
    © 2021 Brute Logic – All rights reserved.
    </div>
  </div>
  <!-- Copyright -->
  <!-- data-aos import -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
  </script>
  <!-- data-aos import -->
</body>
</html>