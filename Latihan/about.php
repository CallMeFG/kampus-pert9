<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
  </head>
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
      scroll-behavior: smooth;
    }
    body {
      margin: 0;
      overflow-x: hidden;
    }
    * {
      box-sizing: border-box;
    }
    header {
      padding: 10px 50px;
      border-bottom: 2px solid red;
    }
    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    nav h1 {
      font-size: 26px;
    }
    .search-bar {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .search-bar input {
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .search-bar button {
      padding: 5px 10px;
      border-radius: 5px;
      border: none;
      background-color: royalblue;
      color: white;
      cursor: pointer;
    }
    .search-bar button:hover {
      background-color: #0056b3;
    }
    nav ul {
      display: flex;
      list-style: none;
      gap: 20px;
    }
    nav a {
      text-decoration: none;
      color: black;
    }
    nav a:hover {
      color: royalblue;
    }
    /*  */
    .content {
      display: flex;
      flex-direction: column;
      justify-self: center;
      align-items: center;
      margin: 80px;
      padding: 50px;
      border-radius: 20px;
      background-color: aliceblue;
      box-shadow: 0 0px 8px rgba(0, 0, 0, 0.2);
    }
    /* Footer */
    .footer {
      width: 100%;
      background-color: black;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 50px 20px 0;
    }
    .footer-content {
      width: 100%;
      max-width: 1000px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      margin-bottom: 30px;
    }
    .footer-content h1 {
      font-size: 14px;
      margin-bottom: 10px;
    }
    .footer-content p {
      font-size: 12px;
      max-width: 300px;
    }
    .copyright a {
      text-decoration: none;
      color: white;
    }
    /* .social */
    .ikon {
      display: flex;
      gap: 10px;
      justify-content: flex-end;
    }
    .ikon img {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      object-fit: cover;
    }
    .copyright {
      font-size: 10px;
      margin: 30px 0 20px;
      text-align: center;
    }
    a {
      text-decoration: none;
      color: white;
    }
     .about a{
        text-decoration: none;
        color: royalblue;
    }   
  </style>
  <body>
    <header>
      <nav>
        <div class="logo">
          <a href="home.html"
            ><img
              src="image/download-ai-brush-removebg-v5xupvjrj.png"
              alt="logo"
              style="width: 70px"
          /></a>

          <h1>CallMeShop</h1>
        </div>
        <div class="search-bar">
          <input type="text" placeholder="Search..." style="padding: 5px" />
          <button style="padding: 5px">Search</button>
        </div>
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="home.html#shop">Shop</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="about.html">About</a></li>
        </ul>
      </nav>
    </header>
    <div class="content">
      <div>
        <h1>ABOUT CallMeShop</h1>
      </div>
      <div class="about">
        <p>
          CallMeShop adalah platform e-commerce modern yang berada di bawah
          naungan PT CallMe Fashion Group (CallMeFG), sebuah perusahaan ternama
          di industri retail dan teknologi. Platform ini didirikan oleh Fathur
          Rizky Assani, seorang visionary entrepreneur dengan pengalaman luas di
          bidang digital commerce dan pengembangan bisnis.
        </p>

        <p>
          Sebagai bagian dari ekosistem CallMeFG, CallMeShop hadir dengan misi
          memberikan pengalaman belanja online yang mudah, aman, dan terpercaya
          untuk berbagai kebutuhan konsumen, mulai dari produk elektronik,
          fashion, hingga kebutuhan sehari-hari. Dengan dukungan teknologi
          terkini, CallMeShop menawarkan:
        </p>

        <h2>Keunggulan CallMeShop</h2>
        <ol>
          <li>
            <strong>Produk Berkualitas</strong><br />
            Menyediakan beragam produk dari brand ternama dan lokal dengan
            jaminan keaslian serta harga kompetitif.
          </li>

          <li>
            <strong>Pengalaman Pengguna Terbaik</strong><br />
            Antarmuka yang intuitif, sistem pencarian cerdas, dan rekomendasi
            produk personalisasi untuk kenyamanan berbelanja.
          </li>

          <li>
            <strong>Transaksi Aman</strong><br />
            Dilengkapi sistem pembayaran multifinansial (OVO, DANA, Bank
            Transfer, dll.) dan perlindungan data berbasis enkripsi.
          </li>

          <li>
            <strong>Layanan Pelanggan 24/7</strong><br />
            Tim customer service siap membantu via live chat, telepon, atau
            email untuk pertanyaan dan keluhan.
          </li>

          <li>
            <strong>Logistik Cepat</strong><br />
            Kerjasama dengan jasa pengiriman terkemuka untuk pengiriman tepat
            waktu ke seluruh Indonesia.
          </li>
        </ol>

        <h2>Visi &amp; Misi</h2>
        <ul>
          <li>
            <strong>Visi:</strong> Menjadi marketplace terdepan yang
            menghubungkan pelanggan dengan produk berkualitas melalui inovasi
            digital.
          </li>
          <li>
            <strong>Misi:</strong> Memberdayakan UMKM lokal dan menyediakan
            solusi belanja online yang efisien bagi masyarakat.
          </li>
        </ul>

        <p>
          Dengan semangat kolaborasi dan teknologi, CallMeShop terus berkomitmen
          untuk berkembang bersama pelanggan dan mitra bisnis.
        </p>
        <p>
          Untuk informasi lebih lanjut, kunjungi
          <a href="https://github.com/CallMeFG/" target="_blank">www.callmeshop.com</a> 
        </p>
      </div>
    </div>
    <footer class="footer">
      <div class="footer-content">
        <div>
          <h1>FATHUR RIZKY ASSANI</h1>
          <p>
            A Junior Web Developer with hands-on experience in frontend and
            backend. Skilled in creating responsive interfaces, managing
            databases, and deploying static sites via GitHub.
          </p>
        </div>
        <div class="social">
          <h1>SOCIAL</h1>
          <div class="ikon">
            <span
              ><a href="https://github.com/CallMeFG/" target="_blank"
                ><img src="image/github 2 hd.jpg" alt="" width="30px" /></a
            ></span>
            <span
              ><a
                href="https://www.instagram.com/rzky.sn_?igsh=MTR6YmF0anFnNjdpZg=="
                target="_blank"
                ><img
                  src="image/instagram_icon hd.png"
                  alt=""
                  width="30px" /></a
            ></span>
            <span
              ><a
                href="https://x.com/RizkyAs_Dev?t=npf2_tY-G8UJKmAffGDLmA&s=09"
                target="_blank"
                ><img src="image/X_icon hd.png" alt="" width="30px" /></a
            ></span>
            <span
              ><a
                href="https://www.linkedin.com/in/fathur-rizky-assani-7348b0307?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                target="_blank"
                ><img src="image/linked_icon hd.jpg" alt="" width="30px" /></a
            ></span>
          </div>
        </div>
      </div>
      <span
        style="font-size: 10px; margin-top: 100px; margin-bottom: 20px"
        class="copyright"
        ><p>
          &copy;Copyright 2025. Made by
          <a href="https://callmefg.github.io/mylatesporto/" target="_blank"
            ><u>Fathur Rizky Assani</u></a
          >
        </p></span
      >
    </footer>
  </body>
</html>
