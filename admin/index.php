<?php
  if(key_exists('PATH_INFO', $_SERVER)){
    http_response_code(404);
    return;
  }
    include "dbconnect.php";
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="author"
      content="Clark Leovison C. Rey, Jerome Evangelista, Rojeth Justine Javaluyas"
    />
    <meta
      name="description"
      content="University of Perpetual Help System - Laguna, UPHSL, Perpetual Laguna"
    />
    <title>University of Perpetual Help System - Laguna</title>
    <link rel="icon" type="x-icon" href="img/SSS.png" />
    <link rel="stylesheet" href="/styles/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header>
      <?php include "header.php";?>
    </header>
    
    <main>
      <!--Start of Home Page-->
      <section id="Home" class="Home">
        <div class="main-content">
          <div class="hm-vid">
            <video class="vid-intro" autoplay muted loop>
              <source src="etc/UPHS ONLINE.mp4" type="video/mp4" />
            </video>
          </div>
        </div>
      </section>
      <!--End of Home Page-->

      <!--Start of News and Updates Page-->
      <section class="Newups" id="Newups">
        <h1 class="newuph">News &amp; Updates</h1>

        <div class="scroll-progress">
          <span class="progress-value">
            <svg
              class="svg-icon"
              style="
                width: 1em;
                height: 1em;
                vertical-align: middle;
                fill: currentColor;
                overflow: hidden;
              "
              viewBox="0 0 1024 1024"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M908.501333 904.832L512 508.330667 115.498667 904.832a42.666667 42.666667 0 0 1-60.330667-60.330667l426.666667-426.666666a42.666667 42.666667 0 0 1 60.330666 0l426.666667 426.666666a42.666667 42.666667 0 0 1-60.330667 60.330667z m0-298.666667L512 209.664 115.498667 606.165333a42.666667 42.666667 0 0 1-60.330667-60.330666l426.666667-426.666667a42.666667 42.666667 0 0 1 60.330666 0l426.666667 426.666667a42.666667 42.666667 0 0 1-60.330667 60.330666z"
              />
            </svg>
          </span>
        </div>
        <div class="newup-grid">
          <!--Start of Card Images-->
          
          
          
  <!-- inserted by nod, auto fill from database -->          
          <div class="newup-card">
            <div class="newup-image-2">
              <img
                src="NewsUpdate/images/<?php echo $r["imagename"];?>"
                alt=""
                class="newupimg2"
              />
            </div>

            <h3 class="newuptitle"></h3>
            <p class="newup-contents">
              <?php echo $r["imagedesc"];?>
            </p>
            <div class="newup-readm">
              <a
                href="/NewsUpdate/images/<?php echo $r["imagename"];?>"
                class="newup-readm-btn"
                >Read More</a
              >
            </div>
          </div>
  <!-- done insertion -->          
         
          
          
          <div class="newup-card">
            <div class="newup-image-2">
              <img
                src="News-Updates/img/2024/12.png"
                alt="Annoucement"
                class="newupimg2"
              />
            </div>

            <h3 class="newuptitle">Applied HE News Paper</h3>
            <p class="newup-contents">
              The University of Perpetual Help System Laguna (UPHSL) has
              achieved top rankings in AppliedHE's ASEAN University Ranking.
            </p>
            <div class="newup-readm">
              <a
                href="/News-Updates/pdf/Applied HE News paper.pdf"
                class="newup-readm-btn"
                >Read More</a
              >
            </div>
          </div>

          <div class="newup-card">
            <div class="newup-image-2">
              <img
                src="News-Updates/img/2024/Collaborative Hands.png"
                alt="Annoucement"
                class="newupimg2"
              />
            </div>

            <h3 class="newuptitle">
              UPHSL Extends Collaborative Hands to Partner Schools
            </h3>
            <p class="newup-contents">
              The University of Perpetual Help System Laguna (UPHSL) has
              extended a remarkable offer of collaboration, signing Memorandums
              of Understanding (MOUs) with three distinguished educational
              institutions
            </p>
            <div class="newup-readm">
              <a
                href="/News-Updates/pdf/UPHSL Extends Collaborative Hands to Partner Schools.pdf"
                class="newup-readm-btn"
                >Read More</a
              >
            </div>
          </div>

          <div class="newup-card">
            <div class="newup-image-2">
              <img
                src="News-Updates/img/2024/QSTar.png"
                alt="Annoucement"
                class="newupimg2"
              />
            </div>

            <h3 class="newuptitle">
              University of Perpetual Help System Laguna Earns Prestigious 3 QS
              Stars
            </h3>
            <p class="newup-contents">
              The University of Perpetual Help System Laguna (UPHSL) has once
              again solidified its position as a frontrunner in the field of
              education, achieving a remarkable milestone by being awarded 3 QS
              Stars by the renowned QS Intelligent Unit.
            </p>
            <div class="newup-readm">
              <a
                href="/News-Updates/pdf/Prestigious 3 QS Stars from Quacquarelli Symonds Intelligent Unit.pdf"
                class="newup-readm-btn"
                >Read More</a
              >
            </div>
          </div>

          <div class="newup-card">
            <div class="newup-image-2">
              <img
                src="News-Updates/img/2024/Embarks Internationalization.png"
                alt="Annoucement"
                class="newupimg2"
              />
            </div>

            <h3 class="newuptitle">Embarks on Internationalization Efforts</h3>
            <p class="newup-contents">
              The University of Perpetual Help System Laguna (UPHSL) has taken a
              significant stride towards internationalization as its official
              delegation touched down in Kuala Lumpur to participate in the 5th
              Nutrition, Health, and Lifestyle Conference 2023
            </p>
            <div class="newup-readm">
              <a
                href="/News-Updates/pdf/Embarks on Internationalization Efforts at the 5th NUTRICON 2023 in Kuala Lumpur.pdf"
                class="newup-readm-btn"
                >Read More</a
              >
            </div>
          </div>

          <div class="newup-card">
            <div class="newup-image-2">
              <img
                src="News-Updates/img/2024/Dazzling Triumph.png"
                alt="Annoucement"
                class="newupimg2"
              />
            </div>

            <h3 class="newuptitle">
              A Dazzling Triumph at the CHED ASEAN Kick-Off Celebration
            </h3>
            <p class="newup-contents">
              Amidst a symphony of unity and cultural camaraderie, the
              University of Perpetual Help System Laguna (UPHSL) achieved an
              extraordinary feat in the recent CHED ASEAN Kick Off Celebration
              hosted at LPU Batangas
            </p>
            <div class="newup-readm">
              <a
                href="/News-Updates/pdf/A Dazzling Triumph at the CHED ASEAN Kick-Off Celebration.pdf"
                class="newup-readm-btn"
                >Read More</a
              >
            </div>
          </div>

          <div class="newup-card">
            <div class="newup-image-2">
              <img
                src="News-Updates/Pathway.jpg"
                alt="Annoucement"
                class="newupimg2"
              />
            </div>

            <h3 class="newuptitle">Shengwei Education Collaboration</h3>
            <p class="newup-contents">
              Shengwei Education Consulting Services Corporation has been
              authorized by UPHSL as an exclusive partner to recruit students
              for International Transfer Pathway Program
            </p>
            <div class="newup-readm">
              <a
                href="/News-Updates/pages/shengwei.html"
                class="newup-readm-btn"
                >Read More</a
              >
            </div>
          </div>
        </div>
      </section>
      <!--End of News and Updates Page-->

      <section id="Campuses" class="Campuses">
        <div class="main-camp">
          <div class="camp-title">
            <h1 class="camp">Campuses</h1>
          </div>

          <div class="camp-grid">
            <!--Start of Binan Laguna Branch-->
            <div class="camp-branch">
              <div class="camp-pic-container">
                <a href="https://uphsl.edu.ph">
                  <img
                  src="img/campuses/binan-college.jpeg"
                  alt="Binan Campus"
                  class="camp-pic"
                />
                </a>
              </div>

              <h2 class="camp-title">Laguna</h2>
              <p class="camp-loc">STO. NIÑO, CITY OF BIÑAN, LAGUNA</p>
            </div>
            <!--End of Binan Laguna Branch-->

            <!--Start of GMA Branch-->
            <div class="camp-branch">
              <div class="camp-pic-container">
                <a href="https://gma.uphsl.edu.ph/"
                  ><img
                    src="img/campuses/gma-college.jpeg"
                    alt="GMA Campus"
                    class="camp-pic"
                /></a>
              </div>

              <h2 class="camp-title">CAVITE</h2>
              <p class="camp-loc">
                SAN GABRIEL, GENERAL MARIANO ALVAREZ, CAVITE
              </p>
            </div>
            <!--End of GMA Branch-->

            <!--Start of Manila Branch-->
            <div class="camp-branch">
              <div class="camp-pic-container">
                <a href="https://manila.uphsl.edu.ph/">
                  <img
                  src="img/campuses/sampaloc-college.jpeg"
                  alt="Manila Campus"
                  class="camp-pic"
                />
                </a>
              </div>

              <h2 class="camp-title">Manila</h2>
              <p class="camp-loc">
                1240 V. CONCEPCION STREET, SAMPALOC, MANILA
              </p>
            </div>
            <!--End of Manila Branch-->

            <!--Start of Pangasinan Branch-->
            <div class="camp-branch">
              <div class="camp-pic-container">
                <a href="https://pangasinan.uphsl.edu.ph/">
                  <img
                  src="img/campuses/uphs-pangasinan.jpg"
                  alt="Pangasinan Campus"
                  class="camp-pic"
                />
                </a>

              </div>

              <h2 class="camp-title">Pangasinan</h2>
              <p class="camp-loc">
                MONTEMAYOR&nbsp;STREET,&nbsp;POBLACION,&nbsp;MALASIQUI,&nbsp;PANGASINAN
              </p>
            </div>

            <!--Start of Cauayan Isabela Branch-->
            <div class="camp-branch">
              <div class="camp-pic-container">
                <a href="https://isabela.uphsl.edu.ph/">
                  <img
                  src="img/campuses/Cauayan-college.jpg"
                  alt="Cauayan Campus"
                  class="camp-pic"
                />
                </a>
               
              </div>

              <h2 class="camp-title">Isabela</h2>
              <p class="camp-loc">Cuayan City, Isabela</p>
            </div>
            <!--End of Cauayan Isabela Branch-->

            <!--Start of Roxas Branch-->
            <div class="camp-branch">
              <div class="camp-pic-container">
                <a href="https://pueblodepanay.uphsl.edu.ph/">
                  <img
                  src="img/campuses/pueblo-college.jpg"
                  alt="Roxas Campus"
                  class="camp-pic"
                />
                </a>
              
              </div>

              <h2 class="camp-title">Roxas</h2>
              <p class="camp-loc">Pueblo de Panay, Roxas City</p>
            </div>
            <!--End of GMA Branch-->

            <!--Start of Manila Branch-->
            <div class="camp-branch">
              <div class="camp-pic-container">
                <a href="https://uphdjgtmedicaluniversity.edu.ph/"
                  ><img
                    src="img/campuses/medical-college.jpg"
                    alt="UPHSL Medical Campus"
                    class="camp-pic"
                /></a>
              </div>

              <h2 class="camp-title">
                UPH-DR. JOSE G. TAMAYO MEDICAL UNIVERSITY
              </h2>
              <p class="camp-loc">STO. NIÑO, CITY OF BIÑAN, LAGUNA</p>
            </div>
            <!--End of Manila Branch-->
          </div>
        </div>
      </section>

      <!-- footer -->
      <footer>
        <?php include 'footer.php'; ?>
      </footer>
      <!-- end of footer -->
    </main>
    <script src="script/navbar.js"></script>
    <script src="script/scrolltop.js"></script>
  </body>
</html>
