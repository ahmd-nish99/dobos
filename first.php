<?php
include_once "header.php";
?>


<?php

include_once "nav.php";
?>


<!-- -----------------------Carousel------------------------------------------------------------------------------------------------------ -->
<div id="myCarousel" class="carousel slide " data-bs-ride="carousel">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">

      <img src="assets\images\1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets\images\2.png" class="d-block w-100" alt="...">

    </div>
    <div class="carousel-item">
      <img src="assets\images\3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets\images\4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- --------------Why Choose Us---------------------------------------------------------------------------------------------- -->


<div class="container-fluid parallax  my-5 text-center px-5 p-3 text-white ">


  <div class=" text-center heading-section ftco-animate">
    <p class=" brushfont">Why Choose Us</p>
  </div>


  <!-- Example row of fjgnjfcolumns -->
  <div class="row square-wrapper justify-content-center">

  <div class="col-sm-3 square square-transition sqrbox mx-2 my-2 " data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\quality.png" class="d-block w-25 mx-auto" alt="...">
      <h2 class="brushfont">Premium Quality</h2>
      <p>We Stand Behind The Quality, Not The Quantity. Using Premium Quality Meat , Finest Spices And  fresh ingredients To Make Our Biriyani Special!</p>

    </div>

    <div class="col-sm-3 square square-transition sqrbox mx-2 my-2" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\fresh.png" class="d-block w-25 mx-auto" alt="...">
      <h2 class="brushfont">Safe Delivery</h2>
      <p>With our direct delivery services bringing your food safe and secure to your door step.</p>
    </div>
 

    <div class="col-sm-3 square square-transition sqrbox mx-2 my-2" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\eco-logo.png" class="d-block w-25 mx-auto" alt="...">
      <h2 class="brushfont"> ECO Friendly</h2>
      <h5>We Love Our Mother Land! </h5>
      <p>All Our
      Packaging Is Plastic -Free , Compostable ,
      Recyclable, Re - useable, Bio Degradeable, Gas - Safe Pot
      </p>
    </div>
  </div>


</div>




<!-- -------------------------------------------------------------------------------------------------------------------------- -->
<div class="containe mx-3" id="menu">
  <div class=" text-center heading-section ftco-animate">
    <p class=" brushfont">Menu</p>


    <div id="myBtnContainer text-center heading-section">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('bpots')"> Biriyani Pots</button>
      <button class="btn" onclick="filterSelection('lpack')"> Lunch Packs And Combos</button>
      <button class="btn" onclick="filterSelection('masala')"> Mutton Masala</button>
      <button class="btn" onclick="filterSelection('bev')"> Bevarages</button>
    </div>
    <br />
  </div>




  <div class="row">
    <div class="col-md-3 filterDiv bpots ">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/biriyani.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4>Veg Biriyani Pot</h4>
          <p class="card-text">Serves ( 6-7 person), Served With Premium Quality Long Grain Fluffy Basmati Rice, Cucumber Onion Raita, Mintsambal , Bobo's Spicy Gravy, Fried Boiled Eggs & Crèam Caramel</p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>

    </div>

    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/biriyani_red.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4>Mutton Biriyani Pot </h4>
          <p class="card-text">Serves ( 6-7 person), Served With Premium Quality Long Grain Fluffy Basmati Rice, Cucumber Onion Raita, Mintsambal , Bobo's Spicy Gravy, Fried Boiled Eggs & Crèam Caramel</p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>


    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/yelllobiriyani.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4>Chicken Biriyani Pot </h4>
          <p class="card-text">Serves ( 6-7 person), Served With Premium Quality Long Grain Fluffy Basmati Rice, Cucumber Onion Raita, Mintsambal , Bobo's Spicy Gravy, Fried Boiled Eggs & Crèam Caramel</p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>

<!-- 2 pot -->
    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">  
        <img class="card-img-top" src="assets/images/yellowboriyani2.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4>2 Pot Chicken Biriyani </h4>
          <p class="card-text">2 Pot Biriyani Serves ( 2-3 person), Served With Premium Quality Long Grain Fluffy Basmati Rice, Cucumber Onion Raita, Mintsambal , Bobo's Spicy Gravy, Fried Boiled Eggs & Crèam Caramel</p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>


    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/mullubiriyani.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4>2 Pot Mutton Biriyani </h4>
          <p class="card-text">2 Pot Biriyani Serves ( 2-3 person), Served With Premium Quality Long Grain Fluffy Basmati Rice, Cucumber Onion Raita, Mintsambal , Bobo's Spicy Gravy, Fried Boiled Eggs & Crèam Caramel</p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>
<!-- ==========================Lunch Pack -->
    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/box.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4> Personal Lunch Pack </h4>
          <p class="card-text"> Bobo's Chicken Dum Biriyani <br> Lunch Pack</p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>

    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/boxmilkshakoe.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4> Personal Lunch Combo </h4>
          <p class="card-text">Bobos Chicken Dum Biriyani Pack With A Bottle Of Almond Milk 200ml</p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>



    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/boxredbott.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4>  Personal Lunch Combo </h4>
          <p class="card-text">Bobos Chicken Dum Biriyani Lunch Pack
            With A Bottle Of Rose Mojito 200ml
          </p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>



    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/boxredbull.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4>  Personal Lunch Combo </h4>
          <p class="card-text">Bobos Chicken Dum Biriyani Lunch Pack
            With a Can Of Redbull 250ml
          </p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>

    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/white.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4> Muttom Masala Pot With Ghee Rice </h4>
          <p class="card-text">You Can Enjoy Our Mutton Masala Pot With a Side Of Fluffy Long-Grain Basmathi Ghee Rice</p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>
    <!-- ----------------------------------------------------------------------------------------------- -->
    <div class="col-md-3 filterDiv  bev">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/redbottle.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4> Rose Mojito </h4>
          <p class="card-text">BOBO'S Rose Mojito is a Refreshing, Non
            Alcoholic Summer Drink Made From
            Natural Rose Petals , Lime , Mint And Basil
            Seeds
          </p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>


    <div class="col-md-3 filterDiv  bev">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/mikshake.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4> ALMOND MILK WITH SAFFRON </h4>
          <p class="card-text">BOBO'S ALMOND MILK WITH SAFFRON
            Extremely Nutritious And Healthy , Loaded With Goodness Of Almonds And Saffron!
          </p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>


    <!----------------------------------------------------------------------------------------------  -->

    <div class="col-md-3 filterDiv masala">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/curry.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4> Mutton Masala Pot </h4>
          <p class="card-text">Succulent And Juicy Australian Boneless Mutton Chunks Combined With Aromatic Spices.

          </p>

          <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!------------------------------------------------about us starts here ------------------------------------------------------------------>
<!-- <div class="container ">

<div class=" text-center heading-section ftco-animate">
    <p class=" brushfont">About Us</p>
  </div>
  
<div class="row">
  <div class="col-lg-4">
    <img src="assets/images/longb.jpg" alt=""/>
  </div>
  

  <div class="col-lg-8">
    <h1>Bobos Biriyani</h1>
    <h2>
                Believe That Doing Good Is
            Just As Important As Serving
            Good Food "Dum Cook" Fresh
            Biryani For Every Individual
            Order, And Deliver Biryani In
            That very Handi To The
            Customer With Care!

</h2>
    <p>
                If You Are Among Those Who Find
            Pleasure In Home Cooked Food, You Are In
            The Right Place. Preparation OfAll
            Cuisines With Different Condiments And
            Finest Ingredients With A Twist Of Sri Lankan Spices Will Give Your Tastebuds A Meal To Remember!

    </p>
  </div>
</div>

</div> -->

<div id="abt" class="about-main pad-top-100 pad-bottom-100" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="brushfont"> About Us </h2>
                        <h3 style="color: #eee;">IT STARTED, QUITE SIMPLY, LIKE THIS...</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, nostrud exercitation ullamco. </p>

                        <p> Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes, nascetur ridiculus mus. quam felisorat, ultricies nec, Aenean commodo ligula eget dolor penatibu set magnis is parturient montes, nascetur ridiculus mus. quam felisorat, ultricies nec, pellentesque eu, pretium quis, sem. quat massa quis enim. Donec vitae sapien ut libero venenatis fauci Nullam quis ante. Etiam sit amet rci eget eros. </p>

                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, nostrud exercitation ullamco. </p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 justify-content-center">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="assets/images/biriyani_red.jpeg" alt="About Main Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
<!------------------------------------------------about us ends here ------------------------------------------------------------------>
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-4 col-sm-8 review-images my-3 justify-content-center">
               <div class="wow fadeInUp" data-wow-delay="0.4s">
                         <h4 style="color: #fff;">Review</h4>
                         <p class="brushfont">By : YAMU.lk</p>
                         <img src="assets/images/review.jpeg" class="" data-wow-delay="0.2s" alt="about image">

                    </div>
                    
               </div>

               <div class="col-md-8 col-sm-12 align-middle my-5">
                    <div class="about-thumb my-5 ">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                              <h3 class="brushfont">BOBO'S</h3>
                              <h2 style="color: #eee;">Some excellent biriyani made by a home cook.</h2>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p>If you're having people over and don't want to hassle in the kitchen, or just having a family meal, we highly recommend ordering from Bobo's. They make some extremely good biriyanis that will leave you totally full. Furthermore, they keep everything highly eco-friendly; from cutlery to packaging, which is another plus point.</p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span>
                              </div>
                              <a href="https://www.yamu.lk/place/bobos/review-394048#full" style="color: #deb150;">Reaad full story</a>

                    </div>
               </div>

          </div>
     </div>
</section>

<!------------------------------------------------CUSTOMER REVIEW ------------------------------------------------------------------>






<div id="carouselExampleIndicators" class="carousel slide parallax" data-ride="carousel">
  <div class=" text-center heading-section ftco-animate  my-5 ">
    <p class=" brushfont">Testimonial</p>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <div class="row">
        <div class="col-sm-6">
          <section class="py-5">
            <div class="container">
              <!-- FOR DEMO PURPOSE -->
              <div class="row">

                <div class="">

                  <!-- CUSTOM BLOCKQUOTE -->
                  <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </footer>
                  </blockquote><!-- END -->

                </div>


              </div>
            </div>
          </section>
        </div>


        <div class="col-sm-6">
          <section class="py-5">
            <div class="container">
              <!-- FOR DEMO PURPOSE -->
              <div class="row">

                <div class="">

                  <!-- CUSTOM BLOCKQUOTE -->
                  <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </footer>
                  </blockquote><!-- END -->

                </div>


              </div>
            </div>
          </section>
        </div>

      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-sm-6">
          <section class="py-5">
            <div class="container">
              <!-- FOR DEMO PURPOSE -->
              <div class="row">

                <div class="">

                  <!-- CUSTOM BLOCKQUOTE -->
                  <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </footer>
                  </blockquote><!-- END -->

                </div>


              </div>
            </div>
          </section>
        </div>


        <div class="col-sm-6">
          <section class="py-5">
            <div class="container">
              <!-- FOR DEMO PURPOSE -->
              <div class="row">

                <div class="">

                  <!-- CUSTOM BLOCKQUOTE -->
                  <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </footer>
                  </blockquote><!-- END -->

                </div>


              </div>
            </div>
          </section>
        </div>

      </div>
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-sm-6">
          <section class="py-5">
            <div class="container">
              <!-- FOR DEMO PURPOSE -->
              <div class="row">

                <div class="">

                  <!-- CUSTOM BLOCKQUOTE -->
                  <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </footer>
                  </blockquote><!-- END -->

                </div>


              </div>
            </div>
          </section>
        </div>


        <div class="col-sm-6">
          <section class="py-5">
            <div class="container">
              <!-- FOR DEMO PURPOSE -->
              <div class="row">

                <div class="">

                  <!-- CUSTOM BLOCKQUOTE -->
                  <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                      <cite title="Source Title">Source Title</cite>
                    </footer>
                  </blockquote><!-- END -->

                </div>


              </div>
            </div>
          </section>
        </div>

      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!----------------------------------contact us ------------------------------------------------------------------------------------->

<div class="container-fluid " id="contact" style="background-color: #000;">
  <div class="cswrapper " >
    <div class="csoverlay ">
      <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-9">
          <div class="contact-us text-center ">
            <p class=" brushfont">Contact Us</p>


            </div>
            <p class="mb-5">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>


            <div class="row">
              <div class="col-md-6">
                <div class="mt-5 text-center px-3">

                  <div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"></i></span>
                    <div class="address cstextlft"> <span>Address</span>
                      <p>Devananda Road Piliyandala 10300 Piliyandala, Sri Lanka</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                    <div class="address cstextlft"> <span>Phone</span>
                      <p>+94 77 715 4945</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
                    <div class="address cstextlft"> <span>Address</span>
                      <p>info@bobosbiriyanipot.lk</p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md-6">

                <div class="text-center px-1">

                  <div class="forms p-4 py-5 bg-white">
                    <h5>Send Message</h5>
                    <div class="mt-4 inputs"> <input type="text" class="form-control" placeholder="Name"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Type your message"></textarea> </div>
                    <div class="button mt-4 text-left"> <button class="btn btn-dark">Send</button> </div>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>



<!--  -->

<style>
  .containermenue {

    overflow: hidden;
    padding-left: 4%;





  }

  .filterDiv {
    float: left;
    /* background-color: #2196F3;
  color: #ffffff; */
    /* width: 100px; */
    /* line-height: 100px;
  text-align: center; */
    /* margin: 2px; */
    display: none;

    /* Hidden by default */
    /* padding: auto; */


  }

  /* The "show" class is added to the filtered elements */
  .show {
    display: block;
  }

  /* Style the buttons */
  .btn {
    /* border: none; */
    /* outline: 2px;
  outline-color: black; */
    padding: 2px 5px;
    background-color: #000;
    color: white;
    cursor: pointer;
    border: #deb150 solid 1px;
    outline-color: #deb150;
    outline-offset: -5px;
    outline-color: black;
  }

  /* Add a light grey background on mouse-over */
  .btn:hover {
    background-color: #deb150;
    color: white;
  }

  .sqrbox {
    border: #deb150 solid 1px;

    padding: auto;

  }

  /* Add a dark background to the active button */


  .cswrapper {
    height: auto;
    background: #000;
    background: url("assets/images/body-bg.jpg");

  }

  .csoverlay {
    height: auto;
    background: black;
    width: 100%;

  }

  .contact-us {
    margin-top: 50px;
    margin-bottom: 50px
  }

  .contact-us h3,
  p {
    color: #fff
  }

  .address {
    margin-top: 14px !important;
    margin-left: 10px
  }

  .address span {
    color: #deb150
  }

  .icons {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #fff;
    display: inline-block;
    display: flex;
    justify-content: center;
    align-items: center
  }

  .icons i {
    font-size: 20px
  }

  .forms {
    padding: 20px
  }

  .inputs input {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #eee
  }

  .inputs input:focus {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #deb150;
    box-shadow: none
  }

  .inputs textarea {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #eee;
    width: 100%;
    resize: none
  }

  .inputs textarea:focus {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #deb150;
    box-shadow: none;
    resize: none
  }

  .form-control {
    padding: .375rem .25rem
  }

  .cstextlft {
    text-align: start;
  }

  .port-image {
    width: 100%;
  }

  .col-md-3 {
    margin-bottom: 20px;
  }

  .each-item {
    position: relative;
    overflow: hidden;
  }

  .each-item:hover .cap2,
  .each-item:hover .cap1 {
    left: 0px;
  }

  .cap1 {
    position: absolute;
    width: 100%;
    height: 70%;
    background: rgba(255, 255, 255, 0.5);
    top: 0px;
    left: -100%;
    padding: 10px;

    transition: all .5s;
  }

  .cap2 {
    position: absolute;
    width: 100%;
    height: 30%;
    background: rgba(0, 178, 255, 0.5);
    bottom: 0px;
    left: 100%;
    padding: 10px;

    transition: all .5s;
  }
</style>

<?php
include_once "footer.php";
?>

<script>
  filterSelection("all")

  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }

  // Show filtered elements
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }

  // Hide elements that are not selected
  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }

  // Add active class to the current control button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }


  $(document).ready(function() {

    $(".btn").click(function() {
      var value = $(this).attr('data-filter');

      if (value == "all") {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
      } else {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.' + value).hide('3000');
        $('.filter').filter('.' + value).show('3000');

      }
    });

  });
</script>