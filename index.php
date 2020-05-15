<?php
include "header.php";
 ?>

<body>

  <main>
    <div class="background1 d-flex vh-100 container-fluid">

      <div class="icon-bar d-flex flex-column col-1">
        <a href="#section1" class="effetBar">01</a>
        <a href="#section2" class="effetBar">02</a>
        <a href="#section3" class="effetBar">03</a>
      </div>

      <div id="carouselExampleControls" style="height: 80vh;" class="row d-flex flex-column justify-content-center carousel slide" data-interval="false" data-ride="carousel">
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
          <img src="img.g/arrow.png" class="arrow rounded" alt="flèche vers le bas">
        </div>


        <div class="d-flex align-items-end justify-content-end">
          <button type="button" class="btn-book shadow-none">BOOK A TABLE</button>
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
            <hr size="1" align="center" width ="15%" color="#D49A63">
            <div class="lorembis">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
        </div>
      </div>

      <div class="secimg rounded text-center">
        <img src="img.g/smoothie.png" alt="smoothies" width="350" height="435">
        <div class="smoothies"><p>SMOOTHIES</p>
          <hr size="1" align="center" width ="15%" color="white">
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>

      <div class="thirdimg rounded float-right">
        <img src="img.g/breakfast.png" alt="breakfast" width="400" height="325">
        <div class="breakfast"><p>BREAKFAST</p>
          <hr size="1" align="center" width ="15%" color="#D49A63">
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

      <h1 class="perfection text-center">HOW WE REACH THIS ?</h1>
      <div class="lorem text-center">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </div>

      <div class="firstimg rounded float-left">
        <img src="img.g/4.png" alt="chiffre 4" width="400" height="325">
        <div class="dfb"> <p>DIFFERENT LOCATIONS</p>
            <div class="lorembis">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
        </div>
      </div>

      <div class="middleimg rounded text-center">
        <img src="img.g/532.png" alt="nombre 532" width="550" height="335">
        <div class="dfb"><p>FRESH PRODUCTS</p>
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>

      <div class="lastimg rounded float-right">
        <img src="img.g/16.png" alt="nombre 16" width="400" height="325">
        <div class="dfb"><p>THE BEST FROM THE BEGINNING</p>
          <div class="lorembis">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>
        </div>
      </div>

      <div class="foot rounded text-center mt-2">

        <img src="img.g/logo-b.png" alt="logo" width="5%" height="5%" class="mt-4">
        <hr id="hrdemerde"size=5 color="#cbcbcb" width="100%">

        <span id="gratia">Gratia Restaurant</span>
        <p class="lorembis mb-4">Copyright 2016. All reserved by symu</p>
        <hr size=3 align="center" color="#cbcbcb" width="8%">
        <div class="row my-4 justify-content-center">
          <img src="img.g/FB.png" alt="logo facebook" width="1.5%" height="1.5%" class="mx-2">
          <img src="img.g/TW.png" alt="logo twitter" width="1.5%" height="1.5%" class="mx-2">
          <img src="img.g/IG.png" alt="logo instagram" width="1.5%" height="1.5%" class="mx-2">


        </div>
      </div>


    </div>

  </main>

<?php
include "footer.php";
