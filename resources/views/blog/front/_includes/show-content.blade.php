<section class="section lb">
    <div class="container">
        <div class="row">
            <div class="content col-md-9 col-sm-12">

                <div class="blog-micro-wrapper">
                    <div class="post-micro clearfix text-center">

                        <div class="post-media clearfix">
                            <a href="{{ route('blog.show', $blog->id) }}" title=""><img src="{{ image_url($blog->image, 81,45,true) }}" alt="" class="img-responsive img-rounded"></a>
                        </div>

                    </div>

                    <div class="post-desc clearfix">

                        <blockquote>
                            <h3 class="entry-title">{{ $blog->title }}</h3>
                            <h5>{{ $blog->summary }}</h5>
                            <p>{!! $blog->content !!}</p>
                        </blockquote>

                    </div>

                </div>

            </div>

            <div class="sidebar col-md-3 col-sm-12">

                <div class="widget clearfix">

                    <div class="section-title text-left">
                        <h5>دسته بندی</h5>
                        <hr>
                    </div>

                    <ul class="check">
                        <li><a href="{{ route('category.index', ['blog', $blog->category->slug]) }}">{{ $blog->category->title }}</a></li>
                    </ul>

                </div>

                @if(!$blog->tags->isEmpty())
                    <div class="widget clearfix">

                        <div class="section-title text-left">
                            <h5>کلمات کلیدی</h5>
                            <hr>
                        </div>

                        <div class="tags">
                            @foreach($blog->tags as $item)
                                <a href="{{ route('tag.index', ['blog', $item->slug]) }}">{{ $item->title }}</a>
                            @endforeach
                        </div>

                    </div>
                @endif

            </div>
        </div>
    </div>
</section>