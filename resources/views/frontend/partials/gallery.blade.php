
<section id="portfolio" class="page section-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h2 data-shadow="معرض الاعمال">معرض الاعمال</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!--portfolio filters-->
            <div class="col-md-12 portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">الكل</li>
                    @foreach($galleryCategories as  $category)
                        <li data-filter=".cat-{{$category->id}}">{{ $category->name }}</li>
                    @endforeach 
                </ul>
            </div>
        </div>


        <div class="row portfolio-items mb-30">

            <!--portfolio item-->
            @foreach($galleries as $raw)
                <div class="item col-lg-4 col-sm-6 cat-{{ $raw->category_id }}">
                    <figure>
                        <img src="{{ $raw->image ? $raw->image->getUrl() : '' }}" alt="">

                        <figcaption>
                            <h3>{{ $raw->name }}</h3>
                            <p>{{ $raw->category->name ?? '' }}</p>
                            <i class="fas fa-image"></i>
                            <a class="image-link" href="{{ $raw->image ? $raw->image->getUrl() : '' }}">عرض </a>
                        </figcaption>

                    </figure>
                </div>
            @endforeach 
        </div>
    </div>
</section>