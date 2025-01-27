<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Group 5 2022 Capstone</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/d688da91fc.js" crossorigin="anonymous"></script>
      <script src="chatbot/scripts/chatbot.js"></script>
    <script src="chatbot/scripts/botResponse.js"></script>
    <script src="chatbot/scripts/strings.js"></script>
    <link rel="stylesheet" href="chatbot/css/chatbot.css">
   </head>
   <body>
      <header>
         <!-- begin nav menu -->
         <div class="navbar">
            <a style="float: right"><input type="text" placeholder="Search..."></a>
            <a href="index.php">Home</a>
            <a href="store.php">Store</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <!-- Account page link if user logged in. Sign in button if not-->
            <?php
                if (isset($_SESSION["username"])){
                    echo "<a href='account.php'>Account</a>";
                }
                else{
                    echo "<a href='login.php'>Sign In</a>";
                }
            ?>
            <a style="float: left" id="title">NewZeen</a>
            <!-- end nav menu -->
         </div>
      </header>
      <!-- begin left sidebar -->
      <section id="left-side">
         <p>Welcome back!</p>
         <div class="profile">
            <img src="https://picsum.photos/100" class="profile-image">
            <?php
                if (isset($_SESSION["username"])){
                    echo "<h3>" . $_SESSION["username"] . "</h3>";
                }
                else {
                    echo "<h3>John Doe</h3>";
                }
            ?>
            <p>Member since Jan. 2022</p>
         </div>
         <div class="left-menu">
            <a href="#"><i class="fa-solid fa-book-journal-whills"></i> My Orders</a>
            <br><br>
            <a href="#"><i class="fas fa-heart"></i> Wishlists</a>
            <br><br>
            <a href="#"><i class="fa-solid fa-business-time"></i> Settings</a>
            <br><br>
            <a href="#"><i class="fa-solid fa-user"></i> Reviews</a>
            <br><br>
            <a href="logout.php"><i class="fa-solid fa-phone-slash"></i> Sign Off</a>
         </div>
      </section>
      <!-- end left sidebar -->
      <!-- begin right sidebar -->
      <aside>
         <div class="widget">
            <h4>Returns....</h4>
            <h4>Shipping....</h4>
            <p>
               <script>document.write(new Date().toLocaleDateString()); </script>
            </p>
            <!-- todays date script -->
            <p>ect...</p>
         </div>
         <!-- end top right sidebar -->
         <div class="widget socials">
            <h4>New Items</h4>
            <img src="images/basket.jpeg" alt="Wicker basket image" class="hot-image">
            <img src="images/flower.jpeg" alt="Photo of flowers in a basket" class="hot-image">
            <img src="images/chair.jpeg" alt="Photo of a dark blue chair" class="hot-image">
         </div>
      </aside>
      <!-- end bottom right sidebar -->
      <img src="images/food.jpg" alt="Photo of carrots and green onions" class="title-image">
      <section id="welcome">
         <h1>Welcome</h1>
         <p class="sub-head">sub heading or hook could go here...</p>
      </section>
      <section id="about">
         <h1>Lorem Ipsum</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar dui vitae pulvinar 
            pulvinar. Curabitur mattis sit amet ipsum sit amet accumsan. Nam porttitor leo quis 
            aliquet luctus. Integer finibus augue justo, vitae blandit risus vulputate nec. 
            Nulla id metus in nulla bibendum suscipit non in mauris. Nullam interdum ante libero, 
            ut pretium quam pretium eget. Nam lobortis sem pulvinar mi auctor eleifend. 
            Duis ultricies semper enim. Maecenas tincidunt nulla a urna ultricies bibendum.
         </p>
         <p>Pellentesque a pharetra massa, bibendum interdum mi. Suspendisse rhoncus metus dolor, lacinia accumsan sem interdum nec. Nullam mollis elit sit amet sem efficitur consequat. Sed dignissim ipsum libero, eu ullamcorper libero mattis a. Donec sed ex quis leo efficitur dignissim et a est. Phasellus ante sem, auctor vitae nulla sed, eleifend egestas metus. Proin at orci dolor. Fusce consequat sed massa a dapibus. Maecenas tristique, diam eget porta efficitur, nisl mi fermentum leo, at vestibulum diam neque sed justo. Nunc iaculis suscipit sollicitudin.</p>
         <p>Maecenas varius mollis tempor. Curabitur luctus magna vitae blandit tincidunt. Vestibulum lobortis congue velit. Nunc ac semper diam, at porta tortor. Cras in ex justo. Duis accumsan iaculis laoreet. Nam quis justo convallis, suscipit mi ut, varius ante.
         <p>Phasellus laoreet sapien vel nibh fermentum auctor. Duis porta ac turpis ut euismod. Fusce pulvinar lacinia ligula mollis aliquet. Sed gravida efficitur nisi id interdum. Nullam ac suscipit ante. Quisque eu libero at urna egestas posuere at in lacus. Proin fermentum risus quis massa vestibulum tristique. Mauris id dui ac leo auctor tempus. Aliquam molestie tincidunt urna, nec dictum tortor gravida at. Proin quis mauris posuere, euismod lacus efficitur, dignissim metus. Aliquam ante augue, imperdiet eget dignissim nec, commodo non elit. Suspendisse commodo dictum tincidunt. Morbi congue purus risus, eget fringilla lorem egestas ut. Sed et lacinia ligula. Nullam vel condimentum lectus.</p>
         <p>Suspendisse interdum elit condimentum lectus consequat aliquam. Quisque aliquet bibendum justo quis volutpat. Etiam eget nunc ligula. Sed laoreet suscipit odio, quis euismod mauris vulputate vel. Duis risus sapien, fermentum eu tincidunt ut, ultrices at arcu. Proin nec felis quis arcu egestas vulputate. Quisque porttitor, leo id ullamcorper aliquam, nisi risus scelerisque tellus, id suscipit arcu tortor at justo. Sed eget egestas risus. Quisque non interdum tellus. Proin massa leo, fringilla nec tortor quis, sodales consequat tellus. Proin fringilla faucibus tempus. Vivamus posuere lectus nec ullamcorper bibendum. Pellentesque ultricies, nulla a molestie dictum, urna nisi ultricies sapien, congue pharetra sapien dui a ex. 
         </p>
      </section>
      <section id="misc">
         <p>----------</p>
      </section>
      <div class="chat-block">
         <div class="collapse-bar">
             <button id="chat-button" type="button" class="collapsible" onclick="changeView()">Chatbot</button>
         </div>
         <div class="full-chat-box" id="full-chat-box">
             <!-- Messages container -->
             <div class="outer-container">
                 <div class="chat-container">
                     <!-- Messages -->
                     <div id="chatbox">
                         <h5 id="chat-timestamp"></h5>
                         <p id="botStarterMessage" class="botText"><span>Welcome to Newzeen!</span></p>
                     </div>
                     <!-- User Input -->
                     <div class="chat-bar-input-block">
                         <div id="userInput">
                             <input type="text" id="textInput" class="input-box" name="msg" placeholder="Press 'enter' to send a message">
                             <p></p>
                         </div>
                         <div class="chat-bar-buttons">
                             <button id="sendButton" type="button" onclick="sendButton()">Send</button>
                         </div>
                         <div id="input-block-bottom">
                             <p></p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
      <footer>
         <p>&copy; hollandc@csp.edu 2022</p>
         <p>All images used with permission from https://www.pexels.com/
      </footer>
   </body>
</html>

