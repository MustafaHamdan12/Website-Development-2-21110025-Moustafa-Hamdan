<!DOCTYPE html>
<html>
    <head>
        <title>
            Home
        </title>
        <meta name="description" content="food">
        <meta name="keywords" content="jordan, food, burrito">
        <meta name="author" content="Moustafa Hamdan">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="logo.png" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="description" content="Food">
        <meta name="keywords" content="jordan, Food, burrito">
        <meta name="author" content="Moustafa Hamdan">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                  <li><a href='cart.php'>cart</a></li>
                  <li><a href='menu.php'>Menu</a></li>
                  <li><a href='Login.php'>LogIn</a></li>
                </ul>
              </nav>
             
             
        </header>   
        <div class="bg-image">
              <div class="bg-text">
                <h1>Welcome to my website</h1>
                <p>"Welcome to our Mexican food restaurant! We pride ourselves on serving authentic, fresh and delicious Mexican cuisine.<br>
                   Our menu is filled with a wide variety of traditional dishes, made with only the best and freshest ingredients.<br>
                    Whether you're craving tacos, burritos, enchiladas, or something else, we've got you covered.<br>
                     We also offer a selection of refreshing margaritas and other Mexican drinks to complement your meal.<br>
                      Come and visit us and let our friendly staff take care of you while you enjoy a true taste of Mexico. ¡Buen provecho!"</p>
                </div>
             </div>


    </body>
</html>

