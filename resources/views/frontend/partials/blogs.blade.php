
<section id="blog" class="page section-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-heading">
                    <h2 data-shadow="المقالات">المقالات</h2>
                </div>
            </div>
        </div>

        <div class="row blogs-container">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <!--blog item-->
                    <a class="blog-item" href="{{ route('single-blog',$blog->id) }}">

                        <div class="post-img">
                            <img src="{{ $blog->photo ? $blog->photo->getUrl() : '' }}" alt="">
                        </div>

                        <div class="post-content">

                            <h3 class="title">{{ $blog->title }}</h3>
                            <div class="meta">
                                <span class="date">تم النشر: {{ \Carbon\Carbon::parse($blog->created_at)->translatedFormat('d F Y') }}</span>
                            </div>
                        </div>
                    </a>

                </div>
            @endforeach 
        </div>

    </div>
</section>