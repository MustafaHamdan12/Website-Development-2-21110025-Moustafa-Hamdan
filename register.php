<!DOCTYPE html>
<html lang="en">
<head>
<title>
    Burrito me
</title>
    <meta name="description" content="food">
    <meta name="keywords" content="jordan, food, burrito">
     <meta name="author" content="Moustafa Hamdan">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burrito me</title>
    <!-- <link rel="stylesheet" href="register.css"> -->
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    
    <script>
        function updatemenu() {
            if (document.getElementById('responsive-menu').checked == true) {
              document.getElementById('menu').style.borderBottomRightRadius = '0';
              document.getElementById('menu').style.borderBottomLeftRadius = '0';
            }else{
              document.getElementById('menu').style.borderRadius = '0px';
            }
          }
          </script>
<style>
 * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
#menu {
	background: #000000;
	color: #FFF;
	height: 55px;
	padding-left: 18px;
	border-radius: 0px;
	border: 2px outset #E79200;
}
#menu ul, #menu li {
	margin: 0 auto;
	padding: 0;
	list-style: none
}
#menu ul {
	width: 100%;
}
#menu li {
	float: left;
	display: inline;
	position: relative;
}
#menu a {
	display: block;
	line-height: 51px;
	padding: 0 14px;
	text-decoration: none;
	color: #FFFFFF;
	font-size: 16px;
}
#menu a.dropdown-arrow:after {
	content: "\25BE";
	margin-left: 5px;
}
#menu li a:hover {
	color: #0099CC;
	background: #F2F2F2;
}
#menu input {
	display: none;
	margin: 0;
	padding: 0;
	height: 55px;
	width: 100%;
	opacity: 0;
	cursor: pointer
}
#menu label {
	display: none;
	line-height: 51px;
	text-align: center;
	position: absolute;
	left: 35px
}
#menu label:before {
	font-size: 1.6em;
	content: "\2261"; 
	margin-left: 20px;
}
#menu ul.sub-menus{
	height: auto;
	overflow: hidden;
	width: 170px;
	background: #444444;
	position: absolute;
	z-index: 99;
	display: none;
}
#menu ul.sub-menus li {
	display: block;
	width: 100%;
}
#menu ul.sub-menus a {
	color: #FFFFFF;
	font-size: 16px;
}
#menu li:hover ul.sub-menus {
	display: block
}
#menu ul.sub-menus a:hover{
	background: #F2F2F2;
	color: #444444;
}
@media screen and (max-width: 800px){
	#menu {position:relative}
	#menu ul {background:#111;position:absolute;top:100%;right:0;left:0;z-index:3;height:auto;display:none}
	#menu ul.sub-menus {width:100%;position:static;}
	#menu ul.sub-menus a {padding-left:30px;}
	#menu li {display:block;float:none;width:auto;}
	#menu input, #menu label {position:absolute;top:0;left:0;display:block}
	#menu input {z-index:4}
	#menu input:checked + label {color:white}
	#menu input:checked + label:before {content:"\00d7"}
	#menu input:checked ~ ul {display:block}
}
  
  
  
  
  body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgb(255, 255, 255);
  }
  
  /* * {
    box-sizing:inherit;
  } */
  
  /* Add padding to containers */
  .container {
    position: relative;
    padding: 0px;
    background-color: #ffffff;
    margin-left: 25%;
    margin-right: 25%;
  }
  
  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 75%;
    padding: 15px;
    margin-left: 25%;
    margin-right: 25%;
    display: inline-block ;
    border: none;
    background: #000000;
  }
  
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  
  /* Set a style for the submit button */
  .registerbtn {
    background-color: #000000;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
  .registerbtn:hover {
    opacity: 1;
  }
  
  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }
  
  /* Set a grey background color and center the text of the "sign in" section */
  .signin {
    background-color: gray;
    text-align: center;
  }

            </style>

</head>
<body>
<header>
        <nav id='menu'>
           <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
               <ul>
                  <li><a href='index.php'>Home</a></li>
                  <li><a href='cart.php'>cart</a></li>
                  <li><a href='menu.php'>Menu</a></li>
                  <li><a href='Login.php'>LogIn</a></li>
               </ul>
           </nav>
        </header> 
        
    <form action="signUp.php" method="POST">
        <div class="container">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="email"><b>username</b></label>
          <input type="text" placeholder="Enter user name" name="uname" id="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
      
          <label for="psw-repeat"><b>Repeat Password</b></label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
          <hr>
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      
          <button type="submit" class="registerbtn">Register</button>
        </div>
        
        <div class="container signin">
          <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
      </form>
    
</body>
</html>