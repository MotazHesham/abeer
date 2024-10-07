
<section id="contact" class="page section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h2 data-shadow="تواصل معنا">تواصل معنا</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Contact Information Column Start-->
            <div class="col-lg-6 contact-detail">
                <div class="sub-heading mb-20">
                    <h3> </h3>
                </div>
                <p>
                    {!! nl2br($setting->description) !!}
                </p>
                <ul class="contact-info">
                    <li class="phone">
                        <span class="title">الجوال</span><span class="value" style="direction:ltr;"> 
                            {{ $setting->phone }}
                        </span>
                    </li>
                    <li class="address">
                        <span class="title">عنوان</span><span class="value">
                            {{ $setting->address }}
                        </span>
                    </li>
                    <li class="email">
                        <span class="title">البريد الالكتروني</span><span
                            class="value">{{ $setting->email }}</span>
                    </li>
                </ul>

                <!--social media icons-->
                <div class="social-media">
                    <h4>تابعنا</h4>
                    <div class="social-media-icons">
                        <a href="{{ $setting->facebook ?? '' }}"><i class="fab fa-facebook"></i></a>
                        <a href="{{ $setting->twitter ?? '' }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ $setting->youtubte ?? '' }}"><i class="fab fa-youtube"></i></a>
                        <a href="{{ $setting->linkedin ?? '' }}"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <!--Contact Information Column End-->


            <!--Contact Form Column Start-->
            <div class="col-lg-6">
                @if (session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                @endif
                @if ($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="contact-form" method="post" action="{{ route('contact-us') }}">
                    @csrf
                    <!--input field-->
                    <div class="input">
                        <input class="input-field cf-validate" id="cf-name" type="text" name="name"
                            placeholder="الاسم" required/>
                    </div>

                    <!--input field-->
                    <div class="input">
                        <input class="input-field cf-validate" id="cf-email" type="email" name="email"
                            placeholder="البريد الالكتروني" required/>
                    </div>

                    <!--input field-->
                    <div class="input">
                        <textarea class="input-field cf-validate" id="cf-message" name="message" rows="5" placeholder="الرسالة" required></textarea>
                    </div>

                    @include('partials.recaptcha')
                    <div class="alert-container col-md-12"></div>

                    <!--submit button-->
                    <div class="submit-button text-center">
                        <button class="main-btn" id="cf-submit">ارسال الرسالة</button>
                    </div>

                </form>
            </div>
            <!--Contact Form Column End-->

        </div> 
    </div>
</section>