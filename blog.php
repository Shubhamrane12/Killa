<?php
    include "logic.php";
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unexplored Forts of Maharashtra</title>
    <link rel="stylesheet" href="css\blog.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="killa.php">Killa</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="killa.php">Home</a></li>
        <li><a href="killa.php#FORTS">Forts</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="as.php">About-Us</a></li>
        <?php
          session_start();
          error_reporting(E_ALL ^ E_WARNING);
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

<div class="banner1">
  <div class="about">
    <div class="content">
    <div class="title"><br>Explore the UNexplored</div>
      <p><b>Welcome to The Unexplored Forts of Maharashtra. A blog where we are going to give you a Detailed Information about the Forts which are being explored less but are important to know. Providing rich history and it's Cultures, you will get a complete information of the forts which are standing still showing it's glory.
      </b></p>
      <div class="btn">
      <?php
          session_start();
          error_reporting(E_ALL ^ E_WARNING);
          if($_SESSION['username']){
        ?>
        <a href="create.php">Post your own Blog !! &#8594;</a>
        <?php }
          else{
        ?><a href="account.html">Post your own Blog !! &#8594;</a>
        <?php } ?>
        
    </div>
    </div>
    </div>
  </div>


<div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <!-- <div class="alert alert-success" role="alert">
                   
                </div> -->
                <script>
                  alert("Post has been added successfully")
                </script>
            <?php }?>
        <?php } ?> 

        <!-- Create a new Post button -->
       <h2 id="FORTS" class="title">Latest Blogs...</h2>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="viewblog.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
	<br><br>
    </div>
<!-------- footer -------->

<div class="footer">
    <div class="container1">
    <div class="row">
    <div class="footer-col-1">
    <h3>Having Trouble ?</h3>
    <p><b>Click the About-Us Image for more Info!</b></p>
    <div class="app-logo">
        <a href="#" target="_blank">
            <img src="image\about-us.png"></a>
    </div>
    </div>
    <div class="footer-col-2">
        <a href="killa.php"><img src="image\logo.png"></a>
    <p><b>Our purpose is to share information</b></P>
    </div>
    <div class="footer-col-3">
    <h3>Useful Links</h3>
    <ul>
    <li><a href="https://www.facebook.com/sahyadripratishthaan/" target="_blank"><p><b>Donate</b></p></a></li>
    <li><a href="https://www.treksandtrails.org/blog/category/forts-of-maharashtra/" target="_blank"><p><b>Blog Post</b></p></a></li>
    <li><a href="https://www.maharashtratourism.gov.in/" target="_blank" ><p><b>MTDC</b></p></a></li>
    <li><a href="as.html" target="_blank"><p><b>Need Help</b></p></a></li>
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