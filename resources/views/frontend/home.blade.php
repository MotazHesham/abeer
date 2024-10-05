<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!--Meta Tags-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

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

        <!-- logo -->
        <a class="logo" href="#"><span>Abeer</span></a>

        <!-- navigation button -->
        <div class="menu-button">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- navigation menu -->
        <nav class="nav-menu">
            <div class="nav-menu--links">
                <a class="nav-menu--link link--active" href="#home"><i
                        class="fas fa-home"></i><span>الرئيسية</span></a>
                <a class="nav-menu--link" href="#about"><i class="fas fa-user"></i><span>السيرة الذاتية</span></a>

                <a class="nav-menu--link" href="#portfolio"><i class="fas fa-briefcase"></i><span>معرض الاعمال
                    </span></a>
                <a class="nav-menu--link" href="#blog"><i class="fas fa-book"></i><span>مقالات</span></a>
                <a class="nav-menu--link" href="#contact"><i class="fas fa-envelope"></i><span>تواصل معنا</span></a>
            </div>

            <!-- social links -->
            <div class="social-links">
                <a class="social-link" href="{{ $setting->twitter ?? '' }}">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="social-link" href="{{ $setting->facebook ?? '' }}">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="social-link" href="{{ $setting->linkedin ?? '' }}">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="social-link" href="{{ $setting->youtubte ?? '' }}">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <!-- copyright text -->
            <div class="copy">
                <p>Copyright &copy; 2024 Abeer, All rights Reserved.</p>
            </div>

        </nav>

    </header>
    <!-- Header End -->


    <!-- Pages Stack Start -->
    <div id="main" class="pages-stack">

        <!--Banner Page Start-->
        @include('frontend.partials.index')
        <!--Banner Page End-->
        
        <!--About Page Start-->
        @include('frontend.partials.about')
        <!--About Section End-->
        
        
        <!--Portfolio Page Start--> 
        @include('frontend.partials.gallery')
        <!--Portfolio Page End-->
        
        <!--Blog Page Start-->
        @include('frontend.partials.blogs')
        <!--Blog Page End-->
        
        <!--Contact Page Start-->
        @include('frontend.partials.contactus')
        <!--Contact Page End-->

    </div>
    <!-- /pages-stack -->

    <!--Jquery JS-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!--Plugins JS-->
    <script src="{{ asset('frontend/js/plugins.min.js') }}"></script>
    <!--Google Map Api-->
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <!--Site Main JS-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script> 

        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action'); // Get the action attribute (URL) from the form
            var formData = form.serialize(); // Serialize the form data
            
            var name = $('#cf-name').val(),
                email = $('#cf-email').val(),
                message = $('#cf-message').val(),
                required = 0;


            $('.cf-validate', this).each(function() {
                if($(this).val() == '') {
                    $(this).addClass('cf-error');
                    required += 1;
                } else {
                    if($(this).hasClass('cf-error')) {
                        $(this).removeClass('cf-error');
                        if(required > 0) {
                            required -= 1;
                        }
                    }
                }
            });
            if( required === 0 ) {
                $.ajax({
                    type: 'POST',
                    url: url, // Use the dynamic URL
                    data: formData, // Use serialized form data
                    success: function(data) {
                        $("#contact-form .input-field").val("");
                        showAlertBox(data.status, data.responseText);
                    },
                    error: function(data) {
                        console.log(data);
                        showAlertBox(data.status, data.responseJSON.message);
                    }
                });
            }
        });
    </script>
</body>

</html>
