<!DOCTYPE html>
<html>
  <head>
    <title></title>
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
  <body>
    <header>
      <nav>
        <div class="logo"><h1 style="font-size: 50px">LNS</h1></div>
        <div class="menu">
          <a href="#" style="font-size: 20px">HOME</a>
          <a href="#">ABOUT</a>
          <a href="#" target="_blank">FEEDBACK</a>
          <a href="#">CONTACT</a>
        </div>
      </nav>

      <main>
        <section>
          <h3>WELCOME TO</h3>
          <h1>
            <span class="change_content"> </span>
            <span style="margin-top: -10px"></span>
          </h1>
          <p>"Search made easy"</p>

          <form action="inputForm.php" method="post">
            <label for="subject">Enter subject:</label>
            <input type="text" name="subject" />
            <br />
            <br />
            <input type="submit" value="submit" />
            <br />
            <?php 
            if(isset($_GET['id'])):
            echo $_GET['id'];
            echo "<br><button>Request Navigation</button>";
            // header("refresh:5;url=homePage.php");
            endif;
            ?>
           
          
          </form>
        </section>
      </main>
    </header>
  </body>
</html>
