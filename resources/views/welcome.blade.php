
@extends('layouts.app')
@section('page_title','Welcome, Join Tneos Eduloution')
@section('content')
  <style>
 #SnowFall {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    z-index: 1000;
 }

  </style>
  <!-- ##### Hero Area Start ##### -->
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background: #FDAF52;  outline: 0!important; border: 0; position: absolute; top: 660px; z-index: 2000;">
Hey 😋, We have <br/>Something For you!  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background: #FDAF52;">
        <button type="button" class="close p-1" style="width:20px!important;" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="container"  style="background-image: url({{asset("app-assets/img/core-img/child-book.png")}}); backround-position: center center;  background-repeat: no-repeat;  background-size: cover;">
            <div class="row">
                <div class="col">
                    <h5 class="modal-title py-4" id="exampleModalCenterTitle text-dark"  style="color: #222222; font-weight: bold;">Tneos Learning App <img src="https://twemoji.maxcdn.com/v/12.1.3/72x72/1f929.png" class="emoji"></h5>
                    <a href="https://play.google.com/store/apps/details?id=com.tneos.tneos_eduloution"><img src="{{asset("app-assets/img/core-img/google-play-badge.png")}}" class="img-responsive mt-5 pt-5"/></a>
                </div>
                <div class="col">
                <img class="img-responsive" src="{{asset("app-assets/img/core-img/screenshot.png")}}"/>
                <blockquote class="blockquote">
                    <p class="mb-0"><q> Best app for academy </q></p>
                    <footer class="blockquote-footer"><cite title="Source Title" style="color: rgb(6, 103, 86);">Awadhesh Kumar</cite></footer>
                  </blockquote>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div id="SnowFall">
  </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Carousel -->
    <section   class="hero-area" style="background-image: url({{asset("app-assets/img/core-img/banner-bg-01.png")}});  background-position: center center; background-repeat: no-repeat;  background-attachment: fixed; background-size: cover;">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img "
              >
                <div class="single-hero-slide bg-img">
                    <div class="container-fluid pt-4">
                        <div class="row  offset-1 pt-4">
                            <div class="col-md-4 pt-5">
                                <div class="card  bg-transparent rounded hero-card" style="width: 16rem; ">
                                    <img src="{{asset("app-assets/img/core-img/girl-santa.png")}}" class="card-img-top"
                                         alt="...">
                                    <div class="card-body bg-white m-0 ">
                                        <h5 class="card-title text-dark text-center pt-2"> Class 6th to 8th</h5>
                                        <p class="card-text  font-weight-bold text-center">The best Class 6th to 8th all
                                            Subject Teachers</p>
                                    </div>
                                    <a href="/packages" class="btn btn-info rounded-0 x">Learn More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slide bg-img">
                <div class="single-hero-slide bg-img">
                    <div class="container-fluid pt-4">
                        <div class="row  offset-1 pt-4">
                            <div class="col-md-4 pt-5">
                                <div class="card  bg-transparent rounded hero-card" style="width: 16rem;">
                                    <img src="{{asset("app-assets/img/core-img/boy-laptop.png")}}" class="card-img-top"
                                         alt="...">
                                    <div class="card-body bg-white m-0 text-center">
                                        <h5 class="card-title text-dark  pt-2">9th & 10th Class</h5>
                                        <p class="card-text font-weight-bold  text-center ">Get ready for the board
                                            examinations<br/>
                                            &nbsp;
                                        </p>
                                    </div>

                                    <a href="/packages" class="btn btn-info rounded-0 y">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slide bg-img">
                <div class="single-hero-slide bg-img">
                    <div class="container-fluid pt-4">
                        <div class="row  offset-1 pt-4">
                            <div class="col-md-4 pt-5">
                                <div class="card  bg-transparent rounded hero-card" style="width: 16rem;">
                                    <img src="{{asset("app-assets/img/core-img/childrens-xmas.png")}}" class="card-img-top"
                                         alt="...">
                                    <div class="card-body  bg-white m-0 r text-dark">
                                        <h5 class="card-title text-dark text-center pt-2">Class 11th & 12th</h5>
                                        <p class="card-text font-weight-bold text-center">Prepare with best subject
                                            expert in order to excel</p>
                                    </div>

                                    <a href="/packages" class="btn btn-info rounded-0 z">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms"  style="background-image: url({{asset("app-assets/img/core-img/small-banner-02.png")}});  background-position: center center; background-repeat: no-repeat;   background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content" style="background: url({{asset("app-assets/img/core-img/small-banner.png")}})">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <!--<i class="icon-agenda-1"></i>-->
                                    <img src="https://img.icons8.com/plasticine/100/000000/address-book--v1.png" style="max-width:40px; height: auto;"/>
                                    <a href="/packages"><h5 class="text-white" style="color: #fefefe!important;">Online Courses</h5></a>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <img src="https://img.icons8.com/clouds/100/000000/classroom.png" style="max-width:40px; height: auto;"/>
                                    <!--<i class="icon-assistance"></i>-->
                                    <h5 class="text-white" style="color: #fefefe!important;">Amazing Teachers</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <img src="https://img.icons8.com/fluent/96/000000/customer-support.png" style="max-width:40px; height: auto;"/>
                                    <!--<i class="icon-telephone-3"></i>-->
                                    <h5 class="text-white" style="color: #fefefe!important;">Great Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0" style="background-image: url({{asset("app-assets/img/core-img/middle.png")}});  background-position: center center; background-repeat: no-repeat;  background-attachment: fixed; background-size: cover;">
           <!-- ##### New Carousel ##### -->
           <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset("app-assets/img/core-img/upper-banner.png")}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">

                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset("app-assets/img/core-img/upper-banner.png")}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset("app-assets/img/core-img/upper-banner.png")}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        <div class="container mt-5" >
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <img src="https://img.icons8.com/color/96/000000/school-building.png"/>
                        </div>
                        <div class="course-content">
                            <h5>Primary</h5>
                            <p>Best primary education that help develop a strong foundation.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div class="course-icon">
                            <img src="https://img.icons8.com/color/96/000000/training.png"/>
                        </div>
                        <div class="course-content">
                            <h5>Academic</h5>
                            <p>Higher education demand very strong tutoring so that you can grow.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-icon">
                            <img src="https://img.icons8.com/color/96/000000/class.png"/>
                        </div>
                        <div class="course-content">
                            <h5>Examination</h5>
                            <p>Time tested approach & methods for preparation of any kind of examination.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <div class="course-icon">
                            <img src="https://img.icons8.com/fluent/96/000000/new-job.png"/>
                        </div>
                        <div class="course-content">
                            <h5>Occupation</h5>
                            <p>Choose a better career path for more happier & a brighter future.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="course-icon">
                            <img src="https://img.icons8.com/color/96/000000/consultation.png"/>
                        </div>
                        <div class="course-content">
                            <h5>Counselling</h5>
                            <p>Our expert team, comprised of top career counsellors will assists you in your journey.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                        <div class="course-icon">
                            <img src="https://img.icons8.com/color/96/000000/service.png"/>
                        </div>
                        <div class="course-content">
                            <h5>Support</h5>
                            <p>A well trained experts are always ready to Support you achieve your goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                        <span>our testimonials</span>
                        <h3>See what our satisfied customers are saying about us</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms" style="border-radius: 20px;
                    background: linear-gradient(145deg, #b6d8df, #d8ffff);
                    box-shadow:  20px 20px 60px #acccd3,
                                 -20px -20px 60px #e8ffff;">
                        <div class="testimonial-thumb">
                            <img src="{{asset("app-assets/img/bg-img/t5.jpeg")}}" alt="">
                        </div>
                        <div class="testimonial-content py-4">
                            <h5>Great teachers</h5>
                            <p>Everyone here works together to achieve one common goal…what is best for our children. As a family, we are proud to be part of the Tneos Eduloutions.</p>
                            <h6><span>Asha Sharma,</span> Parent</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms" style="border-radius: 20px;
                    background: linear-gradient(145deg, #b6d8df, #d8ffff);
                    box-shadow:  20px 20px 60px #acccd3,
                                 -20px -20px 60px #e8ffff;">
                        <div class="testimonial-thumb">
                            <img src="{{asset("app-assets/img/bg-img/t4.png")}}" alt="">
                        </div>
                        <div class="testimonial-content py-4">
                            <h5>Easy and user friendly courses</h5>
                            <p>Tneos video has helped me to understand Science better than ever.</p>
                            <h6><span>Aanand,</span> Student</h6>
                        </div>
                    </div>
                </div>
                 <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms" style="border-radius: 20px;
                    background: linear-gradient(145deg, #b6d8df, #d8ffff);
                    box-shadow:  20px 20px 60px #acccd3,
                                 -20px -20px 60px #e8ffff;">
                        <div class="testimonial-thumb">
                            <img src="{{asset("app-assets/img/bg-img/t2.png")}}" alt="">
                        </div>
                        <div class="testimonial-content py-4">
                            <h5>One good academy</h5>
                            <p>“The teachers get to know your children as individuals and push them to levels they can and should achieve.</p>
                            <h6><span>Neeru Gupta,</span> Parent</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->
                <div class="col-12 col-md-6">
                    <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms" style="border-radius: 20px;
                    background: linear-gradient(145deg, #b6d8df, #d8ffff);
                    box-shadow:  20px 20px 60px #acccd3,
                                 -20px -20px 60px #e8ffff;">
                        <div class="testimonial-thumb">
                            <img src="{{asset("app-assets/img/bg-img/t3.png")}}" alt="">
                        </div>
                        <div class="testimonial-content py-4">
                            <h5>I just love the courses here</h5>
                            <p>We are impressed by the encouragement and support of all the faculty that helps each student keep up with, and enjoy, the academic rigor. The children are truly set up for success in future education.</p>
                            <h6><span>jyoti Nigam,</span> Parent</h6>
                        </div>
                    </div>
                </div>
                <!-- Single Testimonials Area -->

            </div>
            <div class="row">
                <div class="col-12 pb-5 mb-5">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                        <a href="/lives" class="btn academy-btn">See More</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="custom-shape-divider-bottom-1607487037">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <span>The Best</span>
                        <h3>Top Popular Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                        <div class="popular-course-content">
                            <h5>Mathematics</h5>
                            <span>By Abhishek Kumar |B.Sc., B.Ed., CTET Qual. | 7 yrs. Exp.  </span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Clear all your doubts with our maths experts.</p>
                            <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/teacher0.png')}});"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <div class="popular-course-content">
                            <h5>English</h5>
                            <span>By Anindita Giri | M.A. Eng.(HONS), B.Ed., CTET QUAL.</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Understand english better than never before.</p>
                            <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/teacher_.png')}});"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                        <div class="popular-course-content">
                            <h5>Science (Odia)</h5>
                            <span>By Soumya Jena | M.C.A, B.Sc. (Phy.) </span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Learn real science with practical examples, with our science expert in your native language.</p>
                            <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/teacher2.png')}});"></div>
                    </div>
                </div>

                <!-- Single Top Popular Course -->
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div class="popular-course-content">
                            <h5>Science</h5>
                            <span>By Piyush Prasad |  B.E. of Engineering (Mechanical)</span>
                            <div class="course-ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <p>Clear your doubts, learn more, and understand better that other with our science faculty</p>
                            <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                        </div>
                        <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/teacher3.png')}});"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Partner Area Start ##### -->
    <div class="partner-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-1.jpeg")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-2.jpeg")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-3.jpeg")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-4.jpeg")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-5.jpeg")}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Partner Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                        <h3>Enroll in our online classes, Get in touch!</h3>
                        <a href="/packages" class="btn academy-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body> --}}
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}


@endsection
