<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!--Meta Tags-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="cosmos-themes" />

    <!--Page Title-->
    <title>Abeer</title>


    <!--Plugins Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins.css') }}" />
    <!--Main Styles Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <!--Color Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/tan-color.css') }}" />

    <!--Modernizr Js-->
    <script src="{{ asset('frontend/js/modernizr.js') }}"></script>

    <!--Favicons-->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}" type="image/x-icon">

</head>

<body>

    <!--Preloader Start-->

    <div class="preloader" style="direction:ltr">
        <div class="loading-text">
            <span class="loading-text-words" data-preloader="A">A</span>
            <span class="loading-text-words" data-preloader="B">B</span>
            <span class="loading-text-words" data-preloader="E">E</span>
            <span class="loading-text-words" data-preloader="E">E</span>
            <span class="loading-text-words" data-preloader="R">R</span>

        </div>
    </div>

    <!--Preloader End-->
    <!-- Header Start -->
    <header>
        <!-- Logo -->
        <a class="logo" href="#"><span>Abeer</span></a>

        <!-- Back button -->
        <a class="back-button" href="{{ route('home') }}">
            <i class="fas fa-reply"></i>
        </a>

    </header>
    <!-- Header End -->


    <div class="single-blog" data-simplebar>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 "></div>
                <div class="col-lg-8 ">
                    <div class="mt-80">
                        <div class="blog-image mb-40">
                            <img src="{{ $blog->photo ? $blog->photo->getUrl() : '' }}" alt="">
                        </div>

                        <div class="col-lg-10">
                            <ul class="blog-category mb-15">
                                @foreach(explode(',',$blog->tags) as $tag)
                                    <li> <a href="#">{{ $tag }}</a> </li> 
                                @endforeach
                            </ul>

                            <h2 class="blog-title text-center">
                                {{ $blog->title }}
                            </h2>

                            <div class="blog-meta mt-15 mb-30 text-center"> 
                                <span class="date">تم النشر: {{ \Carbon\Carbon::parse($blog->created_at)->translatedFormat('d F Y') }}</span>
                            </div>
                        </div>

                        <div class="blog-content">
                            <p>
                                {!! nl2br($blog->content) !!}
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Jquery JS-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!--Plugins JS-->
    <script src="{{ asset('frontend/js/plugins.min.js') }}"></script>
    <!--Site Main JS-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
