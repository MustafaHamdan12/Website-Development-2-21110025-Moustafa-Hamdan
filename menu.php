<!DOCTYPE html>
<html>
<head>
  <title>Restaurant Menu</title>
  <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    h1, h2 {
      text-align: center;
    }
    img {
      width: 150px;
      height: 100px;
      object-fit: cover;
    }
    li {
      list-style: none;
      margin: 10px 0;
      display: flex;
      align-items: center;
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
  .grid-container {
          grid-template-columns: auto;
        }
}
.grid-container {
        display: grid;
        grid-template-columns: auto;
        /* background-image: linear-gradient(black, white); */
        background-color: #e5e5e5;
        gap: 10px;
        margin: 10px;
      }
      #divItem {
        display: flex;
      }
      #offer {
        background-color: #ffffff;
        box-shadow: 5px 5px 8px black, 10px 10px 8px white;
      }
      .logoutbutton {
        float: left;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
        padding-left: 20px;
        box-shadow: 5px 5px 8px black, 10px 10px 8px white;
      }
      .cartbutton {
        float: right;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 20px;
        padding-left: 20px;
        box-shadow: 5px 5px 8px black, 10px 10px 8px white;
      }
      #cont {
        display: flex;
      }

  </style>
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
</head>
<body>
  <header>
    <nav id='menu'>
        <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
        <ul>
          <li><a href='index.php'>Home</a></li>
          <li><a href='cart.php'>Cart</a></li>
          <li><a href='menu.php'>Menu</a></li>
          <li><a href='Login.php'>LogIn</a></li>
        </ul>
      </nav>
</header>   

<div class="grid-container">

  <div class="firstItem" id="food">
    <form method="get" action="add-to-cart.php">
      <input type="hidden" name="001" value="Burrito"/>
      <div id="divItem">
        <img src="menu/Burrito (1).jpeg" alt="logo" height="60px" width="60px">
        <h2 class="offer" style="padding-left: 10px;">Burrito:</h2>
      </div>
      <h4 style="padding-left: 10px;">cost: 1.50 JDs</h4>
      <input class="regButton" type="submit" value="Add to Cart">
    </form>
  </div>

  <div class="secondItem" id="food">
    <form method="get" action="add-to-cart.php">
      <input type="hidden" name="002" value="taco">
      <div id="divItem">
        <img src="menu/Burrito (2).jpeg" alt="logo" height="60px" width="60px">
        <h2 class="offer" style="padding-left: 10px;">Taco:</h2>
      </div> 
      <h4 style="padding-left: 10px;">cost: 1.50 JDs</h4>
      <input class="regButton" type="submit" value="Add to Cart">
    </form>
  </div>

  <div class="thirdItem" id="food">
    <form method="get" action="add-to-cart.php">
      <input type="hidden" name="003" value="taco-meat">
      <div id="divItem">
        <img src="menu/Burrito (3).jpeg" alt="logo" height="60px" width="60px">
        <h2 class="restName" style="padding-left: 10px;">meat Tacos:</h2>
      </div> 
      <h4 style="padding-left: 10px;">cost 2.00 JDs</h4>
      <input class="regButton" type="submit" value="Add to Cart">
  </form>
  </div>

  <div class="fourthItem" id="food">
    <form method="get" action="add-to-cart.php">
      <input type="hidden" name="004" value="chicken-burrito">
      <div id="divItem">
        <img src="menu/Burrito (4).jpeg" alt="logo" height="60px" width="60px">
        <h2 class="restName" style="padding-left: 10px;">hard Chicken taco:</h2>
      </div> 
      <h4 style="padding-left: 10px;">cost 4.00 JDs</h4>
      <input class="regButton" type="submit" value="Add to Cart">
    </form>
  </div>

  <div class="fifthItem" id="food">
    <form method="get" action="add-to-cart.php">
      <input type="hidden" name="005" value="casadia">
      <div id="divItem">
        <img src="menu/Burrito (5).jpeg" alt="logo" height="60px" width="60px">
        <h2 class="restName" style="padding-left: 10px;">Casadia:</h2>
      </div>
      <h4 style="padding-left: 10px;">cost 3.50 JDs</h4>
      <input class="regButton" type="submit" value="Add to Cart">
    </form>
  </div>

  <div class="sixthItem" id="food">
    <form method="get" action="add-to-cart.php">
      <input type="hidden" name="006" value="salad">
      <div id="divItem">
        <img src="menu/Burrito (6).jpeg" alt="logo" height="60px" width="60px">
        <h2 class="restName" style="padding-left: 10px;">Chicken Burrito:</h2>
      </div> 
      <h4 style="padding-left: 10px;">cost 4.00 JDs</h4>
      <input class="regButton" type="submit" value="Add to Cart">
    </form>
  </div>
</div>
<div>
  <button class="logoutbutton"><a href="login.php">log out</a></button>
  <button class="cartbutton"><a href="cart.php">cart</a></button>
</div>
         
