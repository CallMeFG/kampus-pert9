<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
      justify-self: center;
      margin: 80px;
      padding: 50px;
      border-radius: 20px;
      background-color: aliceblue;
      box-shadow: 0 0px 8px rgba(0, 0, 0, 0.2);
    }
    .spesifikasi {
      border-left: 2px solid black;
      padding: 20px;
      margin-left: 20px;
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
      <img src="image/monitor.png" alt="" width="300px" />
      <div class="spesifikasi">
        <h1>ATRIBUT</h1>
        <p>nama produk :Monitor Monster XII</p>
        <p>warna :Green black</p>
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