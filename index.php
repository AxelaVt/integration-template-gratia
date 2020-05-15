<?php
include "header.php";
 ?>

<body>

  <main>
    <div class="background1">
      <div id="carouselExampleControls" style="height: 80vh;" class="row align-items-center carousel slide" data-interval="false" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img.g/slider1.png" class="d-block w-100" alt="planche à découper + couteau">
          </div>
          <div class="carousel-item">
            <img src="img.g/slider2.png" class="d-block w-100" alt="hamburger">
          </div>
          <div class="carousel-item">
            <img src="img.g/slider3.png" class="d-block w-100" alt="cupcake">
          </div>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
      <div class="bottom">
        <div class="perf d-flex justify-content-center">
        and perfection is not a detail
        </div>

        <div class="text-center">
          <img src="img.g/arrow.png" class="rounded" alt="flèche vers le bas">
        </div>


        <div class="d-flex justify-content-end">
          <button type="button" class="btn-book">BOOK A TABLE</button>
        </div>

        <div class="icon-bar">
          <a href="#section1">01</a>
          <a href="#section2">02</a>
          <a href="#section3">03</a>
        </div>

      </div>

    </div>

    <div id="section1" class="vh-100">

      <h1 class="perfection text-center">PERFECTION</h1>
      <div class="lorem text-center">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </div>

      <div class="firstimg rounded float-left">
        <img src="img.g/dessert.png" alt="desserts" width="400" height="325">
        <div class="desserts"> <p>DESSERTS</p>
            <hr size="1" align="center" color="#D49A63">
            <div class="lorembis">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
        </div>
      </div>

      <div class="secimg rounded text-center">
        <img src="img.g/smoothie.png" alt="smoothies" width="350" height="435">
        <div class="smoothies"><p>SMOOTHIES</p>
          <hr size="1" align="center" color="white">
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>

      <div class="thirdimg rounded float-right">
        <img src="img.g/breakfast.png" alt="breakfast" width="400" height="325">
        <div class="breakfast"><p>BREAKFAST</p>
          <hr size="1" align="center" color="#D49A63">
          <div class="lorembis"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <button type="button" class="btn-check">CHECK OTHER OFFERS</button>
      </div>

    </div>

    <div id="section2" class="vh-100 d-flex align-items-center">

      <div class="jumbotron jumbotron-fluid d-flex text-center py-5" style="width: 100vh; height:50vh; background-color: white;">
        <div class="container-fluid mx-5 border">
          <h1 class="details display-4 mt-5 mb-4">DETAILS</h1>
          <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <button type="button" class="btn-check mt-3">PREPARATION OF OUR DISHES</button>
        </div>
      </div>

    </div>

    <div id="section3" class="vh-100">

    </div>

  </main>

<?php
include "footer.php";
