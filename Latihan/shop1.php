<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>shop 1</title>
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
    main {
      padding: 50px 20px;
    }
    .shop {
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-self: center;
      align-items: center;
    }
    .shop .shop-header {
      border-bottom: 2px solid black;
      margin-bottom: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 500px;
    }
    .shop h1 {
      margin: 0;
    }
    /*  */
    .product {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .card {
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .card:hover {
      box-shadow: 0 0px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.2s;
      transform: scale(1.01);
    }
    .card h2,p{
      margin:5px;
      max-width: 150px;
    }
    .card img {
      width: 100px;
      height: 100px;
      object-fit: cover;
    }
    .card button {
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      background-color: royalblue;
      color: white;
      cursor: pointer;
      margin-top:  auto;

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
    /* .social {
  text-align: right;
} */
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
    a{
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
    <main>
        <div class="shop">
          <span class="shop-header">
            <h1>Selamat datang di Toko!</h1>
          </span>
          <div style="text-align:center; margin-bottom:20px;">
            <a href="cart_view.php" style="padding:10px 20px; background:royalblue; color:white; border-radius:5px; text-decoration:none;">Lihat Keranjang</a>
          </div>
        <div class="product">
          <div class="card">
            <img src="image/headset.png" alt="Product 1" />
            <h2>Headset</h2>
            <p>
              Headset berkualitas tinggi dengan suara jernih dan bass yang
              dalam. 
            </p>
            <form method="post" action="cart.php">
              <input type="hidden" name="product_name" alt="Product 1" value="Headset" />
              <input type="hidden" name="product_price" value="200000" />
              <button>Add to Cart</button>
            </form>
          </div>
          <div class="card">
            <img src="image/keyboard.png" alt="Product 2" />
            <h2>Keyboard</h2>
            <p>
              Keyboard mekanis dengan respons cepat dan ketahanan tinggi. 
            </p>
            <form method= "post" action="cart.php">
              <input type="hidden" name="product_name" alt="Product 2" value="Keyboard" />
              <input type="hidden" name="product_price" value="150000" />
              <button>Add to Cart</button>
            </form>
          </div>
          <div class="card">
            <img src="image/monitor.png" alt="Product 3" />
            <h2>Monitor</h2>
            <p>
              Monitor layar lebar dengan resolusi Full HD atau 4K.
            </p>
            <form method="post" action="cart.php">
              <input type="hidden" name="product_name" alt="Product 3" value="Monitor" />
              <input type="hidden" name="product_price" value="3000000" />
              <button>Add to Cart</button>
            </form>
          </div>
          <div class="card">
            <img src="image/mother-board.png" alt="Product 4" />
            <h2>Motherboard</h2>
            <p>
              Motherboard performa tinggi dengan soket terbaru.
            </p>
            <form method="post" action="cart.php">
              <input type="hidden" name="product_name" alt="Product 4" value="Motherboard" />
              <input type="hidden" name="product_price" value="1000000" />
              <button>Add to Cart</button>
            </form>
            </div>
        </div>
      </div>
    </main>

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
