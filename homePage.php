<!DOCTYPE html>
<html>
  <head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="stylee.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
  </head>
  <body style=>

  <header>
    <nav>
      <div class="logo"><h1 style="font-size: 50px">LNS</h1></div>
      <div class="menu">
        <a href="#" style="font-size: 20px">HOME</a>
        <a href="about.html" target="_blank">ABOUT</a>
        <a href="feedback.html" target="_blank">FEEDBACK</a>
        <a href="contact.html" target="_blank">CONTACT</a>
        <a href="logout.html">LOGOUT</a>
      </div>
    </nav>

    <main>
      <section>
        <h1>WELCOME TO</h1>
        <h1>
          <span class="change_content"> </span>
          <span style="margin-top: -10px"></span>
        </h1>
        <p style="margin-bottom:0">"Search made easy"</p>
        <div class="input">
          <form action="inputForm.php" method="POST">
            <input type="text" id="sub" name="subject" placeholder="Enter Subject" />
            <input
              type="submit"
              value="SUBMIT"
              id="btnone"
              style="font-size: medium; font-weight: bold"
            />
          <br>  
      <br>
			<?php 
            if(isset($_GET['msg'])):
            echo $_GET['msg'];
            echo "<button id='btnone' style='font-size: medium; font-weight: bold'>Request Navigation</button>";
            // header("refresh:5;url=homePage.php");
            endif;
            ?>
          </form>
        </div>
      </section>
    </main>
  </header>
</html>
