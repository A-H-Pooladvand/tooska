<section class="section">
    <div class="container">
        <div class="section-title text-center">
            <h5>خلاقیت را با ما تجربه کنید</h5>
            <h3>آخرین های بلاگ</h3>
            <hr>
        </div><!-- end title -->

        <div class="row services-wrapper blog-wrapper text-center">

            @foreach($blogs as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="boxes blog-item">
                        <div class="entry">
                            <img src="{{ image_url($item['image'], 26,15,true) }}" alt="" class="img-responsive">
                        </div><!-- entry -->
                        <h3><a href="{{ route('blog.show', $item->id) }}">{{ $item['title'] }}</a></h3>
                        <p>{{ $item['summary'] }}</p>
                    </div><!-- end box -->
                </div><!-- end col -->
            @endforeach

        </div>
    </div><!-- end container -->
</section>