<section id="home" class="page section-home" style="background-image: url('{{$slider->photo ? $slider->photo->getUrl() : ''}}');">
    <div class="banner-text">
        <div class="profile-img">
            <img src="{{ asset('frontend/img/profile-img.jpg') }}" alt="person-image">
        </div>

        <h4>Abeer Mohamed</h4>

        <div class="text-slideshow ltr" data-effect="fx3">
            @foreach(explode(',',$slider->title) as  $title)
                <div class="text-slide @if($loop->first) text-slide--current @endif">
                    <h2 class="animate-title">{{ $title }} </h2>
                </div>
            @endforeach 
        </div>

    </div>
</section>