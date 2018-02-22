<section class="section lb">
    <div class="container">

        <div class="row">

            <div class="col-md-5 col-sm-12 mobile30">

                <div class="post-micro clearfix text-center">

                    <div class="post-media clearfix">
                        <a href="{{ route('service.show', $service->id) }}" title=""><img src="{{ image_url($service->image, 45,45,true) }}" alt="" class="img-responsive"></a>
                    </div>

                </div>

            </div>

            <div class="col-md-7 col-sm-12">

                <div class="blog-micro-wrapper">

                    <div class="post-desc clearfix">

                        <blockquote>
                            <h3 class="entry-title">{{ $service->title }}</h3>
                            <p>{!! $service->content !!}</p>
                        </blockquote>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>