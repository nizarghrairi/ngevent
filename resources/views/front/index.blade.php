@extends('layouts.site')
@section('content')

    <section class="slider">
        <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </section>
            <div class="container">
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="sketch.png" alt="">
                            <h3>Designer </h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis dolore facilis</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="startup.png" alt="">
                            <h3>Launch</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis dolore facilis</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="money.png" alt="">
                            <h3>Money</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis dolore facilis</p>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="data.png" alt="">
                            <h3>Code</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis dolore facilis</p>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

    </section>

   {{-- <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lineup-artists-headline">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>The Lineup Artists-Headliners</h2>
                        </div><!-- entry-title -->

                        <div class="lineup-artists">
                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{asset('assets/front/images/black-chick.jpg')}}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Jamila Williams
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href=""><img src="{{asset('assets/front/images/box.jpg')}}" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <div class="lineup-artists-description">
                                    <figure class="featured-image d-md-none">
                                        <a href="#"> <img src="{{asset('assets/front/images/mathew-kane.jpg')}}" alt=""> </a>
                                    </figure><!-- featured-image -->

                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Sandra Superstar
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href="#"><img src="{{asset('assets/front/images/box.jpg')}}" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->

                                <figure class="featured-image d-none d-md-block">
                                    <a href="#"> <img src="{{asset('assets/front/images/mathew-kane.jpg')}}" alt=""> </a>
                                </figure><!-- featured-image -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{asset('assets/front/images/eric-ward.jpg')}}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            DJ Crazyhead
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href="#"> <img src="{{asset('assets/front/images/box.jpg')}}" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->
                        </div><!-- lineup-artists -->
                    </div><!-- lineup-artists-headline -->
                </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>The Complete Lineup</h2>
                        </div><!-- entry-title -->

                        <div class="row the-complete-lineup-artists">
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{asset('assets/front/images/image-1.jpg')}}" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="{{asset('assets/front/images/box.jpg')}}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Miska Smith</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{asset('assets/front/images/image-2.jpg')}}" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="{{asset('assets/front/images/box.jpg')}}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Hayley Down</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="assets/front/images/image-3.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="assets/front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>The Band Song</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="assets/front/images/image-4.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="assets/front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Pink Machine</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="assets/front/images/image-5.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="assets/front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Brasil Band</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="assets/front/images/image-6.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="assets/front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Mickey</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="assets/front/images/image-7.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="assets/front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>DJ Girl</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="assets/front/images/image-8.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="assets/front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Stan Smith</h2>
                            </div><!-- artist-single -->
                        </div><!-- the-complete-lineup-artists -->

                        <div class="row justify-content-center">
                            <div class="see-complete-lineup">
                                <div class="entry-footer">
                                    <a href="#" class="btn">See all lineup</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- the-complete-lineup -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="homepage-next-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Our Next Events</h2>
                        </div><!-- entry-title -->
                    </div><!-- col-12 -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="next-event-slider-wrap">
                <div class="swiper-container next-event-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="assets/front/images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="assets/front/images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="assets/front/images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="assets/front/images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="assets/front/images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="assets/front/images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->
                    </div><!-- .swiper-wrapper -->
                </div><!-- .swiper-container -->

                <div class="swiper-button-next">
                    <img src="assets/front/images/button.png" alt="">
                </div><!-- .slider-button -->
            </div><!-- .next-event-slider-wrap -->
        </div><!-- homepage-next-events -->

        <div class="home-page-last-news">
            <div class="container">
                <div class="header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Our Last News</h2>
                    </div><!-- entry-title -->
                </div><!-- header -->

                <div class="home-page-last-news-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="assets/front/images/news-image-1.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="#">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">10 Festival Tips</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#"> By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->

                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="assets/front/images/news-image-1.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">New event calendar for this year</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#">By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- .content-wrapper -->
                        </div><!-- col-6 -->
                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
            </div><!-- container -->
        </div><!-- home-page-last-news -->
    </div>--}}


@stop
