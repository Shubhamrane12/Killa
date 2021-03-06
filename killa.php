<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unexplored Forts of Maharashtra</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="../killa/css/killa.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
</head>
<body>
  <?php 
    error_reporting(E_ALL ^ E_WARNING);
    if(isset($_REQUEST['status'])){ ?>
    <?php if($_REQUEST['status'] == "login"){?>
    <script>
      alert("Login successful");
      window.location.href = 'http://localhost/killa/killa.php';
    </script>
  <?php }elseif ($_REQUEST['status'] == 'logout') {?>
    <script>
      alert("Logout Successfully");
      window.location.href = 'http://localhost/killa/killa.php';
    </script>
  <?php }elseif ($_REQUEST['status'] == 'register') {?>
    <script>
      alert("Registered Successfully");
      window.location.href = 'http://localhost/killa/killa.php';
    </script>
  <?php }} ?>
  <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="killa.php">Killa</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        
        <li><a href="#">Home</a></li>
        <li><a href="#FORTS">Forts</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="as.php">About-Us</a></li>
        <?php
          session_start();
          if($_SESSION['username']){
        ?>
          <li><a style="color: #ff8d00;"><?php echo strtoupper($_SESSION['username']); ?></a></li>
          <li><a  href="logout.php">Logout</a></li>
        <?php }
          else{
        ?>
        <li><a href="account.html">Account</a></li>
        <?php } ?>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  <div class="banner">
      <h1>The Unexplored <br>Forts Of Maharashtra</h1>
  </div>
 

<div class="banner1">
  <div class="about">
    <div class="content">
    <div class="title">About Our Blog</div>
      <p><b>Welcome to The Unexplored Forts of Maharashtra. A blog where we are going to give you a Detailed Information about the Forts which are being explored less but are important to know. Providing rich history and it's Cultures, you will get a complete information of the forts which are standing still showing it's glory.
      </b></p><br>
      <div class="btn">
        <a href="#FORTS">Explore Now &#8594;</a>
        <br>
      </div>
      <br><br>
    </div>
  </div>
</div>

  <!-------- featured forts -------->
<div class="categories">
    <div class="small-container">
    <h2 id="FORTS" class="title">Featured Forts</h2>
    <div class="row">
    <div class="col-3">
    <a href="vishalgad.php" target="_blank">  
    <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v1.png">
    <center><h4>Vishalgad</h4></center></a>  
    </div>
    <div class="col-3">
    <a href="salher.php" target="_blank"> 
    <img style="border:6px outset  #a1a19f;" src="../killa/image/Salher/S1.png">
    <center><h4>Salher</h4></center></a>
    </div>
    <div class="col-3">
        <a href="korigad.php" target="_blank">    
    <img style="border:6px outset #a1a19f;" src="../killa/image/Korigad/k1.png">
    <center><h4>Korigad</h4></center></a>
    </div>
    <div class="col-3">
        <a href="raigad.php" target="_blank"> 
    <img style="border:6px outset  #a1a19f;" src="../killa/image/Raigad/r1.png">
    <center><h4>Raigad</h4></center></a>
    </div>
    <div class="col-3">
        <a href="pratapgad.php" target="_blank"> 
    <img style="border:6px outset  #a1a19f;" src="../killa/image/Pratapgad/p1.png">
    <center><h4>Pratapgad</h4></center></a>
    </div>
    <div class="col-3">
        <a href="rajgad.php" target="_blank"> 
    <img style="border:6px outset  #a1a19f;" src="../killa/image/Rajgad/1ra.png">
    <center><h4>Rajgad</h4></center></a>
    </div>
    </div>
    </div>
    </div>

<!-------- footer -------->

<div class="footer">
    <div class="container1">
    <div class="row">
    <div class="footer-col-1">
    <h3>Having Trouble ?</h3>
    <p><b>Click the About-Us Image for more Info!</b></p>
    <div class="app-logo">
        <a href="as.php" target="_blank">
            <img src="../killa/image/about-us.png"></a>
    </div>
    </div>
    <div class="footer-col-2">
        <a href="killa.php"><img src="../killa/image/logo.png"></a>
    <p><b>Our purpose is to share information</b></P>
    </div>
    <div class="footer-col-3">
    <h3>Useful Links</h3>
    <ul>
    <li><a href="https://www.facebook.com/sahyadripratishthaan/" target="_blank"><p><b>Donate</b></p></a></li>
    <li><a href="https://www.treksandtrails.org/blog/category/forts-of-maharashtra/" target="_blank"><p><b>Blog Post</b></p></a></li>
    <li><a href="https://www.maharashtratourism.gov.in/" target="_blank" ><p><b>MTDC</b></p></a></li>
    <li><a href="as.php" target="_blank"><p><b>Need Help</b></p></a></li>
    </ul>
    </div>
    <div class="footer-col-3">
    <h3>Get More Information</h3>
    <ul>
    <li><a href="https://www.facebook.com/GadKilleSafar" target="_blank"> <p><b>Facebook</b></p> </a> </li>
    <li><a href="blog.php" target="_blank"> <p><b> Blogs </b></p> </a> </li>
    <li><a href="https://www.instagram.com/mi_durg_veda/" target="_blank"> <p><b>Instagram</b></p> </a> </li>
    <li><a href="https://www.youtube.com/channel/UC4BFta04-H7yVIa3045chXA" target="_blank"> <p><b> YouTube </b></p> </a> </li>
    </ul>
    </div>
    </div>
    <hr>
    <p class="copyright"><b>Copyright 2020 - Unexplored Forts</b></p>
    </div>
    </div>
  <!-- JavaScript Bundle with Popper -->
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      menu.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
      body.classList.add("disabledScroll");
    }
    cancelBtn.onclick = ()=>{
      menu.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      body.classList.remove("disabledScroll");
    }

    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>

</body>
</html>
