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


<div class="container-fluid parallax  my-5 text-center  text-white ">


  <div class=" text-center heading-section ftco-animate">
    <p class=" brushfont">Why Choose Us</p>
  </div>


  <!-- Example row of fjgnjfcolumns -->
  <div class="row square-wrapper justify-content-center mx-4">

    <div class="col-sm-3 square square-transition sqrbox  my-2  " data-aos="zoom-in" data-aos-offset="200" data-aos-delay="20" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\quality.png" class="d-block w-50 mx-auto" alt="...">
      <h2 class="brushfont">Premium Quality</h2>
      <p>We Stand Behind The Quality, Not The Quantity. Using Premium Quality Meat, Finest Spices, And Fresh
        Ingredients To Make Our Biriyani Special!</p>

    </div>

    <div class="col-sm-3 square square-transition sqrbox  my-2 " data-aos="zoom-in" data-aos-offset="200" data-aos-delay="20" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\fresh.png" class="d-block w-50 mx-auto" alt="...">
      <h2 class="brushfont">Safe Delivery</h2>
      <p>With Our Direct Delivery Services Bringing Your Food Safe And Secure To Your Door Step. Your Health And Safety Is Our Priority, and We Ensure Our Deliveries Clean And Safe.</p>
    </div>


    <div class="col-sm-3 square square-transition sqrbox  my-2 " data-aos="zoom-in" data-aos-offset="200" data-aos-delay="20" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\eco-logo.png" class="d-block w-50 mx-auto" alt="...">
      <h2 class="brushfont"> ECO Friendly</h2>
      <h5>We Love Our Mother Land! </h5>
      <p>All Our Packaging Is Plastic-Free, Compostable, Recyclable, Reuseable, Bio-Degradable, Gas - Safe Pot.
      </p>
    </div>

    <div class="col-sm-3 square square-transition sqrbox  my-2 " data-aos="zoom-in" data-aos-offset="200" data-aos-delay="20" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\world.png" class="d-block w-50 mx-auto" alt="...">
      <h2 class="brushfont">Sri Lankans Overseas </h2>
      <p>Feel Like Sending A Biriyani Pot For Your Loved One?
        Now You Can Easily And Safely Send A Favourite Homemade Meal To Friends & Family Members. What A
        Better Way To Bring A Smile To Their Face By Sending Bobo's Biriyani Pot.

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
      <button class="btn" onclick="filterSelection('bev')"> Beverages</button>
    </div>
    <br />
  </div>




  <div class="row">

    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/biriyani.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column ">
          <h4>Veg & Paneer Biriyani Pot</h4>
          <p class="card-text">
          <h6 style=" font-weight: bold;">Serves ( 2-3 people)</h6>Like Other Types Of Soft, Fresh Cheese Paneer Is Very Healthy.
          Great Combination Of Protein And Other Nutrients Like Calcium And Vitamin D.
          <br>All Bobo's Biriyani Pots Are Served With Premium Quality Long Grain Fluffy Basmati Rice, Cucumber
          Onion Raita, Mint Sambal, Bobo's Spicy Gravy, Fried Boiled Eggs & Crèam Caramel.
          </p>


          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 2350/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>

    </div>

    <!-- 2 pot -->
    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/yellowboriyani2.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column  ">
          <h4>2 Pot Chicken Biriyani </h4>
          <p class="card-text">
          <h6 style=" font-weight: bold;">Serves ( 2-3 people)</h6> Bobo's Chicken Biriyani Is An Aromatic Delight Loved By All. You'll Find Whole
          Cuts Of Succulent Chicken Bursting With Flavour From The Potent Array Of Spices, Herb, And
          Aromatics!<br>All Bobo's Biriyani Pots Are Served With Premium Quality Long Grain Fluffy Basmati Rice,
          Cucumber Onion Raita, Mint Sambal, Bobo's Spicy Gravy, Fried Boiled Eggs & Crèam Caramel.
          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 3200/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/mullubiriyani.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column ">
          <h4>2 Pot Mutton Biriyani </h4>
          <p class="card-text">
          <h6 style=" font-weight: bold;">Serves ( 2-3 people)</h6>Is A Tasty and Delicious Biriyani That You Can't Go Wrong With!
          Australian Mutton (Goat Meat) Finest Quality Red Meet In The World.
          Boneless Leg Of Mutton Tender,
          Juicy And Mild In Flavour.<br>All Bobo's Biriyani Pots Are Served With Premium Quality Long Grain
          Fluffy Basmati Rice, Cucumber Onion Raita, Mint Sambal, Bobo's Spicy Gravy, Fried Boiled Eggs &
          Crèam Caramel.
          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 3650/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>




    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/yelllobiriyani.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column ">
          <h4>Chicken Biriyani Pot </h4>
          <p class="card-text">
          <h6 style=" font-weight: bold;">Serves ( 6-7 people)</h6> Bobo's Chicken Biriyani Is An Aromatic Delight Loved By All. You'll Find Whole
          Cuts Of Succulent Chicken Bursting With Flavour From The Potent Array Of Spices, Herb, And
          Aromatics!<br>All Bobo's Biriyani Pots Are Served With Premium Quality Long Grain Fluffy Basmati Rice,
          Cucumber Onion Raita, Mint Sambal, Bobo's Spicy Gravy, Fried Boiled Eggs & Crèam Caramel.
          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 5500/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 filterDiv bpots">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/biriyani_red.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column">
          <h4>Mutton Biriyani Pot </h4>
          <p class="card-text">
          <h6 style=" font-weight: bold;">Serves ( 6-7 people)</h6>Is A Tasty and Delicious Biriyani That You Can't Go Wrong With!
          Australian Mutton (Goat Meat) Finest Quality Red Meet In The World.
          Boneless Leg Of Mutton Tender,
          Juicy And Mild In Flavour. All Bobo's Biriyani Pots Are Served With Premium Quality Long Grain
          Fluffy Basmati Rice, Cucumber Onion Raita, Mint Sambal, Bobo's Spicy Gravy, Fried Boiled Eggs &
          Crèam Caramel.

          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 7050/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>



    <!-- ==========================Lunch Pack -->

    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/white.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column  ">
          <h4> Mutton Masala Pot With Ghee Rice </h4>
          <p class="card-text">
            500gm Succulent, Juicy Australian Boneless Mutton Masala Pot Along With Fluffy Long-Grain Ghee
            Rice.
          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 3800/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/box.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column">
          <h4> Personal LunchPack </h4>
          <p class="card-text">We Are Excited To Introduce Customer Meals That You Can Build To Your Liking And Preference Its Meal
            Prep Made Easy. </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 1100/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/boxmilkshakoe.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column">
          <h4> Personal Lunch Combo </h4>
          <p class="card-text">Bobos Chicken Dum Biriyani Pack With A Bottle Of Almond Milk 200ml.
          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 1325/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/boxredbott.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column">
          <h4> Personal Lunch Combo </h4>
          <p class="card-text">Bobos Chicken Dum Biriyani Lunch Pack With A Bottle Of Rose Mojito 200ml.
          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 1265/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/boxredbull.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column ">
          <h4> Personal Lunch Combo </h4>
          <p class="card-text">Bobos Chicken Dum Biriyani Lunch Pack With a Can Of Redbull 250ml.

          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 1400/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="col-md-3 filterDiv  lpack">
      <div class="cardmenu"  >
        <img class="card-img-top" src="assets/images/white.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4> Muttom Masala Pot With Ghee Rice </h4>
          <p class="card-text">You Can Enjoy Our Mutton Masala Pot With a Side Of Fluffy Long-Grain Basmathi Ghee Rice</p>

          <a href="https://wa.me/+94777154945"  target="_blank" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div> -->
    <!-- ----------------------------------------------------------------------------------------------- -->
    <div class="col-md-3 filterDiv  bev">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/redbottle.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column">
          <h4> Rose Mojito </h4>
          <p class="card-text">A Refreshing, Non-Alcoholic Summer Drink Made From Natural Rose Petals, Lime, Mint, And Basil Seeds (200ml).


          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 265/- </h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-3 filterDiv  bev">
      <div class="cardmenu">
        <img class="card-img-top" src="assets/images/mikshake.jpeg" alt="Card image cap">
        <div class="card-body-menu d-flex flex-column">
          <h4> Almond Milk With Safron </h4>
          <p class="card-text">
            Almond Milk With Saffron Extremely Nutritious And Healthy, Loaded With Goodness Of Almonds And
            Saffron! (200ml).


          </p>

          <div class=" mt-auto">
            <h6 style=" font-weight: bold;">Rs 325/-</h6>
            <a href="https://wa.me/+94777154945" target="_blank" class="theme-btn align-self-end ">Order Now <i class="fa fa-arrow-right"> </i> </a>
          </div>
        </div>
      </div>
    </div>


    <!----------------------------------------------------------------------------------------------  -->

    <!-- <div class="col-md-3 filterDiv masala">
      <div class="cardmenu"  >
        <img class="card-img-top" src="assets/images/curry.jpeg" alt="Card image cap">
        <div class="card-body-menu ">
          <h4> Mutton Masala Pot </h4>
          <p class="card-text">Succulent And Juicy Australian Boneless Mutton Chunks Combined With Aromatic Spices.

          </p>

          <a href="https://wa.me/+94777154945"  target="_blank" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
        </div>
      </div>
    </div> -->
  </div>
</div>

< <!-- -------------------------------------------------------------------------------------------------- -->

  <div id="" class="about-main pad-top-100 pad-bottom-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <h2 class="brushfont"> Add Ons </h2>
          <h3>
            <p style=" text-align: justify;">All Bobo's Biriyani Pots Are Served With Cucumber Onion Raita, Mint Sambal, Bobo's Spicy Gravy, Fried Boiled Eggs &
              Crèam Caramel. </p>
          </h3>

          <!-- </div> -->
        </div>
        <!-- end col -->
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 justify-content-center">

          <div class="add-images">
            <img class="about-main" src="assets/images/mint.jpeg" alt="About Main Image">
          </div>
          <!-- </div> -->
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 justify-content-center">

          <div class="add-images">
            <img class="about-main" src="assets/images/cus.jpeg" alt="About Main Image">
          </div>
          <!-- </div> -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>



  <!------------------------------------------------about us starts here ------------------------------------------------------------------>


  <div id="abt" class="about-main pad-top-100 pad-bottom-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <!-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s"> -->
          <h2 class="brushfont"> About Us </h2>
          <h3>
            <p style=" text-align: justify;"> If You Are Among Those Who Find Pleasure In Home Cooked Food, You Are In The Right Place.
              Preparation Of All Cuisines With Different Condiments And Finest Ingredients With A Twist Of Sri Lankan
              Spices Will Give Your Tastebuds A Meal To Remember! Bobo's Specialized In The Preparation Of All
              Cuisines With Different Condiments And Finest Ingredients With A Twist Of Sri Lankan Spices. </p>
          </h3>

          <!-- </div> -->
        </div>
        <!-- end col -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 justify-content-center">
          <!-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s"> -->
          <div class="about-images">
            <img class="about-main" src="assets/images/qwe.jpeg" alt="About Main Image">
          </div>
          <!-- </div> -->
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
            <p class="brushfont">By : <img style="border-color: #000;" src="assets/images/yamu.png" alt="about image"></p>
            <img src="assets/images/review.jpeg" class="" data-wow-delay="0.2s" alt="about image">

          </div>

        </div>

        <div class="col-md-8 col-sm-12 align-middle my-5">
        <div class=" about-thumb my-5 ">
          <div class=" wow fadeInUp section-title" data-wow-delay="0.6s">
          <h3 class="brushfont">BOBO'S</h3>

        </div>
        <div class="wow fadeInUp" data-wow-delay="0.8s">
          <p style="text-align: justify;"> The Biriyani Pot Served in clay pots, Bobo's biriyanis are available with three proteins - Chicken,
            Australian Mutton, and Paneer. Depending on the size of your group, you can opt for the small pot
            (recommended for 2 - 3 people) or the large pot (recommended for 6 - 7 people). They also do single
            portions of Chicken biriyani, which arrive in cardboard boxes.</p>

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

                      <p class="mb-0 mt-2 font-italic"> <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Frochaniw%2Fposts%2F10225991164034426&show_text=true&width=500" width="100%" height="281" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></p>

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

                      <p class="mb-0 mt-2 font-italic"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fjeff.rajasinghe%2Fposts%2F10158209936911134&show_text=true&width=500" width="100%" height="268" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></p>

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

                      <p class="mb-0 mt-2 font-italic"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fnilanthi.alahakoon.18%2Fposts%2F243715680625050&show_text=true&width=500" width="100%" height="188" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></p>

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

                      <p class="mb-0 mt-2 font-italic"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpradeep.r.perera%2Fposts%2F3762520813790704&show_text=true&width=500" width="100%" height="185" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></p>

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

                      <p class="mb-0 mt-2 font-italic"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FTracyFel.Bunchi%2Fposts%2F10221789146829516&show_text=true&width=500" width="100%" height="465" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></p>

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

                      <p class="mb-0 mt-2 font-italic"><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FR.ILLAYA%2Fposts%2F3879755788757900&show_text=true&width=500" width="100%" height="169" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe></p>

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
    <div class="cswrapper ">
      <div class="csoverlay ">
        <div class="row d-flex justify-content-center align-items-center ">
          <div class="col-md-9">
            <div class="contact-us text-center ">
              <p class=" brushfont">Contact Us</p>


            </div>
            <p class="mb-5"> <span>If You Are Planning A Gathering Or Looking For Office Catering, Don't Hesitate To Get In Touch With Us,
                And We Will Make It Most Memorable! Call Us Or WhatsApp On Our Hot Line.
              </span> </p>


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
                    <div class="address cstextlft"> <span>E-mail</span>
                      <p>info@bobosbiriyanipot.lk</p>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mt-3 my-5"> <span class="icons"> <a href="https://www.facebook.com/Bobos.bbp">
                        <i style="color: #000;" class="fab fa-facebook"></i>
                      </a>


                    </span>

                    <span class="icons mx-3"> <a href="https://www.instagram.com/bobos.bbp/">
                        <i style="color: #000;" class="fab fa-instagram"></i>
                      </a>


                    </span>



                    <br>

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