<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h5> صنعت چاپ، صفحه‌آرایی و طراحی گرافیک </h5>
                    <h3>لورم ایپسوم </h3>
                    <hr>
                </div><!-- end title -->

                <div class="seo-carousel owl-carousel owl-theme text-center">

                    @foreach($services as $item)
                        <div class="item">
                            <div class="item-image">
                                <img src="{{ image_url($item->image, 27,21, true) }}" alt="" class="img-responsive">
                            </div>
                            <div class="item-desc">
                                <h4><a href="{{ route('service.show', $item->id) }}" title="{{ $item->title }}">{{ $item->title }} </a></h4>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>