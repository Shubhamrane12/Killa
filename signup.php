<html>
	<head>
		<title>register</title>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
	</head>
	<body>

	<div class="page">
            
		<div class="hero">
		<div class="navbar" Style="position: fixed;
    z-index: 5;
    width: 100%;
    padding: 10px 0;
    background-color: rgba(0,0,0,.5);
    transition: all 0.3s ease;">
                <div class="content" style="display: flex;
    align-items: center;
    justify-content: space-around;">
                    <div class="logo" ><a href="killa.php" style="color: white;
    font-size: 30px;
    font-weight: 700;
    text-decoration: none;">Killa</a></div>
                    <ul class="menu" style="display: inline-flex; list-style: none;">
                      <li><a href="killa.php"style="color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 30px;
    text-decoration: none;
    transition: all 0.3s ease;">Home</a></li>
                      <li><a href="killa.php#FORTS"style="color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 30px;
    text-decoration: none;
    transition: all 0.3s ease;">Forts</a></li>
                      <li><a href="blog.php"style="color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 30px;
    text-decoration: none;
    transition: all 0.3s ease;">Blog</a></li>
                      <li><a href="as.php"style="color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 30px;
    text-decoration: none;
    transition: all 0.3s ease;">About-Us</a></li>
                      <li><a href="account.html"style="color: #fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 30px;
    text-decoration: none;
    transition: all 0.3s ease;">Account</a></li>
                    </ul>            
                  </div>
            </div>
		<br><br><br>
			<div class="form-box">
				
				<div class="button-box">
					<div id="btn"></div>
						<button type="button" class="toggle-btn" onclick="register()"><p>Sign Up</p></button>
				</div>
				
				<form id="register" class="input-group" action="signuplogic.php" method="POST" autocomplete="off">
					<input type="text" name="user" class="input-field" placeholder="User Id" autocomplete="off" required>
					<input type="email" name="email" class="input-field" placeholder="Enter Email" autocomplete="off" required>
					<input type="password" name="password" class="input-field" placeholder="Enter Password" autocomplete="off" required>
					<input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
					<button type="submit" class="submit-btn">Register</button>
				</form>
			</div>
		</div>
		
	
		
	</body>
</html>