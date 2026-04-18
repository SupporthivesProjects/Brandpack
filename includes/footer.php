  <section></section>
  <footer class="footer">
    <div class="container">
      <div class="col">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="footer-logo">
              <img src="./img/fLogo.svg" alt="Simseekr Logo" class="img-fluid">
              <p>© 2026 Simseekr. All rights reserved.</p>
              <div class="footer-p">
                <ul>
                  <li>SimseekrSupport@email.co</li>
                  <li>+111 234 567 890</li>
                </ul>
                <p class="m-0">100 Edenbridge Road, Birmingham, United Kingdom, B28 8PR. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-1 col-md-12 col-sm-12 col-12"></div>
          <div class="col-lg-7 col-md-12 col-sm-12 col-12">
             <div class="row-footer col-right-main-footer">
              <div class="col-right">
                <div class="footer-link socials-link">
                  <h6>Socials</h6>
                  <ul>
                    <li>
                      <a href="#">
                        <img src="./img/fb.svg" alt="Facebook">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="./img/insta.svg" alt="Instagram">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-right">
                <div class="footer-link footer-navigation-link">
                  <h6>Navigation</h6>
                  <div class="footer-navigation">
                    <ul>
                        <li><a href="#">Shop eSIMs</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">Login / Register</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Support Hub</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Supported Devices</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-right">
                <div class="footer-link policies-link">
                  <h6>Policies</h6>
                    <ul>
                      <li>
                        <a href="#">Terms & conditions</a>
                      </li>
                      <li>
                        <a href="#">privacy policy</a>
                      </li>
                    </ul> 
                </div>
              </div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
    <script src="uiframe/js/jquery.min.js"></script>
    <script src="uiframe/js/bootstrap.bundle.min.js"></script>
    <script src="uiframe/js/popper.min.js"></script>
    <script src="uiframe/js/slick.js"></script>
    <script src="uiframe/js/owl.carousel.js"></script>
    <script src="uiframe/js/swiper-bundle.min.js"></script>
    <script src="uiframe/js/flickity.pkgd.min.js"></script>   
    <script src="uiframe/js/aos.js"></script>
    <script src="./uiframe/js/home-js.js"></script>
    <script>
        $(document).ready(function () {
          $(".navbar-toggler").click(function () {
              $(this).toggleClass("is-active");
              $(".navbar-expand-lg").toggleClass("header-is-active");
          });
      });
    </script>
    <script>
      window.addEventListener('scroll', function() {
          var content = document.querySelector('header');
          var scrollPosition = window.scrollY;
          if (scrollPosition > 10) {
              content.classList.add("header-scroll")
          } else {
              content.classList.remove("header-scroll")
          }
      });
    </script>
    <script>
      const items = document.querySelectorAll('#flag .dropdown-item');
      const btnImg = document.querySelector('#dropdownBtn img');

      items.forEach(item => {
        item.addEventListener('click', function(e){
          e.preventDefault();

          // remove active
          items.forEach(i => i.classList.remove('active'));

          // add active
          this.classList.add('active');

          // get clicked image src
          const imgSrc = this.querySelector('img').src;

          // change button image
          btnImg.src = imgSrc;
        });
      });
    </script>
    <script>
      function selectCurrency(currency) {
        console.log("Selected:", currency);
      }
</script>
    <script>
      AOS.init();
    </script>
  </body>
  </html>
  