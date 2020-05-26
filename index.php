<?php
include "header.php";
?>

<!--acceuil-->
<body>

  <main>

    <div class="background1">
      <div class="nav-column icon-bar">
        <a href="#section1" class="bar">01</a>
        <a href="#section2" class="bar">02</a>
        <a href="#section3" class="bar">03</a>
      </div>

      <div class="prev"><a onclick="plusSlides(-1)">&#10094;</a>
      </div>

      <div id="carousel" class="carousel">
        <div class="carousel-items">
          <div class="carousel-item">
            <img src="img.g/slider1.png" class="img" alt="planche à découper + couteau">
          </div>
          <div class="carousel-item">
            <img src="img.g/slider2.png" class="img" alt="hamburger">
          </div>
          <div class="carousel-item">
            <img src="img.g/slider3.png" class="img" alt="cupcake">
          </div>
        </div>


        <div>
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>

      <div class="next"><a onclick="plusSlides(1)">&#10095;</a>
      </div>


    </div>

    <div class="container1">
      <div class="box">
        <div class="perf">
        and perfection is not a detail
        </div>

        <div class="fleche">
          <img src="img.g/arrow.png" class="arrow rounded" alt="flèche vers le bas">
        </div>
      </div>

        <div class="med">
          <button type="button" class="btn-book">BOOK A TABLE</button>
        </div>

    </div>

<?php include "page1.php";?>
<?php include "page2.php";?>
<?php include "page3.php";?>



  </main>

<?php
include "footer.php";
