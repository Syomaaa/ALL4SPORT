<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All4sport</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="header">
                <img class="logo" src="img/ALL4SPORT.png" alt="logo ALL4SPORT" height=50px>
                <a href="#">Home</a>
                <a href="#">Shop</a>
                <a href="#">Contact Us</a>
            
                

                  <?php if (!isset($_SESSION['pseudo'])){  
                    echo"<a href='http://localhost:8888/ALL4SPORT/connexion.php' >Login</a>";
                    echo"<a href='http://localhost:8888/ALL4SPORT/inscription.php' >Register</a>";
                    } else {  
                        
                    echo" <img src='img/user.png' class='user-pic' onclick='toggleMenu()'>
                          <div class='sub-menu-wrap' id='subMenu'> 
                            <div class='sub-menu'>
                                <div class='user-info'>
                                    <img src='img/user.png'>
                                    <h2> Simon Ravaut </h2>
                                </div>
                                <hr>

                                <a href='#' class='sub-menu-link'>
                                    <img src='img/profile.png'>
                                    <p> Edit Profile </p>
                                    <span>><span>
                                </a>

                                <a href='#' class='sub-menu-link'>
                                    <img src='img/setting.png'>
                                    <p> Settings </p>
                                    <span>><span>
                                </a>

                                <a href='#' class='sub-menu-link'>
                                    <img src='img/help.png'>
                                    <p> Help </p>
                                    <span>><span>
                                </a>

                                <a href='http://localhost:8888/ALL4SPORT/connexion.php' class='sub-menu-link'>
                                    <img src='img/logout.png'>
                                     <p> LogOut </p>
                                    <span>><span>
                                </a> ";
                     } ?>

                     <script>
                        let subMenu = document.getElementById("subMenu");

                        function toggleMenu() {
                            subMenu.classList.toggle("open-menu");
                        }
                     </script>
           
                    
                
            </div>
        </nav>
    </header>

    <section class="section1">
         <div class="img"> 
            <img src="img/rectangle.png" alt="" height=600px> 
         </div> 

    </section>

    <section class="section2">

    <div class="left">
        
    <iframe src='https://my.spline.design/iphone14procopy-96b4e851330ef3d4db7ac65a9b6f4a45/' frameborder='0' width='100%' height='100%'></iframe>
        
      </div>

      <div class="right">
            <h2>Application bientôt disponible !</h2>
            <center>
             <button class="Download">Download</button>
            </center>
      </div>


    </section>



</body>
</html>