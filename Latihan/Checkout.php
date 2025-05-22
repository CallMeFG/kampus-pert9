<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
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
        background-color: aliceblue;
        padding: 25px;
        
      }
      .isiForm {
        display: flex;
        background-color: white;
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
        justify-self: center;
        text-align: left;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        flex-direction: column;
        width: 80%;
        padding: 20px;
      }
      .isiForm img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        padding: 10px;
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
      }
      table {
        width: 100%;
        max-width: 500px;
        border-radius: 10px;
        border-spacing: 0;
      }
      td,
      th {
        padding: 10px;
        margin: 10px;
      }
      .row {
        box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
        background-color: white;
        /* display: block; Margin hanya bekerja dengan display block */
        margin-bottom: 20px;
      }
      .summary {
        max-width: 100px;
      }
      input {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      input:hover {
        border: 1px solid royalblue;
      }
      input:focus {
        outline: none;
        border: 1px solid royalblue;
      }
      button {
        padding: 5px 10px;
        border-radius: 5px;
        display: flex;
        border: none;
        background-color: royalblue;
        color: white;
        cursor: pointer;
        font-size: 16px;
      }
      button:hover {
        background-color: #0056b3;
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
  </head>
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
      <section class="isiForm">
        <center><h1 style="margin: 20px">Checkout</h1></center>
        <form action="Checkout2.html">
          <center>
            <table class="table">
              <tr class="row">
                <td><img src="image/headset.png" alt="" /></td>
                <th>Headset</th>
                <td>:</td>
                <td>
                  <input type="number" name="" id="hd" placeholder="jumlah" />
                </td>
              </tr>
              <tr class="row">
                <td><img src="image/keyboard.png" alt="" /></td>
                <th>Keyboard</th>
                <td>:</td>
                <td>
                  <input type="number" name="" id="ky" placeholder="jumlah" />
                </td>
              </tr>
              <tr class="row">
                <td><img src="image/monitor.png" alt="" /></td>
                <th>Monitor</th>
                <td>:</td>
                <td>
                  <input type="number" name="" id="mn" placeholder="jumlah" />
                </td>
              </tr>
              <tr class="row">
                <td><img src="image/mother-board.png" alt="" /></td>
                <th>motherboard</th>
                <td>:</td>
                <td>
                  <input type="number" name="" id="mb" placeholder="jumlah" />
                </td>
              </tr>
            </table>
            <br />
          </center>
          <!--  -->
          <section>
            <center>
              <span style="display: flex; justify-self: center; text-align: left;">
                  <p>Total Harga : </p>
                <p id="total">*****</p>
                <input type="checkbox" name="checkHarga" id="checkHarga" onclick="check()"/><p>tampilkan</p>
              </span>
              <button type="submit" id="checkout">
                Checkout
              </button>
            </center>
          </section>
        </form>
      </section>
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
    <script>
      function check() {
        //
        const checkBox = document.getElementById("checkHarga");
        const info = document.getElementById("total");
        //
        const totalHd = document.getElementById("hd").value * 600000;
        const totalKy = document.getElementById("ky").value * 720000;
        const totalMn = document.getElementById("mn").value * 2200000;
        const totalMb = document.getElementById("mb").value * 3400000;
        const totalSemua = totalHd + totalKy + totalMb + totalMn;
        //
        if(checkBox.checked) {
          info.innerHTML = "Rp " + totalSemua;
        } else {
          info.innerHTML = "*****";
        }
      }
    </script>
  </body>
</html>
