<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="website icon" height="90px" href="/assets/img/logo_departemen_agama.png">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/footer2.css">
    <link rel="stylesheet" href="./assets/css/kontak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <style>
       *,
      *:before,
      *:after {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
      }

      body {
          font-family: 'Helvetica Neue', 'Helvetica', Arial, sans-serif;
      }

      h1 {
          color: #fff;
          text-align: center;
      }
      h3{
        color: #fff;
      }
      #wrapper {
          margin: 150px auto;
          max-width: 80em;
      }
      p{
        color: #fff;
      }
      #container {
          float: left;
          padding: 1em;
          width: 100%;
      }

      ol.organizational-chart,
      ol.organizational-chart ol,
      ol.organizational-chart li,
      ol.organizational-chart li>div {
          position: relative;
      }

      ol.organizational-chart,
      ol.organizational-chart ol {
          list-style: none;
          margin: 0;
          padding: 0;
      }

      ol.organizational-chart {
          text-align: center;
      }

      ol.organizational-chart ol {
          padding-top: 1em;
      }

      ol.organizational-chart ol:before,
      ol.organizational-chart ol:after,
      ol.organizational-chart li:before,
      ol.organizational-chart li:after,
      ol.organizational-chart>li>div:before,
      ol.organizational-chart>li>div:after {
          background-color: #fff;
          content: '';
          position: absolute;
      }

      ol.organizational-chart ol>li {
          padding: 1em 0 0 1em;
      }

      ol.organizational-chart>li ol:before {
          height: 1em;
          left: 50%;
          top: 0;
          width: 3px;
      }

      ol.organizational-chart>li ol:after {
          height: 3px;
          left: 3px;
          top: 1em;
          width: 50%;
      }

      ol.organizational-chart>li ol>li:not(:last-of-type):before {
          height: 3px;
          left: 0;
          top: 2em;
          width: 1em;
      }

      ol.organizational-chart>li ol>li:not(:last-of-type):after {
          height: 100%;
          left: 0;
          top: 0;
          width: 3px;
      }

      ol.organizational-chart>li ol>li:last-of-type:before {
          height: 3px;
          left: 0;
          top: 2em;
          width: 1em;
      }

      ol.organizational-chart>li ol>li:last-of-type:after {
          height: 2em;
          left: 0;
          top: 0;
          width: 3px;
      }

      ol.organizational-chart li>div {
          background-color: #fff;
          border-radius: 3px;
          min-height: 2em;
          padding: 0.5em;
      }

      /*** PRIMARY ***/
      ol.organizational-chart>li>div {
          background-color: #5F860C;
          margin-right: 1em;
          
      }

      ol.organizational-chart>li>div:before {
          bottom: 2em;
          height: 3px;
          right: -1em;
          width: 1em;
      }

      ol.organizational-chart>li>div:first-of-type:after {
          bottom: 0;
          height: 2em;
          right: -1em;
          width: 3px;
      }

      ol.organizational-chart>li>div+div {
          margin-top: 1em;
      }

      ol.organizational-chart>li>div+div:after {
          height: calc(100% + 1em);
          right: -1em;
          top: -1em;
          width: 3px;
      }

      /*** SECONDARY ***/
      ol.organizational-chart>li>ol:before {
          left: inherit;
          right: 0;
      }

      ol.organizational-chart>li>ol:after {
          left: 0;
          width: 100%;
      }

      ol.organizational-chart>li>ol>li>div {
          background-color: #5F860C;
          color: #fff !important;
      }

      /*** TERTIARY ***/
      ol.organizational-chart>li>ol>li>ol>li>div {
          background-color: #5F860C;
      }

      /*** QUATERNARY ***/
      ol.organizational-chart>li>ol>li>ol>li>ol>li>div {
          background-color: #fca858;
      }

      /*** QUINARY ***/
      ol.organizational-chart>li>ol>li>ol>li>ol>li>ol>li>div {
          background-color: #fddc32;
      }

      /*** MEDIA QUERIES ***/
      @media only screen and (min-width: 64em) {
          ol.organizational-chart {
              margin-left: -1em;
              margin-right: -1em;
          }

          /* PRIMARY */
          ol.organizational-chart>li>div {
              display: inline-block;
              float: none;
              margin: 0 1em 1em 1em;
              vertical-align: bottom;
              width: 90% !important;
              height: 90%;
              color: red !important;
          }

          ol.organizational-chart>li>div:only-of-type {
              margin-bottom: 0;
              width: calc((100% / 1) - 2em - 4px);
              color: red;
          }

          ol.organizational-chart>li>div:first-of-type:nth-last-of-type(2),
          ol.organizational-chart>li>div:first-of-type:nth-last-of-type(2)~div {
              width: calc((100% / 2) - 2em - 4px);
              color: red;
          }

          ol.organizational-chart>li>div:first-of-type:nth-last-of-type(3),
          ol.organizational-chart>li>div:first-of-type:nth-last-of-type(3)~div {
              width: calc((100% / 3) - 2em - 4px);
          }

          ol.organizational-chart>li>div:first-of-type:nth-last-of-type(4),
          ol.organizational-chart>li>div:first-of-type:nth-last-of-type(4)~div {
              width: calc((100% / 4) - 2em - 4px);
          }

          ol.organizational-chart>li>div:first-of-type:nth-last-of-type(5),
          ol.organizational-chart>li>div:first-of-type:nth-last-of-type(5)~div {
              width: calc((100% / 5) - 2em - 4px);
          }

          ol.organizational-chart>li>div:before,
          ol.organizational-chart>li>div:after {
              bottom: -1em !important;
              top: inherit !important;
          }

          ol.organizational-chart>li>div:before {
              height: 1em !important;
              left: 50% !important;
              width: 3px !important;
          }

          ol.organizational-chart>li>div:only-of-type:after {
              display: none;
          }

          ol.organizational-chart>li>div:first-of-type:not(:only-of-type):after,
          ol.organizational-chart>li>div:last-of-type:not(:only-of-type):after {
              bottom: -1em;
              height: 3px;
              width: calc(50% + 1em + 3px);
          }

          ol.organizational-chart>li>div:first-of-type:not(:only-of-type):after {
              left: calc(50% + 3px);
          }

          ol.organizational-chart>li>div:last-of-type:not(:only-of-type):after {
              left: calc(-1em - 3px);
          }

          ol.organizational-chart>li>div+div:not(:last-of-type):after {
              height: 3px;
              left: -2em;
              width: calc(100% + 4em);
          }

          /* SECONDARY */
          ol.organizational-chart>li>ol {
              display: flex;
              flex-wrap: nowrap;
          }

          ol.organizational-chart>li>ol:before,
          ol.organizational-chart>li>ol>li:before {
              height: 1em !important;
              left: 50% !important;
              top: 0 !important;
              width: 3px !important;
          }

          ol.organizational-chart>li>ol:after {
              display: none;
          }

          ol.organizational-chart>li>ol>li {
              flex-grow: 1;
              padding-left: 1em;
              padding-right: 1em;
              padding-top: 1em;
          }

          ol.organizational-chart>li>ol>li:only-of-type {
              padding-top: 0;
          }

          ol.organizational-chart>li>ol>li:only-of-type:before,
          ol.organizational-chart>li>ol>li:only-of-type:after {
              display: none;
          }

          ol.organizational-chart>li>ol>li:first-of-type:not(:only-of-type):after,
          ol.organizational-chart>li>ol>li:last-of-type:not(:only-of-type):after {
              height: 3px;
              top: 0;
              width: 50%;
          }

          ol.organizational-chart>li>ol>li:first-of-type:not(:only-of-type):after {
              left: 50%;
          }

          ol.organizational-chart>li>ol>li:last-of-type:not(:only-of-type):after {
              left: 0;
          }

          ol.organizational-chart>li>ol>li+li:not(:last-of-type):after {
              height: 3px;
              left: 0;
              top: 0;
              width: 100%;
          }
      }
      .wr-text{
        color: #fff;
      }
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
          <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
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
                <li><a href="berita.php">Berita</a></li>
                <li>
                    <a href="layanan.php">layanan</a>
                    <ul class="dropdown-list">
                        <li><a href="kontak.php">aku</a></li>
                        <li><a href="#">suka</a></li>
                        <li><a href="#">kamu</a></li>
                        <li><a href="#">apa </a></li>
                        <li><a href="#">masa sih</a></li>
                        <li><a href="#">ah gak</a></li>
                        <li><a href="#">percaya</a></li>
                    </ul>
                </li>
                <li class="active"><a href="struktur.php">Struktur</a></li>
                <li>
                <a href="login.php" ><button class="btn"> Login</button></a>
                </li>
            </ul>
        </div>
        <main class="main">
          <!-- Struktur Organisasi -->
<div id="wrapper">
  <div id="container">
      <ol class="organizational-chart">
          <li>
              <div>
                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="150px" height="150px" alt="">
                  <h1>Kepala Kantor Kementerian Agama Kabupaten Karawang</h1>
                  <h3>H.Sopian</h3>
                  <p>Jalan Husni Hamid No. 1, Karawang
                    Telp. (0267) 402266 Faks. (0267) 402266 / 413611</p>
                  <p></p>
                  <p></p>
              </div>
              <ol>
                  <li>
                      <div class="wr-text">
                        <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                        <h4 style="font-size: 15px; color:#fff;"> <b>Kepala Subbag Tata Usaha </b></h4>
                        <h4 style="font-size: 13px; color:#fff;">H.Yakub Lubis Al Pauji</h4>
                      </div>
                      <ol>
                        
                          <li>
                              <div class="wr-text">
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                              
                          </li>
                          <li>
                              <div class="wr-text">
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                      </ol>
                      
                  </li>
                  <!-- -->
                  <li>
                      <div>
                        <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                        <h4 style="font-size: 15px; color:#fff;"> <b>Kepala Seksi Pendidikan Madrasah</b></h4>
                        <h4 style="font-size: 13px; color:#fff;">H.Aab Abdulah</h4>
                      </div>
                      <ol>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 15px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">kholis</h4>
                              </div>
                          </li>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                      </ol>
                  </li>
                  <!-- -->
                  <li>
                      <div>
                        <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                        <h4 style="font-size: 14px; color:#fff;"><b>Kepala Seksi Pendidikan Diniyah & Ponpes</b></h4>
                        <h4 style="font-size: 13px; color:#fff;">H.Dadang Hamidi</h4>
                      </div>
                      <ol>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                      </ol>
                  </li>
                  <!-- -->
                  <li>
                      <div>
                        <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                        <h4 style="font-size: 14px; color:#fff;"><b>Kepala Seksi Pendidikan Agama Islam</b></h4>
                        <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                      </div>
                      <ol>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                      </ol>
                  </li>
                  <!-- -->
                  <li>
                      <div>
                        <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                        <h4 style="font-size: 15px; color:#fff;"> <b>Kepala Subbag Tata Usaha </b></h4>
                        <h4 style="font-size: 13px; color:#fff;">H.Yakub Lubis Al Pauji</h4>
                      </div>
                      <ol>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                      </ol>
                  </li>
                  <!-- -->
                  <li>
                      <div>
                        <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                        <h4 style="font-size: 15px; color:#fff;"> <b>Kepala Subbag Tata Usaha </b></h4>
                        <h4 style="font-size: 13px; color:#fff;">H.Yakub Lubis Al Pauji</h4>
                      </div>
                      <ol>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                          <li>
                              <div>
                                <img src="../assets/img/kholis2.jpg" style="border-radius: 90%;" width="90px" height="90px" alt="">
                                <h4 style="font-size: 14px; color:#fff;"><b>Anggota</b></h4>
                                <h4 style="font-size: 13px; color:#fff;">Edi Junaedi</h4>
                              </div>
                          </li>
                      </ol>
                  </li>
                  <!-- -->
              </ol>
          </li>
      </ol>
  </div>
</div>
</section><!-- /Contact Section -->

</main>
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
    <p>Copyright <a href="https://www.instagram.com/pheonix_1200/?hl=en" style="text-decoration: none; color:#5F860C; ">©Kholis9_9 </a> All Rights Reserved</p>
  </div>
    <script src="./script.js"></script>
    <!-- struktur organisasi -->
    <script>
  (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');
</script>
<!-- end struktur organisasi -->
</body>
</html>
