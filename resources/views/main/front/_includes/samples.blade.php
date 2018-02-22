<section class="section db casebg">
    <div class="container-fluid">
        <div class="section-title text-center">
            <h5>لورم ایپسوم , طرح‌نما , صنعت چاپ</h5>
            <h3>لورم ایپسوم</h3>
            <hr>
        </div><!-- end title -->

        <div class="seo-studio owl-carousel owl-theme text-center">

            @foreach($samples as $item)
                <div class="item">
                    <div class="case-studio">
                        <div class="post-media">
                            <a href="{{ route('sample.show', $item->id) }}">
                                <img src="{{ image_url($item->image, 22,28,true) }}" alt="" class="img-responsive">
                            </a>
                        </div><!-- end media -->
                    </div><!-- end case -->
                </div><!-- end col -->
            @endforeach

        </div><!-- end row -->
    </div><!-- end container -->
</section>