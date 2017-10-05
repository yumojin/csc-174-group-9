<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("inc/meta.php"); ?>
      <title>Group Shanghai - Assignment 5</title>
      <?php include("inc/links.php"); ?>
   </head>
   <body>
      <?php include ("inc/nav.php"); ?>
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
      <?php include("inc/footer.php"); ?>
      <?php include("inc/scripts.php"); ?>
   </body>
</html>