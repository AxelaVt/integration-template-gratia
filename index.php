<?php
include "header.php";
?>

<!--acceuil-->
<body>

  <main>

    <div class="background1">
      <div class="nav-column">
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
          <button type="button">BOOK A TABLE</button>
        </div>

    </div>

<?php include "page1.php";?>

<!--page 3-->


    <div id="section2" class="vh-100">
      <div class="container h-100 d-flex">
          <div class="jumbotron-fluid m-auto text-center" style="height:38vh; width:80vh; background-color: white;">
            <div id="contour">
              <h1 class="details">DETAILS</h1>
                      <p id="lor">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <button type="button" class="btn-prep">PREPARATION OF OUR DISHES</button>
            </div>

          </div>
      </div>
    </div>
<!--fin de la page 3-->
<!--page 4-->
  <div id="section3" class="vh-100">

      <h1 class="titre text-center">HOW WE REACH THIS ?</h1>
      <div class="lorem text-center">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </div>

      <div class="smaller row align-items-center d-flex justify-content-between mb-5" style="height: 40vh; width:100%">
      <div class="background-img-height col-sm-12 col-md-12 col-lg-3 d-flex h-75 d-inline-block" id="img4">
        <div class="align-self-center ml-auto mr-auto text-center">
            <p class="dfb">DIFFERENT LOCATIONS</p>
              <div class="lorembis">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </div>
            </div>
      </div>
      <div class="background-img-height col-sm-12 col-md-12 col-lg-4 d-flex h-100 d-inline-block" id="img5">
        <div class="align-self-center ml-auto mr-auto text-center">
          <p class="dfb">FRESH PRODUCTS</p>
            <div class="lorembis">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
      </div>
      </div>
      <div class="background-img-height col-sm-12 col-md-12 col-lg-3 d-flex h-75 d-inline-block" id="img6">
        <div class="align-self-center ml-auto mr-auto text-center">
          <p class="dfb">THE BEST FROM THE BEGINNING</p>
            <div class="lorembis">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
      </div>
      </div>
    </div>
<!--fin de la page 4-->
    <!--  <div class="foot text-center">
        <img class="logodemerde" src="img.g/logo-b.png" alt="logo" width="5%" height="5%" class="mt-5">
        <hr id="hrdemerde"size=5 color="#cbcbcb" width="100%">
        <span id="gratia">Gratia Restaurant</span>
        <p class="lorembis mb-4 mt-2">Copyright 2016. All reserved by symu</p>
        <hr size=3 align="center" color="#cbcbcb" width="8%">
        <div class="smaller row my-4 justify-content-center">
          <a target="_blank" href="https://fr-fr.facebook.com/"><img src="img.g/FB.png" alt="logo facebook" class="mx-2"></a>
          <a target="_blank" href="https://twitter.com/explore"><img src="img.g/TW.png" alt="logo twitter" class="mx-2"></a>
          <a target="_blank" href="https://www.instagram.com/?hl=fr"><img src="img.g/IG.png" alt="logo instagram" class="mx-2"></a>
        </div>
      </div> -->

    </div>

  </main>

<?php
include "footer.php";
