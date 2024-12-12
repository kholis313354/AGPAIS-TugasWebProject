<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="website icon" height="90px" href="/assets/img/logo_departemen_agama.png">
    <link rel="stylesheet" href="./assets/css/style2.css">
    <link rel="stylesheet" href="./assets/css/footer2.css">
    <link rel="stylesheet" href="./assets/css/kontak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
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
               <img src="./assets/img/logo_departemen_agama.png" alt="">
                <span><strong>KANTOR WILAYAH<br>KEMENTRIAN AGAMA <br> KARAWANG</strong></span>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-list">
                <li class="active">
                    <a href="index.php">Home</a>
                </li>
                <li><a href="berita.php">Berita</a></li>
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
                <li><a href="kontak.php">Kontak</a></li>
                <li>
                <a href="login.php" ><button class="btn"> Login</button></a>
                </li>
            </ul>
        </div>
        <!-- kontak awal -->
        <div class="kontainer10">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="./assets/img/phone.png" class="icon" alt="" />
              <p>kholis kamaluddin wahib</p>
            </div>
            <div class="information">
              <img src="./assets/img/phone.png" class="icon" alt="" />
              <p>kholiskamal354@gmail.com</p>
            </div>
            <div class="information">
              <img src="./assets/img/phone.png" class="icon" alt="" />
              <p>082289659204</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn8" />
          </form>
        </div>
      </div>
    </div>
        <!-- kontak akhir -->
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
    <script src="./script.js"></script>
</body>
</html>
