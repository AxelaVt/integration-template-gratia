

  <div class="foot">
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
  </div>

  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("carousel-item");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  </script>

</body>

</html>
