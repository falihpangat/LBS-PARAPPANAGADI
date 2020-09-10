<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="generator" content="falih pgt">

    <meta name="created" content="Sat, 12 Mar 2016 04:37:52 GMT">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <title>LBSMDC-home</title>

   <link rel="icon" type="image/png" href="image/Lbs logo.png">
	<link href="css/style.css" style="type/css" rel="stylesheet">

      <script src="js/jquery-2.1.4.min.js">
</script>

      <script src="js/main.js">
</script>

      <script src="js/jquery.slides.min.js" type="text/javascript">
</script>

  </head>

  <body >

      <div id="container">




      <header>

          
            <div class="logo">

                <a href="index.php"><img src="image/Lbs logo.png" width="100" height="100"></a>

            </div>
    
            <div class="topbar">

                <ul class="topline">

                    <li><a href="index.php">Home</a>
 </li>

                    <li><a href="contact.html">Contact Us </a>
</li>

                    <li><a href="mailto:lbsiistpgimdc@gmail.com">Webmail </a></li>

                    <li class="last"><a href="https://www.google.com/maps/place/L+B+S+Center+For+Science+And+Technology/@11.0420187,75.8592013,766m/data=!3m2!1e3!4b1!4m5!3m4!1s0x3ba652fb0e45fd5b:0x741cc724d9b41f4f!8m2!3d11.0420187!4d75.86139?authuser=1
">Direction </a></li>
                   <li><a href="login/login.html"><strong>LOGIN</strong></a>
 </li>


                
                </ul>

              
            </div>

            <div class="name">

                <b>LAL BAHADHUR SHASTHRI MODEL DEGREE COLLEGE</b><br>

                <span class="parappan">PARAPPANANGADI</span><br>

                <span class="address"> GOVERNMENT MODEL DEGREE  COLLEGE, NEDUVA, PARAPPANAGADI (PO),
                MALAPPURAM (DT) - 676303</span><br>

                <span class="Accredited"><strong>Accredited By</strong> <a href="https://www.uoc.ac.in">University of Calicut</a></span>

            </div>

      
         
      </header>

      <nav class="cf">

          <ul class="topmenu">

              <li><a href="#">LBSMDC</a>

              <ul class="submenu">

                    <li><a href="institute.html" title="LBS BOARD">LBS BOARD</a></li>

                    <li><a href="principal.html" title="PRINCIPAL">Principal</a></li>

               </ul>

              </li>

              <li><a href="#">Acadmics</a>

                <ul class="submenu">

                    <li><a href="coursemain.html" title="COURSE">Course</a></li>
                    
                    <li><a href="Admin/faculty reg/fetch.php" title="FACULTY">Faculty</a></li>

                    

                  </ul>

              </li>


              <li><a href="#">Admission</a>

              <ul class="submenu">

                    <li><a href="documents/prospects.pdf" title="prospects">Prospects</a></li>
                  
                    <li><a href="fees table.html" title="fees">FEES</a></li>
                    <li><a href="Admission Procedure.html" title="Staff">Admission Procedure</a></li>

                  </ul>

              </li>

              <li><a href="#">Exam</a>

                <ul class="submenu">

                    <li><a href="reference.html" title="Reference">Reference</a></li>

                    <li><a href="Notification.php" title="Notification">NOTIFICATION</a></li>


                  </ul>

              </li>

              <li><a href="#">Facilities</a>

                  <ul class="submenu">

                    <li><a href="library.html" title="Libraries">LIBRARIES</a></li>

                    <li><a href="lab.html" title="Lab">LAB</a></li>


                  </ul>

              </li>

              <li><a href="career.html">Careers</a></li>

               <li><a href="gallery.html">Photo Gallery</a>


		</ul>

      </nav>

    
      
      <div class="contant">
     
      <div class="photo">

          <div id="slides">
 
      <img src="image/chairman union.jpg" height="400" width="870">

      <img src="image/football.jpg" height="400" width="870">

      <img src="image/lbs new.jpg" height="400" width="870">

      <img src="image/union inagrution.jpg" height="400" width="870">

       
          
    </div>

          
        
      </div>

       <div class="news">

           <div class="domtab">
 
             Notification
           </div>

           <div class="news-box">

           <div class="holder">

           <ul id="ticker01">

							<?php
    $conn = mysqli_connect("localhost","root","","lbscollege");
    if ($conn-> connect_error) {
      die("connection failed:". $conn-> connect_error);
    }

    $sql = "SELECT * FROM NOTIFY";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "
        <table>
          <tr>
         <li> 
          <th>". $row["id"] ."  <a href='$row[link]'>". $row["notification"] ."</a></th>
         </li>
         </tr>     
        </table> 
            ";
      }
      echo "";
    }
    else {
      echo "0 result";
    }

    $conn-> close();
    ?>

            </ul>

            </div>
  
          </div>
 
          
  </div>

            </div>
<div class="down-content">
           
    <div class="about-box">

        <div class="about-header">
<strong>About The Institute</strong>

        </div>

        <div class="about-content"> 
             Lal Bahadur Shasthri Model Model Degree College, Parappanangdi is established was 2016 under L.B.S centere 
             for Science Technology, Thiruvananthapuram (<a href="https://www.lbskerala.com">www.lbskerala.com</a>)
             The Centre was started by the Government of Kerala as an Autonomous Body with the main objectives that the centre would act as a link between the industries and technical institution<br>

            <a href="institute.html"> read more...</a>

        </div>

        </div>

     <div class="right-content">

        <div align="center"><strong>Quick Links</strong></div>

                  <h5><a href="corona/index.html">COVID-19</a></h5><hr>

                  <h5><a href="fees table.html">Scholarships</a></h5><hr>

                  <h5><a href="#">Downloads</a></h5><hr>

                  <h5><a href="https://archive.org/details/texts">Online Library</a></h5><hr>

                  <h5><a href="https://pareekshabhavan.uoc.ac.in/">Pareeksha Bhavan</a></h5><hr>

                  <h5><a href="gallery.html">Photo Galary</a></h5><hr>

                  <h5><a href="http://14.139.185.6/website/news/new514.pdf">Acedamic Calendar</a></h5><hr>

                  <h5><a href="placement.php">Placements</a></h5><hr>

                  <h5><a href="image/img.jpg">How to reach LBS PARAPPANAGADI</a></h5>

          
              </div>

          
          
    
    <div class="vision-box">

        <div class="about-header"><strong>Vision</strong>

        </div>

        <div class="about-content">
 
            To create a center for imparting technical education of international standards and conduct research at the cutting edge of technology to meet the current and future challenges of technological development.
        </div>

    </div>

    <div class="mission-box">

        <div class="about-header"><strong>Mission</strong>

        </div>

        <div class="about-content"> 
            To create technical manpower for meeting the current and future demands of industry: To recognize education and research in close interaction with industry with emphasis on the development of leadership qualities in the young men and women entering the portals of the Institute with sensitivity to social development and eye for opportunities for growth in the international perspective
        </div>

    </div>

      </div>

      
    
      
      <footer class="copy">
        &copy 2020 LBS PARAPPANAGADI, MALAPPURAM-676303, KERALA
      </footer>

      
       <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>

      
      
      </div>

  </body>
</html>