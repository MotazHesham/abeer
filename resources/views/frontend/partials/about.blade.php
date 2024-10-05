<section id="about" class="page section-about">
    <div class="container">

        <div class="page-heading">
            <h2 data-shadow="عن الموقع">عن الموقع</h2>
        </div>

        <!--About Info Section Start-->
        <div class="row about-info mb-60">
            <div class="col-lg-5">

                <!-- about image -->
                <div class="about-img">
                    <img src="{{ $setting->about_photo ? $setting->about_photo->getUrl() : '' }}" alt="">
                </div>

            </div>

            <div class="col-lg-7" style="direction:rtl ; text-align:right;">
                <h3 class="mb-20"> عبير </h3>
                <p>
                    {!! nl2br($setting->about_description) !!}
                </p>

                <div class="row mb-20">
                    @foreach($qualifications->chunk(2) as $chunk)
                        @foreach($chunk as $raw)
                            <div class="col-sm-6">
                                <!-- about list -->
                                <ul class="about-list">
                                    <li> <span class="title">{{ $raw->name }} </span> </li> 
                                </ul>
                            </div>
                        @endforeach 
                    @endforeach  
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- resume button -->
                        <div class="resume-button">
                            <a class="main-btn" href="{{ $setting->about_cv ? $setting->about_cv->getUrl() : '' }}">تحميل السيرة الذاتية كاملة</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--About Info Section End-->

        <!--Services Section Start-->
        <div class="row services mb-20">
            <div class="col-md-12">
                <div class="sub-heading">
                    <h3>الخدمات</h3>
                </div>
            </div>

            <!--service item-->
            @foreach($services as $service)
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <img src="{{ $service->icon ? $service->icon->getUrl() : '' }}" />
                        <h4 class="title">{{ $service->name }}</h4>
                        <p>{{ $service->short_description }}</p>
                    </div>
                </div>
            @endforeach  

        </div>
        <!--Services Section End-->  
    </div>
</section>