@extends('master')

@section('dynamic_content1')
    <div class="row m-4">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>

            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider/aria-slider.webp" alt="Los Angeles" class="img-fluid">
                </div>

                <div class="carousel-item">
                    <img src="{{ URL::to('/') }}/images/slider/aria-slider.webp" alt="Los Angeles" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::to('/') }}/images/slider/NAAC_1.webp" alt="Los Angeles" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::to('/') }}/images/slider/nirf-ranking-slider.webp" alt="Los Angeles"
                        class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::to('/') }}/images/slider/the-art-of-living-rku-mou.webp" alt="Los Angeles"
                        class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::to('/') }}/images/slider/NAAC_1.webp" alt="Los Angeles" class="img-fluid">
                </div>

                }
                ?>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>
    <div class="row m-5">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 m-auto">
            <img src="images/MOU/Mou1.webp" class="img-fluid">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 m-auto">
            <img src=" images/MOU/Mou2.webp" class="img-fluid">
        </div>
    </div>
    <div class="row m-5">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 m-auto">
            <img src=" images/MOU/Mou3.webp" class="img-fluid">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 m-auto">
            <img src=" images/MOU/rkuniversity-cisco-mou.webp" class="img-fluid">

        </div>
    </div>
    <div class="row m-5">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 m-auto">
            <img src=" images/MOU/rkuniversity-google-cloud-mou.webp" class="img-fluid">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 m-auto">
            <img src=" images/MOU/rkuniversity-red-hat-academy-mou.webp" class="img-fluid">
        </div>
    </div>
@endsection
