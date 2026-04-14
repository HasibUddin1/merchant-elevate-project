

<script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendors/swiper-bundle.min.js"></script>
<script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
<script src="assets/js/vendors/parallax.min.js"></script>
<script src="assets/js/vendors/aos.js"></script>
<script src="assets/js/vendors/massonry.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Marquee Script -->
<script>
  // control speed dynamically (optional)
  document.querySelectorAll(".track").forEach(track => {
    track.style.animationDuration = "22s";
  });
</script>


<!-- Our Work Slider Script -->
<script>
  const slider = document.getElementById("workSlider");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");

  let index = 0;
  const totalItems = 6;
  const visibleItems = 3;
  const maxIndex = totalItems - visibleItems;

  nextBtn.addEventListener("click", () => {
    if (index < maxIndex) {
      index++;
      updateSlider();
    }
  });

  prevBtn.addEventListener("click", () => {
    if (index > 0) {
      index--;
      updateSlider();
    }
  });

  function updateSlider() {
    const slideWidth = 100 / visibleItems;
    slider.style.transform = `translateX(-${index * slideWidth}%)`;
  }
</script>