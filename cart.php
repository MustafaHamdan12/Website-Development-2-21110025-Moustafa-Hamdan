<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body {font-family: Arial, Helvetica, sans-serif;}
        /* Set a style for all buttons */

        #menu {
	background: #000000;
	color: #FFF;
	height: 55px;
	padding-left: 18px;
	border-radius: 0px;
	border: 2px outset #E79200;
    margin-bottom: 15   0px;
}
div {
  border: 3px;
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
.cart-cont {
  margin: 2%;
}
#offer {
  background-color: #ffffff;
  border-radius: 25px;

}

#divItem {
  display: flex;
  margin: 2%;
}
#quantitycont {
  margin-top: 2%;
  margin-left: 35%;
}
#buttons {
  float: right;
  margin-right: 10%;
  
}

</style>
</head>
<body>
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
  
  <div class="cart-cont">
    <div class="firstItem" id="offer">
      <br>
      <form method="post" action="cartHandle.php">
          <div id="divItem">
            <img src="Menu/Burrito (1).jpeg" alt="logo" height="90px" width="90px">
            <h2 class="offer" style="padding-left: 10px;">Burrito: 1.50JDs</h2>
            <div id="quantitycont">
              <label for="Quantity" class="labels">Quantity:</label><br>
              <input type="hidden" name="item" value="Burrito">
              <input class="inputs" name="Quantity" id="Quantity" type="text" size="10" value="<?php echo $_COOKIE['Burrito'] ?? 0 ?>">

              <button type="submit">Update</button>
            </div>
          </div>
        </form>
      <br>
    </div>

    <br><br>

    <div class="secondItem" id="offer">
      <br>
      <form method="post" action="cartHandle.php">
      <div id="divItem">
        <img src="Menu/Burrito (2).jpeg" alt="logo" height="90px" width="90px">
        <h2 class="offer" style="padding-left: 10px;">Taco: 1.50 JDs</h2>
        <div id="quantitycont">
          <label for = "Quantity" class="labels">Quantity:</label><br>
          <input type="hidden" name="item" value="taco">
          <input class="inputs" name="Quantity"  id = "Quantity" type="text"  size="10" value="<?php echo $_COOKIE['taco'] ?? 0 ?>">

          <button type="submit">Update</button>
        </div>
      </div>
      </form>
      <br>
    </div>

    <br><br>

    <div class="thirdItem" id="offer">
      <br>
      <form method="post" action="cartHandle.php">
      <div id="divItem">
        <img src="Menu/Burrito (3).jpeg" alt="logo" height="90px" width="90px">
        <h2 class="offer" style="padding-left: 10px;">meat tacos: 2.00 JDs</h2>
        <div id="quantitycont">
          <label for = "Quantity" class="labels">Quantity:</label><br>
          <input type="hidden" name="item" value="taco-meat">
          <input class="inputs" name="Quantity"  id = "Quantity" type="text"  size="10" value="<?php echo $_COOKIE['taco-meat'] ?? 0 ?>">

          <button type="submit">Update</button>
        </div>
      </div>
      </form>
      <br>
    </div>

    <br><br>

    <div class="fourthItem" id="offer">
      <br>
      <form method="post" action="cartHandle.php">
      <div id="divItem">
        <img src="Menu/Burrito (4).jpeg" alt="logo" height="90px" width="90px">
        <h2 class="offer" style="padding-left: 10px;">chiecken Burrito: 4.00 JDs</h2>
        <div id="quantitycont">
          <label for = "Quantity" class="labels">Quantity:</label><br>
          <input type="hidden" name="item" value="chicken-burrito">
          <input class="inputs" name="Quantity"  id = "Quantity" type="text"  size="10" value="<?php echo $_COOKIE['chicken-burrito'] ?? 0 ?>">

          <button type="submit">Update</button>
        </div>
      </div>
      </form>
      <br>
    </div>

    <br><br>

    <div class="fifthItem" id="offer">
      <br>
      <form method="post" action="cartHandle.php">
      <div id="divItem">
        <img src="menu/Burrito (5).jpeg" alt="logo" height="90px" width="90px">
        <h2 class="offer" style="padding-left: 10px;">Cassadia: 3.50 JDs</h2>
        <div id="quantitycont">
          <label for = "Quantity" class="labels">Quantity:</label><br>
          <input type="hidden" name="item" value="casadia">
          <input class="inputs" name="Quantity"  id = "Quantity" type="text"  size="10" value="<?php echo $_COOKIE['casadia'] ?? 0 ?>">

          <button type="submit">Update</button>
        </div>
      </div>
      </form>
      <br>
    </div>

    <br><br>

    <div class="sixthItem" id="offer">
      <br>
      <form method="post" action="cartHandle.php">
      <div id="divItem">
        <img src="Menu/Burrito (6).jpeg" alt="logo" height="90px" width="90px">
        <h2 class="offer" style="padding-left: 10px;">Chicken Burrito: 4.00 JDs</h2>
        <div id="quantitycont">
          <label for = "Quantity" class="labels">Quantity:</label><br>
          <input type="hidden" name="item" value="salad">
          <input class="inputs" name="Quantity"  id = "Quantity" type="text"  size="10" value="<?php echo $_COOKIE['salad'] ?? 0 ?>">

          <button type="submit">Update</button>
        </div>
      </div>
      </form>
      <br>
    </div>
    
    <br><br>

    <div class="totalCost" id="offer">
      <br>
      <div id="divItem">
        <h2 class="offer" style="padding-left: 10px;">Total Cost: <?php echo ((float) ($_COOKIE['Burrito'] ?? 0.0)) * 1.5 + ((float) ($_COOKIE['taco'] ?? 0.0)) * 1.5 + ((float) ($_COOKIE['taco-meat'] ?? 0.0)) * 2 + ((float) ($_COOKIE['chicken-burrito'] ?? 0.0)) * 4 + ((float) ($_COOKIE['casadia'] ?? 0.0)) * 3.5 + ((float) ($_COOKIE['salad'] ?? 0.0)) * 4; ?></h2>
      </div>
      <div id="buttons">
        <button type="submit"><a href="menu.php">Continue shopping</a></button>
        <form method="post" action="checkout.php">
          <button type="submit">Check out</button>
        </form>
      </div>
      <br>
    </div>

  </div>
  
  
    
</body>
</html>