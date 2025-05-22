<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
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
      .isi {
        background-color: aliceblue;
        display: flex;
        justify-content: center;
        padding: 150px 30px;
        gap: 120px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
      }
      .content {
        display: flex;
        flex-direction: column;
        padding: 50px;
        border-radius: 20px;
        max-width: 40%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
      }
      .contact {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
      }
      .contact img{
        width: 30px;
        height: 30px;
        margin-right: 10px;
      }
      .form {
        max-width: 50%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
      }
      .form table,td {
        font-size: 20px;
        padding-top: 15px;
      }
      .form label{
        font-weight: 500;
      }
      button {
        padding: 5px 10px;
        border-radius: 5px;
        border: none;
        background-color: royalblue;
        color: white;
        cursor: pointer;
        font-size: 16px;
      }
      button:hover {
        background-color: #0056b3;
      }
      input{
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      input:hover{
        border: 1px solid royalblue;
      }
      input:focus{
        outline: none;
        border: 1px solid royalblue;
      }
      textarea {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }
      textarea:hover {
        border: 1px solid royalblue;
      }
      textarea:focus {
        outline: none;
        border: 1px solid royalblue;
      }
      input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
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
        margin: auto;
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
    <div class="isi">
      <div class="content">
        <h1>CONTACT US</h1>
        <p>
          If you have any questions or inquiries, please feel free to reach out
          to us using the form Weor drop us a message or email. we will get back to you as soon as
          possible.
        </p>
        <div class="contact"><img src="image/phone.png" alt=""><p>7268-3178-9978</p></div>
        <div class="contact"><img src="image/gmail.png" alt=""><p>assani200306@gmail.com</p></div>
        <div class="contact"><img src="image/placeholder.png" alt=""><p>Marpoyan, Pekanbaru, Indonesia</p></div>
      </div>
      <div class="form">
        <form action="contact.html" method="post">
          <table>
            <tr>
              <td><label for="name">Name</label></td>
            </tr>
            <tr>
              <td>
                <input type="text" id="first" name="name" placeholder="First" />
                <input type="text" id="last" name="name" placeholder="Last" />
              </td>
            </tr>
            <tr>
              <td><label for="email">Email</label></td>
            </tr>
            <tr>
              <td>
                <input
                  type="email"
                  id="email"
                  name="email"
                  style="width: 100%"
                  placeholder="example@email.com"
                />
              </td>
            </tr>
            <tr>
              <td><label for="pesan">Phone (optional)</label></td>
            </tr>
            <tr>
              <td>
                <input
                  type="number"
                  name="phone"
                  id="phone"
                  style="width: 100%;"
                  placeholder="xxxx-xxxx-xxxx"
                />
              </td>
            </tr>
            <tr>
              <td><label for="pesan">Pesan</label></td>
            </tr>
            <tr>
              <td>
                <textarea
                  name="pesan"
                  id="pesan"
                  style="width: 100%; resize: none;"
                  rows="5"
                  placeholder="Type your message"
                  
                ></textarea>
              </td>
            </tr>
            <tr>
              <td><button>Submit</button></td>
            </tr>
          </table>
        </form>
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
