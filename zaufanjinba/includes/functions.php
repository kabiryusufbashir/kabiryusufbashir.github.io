<?php
  function head($path){
    echo
    '<head>
      <meta charset="utf-8">
      <title>Zanfanjinba</title>
      <link rel="icon" href="'.$path.'/images/favicon.ico">
      <link rel="stylesheet" href="'.$path.'/css/master.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>';
  }

  function headerSection($path, $sloganHeading, $sloganTitle, $sloganAuthor){
    echo
    '<header>
      <div class="header-content">
        <div class="logo">
          <h3>ZANFANJINBA</h3>
        </div>
        <div class="nav-section">
          <nav>
            <ul>
              <li><a href="'.$path.'index.php">Home</a></li>
              <li><a href="'.$path.'index.php#about">About</a></li>
              <li><a href="'.$path.'index.php#education">Education &amp; Experience</a></li>
              <li><a href="'.$path.'index.php#mission">Mission</a></li>
              <li><a href="'.$path.'index.php#vision">Vision</a></li>
              <li><a href="'.$path.'index.php#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="toggle-btn">
          <img src="'.$path.'/images/toggle_btn.png" alt="Toggle button">
        </div>
      </div>
      <div class="slogan">
        <h1>'.$sloganHeading.'</h1>
        <h2>"'.$sloganTitle.'"</h2>
        <h3>'.$sloganAuthor.'</h3>
      </div>
    </header>';
  }

  function footer($path, $background){
    echo '
    <footer class="'.$background.'">
       <p>
         Designed by <a style="font-size:14px;" href="https://teampiccolo.com">Team Piccolo Global Enterprises</a> Copyright &copy; '.date('Y').' All Rights Reserved
      </p>
      <div class="contact-links">
        <a
          href="https://web.facebook.com/Teampiccolo/"
          target="_blank"
          class="btn contact-details"
          ><i class="fab fa-facebook-square"></i></a
        >
        <a
          id="profile-link"
          href="#"
          target="_blank"
          class="btn contact-details"
          ><i class="fab fa-github"></i></a
        >
        <a
          href="https://twitter.com/Piccolo_OEnterp/"
          target="_blank"
          class="btn contact-details"
          ><i class="fab fa-twitter"></i></a
        >
      </div>
    </footer>
    ';
  }

  function linkJs($path){
    echo '
    <script type="text/javascript" src="'.$path.'/js/jquery.js"></script>
    <script type="text/javascript" src="'.$path.'/js/script.js"></script>
    ';
  }
?>
