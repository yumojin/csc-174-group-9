<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="CSC 174 Assignment 5">
      <meta name="author" content="Group Shanghai">
      <title>Mojin Yu</title>
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
               <li class="nav-item">
                  <a class="nav-link" href="zhengliang.php">Zhengliang</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="sibel.php">Sibel</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="mojin.php">Mojin<span class="sr-only">(current)</span></a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container resume">
         <header>
            <h1>Mojin Yu</h1>
         </header>
         <article>
            <h2>About Me</h2>
            <?php include("inc/mo_include.php"); ?>

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

            <h2>Experience</h2>
            <h3>Summer Program Assistant | University of Rochester | 2017 Jul - Sep</h3>
            <p>Job responsibilities include: doing research and collecting historical data; mapping research findings using ArcGIS online; designing posters and map print layout.</p>
            <h3>Intern | Houghton Street Media | 2016 Jun - Aug</h3>
            <p>Job responsibilities include: editing TV Show Positioning documents; organizing project schedules; taking conference notes and writing summaries; translating English documents and business emails; making copies; running errands.</p>
            <h2>Other</h2>
            <h3>Graphic Design Project: Adopt, Don't Shop</h3>
            <p>These poster designs aim to promote the idea of pet adoption from animal rescues as a substitution of purchasing from breeders, pet stores, etc. The posters consist of various types of elements: imagery of animals, abstract shapes and slogan text “Adopt. Don’t shop”. Image elements are either from online resources or created using Adobe Illustrator. The main themes and structures of the three designs are kept consistent so that they can work together and leave the audience a stronger impression.</p>
            <p>Personal comments: To me, the part that worked out the best in these posters is the text / font choice. I don’t want the posters to look like forcing people into pet adoption but at the same time, I feel like this issue still needs to be emphasized. That’s why I chose a script-like font (for a friendly tone) but also added a period after the word “adopt” (for determination). I made the text “adopt” significantly larger than “don’t shop” so that “adoption” can be the first thing that catches attention. One note is that the QR code placed at the bottom-right corner of each poster is a working one that directs to a local animal shelter.</p>
         </article>
         <aside>
            <h2>Skills</h2>
            <ul>
               <li>Adobe Photoshop, Illustrator and InDesign</li>
               <li>Python, HTML, CSS and JavaScript</li>
               <li>Audio editing software (Pro Tools and Garage Band)</li>
               <li>Video editing software (Final Cut Pro and Adobe Premiere)</li>
               <li>Website building platforms (Weebly, Wix and WordPress)</li>
               <li>ArcGIS online</li>
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