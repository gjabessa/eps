@extends('layouts.nav')

@section('content') 
 <!-- Breadcrumb Area Start -->
 <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/gallery.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu wow fadeInUp" data-wow-delay="100ms">
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

            <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="800ms">
                {{$messages->render()}}
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    @endsection