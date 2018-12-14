<html>
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/main.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900" rel="stylesheet">
    <script src="js/rellax.js"></script>
    <title>PORTFOLIO</title>
</head>

<body>

    <nav>
        <span id="brand">
            <a href="index.html">Portfolio</a>
        </span>

        <ul id="menu">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="MusicPlayer.html">Music Player Page</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
            <?php
                if (isset($_SESSION['userId'])){
                    echo '<form action="includes/logout.inc.php" method="post">
                            <button id="btn" type="submit" name="logout-submit">LOGOUT</button>
                          </form>';
                } else {
                    echo '<a href="login.php">Login</a>';
                }
            ?>
            
                
            </li>
        </ul>

        <div id="toggle">
            <div class="span" id="one"></div>
            <div class="span" id="two"></div>
            <div class="span" id="three"></div>
        </div>
    </nav>

    <div id="resize">
            <ul id="menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="MusicPlayer.html">Music Player Page</a></li>
                  <li><a href="#">About</a></li>
                  <li>
                  <?php
                  if (isset($_SESSION['userId'])){
                      echo '<form action="includes/logout.inc.php" method="post">
                              <button id="btn" type="submit" name="logout-submit">LOGOUT</button>
                            </form>';
                  } else {
                      echo '<a href="login.php">Login</a>';
                  }
              ?>
            </li>
            </ul>
      </div>

      <div class="content">
            <?php
                if (isset($_SESSION['userId'])){
                    echo '<h1>YOU ARE LOGGED IN~</h1>';
                } else {
                    echo '<h1>YOU ARE LOGGED OUT~</h1>';
                }
            ?>
            <h1>CREATIVITY KNOWS NO BOUNDS</h1>
            <h1 id="lightgrey">#BECREATIVE</h1>
            <h1 id="grey">#STAYCREATIVE</h1>
      </div>

      <script src="js/index.js"></script>

</body>

</html>