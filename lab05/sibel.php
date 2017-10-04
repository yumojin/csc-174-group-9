<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("inc/meta.php"); ?>
      <title>Sibel Spahija</title>
      <?php include("inc/links.php"); ?>
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
               <li class="nav-item active">
                  <a class="nav-link" href="sibel.php">Sibel<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="mojin.php">Mojin</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container resume">
         <header>
            <h1>Sibel Spahija</h1>
         </header>
         <article>
            <h2>About Me</h2>
            <?php include("inc/si_include.php"); ?>

            <div class="hometown">
               <div class="hometown_text">
                  <h2>My Hometown</h2>
                  <p>Throughout history Prizren has played an important role in the region which was first settled in Illyrian times. The town hosted a handful of empires, with Byzantine and Ottoman architecture leaving the most distinctive marks on the cityscape. Ottoman vibes can be felt especially around Shadervan – near this main, cobbled square you’ll find a great selection of bars and restaurants, as well as the lovely Sinan Pasha Mosque and the Old Stone Bridge, which dates back to the 16th century but was reconstructed in the 1980s after it was destroyed by a flood. There’s also the Prizren League House, of particular importance for Albanian history as the site of the most significant attempt to unite all Albanians in the region within one state.</p>
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
               <li>Pursuing a B.S. in Business with Finance and Accounting Concentration</li>
               <li>Recipient of Renaissance and Global, Handler and Davis Scholarships for full tuition and expenses all four years</li>
               <li>Recipient of selective $3,000 Research and Innovations Grant to conduct independent undergraduate research</li>
            </ul>
            <h3>United World College of the Adriatic</h3>
            <ul>
               <li>Full Academic Scholarship granted from Italian Ministry of International Affairs</li>
               <li>Activities at school include but not limited to: Editor of school magazine "The Adriatic Times", Social Service with disabled young adults, Kayaking Club</li>
            </ul>
            <h2>Experience</h2>
            <h3>Jefferies LLC</h3>
            <ul>
               <li>Interned as a Summer Investment Banking Analyst</li>
               <li>Worked on various pitches and live deals within the M&A and the Restructuring& Recapitalization groups</li>
               <li>Industry exposure includes but not limited to: Industrials, Healthcare, Consumer, Energy and Power</li>
            </ul>
            <h3>University of Rochester - William E. Simon School of Business</h3>
            <ul>
               <li>Research Assistant and TA for the MBA class in Operations Management</li>
               <li>Conducted literature reviews, collected and analyzed data, communicated with current researchers working in similar subjects</li>
               <li>As a TA helped student prepare for assignments and helped grade exams and class assignments</li>
            </ul>
            <h2>Other</h2>
            <h3>University of Rochester Investment Banking Program</h3>
            <ul>
               <li>As the president of the program deligate responsibilities to each mentor</li>
               <li>Help connect students with Investment Banking professionals</li>
               <li>Through the mentorship program ensure technical preperation for potential Investment Banking summer positions</li>
            </ul>
            <h3>International Turkish Language Olympiads</h3>
            <ul>
               <li>Chosen ambassador to represent Republic of Kosovo in International Turkish Olympiads</li>
               <li>Won first place after competing with over 1,000 contestants from 130 different countrie</li>
            </ul>
         </article>
            
         <aside>
            <h2>Skills</h2>
            <ul>
               <li>Proficient using Excel, Word, PowerPoint and Internet search tools for topical research, data collection and analysis, drafting and finalizing reports and presentations and for conducting analytics and illustrating findings</li>
               <li>Bilingual in Albanian and Turkish, Fluent in English and Italian</li>
            </ul>
         </aside>
      </div><!--.container resume-->
      <footer>
         <div>© This web site is created by Group Shanghai for CSC 174 Assignment 5.</div>
      </footer>
      <?php include("inc/scripts.php"); ?>
   </body>
</html>