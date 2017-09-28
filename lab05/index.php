<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../../../favicon.ico">
      <title>Group Shanghai - Assignment 5</title>
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/carousel.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
         <a class="navbar-brand" href="index.php">Group Shanghai</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="zhengliang.php">Zhengliang</a>
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
      <!-- Marketing messaging and featurettes
         ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
         <!-- Three columns of text below the carousel -->
         <div class="row">
            <div class="col-lg-4">
               <img class="rounded-circle" src="images/jiang.jpg" alt="Zhengliang's Picture" width="140" height="140">
               <h2>Zhengliang Jiang</h2>
               <?php include("inc/zh_include.php"); ?>
               <p><a class="btn btn-secondary" href="zhengliang.php" role="button">Read More... &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
               <img class="rounded-circle" src="images/spahija.jpg" alt="Sibel's Picture" width="140" height="140">
               <h2>Sibel Spahija</h2>
               <?php include("inc/si_include.php"); ?>
               <p><a class="btn btn-secondary" href="sibel.php" role="button">Read More... &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
               <img class="rounded-circle" src="images/yu.jpg" alt="Mojin's Picture" width="140" height="140">
               <h2>Mojin Yu</h2>
               <?php include("inc/mo_include.php"); ?>
               <p><a class="btn btn-secondary" href="mojin.php" role="button">Read More... &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
         </div><!-- /.row -->
      </div><!-- /.container -->
      <!-- FOOTER -->
      <footer>
         <div>© This web site is created by Group Shanghai for CSC 174 Assignment 5.</div>
      </footer>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="assets/js/vendor/popper.min.js"></script>
      <script src="dist/js/bootstrap.min.js"></script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="assets/js/vendor/holder.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>