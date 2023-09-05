<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDC HelpDesk</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script defer src="javascript/activeani.js"></script>
  </head>
  <body>

    <header>
      <a href="index.html" class="brand">GDC HelpDesk</a>
      <div class="menu">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        
        <a href="index.html">Home</a>
        <a href="issue.html">Issue</a>
        <a href="issuetracker.html">Issue Tracker</a>
        <a href="reslog.php">Result</a>
        <a href="aboutus.html">About Us</a>
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
    </header>
    <section class="section-main">
    <div class="login-box">
      
<form action="login.php" method="post" autocomplete="off">

        <h2>ADMIN LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="Enter Username"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Enter Password"><br> 

        <button type="submit">Login</button>

</form>

    </div>
   
    </section>
    <footer class="footer">
        <p>Copyright © 2023 GDC HelpDesk</p>
      </footer>
   
      <script type="text/javascript" src="javascript/stickyresnav.js"></script>
    </body>
  </html>