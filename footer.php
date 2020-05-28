

  <div class="foot" style="text-align:center" id="foot">  <!--text-align ici car ne fonctionne pas dans css-->
    <img class="logodemerde" src="img.g/logo-b.png" alt="logo">
    <hr id="hrdemerde"size=5 color="#cbcbcb" width="100%">
    <span id="gratia">Gratia Restaurant</span>
    <p class="lorembis">Copyright 2016. All reserved by symu</p>
    <hr size=3 align="center" color="#cbcbcb" width="8%">
    <div class="rowFooter">
      <a target="_blank" href="https://fr-fr.facebook.com/"><img src="img.g/FB.png" alt="logo facebook"></a>
      <a target="_blank" href="https://twitter.com/explore"><img src="img.g/TW.png" alt="logo twitter"></a>
      <a target="_blank" href="https://www.instagram.com/?hl=fr"><img src="img.g/IG.png" alt="logo instagram"></a>
    </div>
  </div>

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
