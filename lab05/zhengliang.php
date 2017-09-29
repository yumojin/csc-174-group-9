<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="CSC 174 Assignment 5">
      <meta name="author" content="Group Shanghai">
      <title>Zhengliang Jiang</title>
      <!-- Bootstrap core CSS -->
      <link href="bootstrap-4.0.0-beta/dist/css/bootstrap.css" rel="stylesheet">
      <!-- Custom styles for this "Carousel" template taken from Bootstrap -->
      <link href="bootstrap-4.0.0-beta/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
      <!-- Our own custom CSS -->
      <link href="bootstrap-4.0.0-beta/dist/css/overrides.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
         <a class="navbar-brand" href="index.php">Group Shanghai</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="zhengliang.php">Zhengliang<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="sibel.php">Sibel</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="mojin.php">Mojin</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container resume">
         <header>
            <h1>Zhengliang Jiang</h1>
         </header>
         <article>
            <h2>About Me</h2>
            <?php include("inc/zh_include.php"); ?>
            
            <div class="hometown">
               <div class="hometown_text">
                  <h2>My Hometown</h2>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
               </div><!--hometown_text-->
               <div class="hometown_pic">
                  <figure>
                     <img class="resizable" src="images/prizren.jpg" alt="Prizren, Kosovo">
                     <figcaption>City of Prizren, Kosovo</figcaption>
                  </figure>
               </div><!--.hometown_pic-->
            </div><!--.hometown-->
            <h2>Education</h2>
            <h3>University of Rochester</h3>
            <ul>
               <li>Class of 2018</li>
               <li>Bachelor of Arts, International Relations & Computer Science </li>
            </ul>
            <h2>Experience</h2>
            <h3>Ping An Securities</h3>
            <ul>
               <li>Attended a selective training program organized by the Ping An Securities and received Equity ownership and structure lectures from my assigned mentor.</li>
               <li>nalyzed the structure of some client companies to determine the appropriate ways of listing.</li>
               <li>Guided by my mentor to employ financial statements and other operational information of a particular enterprise to predict its future performance</li>
            </ul>
            <h3>Tencent</h3>
            <ul>
               <li>Conduct an integral research in China's pharmaceutical E-commerce market.</li>
               <li>Assist in Tencent Makerspace Project (collaborate with Peking University team)</li>
               <li>Research in Tencent’s enterprise culture, and receive guest from government department.</li>
            </ul>
            <h3>GE (General Electric) Healthcare China </h3>
            <ul>
               <li>Manage Concur system (an electronic travel reservation and expense system). Work includes entering and managing Concur data, updating tracking status, system maintenance, providing consultation services.</li>
               <li>Arrange arrival inspection notice for medical devices.</li>
               <li>Communicate with the branch offices in Tianjin, Dalian and Shanghai.</li>
            </ul>
         </article>
         <aside>
            <h2>Skills</h2>
            <ul>
               <li>Microsoft Office: Word, Excel, Powerpoint</li>
               <li>Performing data analysis using Matlab, Excel, R language</li>
               <li>Programming in Java, C</li>
               <li>Mobile app development using Android Studio</li>
               <li>Fluency in English; Native speaker in Mandarin Chinese; Good command of Japanese</li>
            </ul>
         </aside>
      </div><!--.container resume-->
      <footer>
         <div>© This web site is created by Group Shanghai for CSC 174 Assignment 5.</div>
      </footer>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="bootstrap-4.0.0-beta/assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="bootstrap-4.0.0-beta/assets/js/vendor/popper.min.js"></script>
      <script src="bootstrap-4.0.0-beta/dist/js/bootstrap.min.js"></script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="bootstrap-4.0.0-beta/assets/js/vendor/holder.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="bootstrap-4.0.0-beta/assets/js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>