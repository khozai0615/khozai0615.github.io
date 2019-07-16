<DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Home Page</title>
		
	</head>
<style>
*{
	margin: 0;
	padding: 0;
}

body{
	background-color: #eee;
}

nav{
	width: 100%;
	height: 70px;
	background-color: #fff;
}

ul{
	
}

ul li{
	list-style: none;
	display: inline-block;
	float: left;
	line-height: 70px;
}

ul li a{
	display: block;
	text-decoration: none;
	font-size: 15px;
	color: #1e1e1e;
	padding: 0 30px;
}

ul li a:hover{
	color: red;
}

.logo{
display:flex;
color:red;
font-size:20px;
margin-top:10px;
text-shadow:5px 2px 10px #3f6ba9;
font-family: 'Barriecito', cursive;
padding:0 10px;
float:left;
line-height:40px;
}
.border{ border:10px solid white;
border-radius:50px;
background-color:white;
display:fixed;
padding:60px;
margin:70px;
}
h3{
background-color:hsla(0, 100%, 30%, 0.3);
opacity:0.9;
margin-left:10px;
font-size:.7cm;
letter-spacing:2px;

}
.login-box{
background-color:hsla(0, 100%, 70%, 0.3);
width:230px;
margin:20px auto;
float:none;
font-size:.5cm;
letter-spacing:1px;
padding-right:110px;
padding-bottom:20px;
padding-top:0px;
padding-left:40px;
opacity:1;
}
.form-group{
font-size:.5cm;
letter-spacing:2.5px;
display:flex;
margin-bottom:30px;

}
.inputtext{
height:28px;
font-size:16px;
width:100%;
float:fixed;
}
.space{
	padding-bottom:20px;
}
</style>

	<body>
		<nav>
			<ul>
				<div class="logo">
					<img src="g.jpg" "float:left"; width="45" height="45" >
					<h2>ZLogo</h2>
				</div>
				 <li><a href="homepage.php?home=Home">Home</a></li>
				 <li><a href="college.php?list=List">List</a></li>
				
			</ul>
		</nav>
		<div class="border">
		<div class="login-box">
  <center><h3>Register Here</h3></center>
  <div class="space"></div>
  <form action="test4.php" method="POST">
  <div class="form-group">
  <label>UserName</label>
  <input type="text" name="user" placeholder="Name" class="inputtext" required>
  </div>
  <div class="form-group">
  <label>Password</label>
  <input type="password" name="pass" placeholder="Password" class="inputtext"required >
  </div>
  <div class="form-group">
  <label>Confirm Password</label>
  <input type="password" name="pass2" placeholder="password again" class="inputtext"required >
  </div>
  <div class="form-group">
  <label>Email</label>
  <input type="text" name="email" placeholder="e-mail address" class="inputtext" required>
  </div>
 
  <div class="form-group">
  <input type="submit" name="login" class="register" >
  </div>
  
  
  </div>
  </div>
  </form>
  </body>
  </html>
  
