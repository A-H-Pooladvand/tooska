<section class="section lb">
    <div class="container">

        <div class="row">

            <div class="col-md-5 col-sm-12 mobile30">

                <div class="post-micro clearfix text-center">

                    <div class="post-media clearfix">
                        <a href="{{ route('service.show', $sample->id) }}" title=""><img src="{{ image_url($sample->image, 45,80,true) }}" alt="" class="img-responsive"></a>
                    </div>

                </div>

            </div>

            <div class="col-md-7 col-sm-12">

                <div class="blog-micro-wrapper">

                    <div class="post-desc clearfix">

                        <h3 class="entry-title" style="margin: 0;">{{ $sample->title }}</h3>
                        <hr>
                        <p>{!! $sample->content !!}</p>

                        <a href="{{ $sample->link }}" class="btn btn-primary btn-block">بازدید از سایت</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>