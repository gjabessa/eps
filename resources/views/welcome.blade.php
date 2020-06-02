@extends('layouts.nav')

@section('content') 

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(storage/bg-img/1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms">Hello <br>I'm Yoseph</h2>
                                <p data-animation="bounceInDown" data-delay="500ms">I photograph very instinctively. I see how it is taken like that. I do not follow certain styles, philosophies or teachers.</p>
                                <div class="hero-btn-group" data-animation="bounceInDown" data-delay="100ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                                    <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">yoseph.hailu@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(storage/bg-img/2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInUp" data-delay="100ms">EPS</h2>
                                <p data-animation="bounceInUp" data-delay="500ms">Ethiopian Photo Style</p>
                                <div class="hero-btn-group" data-animation="bounceInUp" data-delay="900ms">
                                    <a href="#" class="btn alime-btn mb-3 mb-sm-0 mr-4">Get a Quote</a>
                                    <a class="hero-mail-contact" href="mailto:hello.alime@gmail.com">hello.alime@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".human">Human</button>
                            <button class="btn" data-filter=".nature">Nature</button>
                            <button class="btn" data-filter=".country">Country</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row alime-portfolio">
                <!-- Single Gallery Item -->
                @foreach($messages as $message)
                <div class="col-12 col-sm-6 col-lg-3 single_gallery_item {{$message -> name}} mb-30 wow fadeInUp" data-wow-delay="100ms">
                    <!-- <a style="background:none" href="{{ URL::to('detail/' . $message->id ) }}" > -->
                    <div class="single-portfolio-content" >
                        <img src="storage/{{$message->image}}" alt="">
                        <div class="hover-content">
                        <a style="position:absolute;width:100%;height:100%;top:0;right:0;left:0;bottom:0;margin:0;padding:0;background:transparent" href="storage/{{$message->image}}" class="portfolio-img">
                        <p style="padding:5px;opacity:95%;background:black"><b>{{$message -> name}}</b>
                        </p>
                        <p class="btn alime-btn" style="position:absolute;bottom:0px;right:2px;"> Details</p>
                        </a>
                        </div>
                    </div>
                    <!-- </a> -->
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                {{$messages->render()}}
                    <a href="./gallery" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    @endsection