<section id="home" class="page section-home">
    
    <!--Slider Start-->
    <div class="banner-slider">
        <div id="slides">
            <div class="slides-container">
                @foreach($sliders as $slider)
                    <img src="{{$slider->photo ? $slider->photo->getUrl() : ''}}" alt="">
                @endforeach 
            </div>
        </div>
    </div>
    <!--Slider End-->

    <div class="banner-text">
        <div class="profile-img">
            <img src="{{ asset('frontend/img/profile-img.jpg') }}" alt="person-image">
        </div>

        <h4>Abeer Mohamed</h4>

        <div class="text-slideshow ltr" data-effect="fx3">
            <div class="text-slide text-slide--current"><h2 class="animate-title">Art is </h2></div>
            <div class="text-slide"><h2 class="animate-title">a wonderful feeling</h2></div>
        </div>

    </div>
</section>