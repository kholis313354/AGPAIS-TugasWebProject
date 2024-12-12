<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTS -->
    <link rel="website icon" height="90px" href="/assets/img/logo_departemen_agama.png">
    <link rel="stylesheet" href="./assets/css/style2.css">
    <link rel="stylesheet" href="./assets/css/footer2.css">
    <link rel="stylesheet" href="./assets/css/beritas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* loading css */
.loading-container {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  background-color: #000;
  z-index: 9999999;
}
.container2 {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.loader {
  width: 500px;
  height: 500px;
  border: 0px solid white;
  position: absolute;
}</style>
<!-- script loading menggunakan ajak awal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script>$(window).on("load", function () {
        $(".loading-container").fadeOut(2000);
      });
      </script>
      <!-- script loading akhir -->
</head>
<body>
      <!-- loading awal-->
      <div class="loading-container">
    <div class="container2">
        <img src="./assets/img/loader.gif" class="loader" alt="">
    </div>
    </div>
  <!-- loading akhir -->
  <nav>
        <div class="container nav-wrapper">
            <div class="brand">
               <img src="/assets/img/logo_departemen_agama.png" alt="">
                <span><strong>KANTOR WILAYAH<br>KEMENTRIAN AGAMA <br> KARAWANG</strong></span>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-list">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="active">
                    <a href="berita.php">Berita</a></li>
                <li>
                    <a href="layanan.php">layanan</a>
                    <!-- <ul class="dropdown-list">
                        <li><a href="kontak.php">aku</a></li>
                        <li><a href="#">suka</a></li>
                        <li><a href="#">kamu</a></li>
                        <li><a href="#">apa </a></li>
                        <li><a href="#">masa sih</a></li>
                        <li><a href="#">ah gak</a></li>
                        <li><a href="#">percya</a></li>
                    </ul> -->
                </li>
                <li><a href="Struktur.php">Struktur</a></li>
                <li>
                <a href="login.php" ><button class="btn"> Login</button></a>
                </li>
            </ul>
        </div>
<header class="bagian3">
   <!--Conten-->
   <section>
    <div class="content1" id="conten1">
        <div class = "banner-main-content">
            <h2><span>lorem</span> <br> lorem?</h2>
            <h3>Hai.. bimbingan nmanasik haji</span></h3>
            <button>
                <a href = "index.html">Know More</a>
            </button>
            <div class="banner-sub-content2">
                <div class="side1">
                    <img src="./assets/img/kemenag.jpeg" alt="" class="">
                    <h5>12/07/2023</h5>
                    <h1>bimbingan nmanasik haji</h1>
                    <p>kegiatan haji di kemenag karawang,</p>
                    <a href = "#" >Read More</a>
                </div>
                <div class="side2">
                    <img src="./assets/img/bg.jpg" alt="" class="">
                    <h5>12/07/2023</h5>
                    <h1>Ini Judulnya</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis,</p>
                    <a href = "#">Read More <span>>></span></a>
                </div>
            </div>
        </div>
        <div class="banner-sub-content">
            <div class="topik-utama">
                <img src="./assets/img/kemenag.jpeg" alt="" class="">
                <h5>27/04/2024</h5>
                <h1>bimbingan manasik haji Kelurahan pedes</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis, repellendus libero autem ratione</p>
                <a href = "indexc1.html" style="color: #fff;">Read More <span>>></span></a>
            </div>
        </div>
    </div>
</section>
<main>
    <div class="main-utama">
    <section class = "main-container-left">
        <h2>lorem</h2>
        <div class = "container-top-left">
            <article>
                <img src = "./assets/img/bg.jpg">

                <div>
                    <h3>lorem</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea sint, nisi rem earum fugit? Facere veritatis sapiente eveniet quibusdam.</p>

                    <a href = "#">Read More <span>>></span></a>
                </div>
            </article>
        </div>

        <div class = "container-bottom-left">
            <article>
                <img src = "./assets/img/bg.jpg">
                <div>
                    <h5>12/07/2023</h5>
                    <h3>lorem</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>

                    <a href = "#">Read More <span>>></span></a>
                </div>
            </article>

            <article>
                <img src = "./assets/img/bg.jpg">
                <div>
                    <h5>12/07/2023</h5>
                    <h3>lorem</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>

                    <a href = "#">Read More <span>>></span></a>
                </div>
            </article>
        </div>
    </section>

    <section class = "main-container-right">
        <h2>lorem</h2>
        
        <article>
            <h4>lorem</h4>
            <div>
                <h2>lorem</h2>

                <p>lorem</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "./assets/img/bg.jpg">
        </article>

        <article>
            <h4>lorem</h4>
            <div>
                <h2>lorem</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "./assets/img/bg.jpg">
        </article>

        <article>
            <h4>just in </h4>
            <div>
                <h2>lorem</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "./assets/img/bg.jpg">
        </article>

        <article>
            <h4>just in </h4>
            <div>
                <h2>lorem</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "picture/pexels-harry-cunningham-harrydigital-3619793.jpg">
        </article>

        <article>
            <h4>just in </h4>
            <div>
                <h2>lorem</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read<span>>></span></a>
            </div>
            <img src = "./assets/img/bg.jpg">
        </article>

        <article>
            <h4>lorem </h4>
            <div>
                <h2>lorem</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read More <span>>></span></a>
            </div>
            <img src = "./assets/img/bg.jpg">
        </article>

        <article>
            <h4>lorem</h4>
            <div>
                <h2>lorem</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read<span>>></span></a>
            </div>
            <img src = "./assets/img/bg.jpg">
        </article>

        <article>
            <h4>lorem</h4>
            <div>
                <h2>lorem</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read<span>>></span></a>
            </div>
            <img src = "./assets/img/bg.jpg">
        </article>

        <article>
            <h4>lorem</h4>
            <div>
                <h2>lorem</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>

                <a href = "#">Read<span>>></span></a>
            </div>
            <img src = "./assets/img/bg.jpg">
        </article>
    </section>
</div>
</main>

<div class="arsip">
    <h2>Archive</h2>
    <div class="arsip-container">
        <div class="side3">
            <img src="./assets/img/bg.jpg" alt="" class="">
            <h1>Ini Judulnya</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis,</p>
            <a href = "indexc1.html">Read More <span>>></span></a>
        </div>
        <div class="side4">
            <img src="./assets/img/bg.jpg" alt="" class="">
            <h1>Ini Judulnya</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis,</p>
            <a href = "indexc1.html">Read More <span>>></span></a>
        </div>
        <div class="side5">
            <img src="./assets/img/bg.jpg" alt="" class="">
            <h1>Ini Judulnya</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis,</p>
            <a href = "indexc1.html">Read More <span>>></span></a>
        </div>
        <div class="side6">
            <img src="./assets/img/bg.jpg" alt="" class="">
            <h1>Ini Judulnya</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis,</p>
            <a href = "indexc1.html">Read More <span>>></span></a>
        </div>
        <div class="side7">
            <img src="./assets/img/bg.jpg" alt="" class="">
            <h1>Ini Judulnya</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis,</p>
            <a href = "indexc1.html">Read More <span>>></span></a>
        </div>
        <div class="side8">
            <img src="./assets/img/bg.jpg" alt="" class="">
            <h1>Ini Judulnya</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta veritatis,</p>
            <a href = "indexc1.html">Read More <span>>></span></a>
        </div>
    </div>
</div>
</div>
</header>
<!-- footer -->
<div class="cover">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7082997593943!2d107.30034607355556!3d-6.302005861673708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977e86cfea273%3A0xc7878bb42a30e610!2sKantor%20Kementerian%20Agama%20Kab.%20Karawang!5e0!3m2!1sid!2sid!4v1713667411546!5m2!1sid!2sid" width="80%" height="450" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
    </div>
    <footer>
    <div class="container">
      <div class="sec aboutus">
        <h2>KEMENAG KARAWANG</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quae placeat, ducimus, repellat quis pariatur deleniti iste asperiores architecto beatae quidem culpa quos laborum, rem magnam numquam aspernatur. Facere, explicabo?</p>
        <ul class="sci">
          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
        </ul>
      </div>
      <div class="sec quicklinks">
        <h2>UHUYY</h2>
        <ul>
          <li><a href="#">KK2</a></li>
          <li><a href="#">KHOLIS</a></li>
          <li><a href="#">KAMALUDDIN</a></li>
          <li><a href="#">WAHIB</a></li>
        </ul>
      </div>
      <div class="sec quicklinks">
        <h2>APA YA</h2>
        <ul>
          <li><a href="#">APA AJA</a></li>
          <li><a href="#">NANTI DI ISI</a></li>
          <li><a href="#">OK</a></li>
          <li><a href="#">LOREM</a></li>
        </ul>
      </div>
      <div class="sec contact">
        <h2>kontak</h2>
        <ul class="info">
          <li>
            <span><i class="fa-solid fa-phone"></i></span><p><a href="tel:984885536">082289659204</a></p>
          </li>
          <li>
            <span><i class="fa-solid fa-envelope"></i></span><p><a href="email:lynrYunga@gmail.com">Kholiskamal354@gmail.com</a></p>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="copyrightText">
    <p>Copyright <a href="https://www.instagram.com/pheonix_1200/?hl=en" style="text-decoration: none; color:#5F860C; ">©pheonix_1200</a> All Rights Reserved</p>
  </div>
  <!-- footer akhir -->
    <script src="./script.js"></script>
</body>
</html>
