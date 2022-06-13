@extends('layouts.main')
@section("title",'Home')

@section('contents')
    
<div class="banner">
<img src="banner.jpg">
</div>

<!-- <div class="banner_right">
    <h2>Are you an?</h2>
    <div class="button">
        <a href="employee"><button>Employee</button></a>
        <a href="employer"><button>Employer</button></a>
    </div>
</div> -->

<div class="header">

  <div class="h2">Find Job</div>

<div class="header__search">
        <form action="">
          <input type="text" placeholder="job title, keywords, job type" />
          <button type="submit">Find Job</button>
        </form>
        
      </div>
</div>

<div style="color:green ;margin-top:20%;font-size:30px;text-align: center;" data-aos="fade-up">
Popular Categories
<div class="grid-container">
 <a href="#"> <div class="grid-item">Technology</div></a>
 <a href="#"> <div class="grid-item">Engineering</div></a>
 <a href="#"> <div class="grid-item">Government</div></a>
 <a href="#"> <div class="grid-item">Medical</div></a>
 <a href="#"> <div class="grid-item">Construction</div></a>
 <a href="#"> <div class="grid-item">Software</div></a>
 <a href="#"> <div class="grid-item">Education</div></a>
 <a href="#"> <div class="grid-item">Sports</div></a>
    
</div>

</div>



<div style="margin-top:5%;" class="container" data-aos="fade-up">
  
  <p1>Testimonies</p1>
  <div class="row">
                      <div class="col-md-12" data-wow-delay="0.2s">
                          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                              <!-- Bottom Carousel Indicators -->
                              <ol class="carousel-indicators">
                                  <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                  </li>
                                  <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                                  </li>
                                  <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                                  </li>
                              </ol>
  
                              <!-- Carousel Slides / Quotes -->
                              <div class="carousel-inner text-center">
  
                                  <!-- Quote 1 -->
                                  <div class="item active">
                                      <blockquote>
                                          <div class="row">
                                              <div class="col-sm-8 col-sm-offset-2">
  
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                  <small>Someone famous</small>
                                              </div>
                                          </div>
                                      </blockquote>
                                  </div>
                                  <!-- Quote 2 -->
                                  <div class="item">
                                      <blockquote>
                                          <div class="row">
                                              <div class="col-sm-8 col-sm-offset-2">
  
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                  <small>Someone famous</small>
                                              </div>
                                          </div>
                                      </blockquote>
                                  </div>
                                  <!-- Quote 3 -->
                                  <div class="item">
                                      <blockquote>
                                          <div class="row">
                                              <div class="col-sm-8 col-sm-offset-2">
  
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                  <small>Someone famous</small>
                                              </div>
                                          </div>
                                      </blockquote>
                                  </div>
                              </div>
  
                              <!-- Carousel Buttons Next/Prev -->
                              <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                              <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                          </div>
                      </div>
                  </div>
  </div>
  










<!-- Why Us Section -->
<section class="why-us" data-aos="fade-up" >
  <div class="container">
        <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2 class="mt-5 text-center">Why Choose Us</h2>
        <!-- <p class="mb-5 text-center">Why choose us section design HTML is created by using Bootstrap and custom HTML CSS. This our services section cards are more beautiful with pure CSS hover effects.</p> -->
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-lg-4">
        <div class="box">
          <span>01</span>
          <h4><a href="#">Why Lorem Ipsum</a></h4>
          <p>There are many variations of passages of available, but the majority have suffered alteration in some form</p>
          <img src="/images/image-one.jpg" alt="">
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box">
          <span>02</span>
          <h4><a href="#">Why do we use it</a></h4>
          <p>There are many variations of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
          <img src="/images/image-two.jpg" alt="">
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box">
          <span>03</span>
          <h4><a href="#">Can I get some</a></h4>
          <p>There are many variations of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
          <img src="/images/image-three.jpg" alt="">
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box">
          <span>04</span>
          <h4><a href="#">Why Lorem Ipsum</a></h4>
          <p>There are many variations of passages of Lorem Ipsum available, the majority have suffered alteration in some form</p>
          <img src="/images/image-four.jpg" alt="">
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box">
          <span>05</span>
          <h4><a href="#">Why do we use it</a></h4>
          <p>There are many of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
          <img src="/images/image-five.jpg" alt="">
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="box">
          <span>06</span>
          <h4><a href="#">Can I get some</a></h4>
          <p>There are variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
          <img src="/images/image-six.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Why Us Section -->




<!-- 
<div class="banner2" data-aos="fade-up">
  <img src="banner.jpg"/>
</div> -->

<div class="parallax" >
  <div data-aos="fade-up"><h1>Your Dream Job </h1>
  <h2>Is Waiting For You</h2>

  <div class="opt">
    <a href="seeker"><div class="opt1">
      Job seeker
    </div></a>
    <a href="employer"><div class="opt2">
      Employer
    </div>
  </a>
  </div>
</div>
</div>


@endsection