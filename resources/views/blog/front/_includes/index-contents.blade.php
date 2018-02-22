<section class="section lb">
    <div class="container">

        @foreach($blogs as $item)
            <div class="blog-micro-wrapper">

                <div class="row post-micro clearfix">

                    <div class="col-md-4">
                        <div class="post-media clearfix">
                            <a href="{{ route('blog.show', $item->id) }}" title="{{ $item->title }}"><img src="{{ image_url($item->image, 36,20, true) }}" alt="{{ $item->title }}" class="img-responsive"></a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <h3 class="entry-title"><a href="{{ route('blog.show', $item->id) }}" title="">{{ $item->title }}</a></h3>
                        <p><a href="{{ route('blog.show', $item->id) }}" title="">{{ $item->summary }}</a></p>
                        <a href="{{ route('blog.show', $item->id) }}" title="{{ $item->title }}" class="readmore"> ادامه مطلب</a>
                    </div>

                </div>

            </div>
        @endforeach

        <div class="text-center">
            {{ $blogs->links() }}
        </div>

    </div>

</section>