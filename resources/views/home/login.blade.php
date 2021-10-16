<x-home.base>
  <div class="body-content">
    <div class="container">
      <div class="sign-in-page">
        <div class="row">
          <!-- Sign-in -->
          <div class="col-md-6 col-sm-6 sign-in">
            <h4 class="">Sign in</h4>
            <p class="">Hello, Welcome to your account.</p>
            <div class="social-sign-in outer-top-xs">
              <a
                href="#"
                class="facebook-sign-in"
              ><i class="fa fa-facebook"></i> Sign In with Facebook</a>
              <a
                href="#"
                class="twitter-sign-in"
              ><i class="fa fa-twitter"></i> Sign In with Twitter</a>
            </div>
            <x-jet-validation-errors class="mb-4" />
            <form
              class="register-form outer-top-xs"
              role="form"
              action="{{ route('login') }}"
              method="POST"
            >
              @csrf
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail1"
                >Email Address <span>*</span></label>
                <input
                  type="email"
                  name="email"
                  class="form-control unicase-form-control text-input"
                  id="exampleInputEmail1"
                >
              </div>
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputPassword1"
                >Password <span>*</span></label>
                <input
                  type="password"
                  name="password"
                  class="form-control unicase-form-control text-input"
                  id="exampleInputPassword1"
                >
              </div>
              <div class="radio outer-xs">
                <label>
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="flexCheckChecked"
                    name="remember"
                  >
                  Remember me!
                </label>
                <a
                  href="#"
                  class="forgot-password pull-right"
                >Forgot your Password?</a>
              </div>
              <button
                type="submit"
                class="btn-upper btn btn-primary checkout-page-button"
              >Login</button>
            </form>
          </div>
          <!-- Sign-in -->
          <!-- create a new account -->
          <div class="col-md-6 col-sm-6 create-new-account">
            <h4 class="checkout-subtitle">Create a new account</h4>
            <p class="text title-tag-line">Create your new account.</p>
            <form
              class="register-form outer-top-xs"
              role="form"
            >
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail2"
                >Email Address <span>*</span></input>
                  <input
                    type="email"
                    class="form-control unicase-form-control text-input"
                    id="exampleInputEmail2"
                  >
              </div>
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail1"
                >Name <span>*</span></label>
                <input
                  type="email"
                  class="form-control unicase-form-control text-input"
                  id="exampleInputEmail1"
                >
              </div>
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail1"
                >Phone Number <span>*</span></label>
                <input
                  type="email"
                  class="form-control unicase-form-control text-input"
                  id="exampleInputEmail1"
                >
              </div>
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail1"
                >Password <span>*</span></label>
                <input
                  type="email"
                  class="form-control unicase-form-control text-input"
                  id="exampleInputEmail1"
                >
              </div>
              <div class="form-group">
                <label
                  class="info-title"
                  for="exampleInputEmail1"
                >Confirm Password <span>*</span></label>
                <input
                  type="email"
                  class="form-control unicase-form-control text-input"
                  id="exampleInputEmail1"
                >
              </div>
              <button
                type="submit"
                class="btn-upper btn btn-primary checkout-page-button"
              >Sign Up</button>
            </form>
          </div>
          <!-- create a new account -->
        </div><!-- /.row -->
      </div><!-- /.sigin-in-->
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      <div
        id="brands-carousel"
        class="logo-slider wow fadeInUp"
      >
        <div class="logo-slider-inner">
          <div
            id="brand-slider"
            class="owl-carousel brand-slider custom-carousel owl-theme"
          >
            <div class="item m-t-15">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand1.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item m-t-10">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand2.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand3.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand4.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand5.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand6.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand2.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand4.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand1.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
            <div class="item">
              <a
                href="#"
                class="image"
              >
                <img
                  data-echo="assets/images/brands/brand5.png"
                  src="assets/images/blank.gif"
                  alt=""
                >
              </a>
            </div>
            <!--/.item-->
          </div><!-- /.owl-carousel #logo-slider -->
        </div><!-- /.logo-slider-inner -->
      </div><!-- /.logo-slider -->
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
  </div>
</x-home.base>
