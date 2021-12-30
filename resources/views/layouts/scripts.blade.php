  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- INSTAGRAM -->
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <script>
      var slideprimeiro = function(event) {
          var slideprimeiro = document.getElementById('primeiro');
          slideprimeiro.src = URL.createObjectURL(event.target.files[0]);
          slideprimeiro.onload = function() {
          URL.revokeObjectURL(slideprimeiro.src)
          }
      };

      var slidesegundo = function(event) {
          var slidesegundo = document.getElementById('segundo');
          slidesegundo.src = URL.createObjectURL(event.target.files[0]);
          slidesegundo.onload = function() {
          URL.revokeObjectURL(slidesegundo.src)
          }
      };

      var slideterceiro = function(event) {
          var slideterceiro = document.getElementById('terceiro');
          slideterceiro.src = URL.createObjectURL(event.target.files[0]);
          slideterceiro.onload = function() {
          URL.revokeObjectURL(slideterceiro.src)
          }
      };

      var slidequarto = function(event) {
          var slidequarto = document.getElementById('quarto');
          slidequarto.src = URL.createObjectURL(event.target.files[0]);
          slidequarto.onload = function() {
          URL.revokeObjectURL(slidequarto.src)
          }
      };

      var slidequinto = function(event) {
          var slidequinto = document.getElementById('quinto');
          slidequinto.src = URL.createObjectURL(event.target.files[0]);
          slidequinto.onload = function() {
          URL.revokeObjectURL(slidequinto.src)
          }
      };

      var slidesexto = function(event) {
          var slidesexto = document.getElementById('sexto');
          slidesexto.src = URL.createObjectURL(event.target.files[0]);
          slidesexto.onload = function() {
          URL.revokeObjectURL(slidesexto.src)
          }
      };

      
  </script>

  <script>
      $(function () {
          $('[data-toggle="tooltip"]').tooltip()
      })
  </script>